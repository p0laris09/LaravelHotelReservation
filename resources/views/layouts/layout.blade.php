<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Basta Kape's Five Star Hotel</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/slick.css"/>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
        
        <main>
            @yield('content')
        </main>
        

        <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h4 class="text-white mb-3"><a href="index.php">Basta</a> Kape</h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2024 <strong>Basta Kape</strong></p>
                    <br>
                    <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Basta Kape Team</a></p>
                </div>

                <div class="col-lg-5 col-8">
                    <h5 class="text-white mb-3">Sitemap</h5>

                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="profile.php" class="footer-menu-link">Profile</a></li>

                        <li class="footer-menu-item"><a href="contacts.php" class="footer-menu-link">Contact</a></li>

                        <li class="footer-menu-item"><a href="reservation.php" class="footer-menu-link">Reservation</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-4">
                    <h5 class="text-white mb-3">Social</h5>

                    <ul class="social-icon">

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-skype"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer> 
            <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>