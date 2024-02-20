(() => {
  'use strict';

  const getStoredTheme = () => localStorage.getItem('theme');
  const setStoredTheme = theme => localStorage.setItem('theme', theme);

  const setTheme = theme => {
    document.documentElement.removeAttribute('data-bs-theme');
    document.documentElement.setAttribute('data-bs-theme', theme);
  };

  const initTheme = () => {
    const storedTheme = getStoredTheme() || 'light';
    setTheme(storedTheme);
    document.querySelectorAll(`[data-bs-theme-value="${storedTheme}"]`).forEach(btn => btn.classList.add('active'));
  };

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  window.addEventListener('DOMContentLoaded', () => {
    initTheme(); 

 
    document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        const theme = toggle.getAttribute('data-bs-theme-value');
        setStoredTheme(theme);
        setTheme(theme);
        document.querySelectorAll('[data-bs-theme-value]').forEach(btn => btn.classList.remove('active'));
        toggle.classList.add('active');

        tooltipList.forEach(tooltip => tooltip.hide());
      });
    });
  });
})();
