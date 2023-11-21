<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <!-- Add the Bootstrap CSS link here -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>
    <!-- Hero Start -->
    <div class="container-fluid banner"
        style="background-image: url('https://i.imgur.com/KEb6zWy.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in"
                        style="font-family: 'Open Sans', sans-serif; font-size: 50px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">
                        A Csapatról</h2>
                        <hr>
                    <h2 class="text-black slide-in"
                        style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Az elhagyott állatok otthonra találásának segítése</h4>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <h2 class="text-black slide-in">Rólunk – A csapat, amely ezt a projektet valóra váltotta!</h2>

            <div class="fade-in">

            <p class="mb-4"><strong>Zsofia Orszagh</strong> a Konzultáció SOS elnöke, aki ezt kezdeményezte
                 projekt az indulástól kezdve. Korábban önkéntes alapon sokak számára segített szervezeteknek
                 évben, de a 2020-as világjárvány miatt a fókusz teljesen azokra helyeződött át, akiknek szükségük volt támogatásra
                 finanszírozás hiánya és/vagy az ajtók bezárása.</p>

            <p class="mb-4">Mivel egész életében állatok vették körül, és ő maga is állatbarát,
                 a világjárvány miatt több mint egy évre bezárt állatmenhelyek megsegítése volt a tökéletes választás
                 visszaadni a közösségnek. Így 2020 telén jelentős támogatás indult a cégén keresztül, hogy elérje a kapcsolatot
                 azoknak, akiknek szükségük van arra, hogy segítsenek először adománygyűjtésben, promócióban, grafikai tervezésben, webdizájnban és mindenben
                 amelyet ingyenesen kínálnak.</p>

            <p class="mb-4">Amellett, hogy sokféle módon segíti a szervezeteket, amit elképzelt <strong>Gazdira
                    Vár</strong> A to be egy olyan platform, ahol örökbefogadásra váró állatokat lehet közzétenni, kiemelve
                 azoknak az állatoknak, akik évek óta menhelyen vannak, oktató és szórakoztató anyagokkal
                 megismerjék az állatok gondozását, hangsúlyozva a rászoruló állatok örökbefogadásának fontosságát és
                 az állatmentő szervezetek hírének terjesztése, akiknek helyi támogatásra van szükségük.</p>

            <p class="mb-4">Nagy álma az volt, hogy a világ különböző pontjain lévő menhelyeket összekapcsolja, hogy segítsen mindegyiknek
                 más esetekben, amikor az állatokat nehezen fogadják örökbe egy adott területen. Ez az álom valósággá vált
                 2021 őszén, amikor kapcsolatot létesített iráni menhelyekkel. Nyugodtan olvass tovább
                 együttműködésünkről <a href="#volunteer-form">here</a>.</p>

            <p class="mb-4">Egy nagy csapat dolgozott ezen a projekten. Nézze meg alább, hányan:</p>

            </div>

            <div class="card">
                <div class="card-body">
                    <ul class="list-group text-center">
                        <li class="list-group-item">Serena Alfano, Graphic Design</li>
                        <li class="list-group-item">Shiyue Zhang, Graphic Design</li>
                        <li class="list-group-item">Kian Morot, Programming</li>
                        <li class="list-group-item">Darrell-David Madanay, Programming</li>
                        <li class="list-group-item">Joel Polanco, Programming</li>
                        <li class="list-group-item">Raji Naser Allah, Programming</li>
                        <li class="list-group-item">Ryan McGinity, Programming</li>
                        <li class="list-group-item">Benjamin Watson, Programming</li>
                        <li class="list-group-item">Jiandong Han, Programming</li>
                        <li class="list-group-item">Veronika Orszagh, Translation</li>
                        <li class="list-group-item">Georgiana Guica, Translation</li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="fade-in">
                <p class="mb-4">NAGYON köszönjük minden mentőszervezetnek és magánszemélynek, akikkel együttműködünk
                     val vel
                     minden egyes nap!</p>

                <p class="mb-4">Nagyon hálásak vagyunk mindenkinek, aki valamilyen módon hozzájárult ehhez a projekthez, ill
                     egy másik.
                     Nélküled ez nem jöhetett volna létre! Együtt változást hozunk!</p>

                <p class="mb-4">Szeretnél csatlakozni hozzánk, hogy segíts munkánkban? <a href="#volunteer-form">Kattintson
                         itt</a> töltse ki önkéntes űrlapunkat.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Add the Bootstrap container for the volunteer form with an id -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: lightgray;">
                            <div class="container text-center" id="volunteer-form">
                                <h2 class="display-5 mb-0">Csatlakozz hozzánk önkéntesként</h2>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Név:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email cím:</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Üzenet (nem kötelező):</label>
                                        <textarea class="form-control" id="message" rows="4"
                                            placeholder="Tell us more about how you'd like to help"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Beküldés</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>