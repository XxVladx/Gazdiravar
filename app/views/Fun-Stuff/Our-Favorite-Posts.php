<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/ourfavoriteposts.css">
</head>

<body>
    <div class="container-fluid banner" style="background-image: url('images/OurFavoritePosts/U6Rt7OC.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-black slide-in" id="text-title1" style="font-weight: 500; -webkit-text-stroke: 1px white;">Our Favorite Posts</h2>
                    <hr>
                    <h2 class="text-black slide-in" style="font-size: 30px; -webkit-text-stroke: 1px white; text-fill-color: transparent;">Helping
                        abandonned animals finding homes</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card slide-in">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Please read before judging</h3>
                        <p class="card-text">After a long deliberation, and thinking it through, I have decided on what I will do, please don’t judge me! My dogs simply take up too much time, so I don’t have any time left for cleaning the household in addition to daily play, snuggle, feeding and caring for them.</p>
                        <p class="card-text">This was a difficult decision but I had to prioritize what is important in order to move forward. You can’t live a full life having to neglect something due to lack of time.</p>
                        <p class="card-text">So, I’d like to give away the following:</p>
                        <ul class="list-group custom-item">
                            <li class="list-group-item custom-item">My vacuum cleaner</li>
                            <li class="list-group-item custom-item">Mop towel</li>
                            <li class="list-group-item custom-item">Sponge</li>
                            <li class="list-group-item custom-item">Dishwashing liquid</li>
                            <li class="list-group-item custom-item">Window washing liquid</li>
                            <li class="list-group-item custom-item">Dust mop</li>
                            <li class="list-group-item custom-item">Laundry rack</li>
                            <li class="list-group-item custom-item">Various cleaning products</li>
                        </ul>
                    </div>
                </div>
                <div class="alert alert-info custom-alert slide-in">
                    <p class="mb-0">p.s. I could never ever part from my dogs, even if I get tired sometimes. They are my life.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card custom-cards slide-in">
                    <div class="card-body">
                        <h5 class="card-title text-center">Ghost</h5>
                        <img src="images/OurFavoritePosts/Ghost.png" class="card-img-top" alt="Ghost Image">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card custom-cards slide-in">
                    <div class="card-body">
                        <h5 class="card-title text-center">Renovation</h5>
                        <img src="images/OurFavoritePosts/Renovation.png" class="card-img-top" alt="Renovation Image">
                        <h5 class="text-center para-text">Tip of the day</h5>
                        <p class="para-text text-center">If you are pouring concrete close to a pond that has ducks, it’s not a good idea to let the whole crew go to lunch at the same time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card custom-cards slide-in">
                    <div class="card-body">
                        <h5 class="card-title text-center">Art in the Sand</h5>
                        <img src="images/OurFavoritePosts/Art In Sand.png" class="card-img-top" alt="Art in the Sand Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 offset-md-3">
        <div class="card custom-card slide-in">
            <div class="card-body" style="background-color: lightgray;">
                <h5 class="card-title text-center">Send us something worthwhile to share</h5>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group txt-form">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group txt-form">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group txt-form">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div><br>
                    <div class="form-group txt-form">
                        <label for="image">Upload Image</label><br>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                        <small class="form-text text-muted">Upload an image file</small>
                    </div><br>
                    <div class="form-group txt-form">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="authorization1" required>
                        <label class="form-check-label label-1" for="authorization1">I authorize Gazdiravar to share this on their website</label><br>
                        <input type="checkbox" class="form-check-input" id="authorization2" required>
                        <label class="form-check-label label-2" for="authorization2">I authorize Gazdiravar to share this on their social media platforms.</label>
                    </div>
                    <button type="submit" class="btn btn-primary custom-btn">Submit</button>
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

    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>