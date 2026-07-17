document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("industry-carousel-track");
  const prevBtn = document.getElementById("industry-prev");
  const nextBtn = document.getElementById("industry-next");
  if (!track || !prevBtn || !nextBtn) return;

  const slides = track.querySelectorAll(".industry-slide");
  if (!slides.length) return;

  let index = 0;

  const update = () => {
    track.style.transform = `translateX(-${index * 100}%)`;
  };

  prevBtn.addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    update();
  });

  nextBtn.addEventListener("click", () => {
    index = (index + 1) % slides.length;
    update();
  });
});
