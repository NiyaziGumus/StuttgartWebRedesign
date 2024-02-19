<?php
$pageTitle = "Suchergenisse | Stadt Stuttgart";
include 'template/navbar.php';
?>
<?php
// Suchbegriff abrufen
$suchbegriff = isset($_GET['suchbegriff']) ? $_GET['suchbegriff'] : '';
$gefundeneErgebnisse = [];

function textKuerzen($text, $limit = 10)
{
    $woerter = explode(' ', $text);
    if (count($woerter) > $limit) {
        $text = implode(' ', array_slice($woerter, 0, $limit)) . '...';
    }
    return $text;
}

if (!empty($suchbegriff)) {
    // Liste der Dateien und zugehörige Seiten/IDs
    $dateien = [
        ['datei' => 'nachrichtenLandingPage.html', 'seite' => 'index.php', 'id' => 'news'],
        ['datei' => 'nachrichtenSchlossplatz.html', 'seite' => 'schlossplatz.php', 'id' => 'nachrichtenSchloss'],
        ['datei' => 'nachrichtenSolitude.html', 'seite' => 'solitude.php', 'id' => 'nachrichtenSolitude'],
        ['datei' => 'nachrichtenWasen.html', 'seite' => 'wasen.php', 'id' => 'nachrichtenWasen'],
        ['datei' => 'tipsLandingPage.html', 'seite' => 'index.php', 'id' => 'tips'],
        ['datei' => 'uberUnsBurgerburo.html', 'seite' => 'burgerburo.php', 'id' => 'uberUnsBurger'],
        ['datei' => 'uberUnsSchlossplatz.html', 'seite' => 'schlossplatz.php', 'id' => 'uberUnsSchloss'],
        ['datei' => 'uberUnsSolitude.html', 'seite' => 'solitude.php', 'id' => 'uberUnsSolitude'],
        ['datei' => 'uberUnsWasen.html', 'seite' => 'wasen.php', 'id' => 'uberUnsWasen'],
        ['datei' => 'aktuelles.html', 'seite' => 'aktuelles.php', 'id' => 'aktuelles'],
        ['datei' => 'serviceBehorden.html', 'seite' => 'behorden.php', 'id' => 'serviceBehorden'],
        ['datei' => 'serviceBurgerburo.html', 'seite' => 'burgerburo.php', 'id' => 'serviceBurger'],
        ['datei' => 'uberschriftAttraktionen.html', 'seite' => 'attraktion.php', 'id' => 'uberAttraktion'],
        ['datei' => 'uberschriftBehorden.html', 'seite' => 'behorden.php', 'id' => 'uberBehorden'],
        ['datei' => 'uberschriftBurgerburo.html', 'seite' => 'burgerburo.php', 'id' => 'uberBurger'],
        ['datei' => 'uberschriftSchlossplatz.html', 'seite' => 'schlossplatz.php', 'id' => 'uberSchloss'],
        ['datei' => 'uberschriftSolitude.html', 'seite' => 'solitude.php', 'id' => 'uberSolitude'],
        ['datei' => 'uberschriftWasen.html', 'seite' => 'wasen.php', 'id' => 'uberWasen'],
        ['datei' => 'uberschriftAktuelles.html', 'seite' => 'aktuelles.php', 'id' => 'uberAktuelles'],['datei' => 'auflistungbehorden.html', 'seite' => 'behorden.php', 'id' => 'auflistungBehorden'],
        ['datei' => 'auflistungAttraktion.html', 'seite' => 'attraktion.php', 'id' => 'auflistungAttraktion'],
        ['datei' => 'auflistungBehorden.html', 'seite' => 'burgerburo.php', 'id' => 'offnungzeiten'],


    ];

    foreach ($dateien as $element) {
        $dom = new DOMDocument();
        @$dom->loadHTML(mb_convert_encoding(file_get_contents('template/' . $element['datei']), 'HTML-ENTITIES', 'UTF-8'));
        $xpath = new DOMXPath($dom);
        $abfrage = "//text()[contains(translate(., 'ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÜ', 'abcdefghijklmnopqrstuvwxyzäöü'), translate('$suchbegriff', 'ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÜ', 'abcdefghijklmnopqrstuvwxyzäöü'))]";
        $ergebnisse = $xpath->query($abfrage);

        if ($ergebnisse->length > 0) {
            foreach ($ergebnisse as $ergebnis) {
                $text = trim($ergebnis->nodeValue);
                // Text kürzen und zu den Ergebnissen hinzufügen
                $gekuerzterText = textKuerzen($text, 10);
                $gefundeneErgebnisse[] = [
                    'seite' => $element['seite'],
                    'id' => $element['id'],
                    'text' => $gekuerzterText
                ];
            }
        }
    }
}
?>


<div class="container text-start mt-5 bg-dark-subtle" style="min-height: 80vh;">
    <h2 class="ps-5 pt-4">Suchergebnisse</h2>

    <?php if (!empty($suchbegriff)) : ?>
        <p class="ps-5 fw-bolder">Suchergebnisse für "<?php echo htmlspecialchars($suchbegriff); ?>":</p>
        <?php if (!empty($gefundeneErgebnisse)) : ?>
            <ul class="ps-5">
                <?php foreach ($gefundeneErgebnisse as $ergebnis) : ?>
                    <!-- Link zur entsprechenden Seite und ID, Text anzeigen -->
                    <li>
                        <a href="<?php echo htmlspecialchars($ergebnis['seite']) . '#' . htmlspecialchars($ergebnis['id']); ?>">
                            <?php echo htmlspecialchars($ergebnis['text']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p class="ps-5">Keine Ergebnisse gefunden.</p>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php include 'template/footer.html'; ?>