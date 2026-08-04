(() => {
  const params = new URLSearchParams(window.location.search);
  const isFigmaCapture = params.get("figma") === "1";
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  document.body.classList.add("editorial-v3");

  const progress = document.createElement("div");
  progress.className = "v3-scroll-progress";
  progress.setAttribute("aria-hidden", "true");
  progress.innerHTML = "<span></span>";
  document.body.prepend(progress);

  const headingSelector = [
    ".career-intro h2",
    ".career-culture-copy h2",
    ".career-voices .voices-heading h2",
    ".career-explore-heading h2",
    ".career-cta-layout h2",
    ".overlap-intro h2",
    ".chapter-heading h2",
    ".credentials-heading h2",
    ".press-intro h2",
    ".press-contact h3",
    ".contact-aside h2",
    ".contact-form-heading h2",
    ".qw-section-heading h2",
    ".qw-journey-title h2",
    ".qw-technology-heading h2",
    ".qw-genai-statement h2",
    ".qw-register h2",
    ".eci-intro-copy h2",
    ".eci-landscape h2",
    ".eci-section-heading h2",
    ".eci-support-intro h2",
    ".eci-frameworks-title h2",
    ".eci-register h2"
  ].join(",");

  const headings = [...document.querySelectorAll(headingSelector)];

  const splitWords = (heading) => {
    let index = 0;

    [...heading.childNodes].forEach((node) => {
      if (node.nodeType !== Node.TEXT_NODE || !node.textContent.trim()) {
        return;
      }

      const fragment = document.createDocumentFragment();

      node.textContent.split(/(\s+)/).forEach((part) => {
        if (!part) {
          return;
        }

        if (/^\s+$/.test(part)) {
          fragment.append(document.createTextNode(part));
          return;
        }

        const word = document.createElement("span");
        word.className = "v3-word";
        word.style.setProperty("--v3-word-index", index);
        word.textContent = part;
        fragment.append(word);
        index += 1;
      });

      node.replaceWith(fragment);
    });

    heading.classList.add("v3-word-heading");
  };

  headings.forEach(splitWords);

  const media = [...document.querySelectorAll("main figure img")]
    .filter((image) => /\.(jpe?g|webp)(\?|$)/i.test(image.getAttribute("src") || ""))
    .map((image) => image.closest("figure"))
    .filter(Boolean);

  const showFinalState = () => {
    headings.forEach((heading) => heading.classList.add("v3-word-visible"));
    media.forEach((figure) => figure.classList.add("v3-media-visible"));
    document.querySelectorAll("[data-v3-count]").forEach((counter) => {
      counter.textContent = `${counter.dataset.v3Count}${counter.dataset.v3Suffix || ""}`;
    });
  };

  if (isFigmaCapture || reduceMotion || !("IntersectionObserver" in window)) {
    document.body.classList.add("v3-static");
    showFinalState();
    return;
  }

  const headingObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add("v3-word-visible");
        headingObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.3, rootMargin: "0px 0px -5% 0px" }
  );

  headings.forEach((heading) => headingObserver.observe(heading));

  const mediaObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add("v3-media-visible");
        mediaObserver.unobserve(entry.target);
      });
    },
    { threshold: 0.18 }
  );

  media.forEach((figure) => mediaObserver.observe(figure));

  const progressBar = progress.querySelector("span");
  let progressFrame = 0;

  const updateProgress = () => {
    const range = document.documentElement.scrollHeight - window.innerHeight;
    const value = range > 0 ? window.scrollY / range : 0;
    progressBar.style.transform = `scaleX(${Math.min(Math.max(value, 0), 1)})`;
    progressFrame = 0;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!progressFrame) {
        progressFrame = requestAnimationFrame(updateProgress);
      }
    },
    { passive: true }
  );

  updateProgress();

  const counters = [...document.querySelectorAll("[data-v3-count]")];
  const counterObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        const element = entry.target;
        const target = Number(element.dataset.v3Count);
        const suffix = element.dataset.v3Suffix || "";
        const duration = 1050;
        const start = performance.now();

        const update = (time) => {
          const elapsed = Math.min((time - start) / duration, 1);
          const eased = 1 - Math.pow(1 - elapsed, 3);
          element.textContent = `${Math.round(target * eased)}${suffix}`;

          if (elapsed < 1) {
            requestAnimationFrame(update);
          }
        };

        requestAnimationFrame(update);
        counterObserver.unobserve(element);
      });
    },
    { threshold: 0.55 }
  );

  counters.forEach((counter) => {
    counter.textContent = `0${counter.dataset.v3Suffix || ""}`;
    counterObserver.observe(counter);
  });
})();
