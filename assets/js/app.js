const menuToggle = document.querySelector('[data-menu-toggle]');
const root = document.documentElement;

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        const open = root.classList.toggle('menu-open');
        menuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
}
