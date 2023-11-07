<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <title>Mini Menedék Madaras</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/contact.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

</head>

<body>
    <div class="header-section">
        <h2 class="header-title">Contact Us</h2>
        <hr>
        <h2 class="text-black slide-in"
            style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Helping
            abandonned animals finding homes</h4>
    </div>

    <div class="container mt-5">
        <div class="volunteer-section">
            <h1>Volunteer with Gazdiravar!</h1>
            <p>There are many ways you can help us contribute to finding homes for animals at shelters. For more
                details, visit our <a href='/Gazdiravar/Volunteer'>Volunteer Page</a>.</p>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card contact-form">
                    <div class="card-body">
                        <form action="" method="post">
                            <h3>Send a Message</h3>
                            <div class="form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                            <div class="form-group">
                                <label for="eaddress">Email Address:</label>
                                <input type="email" class="form-control" id="eaddress" name="eaddress">
                            </div>
                            <div class="form-group">
                                <label for="upload">Upload Image</label>
                                <button class="form-control" id="tele" name="tele">Browse</button>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="captcha">Captcha</label>
                                <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                            </div>
                            <div>
                                <a href='/Gazdiravar/Volunteer'><button type="submit" class="btn btn-primary"
                                        name="addVolunteer" onclick="openEmailClient()">Submit</button></a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <p style="color: #0073cf; font-weight: 500; font-size: 20px; text-align: center;">Contact Us</p>
                <div class="social-media-icons">
                    <a href="https://www.facebook.com/gazdiravar">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/gazdiravar">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/gazdiravar">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCpICqq2NxtQ-xUtTKwrmjRw">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@gazdiravar">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div><br>
                <p style="color: #0073cf; font-weight: 500; font-size: 20px; text-align: center;">Follow Us</p>
                <div id="map-container">
                    <!-- Leaflet Map -->
                    <div id="map" class="popup-animation" style="width: 100%; height: 450px;"></div>
                    <!-- Buttons on top of the map -->
                    <div class="btn-group map-buttons"
                        style="position: absolute; top: 10px; right: 10px; z-index: 1000;">
                        <button id="mapButton" class="btn custom-button">Map</button>
                        <button id="satelliteButton" class="btn custom-button">Satellite</button>
                    </div>
                </div>
            </div>
            <!-- Map Container -->
        </div>
    </div>

    <script src="public/javacript/contact.js"></script>
    <?php require APPROOT . '/views/includes/footer.php'; ?>

</body>

</html>