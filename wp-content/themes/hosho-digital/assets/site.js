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

  const desktopNavigation = window.matchMedia('(min-width: 981px)');
  const handleNavigationBreakpoint = (event) => {
    if (event.matches) setMenu(false);
  };
  if (desktopNavigation.addEventListener) {
    desktopNavigation.addEventListener('change', handleNavigationBreakpoint);
  } else {
    desktopNavigation.addListener(handleNavigationBreakpoint);
  }

  if (menu) {
    const navigation = document.querySelector('.primary-navigation');
    const focusableSelector = 'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])';
    document.addEventListener('keydown', (event) => {
      if (event.key !== 'Tab' || !body.classList.contains('nav-open') || !navigation) return;
      const focusable = [menu, ...navigation.querySelectorAll(focusableSelector)].filter((item) => item.offsetParent !== null);
      if (!focusable.length) return;
      const first = focusable[0];
      const last = focusable[focusable.length - 1];
      if (event.shiftKey && document.activeElement === first) {
        event.preventDefault();
        last.focus();
      } else if (!event.shiftKey && document.activeElement === last) {
        event.preventDefault();
        first.focus();
      }
    });
  }

  const groupDefinitions = [
    ['.editorial-grid', ':scope > *'],
    ['.stat-grid', ':scope > *'],
    ['.process', ':scope > *'],
    ['.logo-row', ':scope > *'],
    ['.framework-stack', ':scope > *'],
    // Homepage-specific groups
    ['.pillars-grid', ':scope > *'],
    ['.services-grid', ':scope > *'],
    ['.rapid-grid', ':scope > *'],
    ['.budget-grid', ':scope > *'],
    ['.digital-core-process', ':scope > *'],
    ['.compare-flow', ':scope > *'],
    ['.partner-category-section', ':scope > *']
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

  document.querySelectorAll('.rapid-process').forEach((rapidProcess) => {
    const layers = rapidProcess.querySelectorAll('.process-layer');
    layers.forEach((layer, index) => {
      layer.style.setProperty('--layer-order', String(index));
    });
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
    const interval = Math.max(Number.parseInt(carousel.dataset.carouselInterval || '2000', 10) || 2000, 2000);
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
      slides.forEach((slide, slideIndex) => slide.setAttribute('aria-hidden', slideIndex === index ? 'false' : 'true'));
    };
    const stop = () => {
      if (timer) window.clearInterval(timer);
      timer = 0;
    };
    const start = () => {
      stop();
      if (reducedMotion || pausedByUser || !carouselVisible || document.hidden) return;
      timer = window.setInterval(() => show(index + 1), interval);
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
    show(0);
    start();
  });

  // â”€â”€ Homepage hero entrance â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
  const homeHero = document.querySelector('.home-page .hero');
  if (homeHero) {
    const heroImg = homeHero.querySelector('.hero-image img');
    const heroContent = homeHero.querySelector('.hero-content');
    if (heroImg && !reducedMotion) {
      heroImg.style.transform = 'scale(1.06)';
      heroImg.style.transition = 'transform 1.6s cubic-bezier(.22,1,.36,1)';
      window.requestAnimationFrame(() => {
        window.requestAnimationFrame(() => { heroImg.style.transform = 'scale(1.01)'; });
      });
    }
    if (heroContent && !reducedMotion) {
      const heroChildren = heroContent.querySelectorAll('h1, p, .hero-buttons');
      heroChildren.forEach((el, i) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(28px)';
        el.style.transition = `opacity .75s var(--ease), transform .75s var(--ease)`;
        el.style.transitionDelay = `${0.1 + i * 0.12}s`;
      });
      window.requestAnimationFrame(() => {
        window.requestAnimationFrame(() => {
          heroChildren.forEach((el) => { el.style.opacity = '1'; el.style.transform = 'none'; });
        });
      });
    }
  }

  // â”€â”€ Solutions Growth counter animation â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
  if (!reducedMotion && 'IntersectionObserver' in window) {
    const growthBoxes = document.querySelectorAll('.growth-box h3');
    if (growthBoxes.length) {
      const animateCount = (el) => {
        const text = el.textContent.trim();
        const match = text.match(/^(\d+)(\+?.*)/);
        if (!match) return;
        const end = parseInt(match[1], 10);
        const suffix = match[2];
        const duration = 1400;
        const start = performance.now();
        const tick = (now) => {
          const progress = Math.min((now - start) / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          el.textContent = Math.round(eased * end) + suffix;
          if (progress < 1) window.requestAnimationFrame(tick);
        };
        window.requestAnimationFrame(tick);
      };
      const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          animateCount(entry.target);
          counterObserver.unobserve(entry.target);
        });
      }, { threshold: 0.5 });
      growthBoxes.forEach((box) => counterObserver.observe(box));
    }
  }

  const countTargets = [...document.querySelectorAll('[data-count-up]')];
  if (countTargets.length) {
    const animateCounter = (el) => {
      if (el.dataset.countAnimated === 'true') return;
      el.dataset.countAnimated = 'true';

      const start = Number.parseFloat(el.dataset.countStart || '0');
      const end = Number.parseFloat(el.dataset.countEnd || '0');
      const prefix = el.dataset.countPrefix || '';
      const suffix = el.dataset.countSuffix || '';
      const duration = Number.parseInt(el.dataset.countDuration || '1200', 10) || 1200;
      const decimals = Number.parseInt(el.dataset.countDecimals || '0', 10) || 0;
      const format = (value) => `${prefix}${value.toFixed(decimals)}${suffix}`;

      if (reducedMotion || !('IntersectionObserver' in window)) {
        el.textContent = format(end);
        return;
      }

      const startTime = performance.now();
      const tick = (now) => {
        const progress = Math.min((now - startTime) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = start + (end - start) * eased;
        el.textContent = format(current);
        if (progress < 1) window.requestAnimationFrame(tick);
      };

      window.requestAnimationFrame(tick);
    };

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      });
    }, { threshold: 0.35 });

    countTargets.forEach((target) => counterObserver.observe(target));
  }

  // Count approved programme statistics once they enter the viewport.
  const programmeCounters = [...document.querySelectorAll('[data-count-to]')];
  if (programmeCounters.length) {
    const setCounterValue = (element, value) => {
      const prefix = element.dataset.countPrefix || '';
      const suffix = element.dataset.countSuffix || '';
      element.textContent = `${prefix}${Math.round(value)}${suffix}`;
    };

    const animateProgrammeCounter = (element) => {
      const target = Number.parseFloat(element.dataset.countTo || '0');
      if (!Number.isFinite(target)) return;
      if (reducedMotion) {
        setCounterValue(element, target);
        return;
      }

      const duration = 1450;
      const startedAt = performance.now();
      const tick = (now) => {
        const progress = Math.min((now - startedAt) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        setCounterValue(element, target * eased);
        if (progress < 1) window.requestAnimationFrame(tick);
      };
      window.requestAnimationFrame(tick);
    };

    if (reducedMotion || !('IntersectionObserver' in window)) {
      programmeCounters.forEach(animateProgrammeCounter);
    } else {
      const programmeCounterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          animateProgrammeCounter(entry.target);
          programmeCounterObserver.unobserve(entry.target);
        });
      }, { threshold: 0.55 });
      programmeCounters.forEach((counter) => programmeCounterObserver.observe(counter));
    }
  }

  // Interactive Venn Diagram
  const vennContainer = document.querySelector('.venn-interactive-container');
  if (vennContainer) {
    const vennData = {
      default: {
        category: "Convergence of Disciplines",
        title: "Continuous Business Value",
        description: "Unlike traditional software projects that end at delivery, Solution as a Service combines advisory, consulting, and engineering into one continuous partnership that evolves with your business.",
        capabilities: ["End-to-End Delivery", "Industry Accelerators", "Risk Mitigation", "User Satisfaction"],
        icon: "○"
      },
      advisory: {
        category: "Value Innovation",
        title: "Solution Advisory",
        description: "Helps organizations identify high-impact opportunities, define business priorities, and architect AI-driven solutions aligned with overarching strategic goals.",
        capabilities: ["AI Strategy & Roadmap", "Business Re-engineering", "Low-Code Architecture", "ROI Modeling"],
        icon: "ðŸ’¡"
      },
      consulting: {
        category: "Operational Efficiency",
        title: "Functional Consulting",
        description: "Bridges strategic ambition with daily execution through process re-design, governance frameworks, and organizational change management.",
        capabilities: ["Process Architecture", "Enterprise Governance", "Change Enablement", "Workflow Audit"],
        icon: "ðŸ§©"
      },
      engineering: {
        category: "Engineering Excellence",
        title: "Software Engineering",
        description: "Designs, builds, integrates, and continuously optimizes enterprise-grade digital systems and custom AI models with high engineering fidelity.",
        capabilities: ["Cloud Native Architecture", "DevOps & CI/CD", "Custom AI & App Dev", "System Integration"],
        icon: "</>"
      },
    };

    const pills = vennContainer.querySelectorAll('.venn-pill');
    const interactiveItems = vennContainer.querySelectorAll('[data-venn-id]');
    const catElem = document.getElementById('vennCategory');
    const iconElem = document.getElementById('vennIcon');
    const titleElem = document.getElementById('vennTitle');
    const descElem = document.getElementById('vennDesc');
    const capListElem = document.getElementById('vennCapabilities');

    const updateVennCard = (id) => {
      const data = vennData[id];
      if (!data) return;

      if (catElem) catElem.textContent = data.category;
      if (iconElem) iconElem.textContent = data.icon;
      if (titleElem) titleElem.textContent = data.title;
      if (descElem) descElem.textContent = data.description;

      if (capListElem) {
        capListElem.innerHTML = data.capabilities.map((cap) => `<span class="capability-tag">${cap}</span>`).join('');
      }

      pills.forEach((pill) => {
        const target = pill.getAttribute('data-venn-target');
        const isActive = target === id;
        pill.classList.toggle('active', isActive);
        pill.setAttribute('aria-selected', String(isActive));
      });

      interactiveItems.forEach((item) => {
        const itemId = item.getAttribute('data-venn-id');
        item.classList.toggle('active', itemId === id);
      });
    };

    const resetVennState = () => {
      interactiveItems.forEach((item) => {
        item.classList.remove('active');
        item.setAttribute('aria-selected', 'false');
      });
      updateVennCard('default');
    };

    interactiveItems.forEach((item) => {
      const id = item.getAttribute('data-venn-id');
      item.addEventListener('click', () => updateVennCard(id));
      item.addEventListener('mouseenter', () => updateVennCard(id));
    });

    vennContainer.addEventListener('mouseleave', () => {
      const activeItem = vennContainer.querySelector('.venn-circle.active');
      if (!activeItem) {
        resetVennState();
      }
    });

    resetVennState();
  }

})();

