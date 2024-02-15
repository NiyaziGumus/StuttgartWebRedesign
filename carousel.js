document.addEventListener('DOMContentLoaded', function () {
    var myCarouselElement = document.getElementById('customCarousel');
    var carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 4000, // Übergangszeit von 4 Sekunden
        wrap: true // Erlaubt dem Karussell, am Ende wieder von vorne zu beginnen
    });

    var pauseButton = document.getElementById('pauseButton');
    var isPaused = false; // Das Karussell startet automatisch

    function toggleAutoPlay() {
        if (!isPaused) {
            clearInterval(autoPlayInterval);
            isPaused = true;
            pauseButton.innerHTML = '<i class="bi bi-play-circle"></i>'; // Wechselt das Symbol zu "Abspielen"
        } else {
            autoPlayInterval = setInterval(function () {
                carousel.next();
            }, 4000); // Setzt das automatische Abspielen fort
            isPaused = false;
            pauseButton.innerHTML = '<i class="bi bi-pause-circle"></i>'; // Wechselt das Symbol zu "Pause"
        }
    }

    pauseButton.addEventListener('click', toggleAutoPlay);

    // Startet die automatische Wiedergabe
    var autoPlayInterval = setInterval(function () {
        carousel.next();
    }, 4000);
    pauseButton.innerHTML = '<i class="bi bi-pause-circle"></i>'; // Anfangs wird das Pause-Symbol angezeigt

    // Fügt den Vor- und Zurück-Buttons Event-Listener hinzu
    document.getElementById('prevButton').addEventListener('click', function () {
        carousel.prev(); // Geht zum vorherigen Element
    });

    document.getElementById('nextButton').addEventListener('click', function () {
        carousel.next(); // Geht zum nächsten Element
    });

    var indicatorsContainer = document.getElementById('carouselIndicatorsCustom');
    var carouselItems = myCarouselElement.querySelectorAll('.carousel-item');

    for (let i = 0; i < carouselItems.length; i++) {
        let indicator = document.createElement('button');
        indicator.setAttribute('type', 'button');
        indicator.className = 'btn btn-indicator' + (i === 0 ? ' active' : ''); // Setzt den ersten Indikator als aktiv
        indicator.setAttribute('aria-label', 'Rutsche ' + (i + 1));

        indicator.addEventListener('click', function () {
            carousel.to(i); // Springt zu einem bestimmten Element
        });

        indicatorsContainer.appendChild(indicator); // Fügt den Indikator zum Container hinzu
    }

    myCarouselElement.addEventListener('slid.bs.carousel', function (event) {
        var activeItemIndex = Array.from(carouselItems).indexOf(event.relatedTarget); // Findet den Index des aktiven Elements
        var indicators = indicatorsContainer.querySelectorAll('.btn-indicator');
        indicators.forEach(function (ind, index) {
            if (index === activeItemIndex) {
                ind.classList.add('active'); // Setzt den entsprechenden Indikator als aktiv
            } else {
                ind.classList.remove('active'); // Entfernt die Aktiv-Klasse von anderen Indikatoren
            }
        });
    });
});
