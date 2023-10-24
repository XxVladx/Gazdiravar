<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">

    <title><?php echo SITENAME; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!-- Donate Button with Heart Icon -->
            <a href="Home" class="btn btn-danger btn-light-blue">
                <i class="fas fa-heart"></i> Ways To Donate
            </a>

            <!-- Logo in the center of the navbar -->
            <div class="mx-auto logo">
                <a href="Home">
                    <img src="https://i.imgur.com/gpQpnbc.png" alt="Logo" height="70">
                </a>
            </div>

            <div class="menu-label">Menu</div>
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
                <li class="home-link text"><a href="Home">Home</a></li>
                <li class="dropend">
                    <span class="dropdown-toggle text">About</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="About">About the Team</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Collaborations</a></li>
                        <li><a class="dropdown-item textdrop" href="Contact">Contact</a></li>
                    </ul>
                </li>
                <li class="dropend">
                    <span class="dropdown-toggle text">Adoptions</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="#">Adopt a Pet</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Adoption Form</a></li>
                    </ul>
                </li>
                <li class="home-link text"><a href="#">Pet Care Tips Blog</a></li>
                <li class="dropend">
                    <span class="dropdown-toggle text">All Tips</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="#">Summer Tips</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Autumn Tips</a></li>
                        <li><a class="dropdown-item textdrop" href="#">About Fireworks</a></li>
                        <li><a class="dropdown-item textdrop" href="#">About Halloween</a></li>
                    </ul>
                </li>
                <li class="dropend">
                    <span class="dropdown-toggle text">Fun Stuff</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item textdrop" href="OurFavoritePosts">Our Favorite Posts</a></li>
                        <li><a class="dropdown-item textdrop" href="Videos">Videos</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Live Feeds</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Background Images</a></li>
                        <li><a class="dropdown-item textdrop" href="#">Games</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="public\javacript\header.js"></script>
</body>

</html>