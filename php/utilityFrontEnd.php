<?php

$database = "administrator/database/medicalSangallo.db";
$indirizzo = "http://www.marticus88.altervista.org/medicalSangallo/";

function insertNewsletter($email)
{
    global $database;
    $db = new SQLite3($database);
    $query = 'insert into newsletter (email) values (\'' . $email . '\')';
    $db->exec($query);
    $db->close();
}

function printInEvidenza()
{
    $results = getInEvidenza();
    while ($articolo = $results->fetchArray()) {
        printArticolo($articolo);
    }
}

function getInEvidenza()
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where homepage=1 ORDER BY posizione';
    $results = $db->query($query);
    return $results;

}

/************************* FISIOTERAPIA *****************************/

function printFisioterapia()
{
    $results = getArticoliFisioterapia();

    while ($articolo = $results->fetchArray()) {
        printArticolo($articolo);
    }
}

function getArticoliFisioterapia()
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where categoria=\'Fisioterapia\'';
    $results = $db->query($query);
    return $results;

}

/************************* RIABILITAZIONE *****************************/


function printRiabilitazione()
{
    $results = getArticoliRiabilitazione();

    while ($articolo = $results->fetchArray()) {
        printArticolo($articolo);
    }
}

function getArticoliRiabilitazione()
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where categoria=\'Riabilitazione\'';
    $results = $db->query($query);
    return $results;

}

/************************* FITNESS ***************************************/

function getArticoliFitness()
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where categoria=\'Fitness\'';
    $results = $db->query($query);
    return $results;

}

function printFitness()
{
    $results = getArticoliFitness();
    while ($articolo = $results->fetchArray()) {
        printArticolo($articolo);
    }
}

function printArticolo($articolo)
{
    echo "<div class=\"post animated\" data-animation=\"fadeIn\" data-animation-delay=\"100\">";
    if($articolo['pathImg']!= '') {
        echo "<div class=\"relative fullwidth flex\">";
        echo "<ul class=\"post-slides\">";
        echo "<li class=\"post-slide\">";
        echo "<img src=\"images/blog/" . $articolo['pathImg'] . "\" alt=\"\"/>";
        echo "</li>";
        echo "<li class=\"clear\"></li>";
        echo "</ul>";
        echo "</div>";
    }

    echo "<div class=\"post-inner\">";
    echo "<div class=\"post-details\">";
    echo "<h1 class=\"normal post-header\">";
    echo $articolo['titolo'];
    echo "</h1>";
    echo "<p class=\"post-read\">";
    echo $articolo['sottotitolo'];
    echo "</p>";
    echo "<p class=\"t-right\">";
    $link = "blog_page.php?id=" . $articolo['id'] . "&titolo=" . str_replace(' ', '-',$articolo['titolo']);
    echo "<a href=\"" . $link . "\" class=\"more-button light dark\">Scopri di più<i class=\"fa fa-arrow-circle-o-right gray1\"></i></a>";
    echo "</p>";
    echo "</div>";
    echo "<div class=\"clear\"></div>";
    echo "</div>";
    echo "</div>";
}

function getArticoloForPage($id)
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where id=' . $id;
    echo $query;

    $results = $db->query($query);
    while ($articolo = $results->fetchArray()) {
        printArticoloForPage($articolo);
    }
}

function printArticoloForPage($articolo)
{
    printHeaderArticolo($articolo['categoria']);
    echo "<section id=\"blog\" class=\"container\">";
    echo "<div class=\"inner blog\">";
    echo "<div class=\" posts\">";
    echo "<div class=\"post animated\" data-animation=\"fadeIn\" data-animation-delay=\"100\">";

    if($articolo['pathImg']!= ''){
        echo "<div class=\"relative fullwidth flex\">";
        echo "<ul class=\"post-slides\">";
        echo "<li class=\"post-slide\">";
        echo "<img src=\"images/blog/" . $articolo['pathImg'] . "\" alt=\"\"/>";
        echo "</li>";
        echo "<li class=\"clear\"></li>";
        echo "</ul>";
        echo "</div>";
    }
    echo "<div class=\"post-inner\">";
    echo "<div class=\"post-details\">";
    echo "<h1 class=\"normal post-header\">";
    echo $articolo['titolo'];
    echo "</h1>";
    echo "<p class=\"post-read\">";
    echo $articolo['testo'];
    echo "</p>";
    echo "</div>";
    echo "<div class=\"clear\"></div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"clear\"></div>";
    echo "</div>";
    echo "</section>";


    echo "<section id=\"blog\" class=\"container\">";
    echo "<div class=\"inner blog\">";
    echo "<div class=\" posts\">";
    echo "<div class=\"post animated\" data-animation=\"fadeIn\" data-animation-delay=\"100\">";
    echo "<div class=\"relative fullwidth flex\">";
    printSocialFacebook($articolo);
    printSocialTwitter();
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</section>";
}

function printHeaderArticolo($categoria)
{
    echo "<section class=\"page_header container waypoint\">";
    echo "<div class=\"page_header_inner\">";
    echo "<h1 class=\"page_head normal t-center\">Medical Sangallo, il Blog</h1>";
    echo "<p class=\"light t-center\">" . $categoria . "</p>";
    echo "</div>";
    echo "</section>";
}

function printSocialTwitter()
{
    echo "<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-text=\"Medical Sangallo\" data-size=\"large\" data-dnt=\"true\">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>";
}

function printSocialFacebook($articolo)
{
    echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.8&appId=460948520727040\";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>";

    global $indirizzo;
    $link = $indirizzo;
    $link .= "blog_page.php?id=" . $articolo['id'] . "&titolo=" . str_replace(' ', '_',$articolo['titolo']);

    echo "<div class=\"fb-like\" data-href=\"" . $link . "\" data-layout=\"standard\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>";
}

function getArticoloForHeaderFacebook($id)
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where id=' . $id;
    echo $query;

    $results = $db->query($query);
    while ($articolo = $results->fetchArray()) {
        printHedearFacebook($articolo);
    }

}

function printHedearFacebook($articolo)
{

    global $indirizzo;
    $link = $indirizzo;

    $link .= "blog_page.php?id=" . $articolo['id'] . "&titolo=" .str_replace(' ', '_',$articolo['titolo']);
    echo "<title>Medical Sangallo " . $articolo['categoria'] . " Blog - " . $articolo['titolo'] . "</title>";
    echo "<meta property=\"og:url\"           content=\"" . $link . "\" />";
    echo "<meta property=\"og:type\"          content=\"website\" />";
    echo "<meta property=\"og:title\"         content=\"" . $articolo['titolo'] . "\" />";
    echo "<meta property=\"og:description\"   content=\"" . $articolo['sottotitolo'] . "\" />";

    $linkImg = $link . "images/blog/" . $articolo['pathImg'];
    echo "<meta property=\"og:image\"         content=\"" . $linkImg . "\" />";

}

function getArticoloForHomePage(){

    $results = getInEvidenza();
    while ($articolo = $results->fetchArray()) {
        printArticoloForHomePage($articolo);
    }

}

function printArticoloForHomePage($articolo){

    echo "<div class=\"blog-custom\">";
    echo "<section id=\"blogPageUnoImg\">";
    echo "<div class=\"".str_replace(' ', '_',$articolo['titolo'])." blog-pa pattern-black\">";
    echo "</div>";
    echo "</section>";
    echo "<section id=\"blogpageunotext\" class=\"container parallax1 text-side-blogpage\">";
    echo "<div class=\"inner\">";
    $link = "blog_page.php?id=" . $articolo['id'] . "&titolo=" . str_replace(' ', '_',$articolo['titolo']);
    echo "<h1><a class=\"header bold black uppercase\" href=\"".$link."\">".$articolo['titolo']."</a></h1>";
    echo "<h4 class=\"h-desc black\">";
    echo $articolo['sottotitolo'];
    echo "</h4>";
    echo "</div>";
    echo "</section>";
    echo "</div>";
}

function createCss(){
    echo "<style>";
    $results = getInEvidenza();
    while ($articolo = $results->fetchArray()) {
        setCssForArticolo($articolo);
    }
    echo "</style>";
}
function setCssForArticolo($articolo){

    echo ".".str_replace(' ', '_',$articolo['titolo'])."{";
    echo "background:url(images/blog/".$articolo['pathImg'].") center center fixed;";
	echo "}";
}
