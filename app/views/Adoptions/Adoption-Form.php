<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/adoptionform.css">
</head>

<body>

    <body>
        <div class="container-fluid banner" style="background-image: url('https://i.imgur.com/39qfWYB.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Adoption Form</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card custom-cards slide-in" style="font-weight: bold; background-color: #ADD8E6;">
                <div class="card-body">
                    <h2 class="card-title text-center">Adoption Form</h2>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="pet_preference">Preferred Pet (if any):</label>
                            <input type="text" class="form-control" id="pet_preference" name="pet_preference">
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason for Adoption:</label>
                            <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        <?php require APPROOT . '/views/includes/footer.php'; ?>
    </body>