(() => {
  const query = new URLSearchParams(window.location.search);
  const isCapture = query.get("figma") === "1";
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const supportsObserver = "IntersectionObserver" in window;
  const body = document.body;
  const header = document.querySelector("[data-site-header]");
  const menuButton = document.querySelector(".menu-button");
  const navigation = document.querySelector(".nav-links");

  const closeMenu = () => {
    if (!menuButton || !navigation) return;
    navigation.classList.remove("is-open");
    menuButton.setAttribute("aria-expanded", "false");
  };

  if (menuButton && navigation) {
    document.addEventListener("keydown", (event) => {
      if (event.key !== "Escape") return;
      closeMenu();
      menuButton.focus();
    });

    document.addEventListener("click", (event) => {
      if (!navigation.contains(event.target) && !menuButton.contains(event.target)) {
        closeMenu();
      }
    });
  }

  const headings = [...document.querySelectorAll("main h1, main h2")].filter(
    (heading) => !heading.closest(".site-footer") && !heading.matches(".career-poster h1")
  );

  const splitHeading = (heading) => {
    if (heading.classList.contains("v3-word-heading") || heading.querySelector(".v3-word, .v9-word")) {
      return;
    }

    let index = 0;
    [...heading.childNodes].forEach((node) => {
      if (node.nodeType !== Node.TEXT_NODE || !node.textContent.trim()) return;
      const fragment = document.createDocumentFragment();

      node.textContent.split(/(\s+)/).forEach((part) => {
        if (!part) return;
        if (/^\s+$/.test(part)) {
          fragment.append(document.createTextNode(part));
          return;
        }

        const word = document.createElement("span");
        word.className = "v9-word";
        word.style.setProperty("--v9-word-index", Math.min(index, 16));
        word.textContent = part;
        fragment.append(word);
        index += 1;
      });

      node.replaceWith(fragment);
    });

    heading.classList.add("v9-word-heading");
  };

  headings.forEach(splitHeading);

  const mediaFrames = [...document.querySelectorAll("main figure")].filter((figure) =>
    figure.querySelector(":scope > img")
  );
  mediaFrames.forEach((figure) => figure.classList.add("v9-media-frame"));

  const showStaticState = () => {
    body.classList.add("motion-static");
    headings.forEach((heading) => heading.classList.add("v9-heading-visible"));
    mediaFrames.forEach((figure) => figure.classList.add("is-v9-visible"));
    document.querySelectorAll(".reveal").forEach((element) => element.classList.add("is-visible"));
  };

  if (isCapture || reduceMotion || !supportsObserver) {
    showStaticState();
    return;
  }

  const headingObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("v9-heading-visible");
        headingObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.28, rootMargin: "0px 0px -7% 0px" }
  );

  headings.forEach((heading) => headingObserver.observe(heading));

  const mediaObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-v9-visible");
        mediaObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.16, rootMargin: "0px 0px -4% 0px" }
  );

  mediaFrames.forEach((figure) => mediaObserver.observe(figure));

  const progress = document.querySelector(".v3-scroll-progress") || document.createElement("div");
  if (!progress.classList.contains("v3-scroll-progress")) {
    progress.className = "v9-scroll-progress";
    progress.setAttribute("aria-hidden", "true");
    progress.innerHTML = "<span></span>";
    body.prepend(progress);
  }

  const progressBar = progress.querySelector("span");
  const parallaxMedia = [
    ...document.querySelectorAll(
      ".career-poster-image, .hero-image, .company-hero-image, .qw-hero-image, .eci-hero-image, .career-cta > img, .qw-register > img, .eci-register > img"
    ),
  ];
  parallaxMedia.forEach((image) => image.classList.add("v9-parallax-media"));

  let previousY = window.scrollY;
  let frame = 0;

  const updateScroll = () => {
    const currentY = window.scrollY;
    const range = document.documentElement.scrollHeight - window.innerHeight;
    const ratio = range > 0 ? currentY / range : 0;

    if (progressBar) {
      progressBar.style.transform = `scaleX(${Math.min(Math.max(ratio, 0), 1)})`;
    }

    if (header) {
      const pastHero = currentY > 120;
      const movingDown = currentY > previousY + 8;
      const movingUp = currentY < previousY - 8;
      header.classList.toggle("is-scrolled", pastHero);

      if (pastHero && movingDown && !navigation?.classList.contains("is-open")) {
        header.classList.add("is-hidden");
      } else if (movingUp || !pastHero) {
        header.classList.remove("is-hidden");
      }
    }

    parallaxMedia.forEach((image) => {
      const section = image.closest("section") || image.parentElement;
      const rect = section.getBoundingClientRect();
      if (rect.bottom < -80 || rect.top > window.innerHeight + 80) return;
      const local = (window.innerHeight - rect.top) / (window.innerHeight + rect.height);
      const offset = (local - 0.5) * 34;
      image.style.setProperty("--v9-parallax-y", `${offset.toFixed(2)}px`);
    });

    previousY = currentY;
    frame = 0;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!frame) frame = requestAnimationFrame(updateScroll);
    },
    { passive: true }
  );

  window.addEventListener("resize", () => {
    if (!frame) frame = requestAnimationFrame(updateScroll);
  });

  updateScroll();
})();
