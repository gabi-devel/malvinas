// nav: menú mobile + resaltado de sección activa
const navToggle = document.getElementById('navToggle');
const navMenu = document.getElementById('navMenu');
navToggle.addEventListener('click', () => navMenu.classList.toggle('open'));
document.querySelectorAll('.navlink, .drop-panel a').forEach(l => l.addEventListener('click', () => navMenu.classList.remove('open')));

// dropdown por sección: click para mobile/teclado (en desktop además abre con :hover via CSS)
document.querySelectorAll('.has-drop').forEach(item => {
  const trigger = item.querySelector('.drop-trigger');
  trigger.addEventListener('click', () => {
    const willOpen = !item.classList.contains('open');
    document.querySelectorAll('.has-drop.open').forEach(other => {
      if (other !== item) { other.classList.remove('open'); other.querySelector('.drop-trigger').setAttribute('aria-expanded', 'false'); }
    });
    item.classList.toggle('open', willOpen);
    trigger.setAttribute('aria-expanded', willOpen);
  });
});
document.querySelectorAll('.drop-panel a[data-filter]').forEach(link => {
  link.addEventListener('click', () => {
    const f = link.dataset.filter;
    const tab = document.querySelector(`#tabs .tab-btn[data-filter="${f}"]`);
    const chip = document.querySelector(`#prodFilters .chip[data-cat="${f}"]`);
    if (tab) tab.click();
    if (chip) chip.click();
  });
});
document.addEventListener('click', (e) => {
  document.querySelectorAll('.has-drop.open').forEach(item => {
    if (!item.contains(e.target)) {
      item.classList.remove('open');
      item.querySelector('.drop-trigger').setAttribute('aria-expanded', 'false');
    }
  });
});

// aparición suave de tarjetas al entrar en pantalla
const reveal = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      reveal.unobserve(e.target);
    }
  });
}, { threshold: 0.15 });
document.querySelectorAll('.reveal').forEach((el, i) => {
  el.style.transitionDelay = (i % 4) * 60 + 'ms';
  reveal.observe(el);
});

const sections = ['noticias','actividades','produccion','biblioteca','educativo','newsletter'].map(id => document.getElementById(id));
const links = document.querySelectorAll('.navlink');
const spotter = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if(e.isIntersecting){
      links.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + e.target.id));
    }
  });
}, {rootMargin:'-40% 0px -50% 0px'});
sections.forEach(s => s && spotter.observe(s));

// carrusel de noticias
const track = document.getElementById('newsTrack');
document.getElementById('newsNext').addEventListener('click', () => track.scrollBy({left:300, behavior:'smooth'}));
document.getElementById('newsPrev').addEventListener('click', () => track.scrollBy({left:-300, behavior:'smooth'}));

// tabs de actividades
document.getElementById('tabs').addEventListener('click', (e) => {
  const btn = e.target.closest('.tab-btn');
  if(!btn) return;
  document.querySelectorAll('#tabs .tab-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  const f = btn.dataset.filter;
  document.querySelectorAll('#agenda .agenda-item').forEach(item => {
    item.classList.toggle('hidden', f !== 'todas' && item.dataset.type !== f);
  });
});

// filtros de producción
document.getElementById('prodFilters').addEventListener('click', (e) => {
  const btn = e.target.closest('.chip');
  if(!btn) return;
  document.querySelectorAll('#prodFilters .chip').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  const c = btn.dataset.cat;
  document.querySelectorAll('#prodList .prod-card').forEach(card => {
    card.classList.toggle('hidden', c !== 'todas' && card.dataset.cat !== c);
  });
});

// buscador de biblioteca
const pdfSearch = document.getElementById('pdfSearch');
const pdfCards = document.querySelectorAll('#pdfGrid .pdf-card');
const noResults = document.getElementById('noResults');
pdfSearch.addEventListener('input', () => {
  const q = pdfSearch.value.trim().toLowerCase();
  let visible = 0;
  pdfCards.forEach(c => {
    const match = c.dataset.title.includes(q);
    c.classList.toggle('hidden', !match);
    if(match) visible++;
  });
  noResults.style.display = visible === 0 ? 'block' : 'none';
});

// newsletter: validación simple en el cliente
document.getElementById('nlForm').addEventListener('submit', (e) => {
  e.preventDefault();
  const email = document.getElementById('nlEmail').value.trim();
  const msg = document.getElementById('nlMsg');
  const valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  if(valid){
    msg.textContent = '¡Listo! Revisá tu correo para confirmar la suscripción.';
    msg.classList.add('ok');
    e.target.reset();
  } else {
    msg.textContent = 'Ingresá un email válido.';
    msg.classList.remove('ok');
  }
});