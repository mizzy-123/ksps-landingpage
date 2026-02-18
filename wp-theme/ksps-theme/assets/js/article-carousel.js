// Article Carousel
class ArticleCarousel {
  constructor() {
    this.currentIndex = 0;
    this.articles = [];
    this.isTransitioning = false;

    // DOM Elements
    this.articleContent = document.getElementById("article-content");
    this.articleImage = document.getElementById("article-image");
    this.prevBtn = document.getElementById("article-prev-btn");
    this.nextBtn = document.getElementById("article-next-btn");

    this.init();
  }

  async init() {
    try {
      await this.loadArticles();
      this.setupEventListeners();
      this.renderArticle(this.currentIndex);
    } catch (error) {
      console.error("Error initializing article carousel:", error);
    }
  }

  async loadArticles() {
    if (window.kspsArticleData && Array.isArray(window.kspsArticleData)) {
      this.articles = window.kspsArticleData;
      return;
    }

    try {
      // Path untuk WordPress theme
      const themePath = "/wp-content/themes/ksps-theme";
      const response = await fetch(`${themePath}/assets/data/articles.json`);
      this.articles = await response.json();
    } catch (error) {
      console.error("Error loading articles:", error);
      // Fallback data jika fetch gagal
      this.articles = [
        {
          id: 1,
          authorImage: "/images/bdx.png",
          authorName: "KSPS",
          date: "30 Januari 2026",
          title: "Strategi Outsourcing untuk Meningkatkan Efisiensi Perusahaan",
          description:
            "Strategi outsourcing membantu perusahaan mengurangi biaya operasional sekaligus meningkatkan fokus pada core bisnis.",
          thumbnail: "/images/contoh_thumbnail_article_1.png",
          link: "#",
        },
      ];
    }
  }

  setupEventListeners() {
    if (this.prevBtn) {
      this.prevBtn.addEventListener("click", (e) => {
        e.preventDefault();
        this.prevArticle();
      });
    }

    if (this.nextBtn) {
      this.nextBtn.addEventListener("click", (e) => {
        e.preventDefault();
        this.nextArticle();
      });
    }

    // Keyboard navigation
    document.addEventListener("keydown", (e) => {
      if (e.key === "ArrowLeft") {
        this.prevArticle();
      } else if (e.key === "ArrowRight") {
        this.nextArticle();
      }
    });
  }

  prevArticle() {
    if (this.isTransitioning) return;

    this.currentIndex =
      this.currentIndex === 0
        ? this.articles.length - 1
        : this.currentIndex - 1;
    this.renderArticle(this.currentIndex, "prev");
  }

  nextArticle() {
    if (this.isTransitioning) return;

    this.currentIndex =
      this.currentIndex === this.articles.length - 1
        ? 0
        : this.currentIndex + 1;
    this.renderArticle(this.currentIndex, "next");
  }

  renderArticle(index, direction = "next") {
    if (!this.articles[index]) return;

    const article = this.articles[index];
    this.isTransitioning = true;

    // Add exit animation class
    const exitClass =
      direction === "next" ? "slide-out-left" : "slide-out-right";
    const enterClass =
      direction === "next" ? "slide-in-right" : "slide-in-left";

    // Animate content and image out
    this.articleContent.classList.add(exitClass);
    this.articleImage.classList.add(exitClass);

    setTimeout(() => {
      // Update content
      this.updateArticleContent(article);

      // Remove exit class and add enter class
      this.articleContent.classList.remove(exitClass);
      this.articleImage.classList.remove(exitClass);
      this.articleContent.classList.add(enterClass);
      this.articleImage.classList.add(enterClass);

      setTimeout(() => {
        // Remove enter class after animation
        this.articleContent.classList.remove(enterClass);
        this.articleImage.classList.remove(enterClass);
        this.isTransitioning = false;
      }, 500);
    }, 500);
  }

  updateArticleContent(article) {
    // Update author image
    const authorImg = this.articleContent.querySelector(".article-author-img");
    if (authorImg) {
      authorImg.src = article.authorImage;
    }

    // Update author name
    const authorName = this.articleContent.querySelector(
      ".article-author-name",
    );
    if (authorName) {
      authorName.textContent = article.authorName;
    }

    // Update date
    const date = this.articleContent.querySelector(".article-date");
    if (date) {
      date.textContent = article.date;
    }

    // Update title
    const title = this.articleContent.querySelector(".article-title");
    if (title) {
      title.textContent = article.title;
    }

    // Update description
    const description = this.articleContent.querySelector(
      ".article-description",
    );
    if (description) {
      description.textContent = article.description;
    }

    // Update read more link
    const readMoreBtn = this.articleContent.querySelector(".article-read-more");
    if (readMoreBtn) {
      readMoreBtn.href = article.link;
    }

    // Update thumbnail image
    if (this.articleImage) {
      const img = this.articleImage.querySelector("img");
      if (img) {
        img.src = article.thumbnail;
      }
    }
  }
}

// Initialize carousel when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  new ArticleCarousel();
});
