<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
</head>

<body>

    <div class="container-fluid banner" style="background-image: url('images/Home/pexels-photo-1476706.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Gazdira Vár</h2>
                    <hr>
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Helping
                        abandoned animals finding homes</h4>
                </div>
            </div>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-white slide-in" id="subtext" style="font-size: 20px; -webkit-text-stroke: 1px white;">Helping abandoned animals finding homes</p>
                    <a href="Adopt-A-Pet.php" class="btn btn-primary mt-3 adopt-btn slide-in">Adopt a Pet</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 fade-in">
        <h3 class="text-center welcome-title">Welcome to our Page</h3>
        <div class="container slim-para">
            <p>We are helping animal shelters and rescues to be able to find new homes for the animals in need. Note that we do not do animal rescues ourselves, we provide support to those organizations in any way possible via promotion, marketing, graphic design, fundraising, social media, website development and support, etc. to spread the word and build international relations between organizations.</p>
            <p>We are more than happy to share your posts of animals that are looking for a forever home or perhaps in need of funding to provide medical care. We will gladly help you with Facebook, Twitter, Instagram, YouTube and other social media platforms you may use. Note that we provide our services free of charge and we hope that we can make a difference that way in saving the lives of as many animals as possible.</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 d-flex flex-column">
                <img src="images/Home/cat-staring.jpg" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 d-flex flex-column">
                <img src="images/Home/dog-in-a-tuxedo.jpg" class="img-fluid" alt="Image 2">
            </div>
            <div class="col-md-4 d-flex flex-column">
                <img src="images/Home/shelter-cat.jpg" class="img-fluid" alt="Image 3">
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