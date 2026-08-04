(() => {
  const params = new URLSearchParams(window.location.search);
  const isFigmaCapture = params.get("figma") === "1";

  if (isFigmaCapture) {
    document.body.classList.add("figma-capture");
  }

  const menuButton = document.querySelector(".menu-button");
  const navLinks = document.querySelector(".nav-links");

  if (menuButton && navLinks) {
    menuButton.addEventListener("click", () => {
      const isOpen = navLinks.classList.toggle("is-open");
      menuButton.setAttribute("aria-expanded", String(isOpen));
    });

    navLinks.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("is-open");
        menuButton.setAttribute("aria-expanded", "false");
      });
    });
  }

  document.querySelectorAll("[data-carousel]").forEach((carousel) => {
    const track = carousel.querySelector(".voice-track");
    const slides = Array.from(carousel.querySelectorAll("[data-slide]"));
    const previous = carousel.querySelector("[data-prev]");
    const next = carousel.querySelector("[data-next]");
    const currentLabel = carousel.querySelector("[data-current]");
    let current = 0;
    let touchStartX = 0;

    const render = () => {
      const slide = slides[0];
      const gap = Number.parseFloat(getComputedStyle(track).gap) || 0;
      const step = slide.getBoundingClientRect().width + gap;
      track.style.transform = `translate3d(${-current * step}px, 0, 0)`;

      slides.forEach((item, index) => {
        const active = index === current;
        item.classList.toggle("is-active", active);
        item.setAttribute("aria-hidden", String(!active));
      });

      if (currentLabel) {
        currentLabel.textContent = String(current + 1).padStart(2, "0");
      }
    };

    const move = (direction) => {
      current = (current + direction + slides.length) % slides.length;
      render();
    };

    previous?.addEventListener("click", () => move(-1));
    next?.addEventListener("click", () => move(1));

    carousel.addEventListener("keydown", (event) => {
      if (event.key === "ArrowLeft") move(-1);
      if (event.key === "ArrowRight") move(1);
    });

    carousel.addEventListener("touchstart", (event) => {
      touchStartX = event.touches[0].clientX;
    }, { passive: true });

    carousel.addEventListener("touchend", (event) => {
      const distance = event.changedTouches[0].clientX - touchStartX;
      if (Math.abs(distance) > 55) move(distance > 0 ? -1 : 1);
    }, { passive: true });

    window.addEventListener("resize", render);
    render();
  });

  if (isFigmaCapture || !("IntersectionObserver" in window)) {
    document.querySelectorAll(".reveal").forEach((element) => element.classList.add("is-visible"));
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -5% 0px" }
  );

  document.querySelectorAll(".reveal").forEach((element) => observer.observe(element));
})();
