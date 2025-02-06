<!-- This website is created by: ANDREW S. BELLEZA under ARDCI MICROFINANCE IT Unit -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARDCI Hotel</title>

    <!-- tab icon -->
    <link rel="icon" href="assets/image/aci-logo-square.png">

    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl_carousel/owl.theme.default.css">

    <!-- glightbox -->
    <link rel="stylesheet" href="assets/glightbox/css/glightbox.css">

</head>
<body>

<!-- top navi -->
<div class="container-fluid top-navi-container">
    <div class="navi-details-top">
        <a href="tel:09989882476" class="phone-i-div"><i class="fa-solid fa-phone-flip"></i>(+63)998-988-2476</a>
        <a href="https://www.google.com/maps/place/ARDCI+Corporate+Inn/@13.5810139,124.2297437,18.66z/data=!4m8!3m7!1s0x33a016dab0c2235b:0xc564e11efdde2f77!5m2!4m1!1i2!8m2!3d13.58129!4d124.2300713" target="_blank" class="phone-i-div"><i class="fa-solid fa-location-dot"></i>G/F ARDCI Corporate Building 2, San Roque, Virac, Catanduanes</a>
    </div>
</div>
<!-- navigation -->
<nav class="navbar navbar-expand-lg navbar-light sticky-navigation">
  <div class="container-fluid pad1">
    <a class="navbar-brand" href="index.php"><img src="assets/image/aci-logo.png" alt="testi1" class="img-fluid d-block aci-navigation-logo"></a>
    <button class="navbar-toggler btn-burger-menu-header" id="hhMenu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-links-right" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id="home" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown" id="suitesDropLi">
          <a class="nav-link dropdown-toggle nav-link-suites" href="#" id="suitesDrop" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Suites
          </a>
          <ul class="dropdown-menu ddrop-suites" aria-labelledby="suitesDrop">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#faciKingModal">King</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#faciQueenModal">Queen</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#faciTripleModal">Triple</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#faciSuperiorModal">Superior</a></li>
            <!-- dropdown suites -->
            <li class="dropend suites-dropend" id="executiveLi">
              <a class="dropdown-item dropdown-toggle" href="#" id="execDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Executive
              </a>
              <ul class="dropdown-menu" aria-labelledby="execDrop">
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciExaModal">Executive A</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciExbModal">Executive B & C</a></li>
              </ul>
            </li>
            <!-- deluxe suites -->
            <li class="dropend suites-dropend" id="executiveLi2">
              <a class="dropdown-item dropdown-toggle" href="#" id="execDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Deluxe
              </a>
              <ul class="dropdown-menu" aria-labelledby="execDrop">
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciDeluxeAModal">Deluxe A</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciDeluxeBModal">Deluxe B</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciSDeluxeModal">Standard Deluxe</a></li>
              </ul>
            </li>
            <!-- economy suites -->
            <li class="dropend suites-dropend" id="executiveLi3">
              <a class="dropdown-item dropdown-toggle" href="#" id="execDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Economy
              </a>
              <ul class="dropdown-menu" aria-labelledby="execDrop">
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciEconSingleModal">Economy Single</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciEconDoubleModal">Economy Double</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciEcon1Modal">Economy 1</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#faciEcon2Modal">Economy 2</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown" id="faciDropLi">
          <a class="nav-link dropdown-toggle nav-link-facilities" href="#" id="facilitiessDrop" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Facilities
          </a>
          <ul class="dropdown-menu ddrop-faci" aria-labelledby="facilitiessDrop">
            <li class="dropend suites-dropend" id="diningFaci">
              <a class="dropdown-item dropdown-toggle" href="#" id="diningDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dining
              </a>
              <ul class="dropdown-menu" aria-labelledby="diningDrop">
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#ardciCafeModal">ARDCI Caf&eacute;</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#EveBaSModal">Eve's Blends and Spices</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#CabanaModal">Cabana</a></li>
              </ul>
            </li>
            <li class="dropend suites-dropend" id="funcSpacesDrop">
              <a class="dropdown-item dropdown-toggle" href="#" id="funcSpaces" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  Function Spaces
              </a>
              <ul class="dropdown-menu" aria-labelledby="funcSpaces">
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#FuncHall1Modal">Function Hall 1</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#FuncHall2Modal">Function Hall 2</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#SkyDeckModal">Sky Deck</a></li>
                <li class="dropstart suites-dropend" id="musicLDrop1">
                  <a class="dropdown-item sub-drop-down dropdown-toggle" href="#" id="musicL1Drop" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Music Lounge @ Building 1
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="musicL1Drop">
                      <li><a class="dropdown-item sub-sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#MusicLoungeBModal">Music Lounge B</a></li>
                      <li><a class="dropdown-item sub-sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#MusicLoungeCModal">Music Lounge C</a></li>
                  </ul>
                </li>
                <li class="dropstart suites-dropend" id="musicLDrop2">
                  <a class="dropdown-item sub-drop-down dropdown-toggle" href="#" id="musicL2Drop" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Music Lounge @ Building 2
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="musicL2Drop">
                      <li><a class="dropdown-item sub-sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#jhonLenonModal">John Lennon Lounge</a></li>
                      <li><a class="dropdown-item sub-sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#rihannaModal">Rihanna & Bob Lounge</a></li>
                      <li><a class="dropdown-item sub-sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#madonnaModal">Madonna & Fred Lounge</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropend suites-dropend" id="wellnessFaci">
              <a class="dropdown-item dropdown-toggle" href="#" id="wellnessDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Wellness Center
              </a>
              <ul class="dropdown-menu" aria-labelledby="wellnessDrop">
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#PoolModal">Pool & Cabana</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#GymModal">Gym</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#SaunaModal">Sauna</a></li>
                <li><a class="dropdown-item sub-drop-down" href="#" data-bs-toggle="modal" data-bs-target="#MassageModal">Massage Room</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="about-us" href ="about-us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-us" href ="contact-us.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>