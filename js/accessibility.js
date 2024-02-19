document.addEventListener('DOMContentLoaded', function () {
    const root = document.documentElement;
    const savedFontSize = localStorage.getItem('fontSize');
    if (savedFontSize) {
        root.style.setProperty('--main-font-size', savedFontSize);
    }

    document.querySelectorAll('.font-size-up').forEach(item => {
        item.addEventListener('click', function () {
            const currentSize = parseInt(window.getComputedStyle(root).getPropertyValue('--main-font-size'));
            if (currentSize < 18) {
                const newSize = `${currentSize + 1}px`;
                root.style.setProperty('--main-font-size', newSize);
                localStorage.setItem('fontSize', newSize);
            }
        });
    });

    document.querySelectorAll('.font-size-down').forEach(item => {
        item.addEventListener('click', function () {
            const currentSize = parseInt(window.getComputedStyle(root).getPropertyValue('--main-font-size'));
            if (currentSize > 14) {
                const newSize = `${currentSize - 1}px`;
                root.style.setProperty('--main-font-size', newSize);
                localStorage.setItem('fontSize', newSize);
            }
        });
    });
});
