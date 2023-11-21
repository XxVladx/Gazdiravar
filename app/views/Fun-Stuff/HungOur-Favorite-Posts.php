<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/hungheader.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/ourfavoriteposts.css">
</head>

<body>
    <div class="container-fluid banner" style="background-image: url('https://i.imgur.com/U6Rt7OC.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Kedvenc bejegyzéseink</h2>
                    <hr>
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Az elhagyott állatok otthonra találásának segítése</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card slide-in">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Kérjük, olvassa el, mielőtt ítélkezik</h3>
                        <p class="card-text">Hosszas töprengés és végiggondolás után eldöntöttem, mit fogok tenni, kérlek, ne ítélj el! A kutyáim egyszerűen túl sok időt foglalnak el, így nem marad időm a háztartás takarítására a napi játék, bújás, etetés és gondozás mellett.</p>
                        <p class="card-text">Ez egy nehéz döntés volt, de a továbblépéshez fontossági sorrendet kellett felállítanom. Nem lehet teljes életet élni, ha időhiány miatt el kell hanyagolni valamit.</p>
                        <p class="card-text">Tehát a következőket szeretném ajándékozni:</p>
                        <ul class="list-group custom-item">
                            <li class="list-group-item custom-item">A porszívóm</li>
                            <li class="list-group-item custom-item">Felmosó törölköző</li>
                            <li class="list-group-item custom-item">Szivacs</li>
                            <li class="list-group-item custom-item">Mosogatószer</li>
                            <li class="list-group-item custom-item">Ablakmosó folyadék</li>
                            <li class="list-group-item custom-item">Portörlő</li>
                            <li class="list-group-item custom-item">Mosodai állvány</li>
                            <li class="list-group-item custom-item">Különféle tisztítószerek</li>
                        </ul>
                    </div>
                </div>
                <div class="alert alert-info custom-alert slide-in">
                    <p class="mb-0">p.s. Soha nem tudnék elválni a kutyáimtól, még akkor sem, ha néha elfáradok. Ők az életem.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card custom-cards slide-in">
                    <div class="card-body">
                        <h5 class="card-title text-center">Szellem</h5>
                        <img src="https://i.imgur.com/uLcw8Jy.png" class="card-img-top" alt="Ghost Image">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card custom-cards slide-in">
                    <div class="card-body">
                        <h5 class="card-title text-center">Felújítás</h5>
                        <img src="https://i.imgur.com/DO46Q5y.png" class="card-img-top" alt="Renovation Image">
                        <h5 class="text-center para-text">A nap tippje</h5>
                        <p class="para-text text-center">Ha olyan tó közelében öntjük a betont, ahol kacsák vannak, akkor nem jó ötlet, hogy az egész személyzetet egyszerre menjen ebédelni.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card custom-cards slide-in">
                    <div class="card-body">
                        <h5 class="card-title text-center">Művészet a homokban</h5>
                        <img src="https://i.imgur.com/AuPe6Lc.png" class="card-img-top" alt="Art in the Sand Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 offset-md-3">
        <div class="card custom-card slide-in">
            <div class="card-body" style="background-color: lightgray;">
                <h5 class="card-title text-center">Küldj nekünk valamit, amit érdemes megosztani</h5>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group txt-form">
                        <label for="first-name">Keresztnév</label>
                        <input type="text" class="form-control" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group txt-form">
                        <label for="last-name">Vezetéknév</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group txt-form">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div><br>
                    <div class="form-group txt-form">
                        <label for="image">Kép feltöltése</label><br>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                        <small class="form-text text-muted">Képfájl feltöltése</small>
                    </div><br>
                    <div class="form-group txt-form">
                        <label for="message">Üzenet</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="authorization1" required>
                        <label class="form-check-label label-1" for="authorization1">Felhatalmazom a Gazdiravart, hogy megossza ezt a weboldalán</label><br>
                        <input type="checkbox" class="form-check-input" id="authorization2" required>
                        <label class="form-check-label label-2" for="authorization2">Felhatalmazom a Gazdiravart, hogy megossza ezt a közösségi média platformjain.</label>
                    </div>
                    <button type="submit" class="btn btn-primary custom-btn">Beküldés</button>
                </form>
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

</html>