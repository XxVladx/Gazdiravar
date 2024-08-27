<!DOCTYPE html>
<html lang="en">
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
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Segíteni elhagyott állatoknak otthont találni.</h4>
                </div>
            </div>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-white slide-in" id="subtext" style="font-size: 20px; -webkit-text-stroke: 1px white;">Elhagyott állatoknak otthonokat találni.</p>
                    <a href="Adopt-A-Pet.php" class="btn btn-primary mt-3 adopt-btn slide-in">Állatot örökbe fogadni.</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 fade-in">
        <h3 class="text-center welcome-title">Üdvözöljük az oldalunkon.</h3>
        <div class="container slim-para">
            <p>Segítünk az állatmenhelyeknek és mentőszervezeteknek, hogy új otthonokat találjanak a szükséget szenvedő állatoknak. Fontos megjegyzés, hogy mi magunk nem végzünk állatmentéseket; támogatást nyújtunk ezeknek a szervezeteknek bármilyen lehetséges módon, mint például a népszerűsítés, marketing, grafikai tervezés, adománygyűjtés, közösségi média, weboldalfejlesztés és támogatás stb., hogy terjesszük a hírt és nemzetközi kapcsolatokat építsünk ki a szervezetek között.</p>
            <p>Örömmel osztjuk meg azokat a bejegyzéseket, amelyek állatokat mutatnak be, akik örökké tartó otthont keresnek, vagy esetleg támogatásra van szükségük az orvosi ellátáshoz. Szívesen segítünk a Facebookon, Twitteren, Instagramon, YouTube-on és más olyan közösségi média platformokon, amelyeket használnak. Fontos megjegyzés, hogy szolgáltatásainkat ingyenesen biztosítjuk, és reméljük, hogy ezen keresztül különbséget tehetünk az állatok életének megmentésében.</p>
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

    <?php require APPROOT . '/views/includes/hungfooter.php'; ?>
</body>