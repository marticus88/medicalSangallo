<?php
/**
 * Created by PhpStorm.
 * User: marti
 * Date: 31/10/2016
 * Time: 14:01
 */
$database = "administrator/database/medicalSangallo.db";

function insertNewsletter($email)
{
    $db = new SQLite3('administrator/database/medicalSangallo.db');
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
    $db = new SQLite3('administrator/database/medicalSangallo.db');
    $query = 'select * from articolo where homepage=1';
    $results = $db->query($query);
    return $results;

}

function printFisioterapia()
{
    $results = getArticoliRiabilitazione();

    while ($articolo = $results->fetchArray()) {
        printArticolo($articolo);
    }
}

function getArticoliFisioterapia()
{
    $db = new SQLite3('administrator/database/medicalSangallo.db');
    $query = 'select * from articolo where categoria=\'Fisioterapia\'';
    $results = $db->query($query);
    return $results;

}

function printRiabilitazione()
{
    $results = getArticoliRiabilitazione();

    while ($articolo = $results->fetchArray()) {
        printArticolo($articolo);
    }
}

function getArticoliRiabilitazione()
{
    $db = new SQLite3('administrator/database/medicalSangallo.db');
    $query = 'select * from articolo where categoria=\'Riabilitazione\'';
    $results = $db->query($query);
    return $results;

}

function getArticoliFitness()
{
    $db = new SQLite3('administrator/database/medicalSangallo.db');
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
    echo "<div class=\"relative fullwidth flex\">";
    echo "<ul class=\"post-slides\">";
    echo "<li class=\"post-slide\">";
    echo "<img src=\"images/blog/" . $articolo['pathImg'] . "\" alt=\"\"/>";
    echo "</li>";
    echo "<li class=\"clear\"></li>";
    echo "</ul>";
    echo "</div>";
    echo "<div class=\"post-inner\">";

    echo "<div class=\"post-details\">";
    echo "<h1 class=\"normal post-header\">";
    echo $articolo['titolo'];
    echo "</h1>";
    echo "<p class=\"post-read\">";
    echo $articolo['sottotitolo'];
    echo "</p>";
    echo "<p class=\"t-right\">";
    $link = "blog_page.php?id=" . $articolo['id'] . "&titolo=" . $articolo['titolo'];
    echo "<a href=\"" . $link . "\" class=\"more-button light dark\">Scopri di più<i class=\"fa fa-arrow-circle-o-right gray1\"></i></a>";
    echo "</p>";
    echo "</div>";
    echo "<div class=\"clear\"></div>";
    echo "</div>";
    echo "</div>";
}

function getArticoloForPage($id)
{

    $db = new SQLite3('administrator/database/medicalSangallo.db');
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
    echo "<div class=\"relative fullwidth flex\">";
    echo "<ul class=\"post-slides\">";
    echo "<li class=\"post-slide\">";
    echo "<img src=\"images/blog/" . $articolo['pathImg'] . "\" alt=\"\"/>";
    echo "</li>";
    echo "<li class=\"clear\"></li>";
    echo "</ul>";
    echo "</div>";
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