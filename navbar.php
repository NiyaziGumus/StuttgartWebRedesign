<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container d-none d-md-block">
    <div class="row">
      <div class="col my-3 d-flex justify-content-center">
        <a class="navbar-brand ps-5 " href="index.php">
          <img src="img/logoDark.svg" alt="Logo" width="150" height="30">
        </a>
      </div>
      <div class="col my-3 d-md-flex justify-content-center ">
        <form action="suchen.php" method="get" class="d-flex">
          <input name="suchbegriff" class="form-control me-2 " type="text" placeholder="Hier Suchtext eingeben">
          <button class="search-button btn btn-outline-warning px-4 py-1 " type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="col d-flex justify-content-center my-3 me-4">
        <a class="navbar-brand mx-1" href="#"><i class="bi bi-sun-fill" style="font-size: 1.3rem;"></i></a>
        <a class="navbar-brand mx-1" href="#"><i class="bi bi-moon-stars-fill" style="font-size: 1.2rem;"></i></a>
        <a class="navbar-brand mx-1" href="#"><img src="img/farbeIkon.svg" alt="Logo" width="20" height="24"></a>
        <div class="vr mx-3 "></div>
        <a class="navbar-brand mx-1" href="#"><img src="img/fontSizeDown.svg" alt="Logo" width="18" height="18"></a>
        <a class="navbar-brand mx-1" href="#"><img src="img/fontSizeUp.svg" alt="Logo" width="24" height="24"></a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md bg-body-tertiary ">
    <div class="container-fluid ">
      <a class="navbar-brand d-block d-md-none " href="index.php">
        <img src="img/logoDark.svg" alt="Logo" width="180" height="30">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center " id="navbarNavDropdown">
        <hr>
        <ul class="navbar-nav d-flex align-items-start ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Startseite</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Behörden
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-medium" href="behorden.php">Zu den Behörden</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="burgerburo.php">Bürgerbüro</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="zustandigkeiten.html">Zuständigkeiten</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Attraktionen
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-medium" href="attraktionen.php">Zu den Attraktionen</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="Wasen.php">Wasen</a></li>
              <li><a class="dropdown-item" href="schlossplatz.php">Schlossplatz</a></li>
              <li><a class="dropdown-item" href="solitude.php">Schloss Solitude</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aktuelles.php">Aktuelles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="burgerburo.php#uberUnsBurger">Öffnungzeiten</a>
          </li>
        </ul>
        <div class="d-md-none mt-3">
          <form action="suchen.php" method="get" class="d-flex ">
            <input name="suchbegriff" class="form-control me-2" type="text" placeholder="Hier Suchtext eingeben">
            <button class="btn btn-outline-warning px-4 py-1" type="submit"><i class="fa fa-search"></i></button>
          </form>
          <hr>
          <div class=" mt-2">
            <a class="navbar-brand mx-1" href="#"><i class="bi bi-sun-fill" style="font-size: 1.3rem;"></i></a>
            <a class="navbar-brand mx-1" href="#"><i class="bi bi-moon-stars-fill" style="font-size: 1.2rem;"></i></a>
            <a class="navbar-brand mx-1" href="#"><img src="img/farbeIkon.svg" alt="Logo" width="20" height="24"></a>
            <div class="vr mx-3 "></div>
            <a class="navbar-brand mx-1" href="#"><img src="img/fontSizeDown.svg" alt="Logo" width="18" height="18"></a>
            <a class="navbar-brand mx-1" href="#"><img src="img/fontSizeUp.svg" alt="Logo" width="24" height="24"></a>
          </div>
        </div>
      </div>
    </div>
  </nav>