(() => {
  const menuButton = document.querySelector(".menu-button");
  const navigation = document.querySelector(".nav-links");
  const header = document.querySelector("[data-site-header]");

  const closeMenu = () => {
    if (!menuButton || !navigation) return;
    navigation.classList.remove("is-open");
    menuButton.setAttribute("aria-expanded", "false");
  };

  if (menuButton && navigation) {
    menuButton.addEventListener("click", () => {
      const isOpen = navigation.classList.toggle("is-open");
      menuButton.setAttribute("aria-expanded", String(isOpen));
    });

    navigation.addEventListener("click", (event) => {
      if (event.target.closest("a")) closeMenu();
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") {
        closeMenu();
        menuButton.focus();
      }
    });

    document.addEventListener("click", (event) => {
      if (!navigation.contains(event.target) && !menuButton.contains(event.target)) {
        closeMenu();
      }
    });
  }

  if (!header) return;

  let previousY = window.scrollY;
  let scheduled = false;

  const updateHeader = () => {
    const currentY = window.scrollY;
    const isPastHero = currentY > 120;
    const isMovingDown = currentY > previousY + 8;
    const isMovingUp = currentY < previousY - 8;

    header.classList.toggle("is-scrolled", isPastHero);

    if (isPastHero && isMovingDown && !navigation?.classList.contains("is-open")) {
      header.classList.add("is-hidden");
    } else if (isMovingUp || !isPastHero) {
      header.classList.remove("is-hidden");
    }

    previousY = currentY;
    scheduled = false;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!scheduled) {
        scheduled = true;
        requestAnimationFrame(updateHeader);
      }
    },
    { passive: true }
  );

  updateHeader();
})();

