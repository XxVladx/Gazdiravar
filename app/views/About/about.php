<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <title>About Gazdira Vár</title>
    <!-- Add the Bootstrap CSS link here -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

</head>

<body>
    <!-- Hero Start -->
    <div class="container-fluid" style="background-image: url('https://i.imgur.com/KEb6zWy.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black" style="font-family: 'Open Sans', sans-serif; font-size: 50px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">About The Team</h2>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <h2 class="display-5 mb-0">About us – The Team that made this project a reality!</h2>

            <p class="mb-4"><strong>Zsofia Orszagh</strong> is the President of Consultation SOS who initiated this project from the get go. She has been helping organizations in the past on a volunteer basis for many years, but with the pandemic in 2020 her focus completely shifted to the ones who needed support due to lack of funding and/or close to having their doors closed.</p>

            <p class="mb-4">As she has been surrounded with animals all her life and being an animal lover herself, helping animal shelters that had to shut down for over a year due to the pandemic was the perfect choice to give back to the community. So major support started during Winter 2020 via her company to reach out to those in need to help first with fundraising, promotion, graphic design, and web design and all of that being offered free of charge.</p>

            <p class="mb-4">Beside helping organizations in many ways, what she envisioned for <strong>Gazdira Vár</strong> to be is a platform where animals waiting to be adopted may be posted, emphasis given to those animals who have been in shelters for years, having educational and fun materials available to learn about how to take care of animals, emphasizing the importance of adopting animals in need and spreading the word about animal rescue organizations who need your support locally.</p>

            <p class="mb-4">Her big dream was to connect shelters in different locations across the world to help each other when animals have difficulty to get adopted in one area. This dream actually became a reality during the Autumn of 2021 when she has made connections with shelters in Iran. Feel free to read more about our collaboration <a href="#volunteer-form">here</a>.</p>

            <p class="mb-4">A BIG thank you to all the rescue organizations and individuals we are collaborating with each and every day!</p>

            <p class="mb-4">We are very grateful for everyone who has contributed to this project in one way or another. Without you, this would not have been possible! Together we are making a difference!</p>

            <p class="mb-4">Would you like to join us to help us with what we do? <a href="#volunteer-form">Click here</a> to fill out our volunteer form.</p>
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
                                <h2 class="display-5 mb-0">Join Us as a Volunteer</h2>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message (optional):</label>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Tell us more about how you'd like to help"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>