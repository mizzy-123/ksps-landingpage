document.addEventListener("DOMContentLoaded", () => {
  // Konfigurasi Dasar
  const sr = ScrollReveal({
    origin: "bottom",
    distance: "60px",
    duration: 1000,
    delay: 200,
    easing: "cubic-bezier(0.5, 0, 0, 1)",
    reset: false, // Set true jika ingin animasi berulang saat scroll ke atas
  });

  // 1. Reveal Hero Section
  sr.reveal(".lg\\:flex-1 h1", { origin: "left", distance: "100px" });
  sr.reveal(".lg\\:flex-1 p", {
    origin: "left",
    distance: "100px",
    delay: 400,
  });
  sr.reveal(".lg\\:flex-1 .flex", { origin: "bottom", delay: 600 });
  sr.reveal(".inline-flex img", {
    interval: 200,
    origin: "bottom",
    scale: 0.8,
  });

  // 2. Reveal Partner Section (Logo-logo)
  sr.reveal(".bg-primary h1", { scale: 0.9, duration: 800 });
  sr.reveal(".bg-white.grid div", {
    interval: 100,
    opacity: 0,
    distance: "20px",
  });

  // 3. Reveal Problem Section (Card Kendala)
  sr.reveal(".font-manrope label.text-secondary", {
    origin: "top",
    interval: 100,
  });
  sr.reveal(".md\\:w-\\[360px\\]", {
    interval: 200,
    distance: "40px",
    rotate: { x: 20, y: 0, z: 0 },
  });

  // 4. Reveal Solution Carousel
  sr.reveal("#carousel-viewport", { delay: 300, distance: "80px" });

  // 5. Reveal Kelebihan Section (Partner Growth)
  sr.reveal(".lg\\:w-\\[262px\\]", {
    interval: 150,
    origin: "bottom",
    scale: 0.9,
  });

  // 6. Reveal Trust Section (Industri Skala Besar)
  sr.reveal('[data-trust-card="true"]', {
    interval: 200,
    origin: "right",
    distance: "100px",
  });

  // 7. Reveal FAQ & Standar Section
  sr.reveal("#faq-list div", { interval: 100, origin: "left" });
  sr.reveal(".animate-marquee img", { interval: 100, scale: 0.5 });
});
