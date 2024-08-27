<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="public/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">

    <title><?php echo SITENAME; ?></title>
	
</head>

<body>

    <footer class="footer">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-6">
                    <h3>Enjoy what we do?</h3>
                    <h5>Why not Subscribe to stay up-to-date with us!</h5>
                    <ul class="list-unstyled">
                        <li>- Learn about new animals added to the Website</li>
                        <li>- Tips of the season, health, and animal keeping tips</li>
                        <li>- Downloadable background images and posters</li>
                        <li>- And more!</li>
                    </ul>
					
                    <form action="#" method="post" class="form-inline justify-content-center mt-3">
                       <div class="form-group" >            
                         <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" style="text-align: center"></div>
                       </div>
					   <div class="form-group mx-sm-3 mb-2">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your email address" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 custom-btn">SUBSCRIBE!</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <h1 class="header2">Gazdira Vár</h1>
                    <p class="text-Copy">Website created by <a class="link-SOS" href="https://www.consultationsos.com">Consultation SOS</a><br> © 2023 by Consultation SOS. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="public/javascript/footer.js"></script>
</body>

</html>