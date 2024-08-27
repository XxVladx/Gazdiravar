<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/adoptapet.css">
</head>

<body>
    <div class="container-fluid banner" style="background-image: url('images/adoptions/pexels-fuzzy-rescue-4730079.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Adopt A Pet</h2>
                    <hr>
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Helping
                        abandonned animals finding homes</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light p-4 rounded mb-4">
        <h2 class="text-black text-center mt-4" style="font-weight: 500;">Animals Looking For a Home</h2>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <!-- Card View 1 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded border-0">
                    <a href="AnimalDetails">
                        <img src="" class="card-img-top" alt="Animal Image">
                    </a>
                </div>
                <div class="card-details text-center">
                    <h5 class="card-title" style="font-weight: bold;">Fluffy</h5>
                    <p>Gender: Female | Age: Adult | Size: Small</p>
                </div>
            </div>

            <!-- Card View 2 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded border-0">
                    <a href="AnimalDetails">
                        <img src="" class="card-img-top" alt="Animal Image">
                    </a>
                </div>
                <div class="card-details text-center">
                    <h5 class="card-title" style="font-weight: bold;">Buddy</h5>
                    <p>Gender: Male | Age: Adult | Size: Large</p>
                </div>
            </div>

            <!-- Card View 3 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded border-0">
                    <a href="AnimalDetails">
                        <img src="" class="card-img-top" alt="Animal Image">
                    </a>
                </div>
                <div class="card-details text-center">
                    <h5 class="card-title" style="font-weight: bold;">Whiskers</h5>
                    <p>Gender: Male | Age: Adult | Size: Large</p>
                </div>
            </div>

            <!-- Card View 4 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded border-0">
                    <a href="AnimalDetails">
                        <img src="" class="card-img-top" alt="Animal Image"> </a>
                    </a>
                </div>
                <div class="card-details text-center">
                    <h5 class="card-title" style="font-weight: bold;">Max</h5>
                    <p>Gender: Female | Age: Young | Size: Small</p>
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