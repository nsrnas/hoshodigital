(() => {
  document.documentElement.classList.add("has-js");

  const query = new URLSearchParams(window.location.search);
  const isCapture = query.get("figma") === "1";
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  const header = document.querySelector(".site-header");
  if (header && !header.hasAttribute("data-site-header")) {
    header.setAttribute("data-site-header", "");
  }

  if (header && !isCapture) {
    let frame = 0;
    const updateHeader = () => {
      header.classList.toggle("is-scrolled", window.scrollY > 90);
      frame = 0;
    };
    window.addEventListener("scroll", () => {
      if (!frame) frame = requestAnimationFrame(updateHeader);
    }, { passive: true });
    updateHeader();
  }

  const runCareersCountdown = () => {
    const hero = document.querySelector(".career-poster");
    const heading = hero?.querySelector("h1");
    const number = heading?.querySelector(":scope > span:first-child");
    if (!hero || !heading || !number) return;

    let label = heading.querySelector(".career-liftoff-label");
    if (!label) {
      const candidates = [...heading.childNodes].filter((node) =>
        (node.nodeType === Node.TEXT_NODE && node.textContent.trim()) ||
        (node.nodeType === Node.ELEMENT_NODE && node !== number)
      );
      label = document.createElement("span");
      label.className = "career-liftoff-label";
      candidates.forEach((node) => label.append(node));
      heading.append(label);
    }

    heading.setAttribute("aria-label", "3, 2, 1, Liftoff");
    number.classList.add("career-countdown-number");
    number.setAttribute("aria-hidden", "true");
    label.setAttribute("aria-hidden", "true");

    if (isCapture || reduceMotion) {
      number.textContent = "3 · 2 · 1";
      hero.classList.add("is-launched");
      return;
    }

    number.textContent = "3";
    hero.classList.add("is-countdown-ready", "is-counting");

    const values = ["3", "2", "1"];
    let index = 0;
    let started = false;

    const launch = () => {
      number.textContent = "3 · 2 · 1";
      number.getAnimations().forEach((item) => item.cancel());
      hero.classList.remove("is-counting");
      hero.classList.add("is-launched");
    };

    const tick = () => {
      number.textContent = values[index];
      const animation = number.animate(
        [
          { opacity: 0, filter: "blur(8px)", transform: "translate3d(0,.32em,0) scale(.86)" },
          { opacity: 1, filter: "blur(0)", transform: "translate3d(0,0,0) scale(1)", offset: .18 },
          { opacity: 1, filter: "blur(0)", transform: "translate3d(0,0,0) scale(1)", offset: .8 },
          { opacity: 0, filter: "blur(6px)", transform: "translate3d(0,-.24em,0) scale(1.08)" },
        ],
        { duration: 1280, easing: "cubic-bezier(.22,1,.36,1)", fill: "both" }
      );

      animation.addEventListener("finish", () => {
        index += 1;
        if (index < values.length) {
          tick();
          return;
        }
        window.setTimeout(launch, 120);
      }, { once: true });
    };

    const start = () => {
      if (started) return;
      started = true;
      window.setTimeout(() => requestAnimationFrame(tick), 650);
    };

    if (document.readyState === "complete") start();
    else window.addEventListener("load", start, { once: true });
  };

  const enableCarouselAutoplay = () => {
    if (isCapture || reduceMotion) return;

    document.querySelectorAll("[data-carousel]").forEach((carousel) => {
      const next = carousel.querySelector("[data-next]");
      if (!next) return;

      carousel.dataset.autoplay = "true";
      let timer = 0;
      let inViewport = true;
      let keyboardInteracting = false;

      const pause = () => {
        window.clearTimeout(timer);
        timer = 0;
      };

      const schedule = () => {
        pause();
        if (!inViewport || keyboardInteracting || document.hidden) return;
        timer = window.setTimeout(() => {
          next.click();
          schedule();
        }, 2000);
      };

      carousel.addEventListener("focusin", () => {
        keyboardInteracting = true;
        pause();
      });
      carousel.addEventListener("focusout", (event) => {
        if (carousel.contains(event.relatedTarget)) return;
        keyboardInteracting = false;
        schedule();
      });

      if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
          inViewport = entries.some((entry) => entry.isIntersecting && entry.intersectionRatio >= .12);
          if (inViewport) schedule(); else pause();
        }, { threshold: [.12, .4] });
        observer.observe(carousel);
      }

      document.addEventListener("visibilitychange", schedule);
      schedule();
    });
  };

  runCareersCountdown();
  enableCarouselAutoplay();
})();
