<?php require_once('php/utilityFrontEnd.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="utf-8"/>
    <title>Medical Sangallo Fitness blog - TITOLO DELL'ARTICOLO</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!--Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <!-- CSS Files -->

    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/gradients.css"/>
    <link rel="stylesheet" href="css/player/YTPlayer.css"/>
    <link rel="stylesheet" href="css/prettyPhoto.css"/>
    <link rel="stylesheet" href="css/shortcodes.css"/>
    <!-- Theme Panel -->
    <link rel="stylesheet" href="theme-panel/theme_panel.css"/>
    <!-- Skin Colors -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/blue.css"/>

    <!-- End CSS Files -->

</head>

<body>


<!-- Page Loader -->
<section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</section>

<!-- Navigation -->
<section id="navigation" class="visible-nav white-nav">
    <!-- Navigation Inner -->
    <div class="nav-inner">
        <!-- Site Logo -->
        <div class="site-logo">
            <a href="#home" class="scroll logo">
                <!-- Your Logo -->
                <img src="images/logo_medical_sangallo.png" alt="logo"/>
            </a>
        </div><!-- End Site Logo -->
        <a class="mini-nav-button dark"><i class="fa fa-bars"></i></a>
        <!-- Navigation Menu -->
        <div class="nav-menu">
            <ul class="nav uppercase condensed bold">
                <li><a href="index.html" class="scroll">home</a></li>
                <li><a href="index.html#about" class="scroll">chi siamo</a></li>
                <li><a href="index.html#services" class="scroll">servizi</a></li>
                <li><a href="index.html#features" class="scroll">cosa facciamo</a></li>
                <li><a href="index.html#team" class="scroll">team</a></li>
                <li class="dropdown-toggle nav-toggle active"><a class="scroll">blog<b data-toggle="dropdown"
                                                                                       class="caret"></b></a>
                    <!-- DropDown Menu -->
                    <ul class="dropdown-menu uppercase gray-border">
                        <li><a href="blog_fitness.php">Fitness</a></li>
                        <li><a href="blog_fisioterapia.php">Fisioterapia</a></li>
                        <li><a href="blog_riabilitazione.php">Riabilitazione</a></li>
                    </ul><!-- End DropDown Menu -->
                </li>
                <li><a href="index.html#contact" class="scroll">contatti</a></li>
            </ul>
        </div><!-- End Navigation Menu -->
    </div><!-- End Navigation Inner -->
</section><!-- End Navigation Section -->

<?php
if (!isset($_GET['id'])) {
    header("Location: errorPage.html");
}
$id = $_GET['id'];
getArticoloForPage($id);
?>


<!-- Footer -->
<footer class="footer">
    <!-- Your Company Name -->
    <h2 class="company-name condensed uppercase white bold">MEDICAL SANGALLO</h2>
    <!-- Copyright -->
    <p class="copyright normal">© 2016 Tutti i diritti Riservati. Designed by <a href="http://giannitoniolo.it"
                                                                                 target="_blank" class="white">GTD</a>
    </p>
</footer><!-- End Footer -->


<!-- JS Files -->

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/modernizr-latest.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.superslides.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.slabtext.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<!-- Theme Panel JS -->
<script type="text/javascript" src="theme-panel/theme-panel.js"></script>

<!-- End JS Files -->

</body>

</html>
