(function () {
  const root = document.documentElement;
  const body = document.body;
  const header = document.querySelector('[data-header]');
  const menu = document.querySelector('.menu-button');
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  root.classList.add('js-ready');

  const heroes = document.querySelectorAll('[data-hero]');
  if (reducedMotion) {
    heroes.forEach((hero) => hero.classList.add('hero-ready'));
  } else {
    window.requestAnimationFrame(() => {
      window.requestAnimationFrame(() => heroes.forEach((hero) => hero.classList.add('hero-ready')));
    });
  }

  let headerFrame = 0;
  const updateHeader = () => {
    headerFrame = 0;
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 24);
  };
  const requestHeaderUpdate = () => {
    if (!headerFrame) headerFrame = window.requestAnimationFrame(updateHeader);
  };
  updateHeader();
  window.addEventListener('scroll', requestHeaderUpdate, { passive: true });

  const setMenu = (open) => {
    body.classList.toggle('nav-open', open);
    if (menu) {
      menu.setAttribute('aria-expanded', String(open));
      menu.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    }
  };

  document.querySelectorAll('.nav-links > li').forEach((item, index) => {
    item.style.setProperty('--nav-order', String(index));
  });

  if (menu) menu.addEventListener('click', () => setMenu(!body.classList.contains('nav-open')));
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && body.classList.contains('nav-open')) {
      setMenu(false);
      menu?.focus();
    }
  });
  document.querySelectorAll('.primary-navigation a').forEach((link) => {
    link.addEventListener('click', () => setMenu(false));
  });

  const groupDefinitions = [
    ['.editorial-grid', ':scope > *'],
    ['.stat-grid', ':scope > *'],
    ['.process', ':scope > *'],
    ['.logo-row', ':scope > *'],
    ['.framework-stack', ':scope > *']
  ];

  const motionGroups = [];
  groupDefinitions.forEach(([groupSelector, itemSelector]) => {
    document.querySelectorAll(groupSelector).forEach((group) => {
      group.setAttribute('data-motion-group', '');
      group.querySelectorAll(itemSelector).forEach((item, index) => {
        item.classList.add('motion-item');
        item.style.setProperty('--motion-order', String(Math.min(index, 6)));
      });
      motionGroups.push(group);
    });
  });

  document.querySelectorAll('.site-footer .footer-brand, .site-footer .footer-column, .site-footer .footer-bottom').forEach((item, index) => {
    item.style.setProperty('--motion-delay', `${Math.min(index, 5) * 45}ms`);
  });

  const revealTargets = [
    ...document.querySelectorAll('.motion'),
    ...motionGroups,
    ...document.querySelectorAll('.quote-band, .site-footer')
  ];
  const uniqueTargets = [...new Set(revealTargets)];

  const reveal = (target) => {
    target.classList.add('is-visible');
    target.querySelectorAll?.('.motion').forEach((item) => item.classList.add('is-visible'));
  };

  if (reducedMotion || !('IntersectionObserver' in window)) {
    uniqueTargets.forEach(reveal);
  } else {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        reveal(entry.target);
        revealObserver.unobserve(entry.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -7% 0px' });
    uniqueTargets.forEach((target) => revealObserver.observe(target));
  }

  document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('[data-track]');
    const slides = [...carousel.querySelectorAll('[data-slide]')];
    const current = carousel.querySelector('[data-current]');
    const previous = carousel.querySelector('[data-prev]');
    const next = carousel.querySelector('[data-next]');
    let index = 0;
    let timer = 0;
    let carouselVisible = true;
    let pausedByUser = false;

    if (!track || slides.length < 2) return;

    const show = (nextIndex) => {
      index = (nextIndex + slides.length) % slides.length;
      track.style.transform = `translate3d(-${index * 100}%, 0, 0)`;
      if (current) current.textContent = String(index + 1).padStart(2, '0');
    };
    const stop = () => {
      if (timer) window.clearInterval(timer);
      timer = 0;
    };
    const start = () => {
      stop();
      if (reducedMotion || pausedByUser || !carouselVisible || document.hidden) return;
      timer = window.setInterval(() => show(index + 1), 2000);
    };
    const manualShow = (nextIndex) => {
      show(nextIndex);
      start();
    };

    previous?.addEventListener('click', () => manualShow(index - 1));
    next?.addEventListener('click', () => manualShow(index + 1));
    carousel.addEventListener('pointerenter', () => { pausedByUser = true; stop(); });
    carousel.addEventListener('pointerleave', () => { pausedByUser = false; start(); });
    carousel.addEventListener('focusin', () => { pausedByUser = true; stop(); });
    carousel.addEventListener('focusout', (event) => {
      if (carousel.contains(event.relatedTarget)) return;
      pausedByUser = false;
      start();
    });
    document.addEventListener('visibilitychange', start);

    if ('IntersectionObserver' in window) {
      const carouselObserver = new IntersectionObserver(([entry]) => {
        carouselVisible = entry.isIntersecting;
        start();
      }, { threshold: 0.15 });
      carouselObserver.observe(carousel);
    }
    start();
  });
})();
