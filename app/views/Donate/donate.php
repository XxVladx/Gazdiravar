<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/donate.css">

</head>

<body>
    <!-- Hero Start -->
    <div class="container-fluid banner" style="background-image: url('images/pexels-photo-3184465.png'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" style="font-family: 'Open Sans', sans-serif; font-size: 50px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">
                        Ways To Donate</h2>
                    <hr>
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Helping
                        abandonned animals finding homes</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container mt-5">
        <div class="fade-in">
            <div class="row">
                <!-- Card for the main content -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title display-4">Wish to donate to us?</h1>
                            <hr>
                            <p class="card-text mb-4">You can contribute to us at Gazdira var by donating money or
                                sending us items that we will put towards good causes. We are in need of your help, in
                                order to give organizations the support and platform they need to help animals.</p>

                            <!-- Clickable Buttons with Icons -->
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-lg mr-3"><i class="fas fa-coins"></i> Donate
                                    money today via our fundraiser</a>
                                <br><br>
                                <a href="#" class="btn btn-primary btn-lg mr-3"><i class="fab fa-paypal"></i> Donate
                                    money today via PayPal</a>
                                <br><br>
                                <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-truck"></i> Donate items
                                    today</a>
                            </div>


                            <!-- Image next to the second paragraph -->
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <img src="images/Gazdiravar2.png" alt="Logo" height="70">
                                </div>
                                <div class="col-md-6">
                                    <div class="border p-3" style="">
                                        <p class="mb-4">Thank you in advance for your support. A little can go a long
                                            way...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card for an additional message or content -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Additional Information</h2>
                            <p class="card-text">You can include any additional information or messages here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178008028-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());



        gtag('config', 'UA-178008028-1');
    </script>

    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>