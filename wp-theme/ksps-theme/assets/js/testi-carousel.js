document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.getElementById("testi-viewport");
  const wrapper = document.getElementById("testi-wrapper");
  if (!viewport || !wrapper) return;

  const cards = wrapper.children;
  const gap = 16; // gap-4

  let currentIndex = 0;
  let isDragging = false;
  let startX = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;

  function updateCarousel() {
    const viewportWidth = viewport.offsetWidth;
    const cardWidth = cards[0].offsetWidth;

    // RUMUS CENTERING:
    // (Lebar Layar / 2) - (Lebar Kartu / 2) - (Total Lebar Kartu sebelumnya + total gap sebelumnya)
    const centerOffset = (viewportWidth - cardWidth) / 2;
    const targetTranslate = -(currentIndex * (cardWidth + gap)) + centerOffset;

    currentTranslate = targetTranslate;
    prevTranslate = targetTranslate;

    wrapper.style.transform = `translateX(${targetTranslate}px)`;
  }

  // Daftarkan fungsi ke window agar bisa dipanggil dari atribut onclick HTML
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
    wrapper.style.transition = "none"; // Matikan transisi agar responsif saat ditarik
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
    wrapper.style.transition = "transform 0.5s ease-in-out"; // Kembalikan transisi

    const endX = e.type.includes("touch")
      ? e.changedTouches[0].clientX
      : e.clientX;
    const diff = endX - startX;

    // Jika geser lebih dari 100px, pindah slide
    if (diff < -100) window.moveTesti("right");
    else if (diff > 100) window.moveTesti("left");
    else updateCarousel();
  };

  // Event Listeners
  viewport.addEventListener("mousedown", dragStart);
  viewport.addEventListener("touchstart", dragStart, { passive: true });
  window.addEventListener("mousemove", dragAction);
  viewport.addEventListener("touchmove", dragAction, { passive: true });
  window.addEventListener("mouseup", dragEnd);
  viewport.addEventListener("touchend", dragEnd);

  // Inisialisasi posisi awal
  setTimeout(updateCarousel, 50); // Delay sedikit untuk memastikan lebar card sudah di-render
  window.addEventListener("resize", updateCarousel);
});
