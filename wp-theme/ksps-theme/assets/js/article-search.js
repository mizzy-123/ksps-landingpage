document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const resultsContainer = document.getElementById('search-results');

    if (!searchForm || !searchInput || !resultsContainer) return;

    searchForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const keyword = searchInput.value.trim();

        // Update URL without reloading (optional, nice for History)
        const url = new URL(window.location);
        if (keyword) {
            url.searchParams.set('keyword', keyword);
        } else {
            url.searchParams.delete('keyword');
        }
        window.history.pushState({}, '', url);

        // Show loading state
        resultsContainer.innerHTML = `
            <div class="col-span-1 lg:col-span-2 flex justify-center py-20">
                <div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-primary"></div>
            </div>
        `;

        try {
            // Fetch from WP REST API (Standard posts endpoint)
            // Note: _embed is crucial for thumbnails and author info
            let apiUrl = `/wp-json/wp/v2/posts?_embed&per_page=4`;
            
            if (keyword) {
                apiUrl += `&search=${encodeURIComponent(keyword)}`;
            }

            const response = await fetch(apiUrl);
            if (!response.ok) throw new Error('Network response was not ok');
            
            const posts = await response.json();

            // Clear loading
            resultsContainer.innerHTML = '';

            if (posts.length === 0) {
                resultsContainer.innerHTML = `
                    <div class="col-span-1 lg:col-span-2 flex flex-col items-center justify-center py-10">
                        <p class="font-inter text-xl text-text-secondary">Tidak ada artikel yang ditemukan${keyword ? ` untuk "${keyword}"` : ''}.</p>
                    </div>
                `;
                return;
            }

            // Render cards
            posts.forEach(post => {
                const title = post.title.rendered;
                const excerpt = post.excerpt.rendered.replace(/<[^>]+>/g, ''); // Strip HTML tags
                const link = post.link;
                
                // Date formatting
                const dateObj = new Date(post.date);
                const options = { day: 'numeric', month: 'long', year: 'numeric' };
                // Ensure Indonesian locale if possible, or fallback
                const dateStr = dateObj.toLocaleDateString('id-ID', options);

                // Author Info
                const author = post._embedded?.author?.[0];
                const authorName = author?.name || 'KSPS';
                const authorImg = author?.avatar_urls?.['96'] || author?.avatar_urls?.['48'] || author?.avatar_urls?.['24'];

                // Featured Image
                const featuredMedia = post._embedded?.['wp:featuredmedia']?.[0];
                const thumbUrl = featuredMedia?.source_url || featuredMedia?.media_details?.sizes?.full?.source_url;

                const cardHtml = `
                    <a href="${link}" class="w-full lg:h-[196px] h-fit border border-border flex flex-col lg:flex-row overflow-hidden rounded-xl bg-white hover:shadow-lg transition-shadow">
                        ${thumbUrl ? `
                        <div class="lg:w-[220px] w-full h-[148px] lg:h-full shrink-0">
                            <img class="size-full object-cover" src="${thumbUrl}" alt="${title}" />
                        </div>` : ''}
                        
                        <div class="flex-1 flex flex-col justify-between p-4 lg:p-6 gap-3">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-manrope text-[18px] lg:text-[20px] font-bold text-text-primary line-clamp-2">
                                    ${title}
                                </h3>
                                <p class="font-inter text-sm text-text-secondary line-clamp-2">
                                    ${excerpt}
                                </p>
                            </div>
                            
                            <div class="flex items-center gap-2 mt-auto">
                                <img class="size-6 rounded-full object-cover" src="${authorImg}" alt="${authorName}">
                                <span class="font-inter text-xs text-primary font-semibold">${authorName}</span>
                                <span class="text-text-secondary">•</span>
                                <span class="font-inter text-xs text-text-secondary">${dateStr}</span>
                            </div>
                        </div>
                    </a>
                `;
                
                resultsContainer.insertAdjacentHTML('beforeend', cardHtml);
            });

        } catch (error) {
            console.error('Error fetching articles:', error);
            resultsContainer.innerHTML = `
                <div class="col-span-1 lg:col-span-2 flex justify-center py-10">
                    <p class="text-red-500">Terjadi kesalahan saat memuat artikel. Silakan coba lagi.</p>
                </div>
            `;
        }
    });
});
