<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>

    <div class="container-fluid banner" style="background-image: url('https://i.imgur.com/aiOMBOB.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Gazdira Vár</h2>
                </div>
            </div>
            <hr class="custom-hr">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-white slide-in" id="subtext" style="font-weight: 300; font-size:20px;">Helping abandoned animals finding homes</p>
                    <a href="#" class="btn btn-primary mt-3 adopt-btn">Adopt a Pet</a>
                </div>
            </div>
        </div>
    </div>



    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>