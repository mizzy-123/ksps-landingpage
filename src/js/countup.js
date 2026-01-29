document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".count[data-target]");
  if (!counters.length) return;

  const options = { root: null, rootMargin: "0px", threshold: 0.5 };

  const animateCount = (el, target, duration) => {
    const startTime = performance.now();
    const format = (n) => n.toLocaleString();

    function step(now) {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(progress * target);
      el.textContent = format(value);
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = format(target);
    }

    requestAnimationFrame(step);
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      if (el.dataset.animated) return;
      const target = parseInt(el.dataset.target, 10) || 0;
      const duration = parseInt(el.dataset.duration, 10) || 1500;
      animateCount(el, target, duration);
      el.dataset.animated = "true";
      obs.unobserve(el);
    });
  }, options);

  counters.forEach((el) => {
    el.textContent = "0";
    observer.observe(el);
  });
});
