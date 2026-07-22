document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("case-study-viewport");
  const prevBtn = document.getElementById("case-study-prev");
  const nextBtn = document.getElementById("case-study-next");
  if (!viewport || !prevBtn || !nextBtn) return;

  const cards = viewport.querySelectorAll(".case-study-card");
  if (!cards.length) return;

  const gap = () =>
    window.matchMedia("(min-width: 1024px)").matches ? 40 : 24;

  const scrollByCard = (dir) => {
    const card = cards[0];
    const amount = card.getBoundingClientRect().width + gap();
    const maxScroll = viewport.scrollWidth - viewport.clientWidth;
    const current = viewport.scrollLeft;
    const epsilon = 2;

    if (dir > 0 && current >= maxScroll - epsilon) {
      viewport.scrollTo({ left: 0, behavior: "smooth" });
      return;
    }

    if (dir < 0 && current <= epsilon) {
      viewport.scrollTo({ left: maxScroll, behavior: "smooth" });
      return;
    }

    viewport.scrollBy({ left: dir * amount, behavior: "smooth" });
  };

  prevBtn.addEventListener("click", () => scrollByCard(-1));
  nextBtn.addEventListener("click", () => scrollByCard(1));
});
