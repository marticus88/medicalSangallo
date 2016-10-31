<?php

require_once("php/variabili.php");
require_once("php/utility.php");

$categorie = array("Fitness","Riabilitazione","Fisioterapia");

function printNavbar()
{
    global $home;
    echo '<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
    echo '<div class="navbar-header">';
    echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
    echo '<span class="sr-only">Toggle navigation</span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '</button>';
    echo '<a class="navbar-brand" href="' . $home . '">';
    echo '<img src="img/logo.png" alt="" style="height: 30px;">';
    echo '</a>';
    echo '</div>';
    printSidebar();
    echo '</nav';
}

function printSidebar()
{
    global $pagine;
    echo '<div class="navbar-default sidebar" role="navigation">';
    echo '<div class="sidebar-nav navbar-collapse">';
    echo '<ul class="nav" id="side-menu">';
    for ($x = 0; $x < count($pagine); $x++) {
        echo '<li>';
        echo '<a href="' . $pagine[$x]['link'] . '"><i class="fa fa-' . $pagine[$x]['icon'] . ' fa-fw"></i> ' . $pagine[$x]['nome'] . '</a>';
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
    echo '</div>';
}


function printTableDashbord()
{
    echo '<div class="container-fluid">';
    echo '<table class="table table-condensed table-responsive">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>Titolo</th>";
    echo "<th>Data Crazione</th>";
    echo "<th> </th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $articoli = getAllArticoli();
    while ($articolo = $articoli->fetchArray()) {
        printRowDashbord($articolo);
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}

function printRowDashbordInEvidenza($articolo)
{
    echo "<tr>";
    echo "<td>" . $articolo['posizione'] . "</td>";
    echo "<td>" . $articolo['titolo'] . "</td>";
    echo "<td>" . $articolo['categoria'] . "</td>";
    echo "<td>";
    echo '<div style="display: inline-flex;">';
    editButton($articolo['id']);
    starButton($articolo['id'], $articolo['homepage']);
    deleteButton($articolo['id']);
    echo "</div>";
    echo "</td>";
    echo '<td>';
    arrow($articolo['id'], $articolo['posizione']);
    echo '</td>';
    echo "</tr>";
}

function printRowDashbord($articolo)
{
    echo "<tr>";
    echo "<td>" . $articolo['titolo'] . "</td>";
    echo "<td>" . $articolo['categoria'] . "</td>";
    echo "<td>" . $articolo['data_creazione'] . "</td>";
    echo "<td>";
    echo '<div style="display: inline-flex;">';
    editButton($articolo['id']);
    starButton($articolo['id'], $articolo['homepage']);
    deleteButton($articolo['id']);
    echo "</div>";
    echo "</td>";
    echo "</tr>";
}

function arrow($id, $posizione)
{
    global $changeOrder;
    $numeroArticoli = getNumeroArticoli();
    echo '<div style="display: inline-flex;">';

    if ($posizione != 1 && $posizione <= $numeroArticoli) {
        echo '<form action="' . $changeOrder . '" method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="hidden" name="posizione" value="' . ($posizione) . '">';
        echo '<input type="hidden" name="newPosizione" value="' . ($posizione - 1) . '">';
        echo '<button type="submit" class="btn btn-social-icon btn-default btn-dash"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>';
        echo '</form>';
    }


    if ($posizione >= 1 && $posizione < $numeroArticoli) {
        echo '<form action="' . $changeOrder . '" method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="hidden" name="posizione" value="' . ($posizione) . '">';
        echo '<input type="hidden" name="newPosizione" value="' . ($posizione + 1) . '">';
        echo '<button type="submit" class="btn btn-social-icon btn-default btn-dash"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button>';
        echo '</form>';
    }

    echo '</div>';

}

function starButton($id, $status)
{
    global $changeStatus;
    if ($status == 0) {
        echo '<form action="' . $changeStatus . '" method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="hidden" name="homepage" value="1">';
        echo '<button type="submit" class="btn btn-social-icon btn-default btn-dash"><i class="fa fa-star-o"></i></button>';
        echo '</form>';
    } else {
        echo '<form action="' . $changeStatus . '" method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="hidden" name="homepage" value="0">';
        echo '<button type="submit" class="btn btn-social-icon btn-default btn-dash"><i class="fa fa-star"></i></button>';
        echo '</form>';
    }

}

function editButton($id)
{
    echo '<form action="modifica.php" method="post">';
    echo '<input type="hidden" name="id" value="' . $id . '">';
    echo '<button type="submit" class="btn btn-social-icon btn-default btn-dash"><i class="fa fa-edit"></i></button>';
    echo '</form>';
}

function deleteButton($id)
{
    global $deleteArticolo;
    echo '<form action="' . $deleteArticolo . '" method="post">';
    echo '<input type="hidden" name="id" value="' . $id . '">';
    echo '<button type="submit" class="btn btn-social-icon btn-danger"><i class="fa fa-trash"></i></button>';
    echo '</form>';
}

function printFormModifica($id)
{

    global $database;
    global $categorie;
    $db = new SQLite3($database);
    $query = 'select * from articolo where id=\'' . $id . '\'';
    $results = $db->query($query);

    while ($articolo = $results->fetchArray()) {

        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo "<div class=\"form-group\">";
        echo "<label for=\"titolo\">Titolo: </label>";
        echo "<input class=\"form-control\" type=\"text\" value=\"" . $articolo['titolo'] . "\" name=\"title\" id=\"titolo\" required=\"true\">";
        echo "<p class=\"help-block\">Inserisci il titolo dell'articolo.</p>";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<label for=\"sottotitolo\">Testo in anteprima: </label>";
        echo "<input class=\"form-control\" type=\"text\" value=\"" . $articolo['sottotitolo'] . "\" name=\"subtitle\" id=\"sottotitolo\" required=\"true\">";
        echo "<p class=\"help-block\">Inserisci il testo in anteprima per l'articolo.</p>";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<label for=\"categoria\">Categoria: </label>";
        echo "<select class=\"form-control\" name=\"category\" id=\"categoria\">";

        foreach ($categorie as $i => $value) {
            if($categorie[$i]!=$articolo['categoria']) {
                echo "<option>" . $categorie[$i] . "</option>";
            }else{
                echo "<option selected=\"selected\">" . $categorie[$i] . "</option>";
            }
        }

        echo "</option>";
        echo "</select>";
        echo "<p class=\"help-block\">Scegli la categoria alla quale apparterrà l'ariticolo.</p>";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<label for=\"exampleInputFile\">Immagine: </label>";
        echo "<input type=\"file\" class=\"form-control-file\" name=\"ufile\" id=\"exampleInputFile\" aria-describedby=\"fileHelp\">";
        echo "<p class=\"help-block\">Inserisci l'immagine di anteprima.</p>";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<textarea id=\"summernote\" name=\"articolo\" required=\"true\">".$articolo['testo']."</textarea>";
        echo "</div>";
    }

}