(function () {
  const root = document.documentElement;
  root.classList.add('js-ready');
  const header = document.querySelector('[data-header]');
  const menu = document.querySelector('.menu-button');
  const heroes = document.querySelectorAll('[data-hero]');
  window.requestAnimationFrame(() => window.requestAnimationFrame(() => heroes.forEach((hero) => hero.classList.add('hero-ready'))));
  const updateHeader = () => header && header.classList.toggle('is-scrolled', window.scrollY > 24);
  updateHeader(); window.addEventListener('scroll', updateHeader, { passive: true });
  if (menu) menu.addEventListener('click', () => { const open = document.body.classList.toggle('nav-open'); menu.setAttribute('aria-expanded', String(open)); });
  const items = document.querySelectorAll('.motion');
  if (!('IntersectionObserver' in window)) { items.forEach((el) => el.classList.add('is-visible')); return; }
  const observer = new IntersectionObserver((entries) => entries.forEach((entry) => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); } }), { threshold: .12, rootMargin: '0px 0px -5% 0px' });
  items.forEach((el) => observer.observe(el));
  document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('[data-track]'); const slides = [...carousel.querySelectorAll('[data-slide]')]; const current = carousel.querySelector('[data-current]'); let index = 0;
    if (!track || slides.length < 2) return;
    const show = (next) => { index = (next + slides.length) % slides.length; track.style.transform = `translateX(-${index * 100}%)`; if (current) current.textContent = String(index + 1).padStart(2, '0'); };
    carousel.querySelector('[data-prev]')?.addEventListener('click', () => show(index - 1)); carousel.querySelector('[data-next]')?.addEventListener('click', () => show(index + 1));
    let timer = window.setInterval(() => show(index + 1), 2000); carousel.addEventListener('mouseenter', () => clearInterval(timer)); carousel.addEventListener('mouseleave', () => { timer = window.setInterval(() => show(index + 1), 2000); });
  });
})();
