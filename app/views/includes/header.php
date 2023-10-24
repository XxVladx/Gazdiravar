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

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Donate Button with Heart Icon -->
            <a href="donate.html" class="btn btn-danger btn-light-blue">
                <i class="fas fa-heart"></i> Ways To Donate
            </a>

            <!-- Logo in the center of the navbar -->
            <div class="mx-auto">
                <a href="Home">
                    <img src="https://i.imgur.com/gpQpnbc.png" alt="Logo" height="65">
                </a>
            </div>

            <!-- Hamburger Icon -->
            <div class="hamburger-icon" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                <i class="fas fa-bars fa-2x"></i>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li class="home-link"><a href="Home">Home</a></li>
                <li class="dropdown">
                    <span class="dropdown-toggle" data-bs-toggle="dropdown">About</span>
                    <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="About">About the Team</a></li>
                        <li><a class="dropdown-item" href="#">Collaborations</a></li>
                        <li><a class="dropdown-item" href="#">Contact</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span class="dropdown-toggle" data-bs-toggle="dropdown">Adoptions</span>
                    <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Adopt a Pet</a></li>
                        <li><a class="dropdown-item" href="#">Adoption Form</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span class="dropdown-toggle" data-bs-toggle="dropdown">Pet Care Tips Blog</span>
                    <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Summer Tips</a></li>
                        <li><a class="dropdown-item" href="#">Autumn Tips</a></li>
                        <li><a class="dropdown-item" href="#">About Fireworks</a></li>
                        <li><a class="dropdown-item" href="#">About Halloween</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span class="dropdown-toggle" data-bs-toggle="dropdown">Fun Stuff</span>
                    <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Our Favorite Posts</a></li>
                        <li><a class="dropdown-item" href="Videos">Videos</a></li>
                        <li><a class="dropdown-item" href="#">Live Feeds</a></li>
                        <li><a class="dropdown-item" href="#">Background Images</a></li>
                        <li><a class="dropdown-item" href="#">Games</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>