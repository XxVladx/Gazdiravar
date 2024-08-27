<!DOCTYPE html>
<html lang="en">
<?php 
include_once __DIR__ . '/app/config/config.php';
include_once __DIR__ . '/app/views/includes/header.php';?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Opportunities at Gazdira Vár</title>
    <link rel="stylesheet" type="text/css" href="public/css/volunteer.css">

    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="heading">
		    <br>
			<br>
			<br>
			<br>
            <h1>Volunteer at Gazdira Vár</h1>
            <h2>Helping abandoned animals finding homes</h2>
        </div>

        <div class="job-description">
            <h2 class="job-title">Social Media Content Creator</h2>
            <p>We are looking for volunteer Content Creators to write, design, and publish various types of
                pieces for our organization’s social media channels. Your responsibilities will include producing
                marketing copy to promote various animal shelters so that we can help them find homes for
                animals and promoting our services to animal rescue organizations. You will also monitor
                activity and engagement (e.g. comments and shares) of our social media posts to see which
                ones are working, are more or less successful in terms of reach and adjust our promotions
                accordingly. Currently we have a Facebook, Twitter, Instagram & YouTube account. However,
                we might also look at other options as well.</p>
            <!-- Include all responsibilities and other information here -->
        </div>

        <!-- Repeat for each volunteer opportunity -->
        <!-- ... -->

        <div class="job">
            <h2>Administration</h2>
            <div class="job-details">
                <p>Join our team to manage website content and collaborate with animal shelters. Work remotely with flexible part-time hours and make a difference!</p>
            </div>
            <label>Part-time hours:</label>
            <div class="job-details">
                <p>up to 5 hrs per week (unless you have more availability)</p>
            </div>
            <label>Job Types:</label>
            <div class="job-details">
                <p>Part-time, Volunteer (without remuneration)</p>
            </div>
            <label>Work Remotely:</label>
            <div class="job-details">
                <p>Yes</p>
            </div>
        </div>

        <!-- Job Section -->
        <div class="job">
            <h2>Market Research</h2>
            <div class="job-details">
                <p>Contribute to our mission by analyzing potential opportunities for growth and impact. Remote and flexible volunteer position available.</p>
            </div>
            <label>Part-time hours:</label>
            <div class="job-details">
                <p>up to 5 hrs per week (unless you have more availability)</p>
            </div>
            <label>Job Types:</label>
            <div class="job-details">
                <p>Part-time, Volunteer (without remuneration)</p>
            </div>
            <label>Work Remotely:</label>
            <div class="job-details">
                <p>Yes</p>
            </div>
        </div>

        <!-- Job Section -->
        <div class="job">
            <h2>Grant Researcher & Writer</h2>
            <div class="job-details">
                <p>Help secure funding for our cause by researching grants and writing applications. Join us as a remote volunteer for up to 5 hours a week.</p>
            </div>
            <label>Part-time hours:</label>
            <div class="job-details">
                <p>up to 5 hrs per week (unless you have more availability)</p>
            </div>
            <label>Job Types:</label>
            <div class="job-details">
                <p>Part-time, Volunteer (without remuneration)</p>
            </div>
            <label>Work Remotely:</label>
            <div class="job-details">
                <p>Yes</p>
            </div>
        </div>

        <!-- Job Section -->
        <div class="job">
            <h2>Videography & Video Editing</h2>
            <div class="job-details">
                <p>Use your video creation and editing skills to promote animal shelters and pets needing homes. Be part of our remote volunteer team.</p>
            </div>
            <label>Part-time hours:</label>
            <div class="job-details">
                <p>up to 5 hrs per week (unless you have more availability)</p>
            </div>
            <label>Job Types:</label>
            <div class="job-details">
                <p>Part-time, Volunteer (without remuneration)</p>
            </div>
            <label>Work Remotely:</label>
            <div class="job-details">
                <p>Yes</p>
            </div>
        </div>

        <!-- Job Section -->
        <div class="job">
            <h2>Translators</h2>
            <div class="job-details">
                <p>We need volunteers fluent in multiple languages to help translate our content. Remote and flexible hours.</p>
            </div>
            <label>Part-time hours:</label>
            <div class="job-details">
                <p>up to 5 hrs per week (unless you have more availability)</p>
            </div>
            <label>Job Types:</label>
            <div class="job-details">
                <p>Part-time, Volunteer (without remuneration)</p>
            </div>
            <label>Work Remotely:</label>
            <div class="job-details">
                <p>Yes</p>
            </div>
            <label>Languages</label>
            <div class="job-details">
                <ul>
                    <li>From English to French</li>
                    <li>From English to German</li>
                    <li>From French to English</li>
                    <li>From French to German</li>
                    <li>From French to Hungarian</li>
                    <li>From Hungarian to English</li>
                    <li>From Hungarian to French</li>
                    <li>From Hungarian to German</li>
                    <li>From German to Hungarian</li>
                    <li>From German to English</li>
                    <li>From German to French</li>
                    <li>From English to Spanish</li>
                    <li>From French to Spanish</li>
                    <li>From Spanish to English</li>
                    <li>From Spanish to French</li>
                    <li>From Spanish to Hungarian</li>
                    <li>From Spanish to German</li>
                    <li>From Hungarian to Spanish</li>
                    <li>From German to Spanish</li>
                </ul>
            </div>
        </div>
        <a href="contact.php" class="apply-now-btn">Apply Now</a>
    </div>
    <!-- Job Section -->

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

</body>

<?php require APPROOT . '/views/includes/footer.php'; ?>

</html>