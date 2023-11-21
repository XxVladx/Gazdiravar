<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/animaldetails.css">
</head>

<body>
    <div class="container-fluid banner" style="background-image: url('https://i.imgur.com/wITAU1r.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Animal Details</h2>
                    <hr>
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Helping
                        abandonned animals finding homes</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="info-section">
            <h2>Information</h2>
            <ul>
                <li><strong>Register Date:</strong> <span id="register-date"></span></li>
                <li><strong>Species:</strong> <span id="species"></span></li>
                <li><strong>Breed:</strong> <span id="breed"></span></li>
                <li><strong>Gender:</strong> <span id="gender"></span></li>
                <li><strong>Age:</strong> <span id="age"></span></li>
                <li><strong>Size:</strong> <span id="size"></span></li>
            </ul>
        </div>
        <div class="description-section">
            <h1 id="animal-name"></h1>
            <p><strong>Location:</strong> <span id="location"></span></p>
            <p><strong>Description:</strong> <span id="description"></span></p>
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

    <!-- <script>
        // Fetch animal data based on ID from the API endpoint
        const animalId = <?php echo $_GET['id']; ?>;
        // Use fetch or AJAX to retrieve data and populate the details using JavaScript
        // For mock data, you can set values directly here
        const mockAnimalData = {
            registerDate: '2023-11-01',
            species: 'Dog',
            breed: 'Labrador Retriever',
            gender: 'Male',
            age: 'Adult',
            size: 'Large',
            name: 'Buddy',
            location: 'Animal Shelter, City Name',
            description: 'Buddy is a friendly Labrador Retriever looking for a loving home. He loves long walks and playing fetch.'
        };

        // Populate the template with animal details
        document.getElementById('register-date').textContent = mockAnimalData.registerDate;
        document.getElementById('species').textContent = mockAnimalData.species;
        document.getElementById('breed').textContent = mockAnimalData.breed;
        document.getElementById('gender').textContent = mockAnimalData.gender;
        document.getElementById('age').textContent = mockAnimalData.age;
        document.getElementById('size').textContent = mockAnimalData.size;
        document.getElementById('animal-name').textContent = mockAnimalData.name;
        document.getElementById('location').textContent = mockAnimalData.location;
        document.getElementById('description').textContent = mockAnimalData.description;
    </script> -->

    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>