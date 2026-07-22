document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("assessment-impact-viewport");
  const prevButton = document.getElementById("assessment-impact-prev");
  const nextButton = document.getElementById("assessment-impact-next");

  if (!viewport || !prevButton || !nextButton) return;

  const scrollCards = (direction) => {
    const card = viewport.querySelector(".assessment-impact-card");
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
