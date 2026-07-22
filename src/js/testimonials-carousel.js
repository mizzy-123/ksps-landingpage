document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("testimonials-viewport");
  const prevButton = document.getElementById("testimonials-prev");
  const nextButton = document.getElementById("testimonials-next");

  if (!viewport || !prevButton || !nextButton) return;

  const scrollCards = (direction) => {
    const card = viewport.querySelector(".testimonial-card");
    if (!card) return;

    const styles = window.getComputedStyle(viewport);
    const gap = Number.parseFloat(styles.columnGap || styles.gap) || 0;
    const amount = card.getBoundingClientRect().width + gap;
    const maxScroll = viewport.scrollWidth - viewport.clientWidth;
    const current = viewport.scrollLeft;
    const epsilon = 2;

    if (direction > 0 && current >= maxScroll - epsilon) {
      viewport.scrollTo({ left: 0, behavior: "smooth" });
      return;
    }

    if (direction < 0 && current <= epsilon) {
      viewport.scrollTo({ left: maxScroll, behavior: "smooth" });
      return;
    }

    viewport.scrollBy({
      left: direction * amount,
      behavior: "smooth",
    });
  };

  prevButton.addEventListener("click", () => scrollCards(-1));
  nextButton.addEventListener("click", () => scrollCards(1));
});
