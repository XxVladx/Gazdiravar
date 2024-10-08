<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">

    <title><?php echo SITENAME; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!-- Donate Button with Heart Icon -->
            <a href="hungdonate.php" class="btn btn-danger btn-light-blue">
                <i class="fas fa-heart"></i> Adományozási lehetőségek
            </a>

            <!-- Logo in the center of the navbar -->
            <div class="mx-auto logo">
                <a href="HungHome.php">
                    <img src="images/Gazdiravar2.png" alt="Logo" height="70">
                </a>
            </div>

            <div class="menu-label">Menü</div>
            <!-- Hamburger Icon -->
            <div class="hamburger-icon" id="hamburger" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                <i class="fas fa-bars fa-2x"></i>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset btn-custom" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <h5 class="offcanvas-title" id="sidebarLabel"></h5>
        </div>
        <div class="offcanvas-body">
            <div class="vertical"></div>
            <ul class="list-unstyled">
                <li class="home-link text"><a href="HungHome.php">Otthon</a></li>
                <li class="dropend">
                    <span class="dropdown-toggle text">Rólunk</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="hungabout.php">A csapatról</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Együttműködések</a></li>
                        <li><a class="dropdown-item textdrop" href="contact.php">Kapcsolat</a></li>
                    </ul>
                </li>
                <li class="dropend">
                    <span class="dropdown-toggle text">Örökbefogadások</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="Adopt-A-Pet.php" style="font-size: 15px;">Örökbe fogadás egy háziállatot</a></li>
                        <li><a class="dropdown-item textdrop" href="HungAdoption-Form.php">Örökbefogadási űrlap</a></li>
                    </ul>
                </li>
                <li class="home-link text"><a href="#">Háziállatok Blogja</a></li>
                <li class="dropend">
                    <span class="dropdown-toggle text">Minden tanács</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="HungSummer-Tips.php">Nyári tippek</a></li>
                        <li><a class="dropdown-item textdrop" href="Hung-Autumn-Tips.php">Őszi tippek</a></li>
                        <li><a class="dropdown-item textdrop" href="HungAboutFireworks.php">A tűzijátékokról</a></li>
                        <li><a class="dropdown-item textdrop" href="HungAboutHalloween.php">Az Halloween-ről</a></li>
                    </ul>
                </li>
                <li class="dropend">
                    <span class="dropdown-toggle text" style="font-size: 20px;">Szórakoztató dolgok</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="HungOur-Favorite-Posts.php">Kedvenc bejegyzéseink</a></li>
                        <li><a class="dropdown-item textdrop" href="hungvideos.php">Videók</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Élő adások</a></li>
                        <li><a class="dropdown-item textdrop" href="backgroundimages.php">Háttérképek</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Játékok</a></li>
                    </ul>
                </li>
                <li class="dropend">
                    <span class="dropdown-toggle text" style="font-size: 20px;">Szükségünk van rád</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="#" style="font-size: 15px;">Adománygyűjtő rendezvények</a></li>
                        <li><a class="dropdown-item textdrop" href="HungHelping-Shelters.php" style="font-size: 15px;">Menhelyek segítése</a></li>
                        <li><a class="dropdown-item textdrop" href="#" style="font-size: 15px;">Önkénteskedés a Gazdira Várnál</a></li>
                        <li><a class="dropdown-item textdrop" href="Hung-How-Can-You-Help-Us.php" style="font-size: 15px;">Hogyan segíthet nekünk?</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text" href="home.php">
                        English
                        <span class="flag-icon flag-icon-us" style="margin-right: 5px;"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="public\javacript\header.js"></script>
</body>

</html>