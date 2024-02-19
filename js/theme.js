(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const setTheme = theme => {
    document.documentElement.removeAttribute('data-bs-theme'); // Tüm temaları kaldır
    document.documentElement.setAttribute('data-bs-theme', theme); // Yeni temayı ekle
  }

  const initTheme = () => {
    const storedTheme = getStoredTheme() || 'light'; // Varsayılan tema 'light'
    setTheme(storedTheme);
    document.querySelectorAll(`[data-bs-theme-value="${storedTheme}"]`).forEach(btn => btn.classList.add('active'));
  }

  window.addEventListener('DOMContentLoaded', () => {
    initTheme();

    document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        const theme = toggle.getAttribute('data-bs-theme-value');
        setStoredTheme(theme);
        setTheme(theme);
        document.querySelectorAll('[data-bs-theme-value]').forEach(btn => btn.classList.remove('active'));
        toggle.classList.add('active');
      })
    });
  });
})();