document.addEventListener('DOMContentLoaded', function () {
    var myCarouselElement = document.getElementById('customCarousel');
    var carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 4000, // 4 saniyelik geçiş süresi
        wrap: true // Carousel'in sona ulaştığında başa dönmesini sağla
    });

    var pauseButton = document.getElementById('pauseButton');
    var isPaused = false; // Carousel başlangıçta otomatik oynatılıyor

    function toggleAutoPlay() {
        if (!isPaused) {
            clearInterval(autoPlayInterval);
            isPaused = true;
            pauseButton.innerHTML = '<i class="bi bi-play-circle"></i>';
        } else {
            autoPlayInterval = setInterval(function () {
                carousel.next();
            }, 4000);
            isPaused = false;
            pauseButton.innerHTML = '<i class="bi bi-pause-circle"></i>';
        }
    }

    pauseButton.addEventListener('click', toggleAutoPlay);

    // Otomatik oynatmayı başlat
    var autoPlayInterval = setInterval(function () {
        carousel.next();
    }, 4000);
    pauseButton.innerHTML = '<i class="bi bi-pause-circle"></i>'; // Başlangıçta pause ikonu

    // Önceki ve Sonraki butonları için event listener ekleyin
    document.getElementById('prevButton').addEventListener('click', function () {
        carousel.prev();
    });

    document.getElementById('nextButton').addEventListener('click', function () {
        carousel.next();
    });

    var indicatorsContainer = document.getElementById('carouselIndicatorsCustom');
    var carouselItems = myCarouselElement.querySelectorAll('.carousel-item');

    for (let i = 0; i < carouselItems.length; i++) {
        let indicator = document.createElement('button');
        indicator.setAttribute('type', 'button');
        indicator.className = 'btn btn-indicator' + (i === 0 ? ' active' : '');
        indicator.setAttribute('aria-label', 'Slide ' + (i + 1));

        indicator.addEventListener('click', function () {
            carousel.to(i);
        });

        indicatorsContainer.appendChild(indicator);
    }

    myCarouselElement.addEventListener('slid.bs.carousel', function (event) {
        var activeItemIndex = Array.from(carouselItems).indexOf(event.relatedTarget);
        var indicators = indicatorsContainer.querySelectorAll('.btn-indicator');
        indicators.forEach(function (ind, index) {
            if (index === activeItemIndex) {
                ind.classList.add('active');
            } else {
                ind.classList.remove('active');
            }
        });
    });
});
