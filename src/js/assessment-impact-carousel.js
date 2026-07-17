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

    viewport.scrollBy({
      left: direction * (card.getBoundingClientRect().width + gap),
      behavior: "smooth",
    });
  };

  prevButton.addEventListener("click", () => scrollCards(-1));
  nextButton.addEventListener("click", () => scrollCards(1));
});
