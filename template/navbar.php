<!DOCTYPE html>
<html lang="de" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="/StuttgartWebRedesign/img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/StuttgartWebRedesign/img/apple-touch-icon.png">
  <link rel="stylesheet" href="/StuttgartWebRedesign/styles/style.css">
</head>

<body>
  <div class="container d-none d-md-block">
    <div class="row">
      <div class="col my-3 d-flex justify-content-center">
        <a class="navbar-brand ps-5 svg-icon" href="/StuttgartWebRedesign/index.php">
          <img src="/StuttgartWebRedesign/img/logoDark.svg" alt="Logo" width="150" height="30">
        </a>
      </div>
      <div class="col my-3 d-md-flex justify-content-center">
        <form action="/StuttgartWebRedesign/suchen.php" method="get" class="d-flex">
          <input name="suchbegriff" class="form-control me-2" type="text" placeholder="Hier Suchtext eingeben">
          <button class="search-button btn btn-outline-warning px-4 py-1" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="col d-flex justify-content-center my-3 me-4">
        <a class="navbar-brand light-theme mx-1" href="#" data-bs-theme-value="light"><i class="bi bi-sun-fill" style="font-size: 1.3rem;"></i></a>
        <a class="navbar-brand dark-theme mx-1" href="#" data-bs-theme-value="dark"><i class="bi bi-moon-stars-fill" style="font-size: 1.2rem;"></i></a>
        <a class="navbar-brand custom-theme mx-1" href="#" data-bs-theme-value="custom"><img src="/StuttgartWebRedesign/img/farbeIkon.svg" alt="Farbikone" width="20" height="24"></a>
        <div class="vr mx-3"></div>
        <a class="navbar-brand mx-1 svg-icon font-size-down"><img src="/StuttgartWebRedesign/img/fontSizeDown.svg" alt="A-" width="18" height="18"></a>
        <a class="navbar-brand mx-1 svg-icon font-size-up"><img src="/StuttgartWebRedesign/img/fontSizeUp.svg" alt="A+" width="24" height="24"></a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand d-block svg-icon d-md-none" href="/StuttgartWebRedesign/index.php">
        <img src="/StuttgartWebRedesign/img/logoDark.svg" alt="Logo" width="180" height="30">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
        <hr>
        <ul class="navbar-nav d-flex align-items-start">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/StuttgartWebRedesign/index.php">Startseite</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Behörden
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-medium" href="/StuttgartWebRedesign/behorden.php">Zu den Behörden</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/StuttgartWebRedesign/burgerburo.php">Bürgerbüro</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/StuttgartWebRedesign/zustandigkeiten.html">Zuständigkeiten</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Attraktionen
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-medium" href="/StuttgartWebRedesign/attraktionen.php">Zu den Attraktionen</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/StuttgartWebRedesign/Wasen.php">Wasen</a></li>
              <li><a class="dropdown-item" href="/StuttgartWebRedesign/schlossplatz.php">Schlossplatz</a></li>
              <li><a class="dropdown-item" href="/StuttgartWebRedesign/solitude.php">Schloss Solitude</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/StuttgartWebRedesign/aktuelles.php">Aktuelles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/StuttgartWebRedesign/burgerburo.php#uberUnsBurger">Öffnungszeiten</a>
          </li>
        </ul>
        <div class="d-md-none mt-3">
          <form action="/StuttgartWebRedesign/suchen.php" method="get" class="d-flex">
            <input name="suchbegriff" class="form-control me-2" type="text" placeholder="Hier Suchtext eingeben">
            <button class="btn btn-outline-warning px-4 py-1" type="submit"><i class="fa fa-search"></i></button>
          </form>
          <hr>
          <div class="mt-2">
            <a class="navbar-brand light-theme mx-1" href="#" data-bs-theme-value="light"><i class="bi bi-sun-fill" style="font-size: 1.3rem;"></i></a>
            <a class="navbar-brand dark-theme mx-1" href="#" data-bs-theme-value="dark"><i class="bi bi-moon-stars-fill" style="font-size: 1.2rem;"></i></a>
            <a class="navbar-brand custom-theme mx-1" href="#" data-bs-theme-value="custom"><img src="/StuttgartWebRedesign/img/farbeIkon.svg" alt="Farbikone" width="20" height="24"></a>
            <div class="vr mx-3"></div>
            <a class="navbar-brand mx-1 svg-icon font-size-down"><img src="/StuttgartWebRedesign/img/fontSizeDown.svg" alt="A-" width="18" height="18"></a>
            <a class="navbar-brand mx-1 svg-icon font-size-up"><img src="/StuttgartWebRedesign/img/fontSizeUp.svg" alt="A+" width="24" height="24"></a>
          </div>
        </div>
      </div>
    </div>
  </nav>

