document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("testi-viewport");
  const wrapper = document.getElementById("testi-wrapper");
  if (!viewport || !wrapper) return;

  const cards = wrapper.children;

  // Variabel state
  let currentIndex = 0;
  let isDragging = false;
  let startX = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;

  function updateCarousel() {
    // Pastikan card ada
    if (cards.length === 0) return;

    // 1. Ambil elemen card yang sedang aktif
    const currentCard = cards[currentIndex];

    // 2. Hitung titik tengah Viewport (Container/Layar)
    const viewportCenter = viewport.offsetWidth / 2;

    // 3. Hitung titik tengah Card target
    // offsetLeft = jarak sisi kiri card dari awal wrapper
    // offsetWidth / 2 = setengah lebar card
    const cardCenter = currentCard.offsetLeft + currentCard.offsetWidth / 2;

    // 4. Hitung berapa pixel harus digeser (Translate)
    // Logikanya: Kita ingin Card Center berada di posisi Viewport Center
    const targetTranslate = viewportCenter - cardCenter;

    // Update state posisi
    currentTranslate = targetTranslate;
    prevTranslate = targetTranslate;

    // Terapkan ke style
    wrapper.style.transform = `translateX(${targetTranslate}px)`;
  }

  // --- LOGIKA NAVIGASI TOMBOL ---
  window.moveTesti = (direction) => {
    if (direction === "right") {
      if (currentIndex < cards.length - 1) currentIndex++;
      else currentIndex = 0; // Looping ke awal
    } else {
      if (currentIndex > 0) currentIndex--;
      else currentIndex = cards.length - 1; // Looping ke akhir
    }
    updateCarousel();
  };

  // --- LOGIKA DRAG/SWIPE ---
  const dragStart = (e) => {
    isDragging = true;
    startX = e.type.includes("touch") ? e.touches[0].clientX : e.clientX;
    wrapper.style.transition = "none"; // Matikan transisi saat drag biar responsif
  };

  const dragAction = (e) => {
    if (!isDragging) return;
    const currentX = e.type.includes("touch")
      ? e.touches[0].clientX
      : e.clientX;
    const diff = currentX - startX;

    // Update posisi sementara (mengikuti jari/mouse)
    wrapper.style.transform = `translateX(${prevTranslate + diff}px)`;
  };

  const dragEnd = (e) => {
    if (!isDragging) return;
    isDragging = false;
    wrapper.style.transition = "transform 0.5s ease-in-out"; // Hidupkan lagi transisi

    const endX = e.type.includes("touch")
      ? e.changedTouches[0].clientX
      : e.clientX;
    const diff = endX - startX;

    // Threshold: Jika geser lebih dari 50px, pindah slide
    if (diff < -50) window.moveTesti("right");
    else if (diff > 50) window.moveTesti("left");
    else updateCarousel(); // Balik ke posisi semula jika geser sedikit
  };

  // Event Listeners
  viewport.addEventListener("mousedown", dragStart);
  viewport.addEventListener("touchstart", dragStart, { passive: true });

  window.addEventListener("mousemove", dragAction);
  viewport.addEventListener("touchmove", dragAction, { passive: true });

  window.addEventListener("mouseup", dragEnd);
  viewport.addEventListener("touchend", dragEnd);

  // Inisialisasi & Responsivitas
  // Timeout kecil untuk memastikan CSS sudah selesai render layout
  setTimeout(updateCarousel, 100);
  window.addEventListener("resize", () => {
    // Matikan transisi saat resize agar tidak terlihat aneh
    wrapper.style.transition = "none";
    updateCarousel();
    // Hidupkan kembali transisi setelah render frame selesai
    setTimeout(() => {
      wrapper.style.transition = "transform 0.5s ease-in-out";
    }, 0);
  });
});
