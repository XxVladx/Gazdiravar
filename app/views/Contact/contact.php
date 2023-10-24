<!DOCTYPE html>
<html lang="en">
<?php require APPROOT . '/views/includes/header.php'; ?>

<head>
    <meta charset="utf-8">
    <title>Mini Menedék Madaras</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/contact.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>

<body>
    <div class="header-section">
        <h2 class="header-title">Contact Us</h2>
    </div>

    <div class="container mt-5">
        <div class="volunteer-section">
            <h1>Volunteer with Gazdiravar!</h1>
            <p>There are many ways you can help us contribute to finding homes for animals at shelters. For more details, visit our <a href='/Gazdiravar/Volunteer'>Volunteer Page</a>.</p>
        </div>
    </div>

    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card contact-form">
                    <div class="card-body">
                        <form action="" method="post">
                            <h3>Send a Message</h3>
                            <div class="form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                            <div class="form-group">
                                <label for="eaddress">Email Address:</label>
                                <input type="email" class="form-control" id="eaddress" name="eaddress">
                            </div>
                            <div class="form-group">
                                <label for="tele">Upload Image</label>
                                <button class="form-control" id="tele" name="tele">Browse</button>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="over18">Captcha</label>
                                <select class="form-control" id="over18" name="over18">
                                    <option value="yes">I am over 18 years old</option>
                                    <option value="no">I am under 18 years old</option>
                                </select>
                            </div>
                            <div>
                                <a href='/Gazdiravar/Volunteer'><button type="submit" class="btn btn-primary" name="addVolunteer" onclick="openEmailClient()">Submit</button></a>
                            </div>
                        </form>
                        <script>
                            function openEmailClient() {
                                const firstName = document.getElementById("fname").value;
                                const lastName = document.getElementById("lname").value;
                                const email = document.getElementById("eaddress").value;
                                const phone = document.getElementById("tele").value;
                                const over18 = document.getElementById("over18").value;
                                const message = document.getElementById("message").value;
                                const subject = "Message from Website";
                                const body = `First Name: ${firstName}%0D%0ALast Name: ${lastName}%0D%0AEmail: ${email}%0D%0APhone: ${phone}%0D%0AOver 18: ${over18}%0D%0AMessage: ${message}`;
                                const mailtoUrl = `mailto:g.angelika2001@gmail.com?subject=${subject}&body=${body}`;
                                window.location.href = mailtoUrl;
                            }
                        </script>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="social-media-icons">
                    <!--<h1>Contact Us</h1></br></br>-->
                    <a href="https://www.facebook.com/gazdiravar">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/gazdiravar">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/gazdiravar">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCpICqq2NxtQ-xUtTKwrmjRw">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@gazdiravar">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="public/javascript/contact.js"></script>
</body>

<?php //require APPROOT . '/views/includes/footer.php'; ?>

</html>
