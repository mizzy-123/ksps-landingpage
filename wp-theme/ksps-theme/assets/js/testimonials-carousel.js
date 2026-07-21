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

    viewport.scrollBy({
      left: direction * (card.getBoundingClientRect().width + gap),
      behavior: "smooth",
    });
  };

  prevButton.addEventListener("click", () => scrollCards(-1));
  nextButton.addEventListener("click", () => scrollCards(1));
});
