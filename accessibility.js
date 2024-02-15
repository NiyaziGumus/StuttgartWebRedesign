document.querySelectorAll('.font-size-up').forEach(item => {
    item.addEventListener('click', function () {
        const root = document.documentElement;
        const currentSize = parseInt(window.getComputedStyle(root).getPropertyValue('--main-font-size'));

        if (currentSize < 18) {
            root.style.setProperty('--main-font-size', `${currentSize + 1}px`);
        }
    });
});

document.querySelectorAll('.font-size-down').forEach(item => {
    item.addEventListener('click', function () {
        const root = document.documentElement;
        const currentSize = parseInt(window.getComputedStyle(root).getPropertyValue('--main-font-size'));

        if (currentSize > 14) {
            root.style.setProperty('--main-font-size', `${currentSize - 1}px`);
        }
    });
});
