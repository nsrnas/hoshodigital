(() => {
  const query = new URLSearchParams(window.location.search);
  const isCapture = query.get("figma") === "1";
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const supportsObserver = "IntersectionObserver" in window;
  const body = document.body;

  const headingSelector = [
    ".eci-hero h1",
    ".eci-intro-heading h2",
    ".eci-section-heading h2",
    ".eci-programme-title h2",
    ".eci-support-heading h2",
    ".eci-frameworks-heading h2",
    ".eci-register h2",
    ".qw-hero h1",
    ".qw-intro-title h2",
    ".qw-section-heading h2",
    ".qw-journey h3",
    ".qw-technology-heading h2",
    ".qw-genai-statement h2",
    ".qw-register h2"
  ].join(",");

  const headings = [...document.querySelectorAll(headingSelector)];
  const reveals = [...document.querySelectorAll(".reveal")];
  const media = [...document.querySelectorAll("main figure")].filter((figure) =>
    figure.querySelector("img")
  );

  const splitHeading = (heading) => {
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
        word.className = "motion-word";
        word.style.setProperty("--word-index", index);
        word.textContent = part;
        fragment.append(word);
        index += 1;
      });

      node.replaceWith(fragment);
    });

    heading.classList.add("motion-heading");
  };

  headings.forEach(splitHeading);

  reveals.forEach((element) => {
    const siblings = element.parentElement
      ? [...element.parentElement.children].filter((child) => child.classList.contains("reveal"))
      : [];
    const index = Math.max(0, siblings.indexOf(element));
    element.style.setProperty("--reveal-delay", `${Math.min(index * 45, 225)}ms`);
  });

  media.forEach((figure) => figure.classList.add("motion-media"));

  const showStaticState = () => {
    body.classList.add("motion-static");
    reveals.forEach((element) => element.classList.add("is-visible"));
    headings.forEach((heading) => heading.classList.add("is-visible"));
    media.forEach((figure) => figure.classList.add("is-visible"));
  };

  if (isCapture || reduceMotion || !supportsObserver) {
    showStaticState();
    return;
  }

  const revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-visible");
        revealObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -6% 0px" }
  );

  reveals.forEach((element) => revealObserver.observe(element));

  const headingObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-visible");
        headingObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.35, rootMargin: "0px 0px -5% 0px" }
  );

  headings.forEach((heading) => headingObserver.observe(heading));

  const mediaObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-visible");
        mediaObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.18 }
  );

  media.forEach((figure) => mediaObserver.observe(figure));

  const progress = document.createElement("div");
  progress.className = "programme-scroll-progress";
  progress.setAttribute("aria-hidden", "true");
  progress.innerHTML = "<span></span>";
  body.prepend(progress);

  const progressBar = progress.firstElementChild;
  const parallaxMedia = [
    ...document.querySelectorAll(
      ".eci-hero-image, .qw-hero-image, .eci-landscape-art, .eci-register > img, .qw-register > img"
    )
  ];

  let scrollFrame = 0;

  const updateScrollEffects = () => {
    const range = document.documentElement.scrollHeight - window.innerHeight;
    const ratio = range > 0 ? window.scrollY / range : 0;
    progressBar.style.transform = `scaleX(${Math.min(Math.max(ratio, 0), 1)})`;

    parallaxMedia.forEach((image) => {
      const section = image.parentElement;
      const rect = section.getBoundingClientRect();
      if (rect.bottom < 0 || rect.top > window.innerHeight) return;

      const local = (window.innerHeight - rect.top) / (window.innerHeight + rect.height);
      const offset = (local - 0.5) * 34;
      image.style.transform = `translate3d(0, ${offset.toFixed(2)}px, 0) scale(1.055)`;
    });

    scrollFrame = 0;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!scrollFrame) scrollFrame = requestAnimationFrame(updateScrollEffects);
    },
    { passive: true }
  );

  updateScrollEffects();

  const frameworkLinks = [...document.querySelectorAll(".eci-framework-index a[href^='#']")];
  const frameworkSections = frameworkLinks
    .map((link) => document.querySelector(link.getAttribute("href")))
    .filter(Boolean);

  if (frameworkLinks.length && frameworkSections.length) {
    const frameworkObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          frameworkLinks.forEach((link) => {
            link.classList.toggle("is-active", link.getAttribute("href") === `#${entry.target.id}`);
          });
        });
      },
      { threshold: 0.5 }
    );

    frameworkSections.forEach((section) => frameworkObserver.observe(section));
  }
})();

