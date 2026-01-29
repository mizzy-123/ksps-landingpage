document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("carousel-viewport");
  const wrapper = document.getElementById("carousel-wrapper");
  const cards = wrapper.children;
  const gap = 16;

  let currentIndex = 0;
  let isDragging = false;
  let startX = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;

  // 1. Fungsi Utama Pergeseran (Centering Logic)
  function updateCarousel() {
    const viewportWidth = viewport.offsetWidth;
    const cardWidth = cards[0].offsetWidth;

    // Hitung offset agar kartu currentIndex berada tepat di tengah viewport
    const centerOffset = (viewportWidth - cardWidth) / 2;
    const targetTranslate = -(currentIndex * (cardWidth + gap)) + centerOffset;

    currentTranslate = targetTranslate;
    prevTranslate = targetTranslate;

    wrapper.style.transform = `translateX(${targetTranslate}px)`;
  }

  // 2. Fungsi Tombol (Export ke Window agar onclick HTML jalan)
  window.moveCarousel = (direction) => {
    if (direction === "right" && currentIndex < cards.length - 1) {
      currentIndex++;
    } else if (direction === "left" && currentIndex > 0) {
      currentIndex--;
    } else if (direction === "right") {
      currentIndex = 0; // Loop ke awal
    } else {
      currentIndex = cards.length - 1; // Loop ke akhir
    }
    updateCarousel();
  };

  // 3. Logika Swipe (Touch & Mouse)
  const dragStart = (e) => {
    isDragging = true;
    startX = e.type.includes("touch") ? e.touches[0].clientX : e.clientX;
    wrapper.classList.replace("duration-500", "duration-0"); // Matikan animasi saat drag
  };

  const dragAction = (e) => {
    if (!isDragging) return;
    const currentX = e.type.includes("touch")
      ? e.touches[0].clientX
      : e.clientX;
    const diff = currentX - startX;
    wrapper.style.transform = `translateX(${prevTranslate + diff}px)`;
  };

  const dragEnd = (e) => {
    if (!isDragging) return;
    isDragging = false;
    wrapper.classList.replace("duration-0", "duration-500");

    const endX = e.type.includes("touch")
      ? e.changedTouches[0].clientX
      : e.clientX;
    const diff = endX - startX;

    // Threshold geser (jika geser lebih dari 50px, pindah card)
    if (diff < -50) window.moveCarousel("right");
    else if (diff > 50) window.moveCarousel("left");
    else updateCarousel();
  };

  // Event Listeners
  viewport.addEventListener("mousedown", dragStart);
  viewport.addEventListener("touchstart", dragStart);
  window.addEventListener("mousemove", dragAction);
  viewport.addEventListener("touchmove", dragAction);
  window.addEventListener("mouseup", dragEnd);
  viewport.addEventListener("touchend", dragEnd);

  // Jalankan saat load & resize window
  updateCarousel();
  window.addEventListener("resize", updateCarousel);
});
