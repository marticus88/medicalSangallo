<?php require_once('php/utilityFrontEnd.php'); ?>
<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="utf-8"/>
    <title>Medical Sangallo</title>
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
    <link rel="stylesheet" href="css/prettyPhoto.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/gradients.css"/>
    <link rel="stylesheet" href="css/player/YTPlayer.css"/>
    <!-- Theme Panel -->
    <link rel="stylesheet" href="theme-panel/theme_panel.css"/>
    <!-- Skin Colors -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/green.css"/>

    <!-- End CSS Files -->

</head>

<body>


<!-- Page Loader -->
<section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</section>


<!-- Navigation -->
<section id="navigation" class="not-visible-nav white-nav">
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
                <li><a href="#home" class="scroll">home</a></li>
                <li><a href="#about" class="scroll">Chi siamo</a></li>
                <li><a href="#team" class="scroll">team</a></li>
                <li><a href="#prices" class="scroll">Fitness</a></li>
                <li class="dropdown-toggle nav-toggle"><a href="blog.php" class="scroll">blog<b data-toggle="dropdown"
                                                                                                class="caret"></b></a>
                    <!-- DropDown Menu -->
                    <ul class="dropdown-menu uppercase gray-border">
                        <li><a href="blog_fitness.php">Fitness</a></li>
                        <li><a href="blog_fisioterapia.php">Fisioterapia</a></li>
                        <li><a href="blog_riabilitazione.php">Riabilitazione</a></li>
                    </ul><!-- End DropDown Menu -->
                </li>
                <li><a href="#contact" class="scroll">contatti</a></li>
            </ul>
        </div><!-- End Navigation Menu -->
    </div><!-- End Navigation Inner -->
    <section id="bb-top">

        <div class="inner no-padding">
            <!-- Your Text -->
            <p class="uppercase normal white blockquote">Medical sangallo! Resta in contatto con noi <a href="#contact"
                                                                                                        class="btn btn-success btn-sm"
                                                                                                        style="margin-bottom: 5px;">
                contattaci per un appuntamento gratuito</a></p>
        </div>

    </section><!-- End Blockquote Section -->
</section><!-- End Navigation Section -->


<!-- Home Section -->
<section id="home">
    <div id="slides" class="home parallax pattern-black">
        <div class="home-details">
            <!-- Your Logo -->
            <div class="logo">
                <img src="images/logo_medical_sangallo.png" alt="Logo" style="height: 80px;"/>
            </div>
            <div class="hometexts">
                <!-- Slide Texts -->
                <ul class="slide-text condensed">
                    <li class="hometext bold uppercase">Ogni infortunio è Un <span class="colored">opportunità</span>
                    </li>
                    <!-- <li class="hometext bold uppercase">da 18 anni<span class="colored"> professionalità e qualità</span></li> -->
                </ul>
            </div>
            <!-- Fixed Text -->
            <!-- <h1 class="fixed-text uppercase bold condensed">Una terapia che mette l'<span class="colored">individuo</span> al centro del <span class="colored">trattamento</span></h1> -->

            <!-- Bottom Arrow -->
            <a href="#about" class="home-arrow scroll uppercase bold">
                <img src="images/bottom-arrow.png" alt="bottom"/>
                <span>Cosa facciamo ?</span>
            </a>
        </div><!-- End Home Texts -->
    </div><!-- End Home Details -->
</section><!-- End Home Section -->


<!-- About -->
<section id="about" class="container waypoint">
    <div class="inner">
        <!-- Header -->
        <h1 class="header semibold dark">Da 18 anni presente sul territorio si avvale <br/> di professionisti in<span
                class="colored"> vari specialità</span></h1>
        <!-- Description -->
        <!-- <h4 class="h-desc">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and by the <span class="colored bold">charms</span>
        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain </h4> -->
        <!-- Boxes -->
        <div class="boxes">
            <div class="col-xs-1"></div>
            <!-- Box 1 -->
            <div class="col-xs-2 about-box animated" data-animation="fadeIn" data-animation-delay="100">
                <a class="about-icon">
                    <i class="fa fa-heart "></i>
                </a>
                <p class="uppercase normal about-head">Riabilitazione integrata</p>
                <p class="light about-text">La riabilitazione integrata si basa sul tipo di dolore, sulle
                    caratteristiche del paziente, sulle sue aspettative e sui suoi obiettivi, a breve e a lungo
                    termine</p>
            </div>

            <!-- Box 2 -->
            <div class="col-xs-2 about-box animated" data-animation="fadeIn" data-animation-delay="300">
                <a class="about-icon">
                    <i class="fa fa-user-md"></i>
                </a>
                <p class="uppercase normal about-head">Riabilitazione Incontinenze</p>
                <p class="light about-text">La persona che soffre di incontinenza urinaria difficilmente trova dei
                    professionisti specializzati in questo ambito così delicato e particolare, sia nel servizio
                    sanitario che nelle strutture private.</p>
            </div>

            <!-- Box 3 -->
            <div class="col-xs-2 about-box animated" data-animation="fadeIn" data-animation-delay="500">
                <a class="about-icon">
                    <i class="fa fa-medkit"></i>
                </a>
                <p class="uppercase normal about-head">Idrokinesi Terapia</p>
                <p class="light about-text">L’acqua è il nostro elemento naturale. Fin dall’antichità Greci, Egizi e
                    Romani impararono a conoscere le proprietà igieniche, terapeutiche e curative.</p>
            </div>

            <!-- Box 4 -->
            <div class="col-xs-2 about-box animated" data-animation="fadeIn" data-animation-delay="700">
                <a class="about-icon">
                    <i class="fa fa-male"></i>
                </a>
                <p class="uppercase normal about-head">Professionalità Garantita</p>
                <p class="light about-text">Il nostro polispecialistico è presente sul territorio da ormai più di 18
                    anni e il nostro scopo è stato, fin dal principio, la cura della sua persona nella sua totalità.</p>
            </div>

            <!-- Box 5 -->
            <div class="col-xs-2 about-box animated" data-animation="fadeIn" data-animation-delay="500">
                <a class="about-icon">
                    <i class="fa fa-bolt" href="#prices"></i>
                </a>
                <p class="uppercase normal about-head">Fitness</p>
                <p class="light about-text">I nostri esperti porvvederanno a cucire su misura per te un programma in
                    grado farti raggiungere gli obiettivi nell migliori modo possibile.</p>
            </div>
            <div class="col-xs-1"></div>
        </div><!-- End Boxes -->
    </div><!-- End About Inner -->
</section><!-- End About Section -->


<!-- Video -->
<section id="video" class="pattern-black relative">

    <!-- Video Button -->
    <a href="#contact" class="video-button t-center scroll">
        <!-- Logo Span -->
        <span class="logo-icon-m">
				<!-- Your Logo -->
				<img src="images/logo_medical_sangallo.png" alt=""/>
			</span>
        <!-- Video Text -->
        <p class="video-text uppercase condensed bold white">
            Dubbi? Domande? Contattaci!
        </p>
    </a>

    <!-- Video -->
    <div id="P2" class="player video-container"
         data-property="{videoURL:'WhADBCZ8SQo',containment:'#video',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1}"></div>
    <!-- End Video -->

</section><!-- End Video Section -->

<!-- Blockquote -->
<section id="blockquote">

    <div class="inner no-padding">
        <!-- Your Text
        <p class="uppercase normal white blockquote "><input type="text" placeholder="iscriviti alla newsletter" style="color: black; text-align: center;" /> <a href="#contact" class="btn btn-success btn-lg"> Iscriviti</a></p>
          -->
        <form method="post" action="insertEmail.php">
            <div class="form-group">
                <p class="uppercase normal white blockquote ">
                    <input type="email" name="email" required="true" placeholder="iscriviti alla newsletter"
                           style="color: black; text-align: center;"/>
                    <button type="submit" class="btn btn-success btn-lg"> Iscriviti</button>
                </p>
            </div>
        </form>

    </div>

</section><!-- End Blockquote Section -->


<?php
getArticoloForHomePage();
?>


<section id="imgflut">
    <div class="img-flu1 img-flu pattern-black">
    </div><!-- End blog page tre Details -->
</section><!-- End section -->


<!-- Testimonials -->
<section class="testimonials parallax2">

    <div class="inner">

        <ul class="t-slides">

            <!-- Testimonial -->
            <li class="monial">
                <!-- Text -->
                <h1 class="uppercase bold condensed white">bravi mi sono trovato <span class="colored"> benissimo</span>
                    la prossima volta <span class="colored"> tornerò sicuramente</span> da loro.</h1>
                <!-- Name -->
                <p class="light uppercase">Gianni T.</p>
            </li>

            <!-- Testimonial -->
            <li class="monial">
                <!-- Text -->
                <h1 class="uppercase bold condensed white">Personale cortese e specializzato. <span class="colored">Ottima</span>
                    Terapia prima e dopo l'intervento.</h1>
                <!-- Name -->
                <p class="light uppercase">jacopo B.</p>
            </li>

        </ul>

    </div><!-- End Inner Div -->

</section><!-- End Testimonials Section -->

<!-- Team -->
<section id="team" class="container">

    <!-- Team Inner -->
    <div class="inner team">

        <!-- Header -->
        <h1 class="header light dark">Medical Sangallo Team</h1>

        <!-- Description -->
        <h4 class="h-desc dark">ALcuni dei nostri esperti che si prenderanno cura di voi <span class="dark bold">al meglio</span>
        </h4>


        <!-- Members -->
        <div class="team-members inner-details">

            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="0">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="images/team/1.jpg" alt=""/>
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name uppercase normal">Dott. Vincenzo DE CUPIS</h2>
                            <!-- Position -->
                            <h4 class="member-position uppercase normal">Medico</h4>
                            <!-- Description -->
                            <p class="member-description">Specialista in Ortopedia e Chirurgia Ortopedica - Primario
                                ortopedico II Divisione I.C.O.T. Latina.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Facebook -->
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <!-- Twitter -->
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <!-- Instagram -->
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <!-- Tumblr -->
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="100">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="images/team/2.jpg" alt=""/>
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name uppercase normal">Roberto FABBRINI</h2>
                            <!-- Position -->
                            <h4 class="member-position uppercase normal">Medico</h4>
                            <!-- Description -->
                            <p class="member-description">Medico Specialista in Ortopedia e Chirurgia Ortopedica.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Facebook -->
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <!-- Twitter -->
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <!-- Instagram -->
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <!-- Tumblr -->
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="images/team/3.jpg" alt=""/>
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name uppercase normal">Carmen PIRAINO</h2>
                            <!-- Position -->
                            <h4 class="member-position uppercase normal">Medico</h4>
                            <!-- Description -->
                            <p class="member-description">Medico Oculista.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Facebook -->
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <!-- Twitter -->
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <!-- Instagram -->
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <!-- Tumblr -->
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="300">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="images/team/4.jpg" alt=""/>
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name uppercase normal">Ennio Pacilio</h2>
                            <!-- Position -->
                            <h4 class="member-position uppercase normal">Medico</h4>
                            <!-- Description -->
                            <p class="member-description">Medico Fisiatra.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Facebook -->
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <!-- Twitter -->
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <!-- Instagram -->
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <!-- Tumblr -->
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="400">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="images/team/5.jpg" alt=""/>
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name uppercase normal">Massimo MISCUSI</h2>
                            <!-- Position -->
                            <h4 class="member-position uppercase normal">Medico</h4>
                            <!-- Description -->
                            <p class="member-description">Medico Specialista in Neurochirurgia.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Facebook -->
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <!-- Twitter -->
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <!-- Instagram -->
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <!-- Tumblr -->
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="500">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image">
                        <!-- Img -->
                        <img src="images/team/6.jpg" alt=""/>
                    </a>
                    <div class="member-details">
                        <div class="member-details-inner">
                            <!-- Name -->
                            <h2 class="member-name uppercase normal">Vigliano DE CUPIS</h2>
                            <!-- Position -->
                            <h4 class="member-position uppercase normal">Medico</h4>
                            <!-- Description -->
                            <p class="member-description">Fisioterapista e Osteopata con conoscenze di Terapia Manuale,
                                Posturale e Riabilitazione dei Disordini Muscoloscheletrici.</p>
                            <!-- Socials -->
                            <div class="socials">
                                <!-- Facebook -->
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <!-- Twitter -->
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <!-- Instagram -->
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <!-- Tumblr -->
                                <a href=""><i class="fa fa-tumblr"></i></a>
                            </div><!-- End Socials -->
                        </div> <!-- End Detail Inner -->
                    </div><!-- End Details -->
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Clear -->
            <div class="clear"></div>
        </div><!-- End Members -->
    </div><!-- End Team Inner -->
</section><!-- End Team Section -->

<section id="imgflut">
    <div class="img-flu2 img-flu pattern-black" style="background-size: cover;">
    </div><!-- End blog page tre Details -->
</section><!-- End section -->


<section id="prices" class="container">

    <div class="inner prices">

        <!-- Header -->
        <h1 class="header semibold dark">Servizio specializzato <span class="bold">Fitness</span></h1>

        <!-- Description -->
        <h4 class="h-desc">Recupera dal tuo infortunio, rimettiti in forma, preparati ad una gara con i nostri
            consulenti specializzati. I nostri preparatori grazie alla loro esperienza e alla loro preparazione ti
            contatteranno e insieme verrà stabilito
            un obiettivo e un programma che sia quanto più <span
                    class="colored bold">efficace funzionale e mirato</span> per raggiungere il tuo obiettivo al meglio
            e nel minor tempo possibile. </h4>

        <h4 class="h-desc"><span class="colored bold">Scegli il programma a te piu adatto</span></h4>


        <!-- Tables -->
        <ul class="tables">

            <!-- Table -->
            <li class="col-xs-3 pricing-table relative animated" data-animation="fadeIn" data-animation-delay="300">
                <!-- Table Inner -->
                <div class="table-inner">
                    <!-- Table Top -->
                    <div class="price-table-top">
                        <!-- Header -->
                        <h3 class="uppercase bold white absolute">starter</h3>
                        <!-- Image Link -->
                        <a class="price-table-img pattern-grid">
                            <!-- Your Image -->
                            <img src="images/tables/1.jpg" alt=""/>
                        </a>
                        <!-- Price Circle -->
                        <a class="price-circle absolute dark">
                            <!-- Price -->
                            <p class="price playball bigger">€19</p>
                            <!-- Timely -->
                            <p class="timely italic normal">al mese</p>
                        </a>
                    </div><!-- End Table Top -->
                    <!-- Price Plans -->
                    <ul class="price-plans">
                        <li class="price-plan uppercase bold italic"><span class="colored">5 ore</span> settimanali</li>
                        <li class="price-plan uppercase bold italic"><span class="colored">2 mesi</span> di supporto
                        </li>
                        <li class="price-plan uppercase bold italic"><span class="colored">10</span> schede di
                            allenamento
                        </li>
                    </ul><!-- End Price Plans -->
                    <!-- Buy Now Button -->
                    <a href="#" class="price-buy-now uppercase semibold white">acquista</a>
                </div><!-- End Table Inner -->
            </li><!-- End Table -->


            <!-- Table -->
            <li class="col-xs-3 pricing-table relative animated" data-animation="fadeIn" data-animation-delay="300">
                <!-- Table Inner -->
                <div class="table-inner">
                    <!-- Table Top -->
                    <div class="price-table-top">
                        <!-- Header -->
                        <h3 class="uppercase bold white absolute">standart</h3>
                        <!-- Image Link -->
                        <a class="price-table-img pattern-grid">
                            <!-- Your Image -->
                            <img src="images/tables/2.jpg" alt=""/>
                        </a>
                        <!-- Price Circle -->
                        <a class="price-circle absolute dark">
                            <!-- Price -->
                            <p class="price playball bigger">€39</p>
                            <!-- Timely -->
                            <p class="timely italic normal">al mese</p>
                        </a>
                    </div><!-- End Table Top -->
                    <!-- Price Plans -->
                    <ul class="price-plans">
                        <li class="price-plan uppercase bold italic"><span class="colored">5 ore</span> settimanali</li>
                        <li class="price-plan uppercase bold italic"><span class="colored">2 mesi</span> di supporto
                        </li>
                        <li class="price-plan uppercase bold italic"><span class="colored">10</span> schede di
                            allenamento
                        </li>
                    </ul><!-- End Price Plans -->
                    <!-- Buy Now Button -->
                    <a href="#" class="price-buy-now uppercase semibold white">acquista</a>
                </div><!-- End Table Inner -->
            </li><!-- End Table -->


            <!-- Table -->
            <li class="col-xs-3 pricing-table relative animated" data-animation="fadeIn" data-animation-delay="300">
                <!-- Table Inner -->
                <div class="table-inner">
                    <!-- Table Top -->
                    <div class="price-table-top">
                        <!-- Header -->
                        <h3 class="uppercase bold white absolute">professional</h3>
                        <!-- Image Link -->
                        <a class="price-table-img pattern-grid">
                            <!-- Your Image -->
                            <img src="images/tables/3.jpg" alt=""/>
                        </a>
                        <!-- Price Circle -->
                        <a class="price-circle absolute dark">
                            <!-- Price -->
                            <p class="price playball bigger">€59</p>
                            <!-- Timely -->
                            <p class="timely italic normal">al mese</p>
                        </a>
                    </div><!-- End Table Top -->
                    <!-- Price Plans -->
                    <ul class="price-plans">
                        <li class="price-plan uppercase bold italic"><span class="colored">5 ore</span> settimanali</li>
                        <li class="price-plan uppercase bold italic"><span class="colored">2 mesi</span> di supporto
                        </li>
                        <li class="price-plan uppercase bold italic"><span class="colored">10</span> schede di
                            allenamento
                        </li>
                    </ul><!-- End Price Plans -->
                    <!-- Buy Now Button -->
                    <a href="#" class="price-buy-now uppercase semibold white">acquista</a>
                </div><!-- End Table Inner -->
            </li><!-- End Table -->


            <!-- Table -->
            <li class="col-xs-3 pricing-table relative animated" data-animation="fadeIn" data-animation-delay="300">
                <!-- Table Inner -->
                <div class="table-inner">
                    <!-- Table Top -->
                    <div class="price-table-top">
                        <!-- Header -->
                        <h3 class="uppercase bold white absolute">enterprise</h3>
                        <!-- Image Link -->
                        <a class="price-table-img pattern-grid">
                            <!-- Your Image -->
                            <img src="images/tables/4.jpg" alt=""/>
                        </a>
                        <!-- Price Circle -->
                        <a class="price-circle absolute dark">
                            <!-- Price -->
                            <p class="price playball bigger">€79</p>
                            <!-- Timely -->
                            <p class="timely italic normal">al mese</p>
                        </a>
                    </div><!-- End Table Top -->
                    <!-- Price Plans -->
                    <ul class="price-plans">
                        <li class="price-plan uppercase bold italic"><span class="colored">5 ore</span> settimanali</li>
                        <li class="price-plan uppercase bold italic"><span class="colored">2 mesi</span> di supporto
                        </li>
                        <li class="price-plan uppercase bold italic"><span class="colored">10</span> schede di
                            allenamento
                        </li>
                    </ul><!-- End Price Plans -->
                    <!-- Buy Now Button -->
                    <a href="#" class="price-buy-now uppercase semibold white">acquista</a>
                </div><!-- End Table Inner -->
            </li><!-- End Table -->

            <!-- Clear -->
            <li class="clear"></li>
        </ul><!-- End Tables -->

    </div><!-- End Inner -->

</section><!-- End Prices Section -->

<!-- Fun Acts -->
<section id="fun-acts" class="container">

    <div class="inner fun-acts">

        <!-- Header -->
        <h1 class="header semibold dark">Qualche numero per conoscerci meglio e per toglierti veramente proprio ogni
            <span class="colored">dubbio</span>.</h1>

        <!-- Description -->
        <h4 class="h-desc">E sapere qualche fatto <span class="colored bold">Curioso </span> su di noi :) </h4>

        <!-- Company Facts -->
        <div class="facts">


            <!-- Factor -->
            <div class="col-xs-3 fact">
                <!-- Fact Left -->
                <a class="fact-icon">
                    <!-- Fact Icon -->
                    <i class="fa fa-briefcase"></i>
                </a>
                <!-- Factor Area -->
                <div class="fact-number" data-perc="630">
                    <!-- Factor -->
                    <h1 class="factor light"></h1>
                    <!-- Factor Description -->
                    <h3 class="light uppercase">Visite Effettuate</h3>
                </div><!-- End Factor Area -->
            </div><!-- End Factor -->


            <!-- Factor -->
            <div class="col-xs-3 fact">
                <!-- Fact Left -->
                <a class="fact-icon">
                    <!-- Fact Icon -->
                    <i class="fa fa-pagelines"></i>
                </a>
                <!-- Factor Area -->
                <div class="fact-number" data-perc="250">
                    <!-- Factor -->
                    <h1 class="factor"></h1>
                    <!-- Factor Description -->
                    <h3 class="light uppercase">Clienti soddisfatti</h3>
                </div><!-- End Factor Area -->
            </div><!-- End Factor -->


            <!-- Factor -->
            <div class="col-xs-3 fact">
                <!-- Fact Left -->
                <a class="fact-icon">
                    <!-- Fact Icon -->
                    <i class="fa fa-comments"></i>
                </a>
                <!-- Factor Area -->
                <div class="fact-number" data-perc="320">
                    <!-- Factor -->
                    <h1 class="factor light"></h1>
                    <!-- Factor Description -->
                    <h3 class="light uppercase">ore di aggiornamento</h3>
                </div><!-- End Factor Area -->
            </div><!-- End Factor -->


            <!-- Factor -->
            <div class="col-xs-3 fact">
                <!-- Fact Left -->
                <a class="fact-icon">
                    <!-- Fact Icon -->
                    <i class="fa fa-coffee"></i>
                </a>
                <!-- Factor Area -->
                <div class="fact-number" data-perc="840">
                    <!-- Factor -->
                    <h1 class="factor light"></h1>
                    <!-- Factor Description -->
                    <h3 class="light uppercase">Caffè offerti</h3>
                </div><!-- End Factor Area -->
            </div><!-- End Factor -->

            <!-- Clear -->
            <div class="clear"></div>
        </div><!-- End Company Facts -->

    </div><!-- End Fun Acts Inner -->

</section><!-- End Fun Acts Section -->

<!-- Google Map Section -->
<section id="map" class="container close-map">
    <!-- Open/Close Button -->
    <a id="map-button" class="google-map-big-button uppercase bold condensed white scroll close-map-button" href="#map">Dove
        siamo ? Trovaci su Google Maps <i class="fa fa-caret-down"></i></a>
    <!-- Google Map Script -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9bu3TjirfPqwBnMQ_Epk6wPlfGiMnhjk"></script>
    <!-- Google Map -->
    <div id="google-map"></div>
</section><!-- End Google Map Section -->


<!-- Contact Section -->
<section id="contact" class="container parallax5">
    <!-- Contact Inner -->
    <div class="inner contact">

        <!-- Header -->
        <h1 class="header semibold white">Restiamo in <span class="extrabold">Contatto</span></h1>

        <!-- Description -->
        <h4 class="h-desc white contact-text">Non eistare, non dubitare, contattaci. Domande? Dubbi? Vuoi delle
            informazioni? Chiedici quello che vuoi </h4>

        <!-- Form Area -->
        <div class="contact-form">
            <!-- Form -->
            <form id="contact-us" method="post" action="php/mail.php">
                <!-- Left Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form light" placeholder="Nome"/>
                    <!-- Email -->
                    <input type="email" name="mail" id="mail" required="required" class="form light"
                           placeholder="Email"/>
                    <!-- Subject -->
                    <input type="text" name="subject" id="subject" required="required" class="form light"
                           placeholder="Oggetto"/>
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">
                    <!-- Message -->
                    <textarea name="message" id="message" class="form textarea light"
                              placeholder="testo del messaggio"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="form-btn light">Invia Messaggio</button>
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>

            <!-- Your Mail Message -->
            <div class="mail-message-area">
                <!-- Message -->
                <div class="alert gray-bg mail-message not-visible-message">
                    <strong>Grazei !</strong> La tua email è stata inviata.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
    </div><!-- End Inner -->
</section><!-- End Contact Section -->


<!-- Site Socials and Address -->
<section id="site-socials" class="no-padding white-bg">
    <div class="site-socials inner no-padding">
        <!-- Socials -->
        <div class="socials">
            <!-- Facebook -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-facebook"></i>
            </a>
            <!-- Twitter -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-twitter"></i>
            </a>
            <!-- Google Plus -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-google-plus"></i>
            </a>
            <!-- Linkedin -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-linkedin"></i>
            </a>
            <!-- Instagram -->
            <a href="#" class="social">
                <i class="fa fa-instagram"></i>
            </a>
            <!-- Vimeo -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-vimeo-square"></i>
            </a>
        </div>
        <!-- Adress, Mail -->
        <div class="address">
            <!-- Phone Number, Mail -->
            <p> 331.4015325 - 06.9808080 & <a href="mailto:info@giannitoniolo.it" class="bold dark">medicalsangallo@gmail.com</a>
            </p>
            <!-- Adress -->
            <p>Via Belvedere, 4, <span class="bold colored">Anzio (Rm)</span></p>
            <!-- Top Button -->
            <a href="#home" class="scroll top-button">
                <i class="fa fa-angle-double-up"></i>
            </a>
        </div><!-- End Adress, Mail -->
    </div><!-- End Inner -->
</section><!-- End Site Socials and Address -->


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
<!-- <script type="text/javascript" src="theme-panel/theme-panel.js"></script> -->

<!-- End JS Files -->

</body>

</html>
