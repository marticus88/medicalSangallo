<?php

require_once("php/variabili.php");
require_once("php/utility.php");


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
    echo '<ul class="nav navbar-top-links navbar-right">';
    echo '<li class="dropdown">';
    echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">';
    echo '<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>';
    echo '</a>';
    echo '<ul class="dropdown-menu dropdown-messages">';
    echo '<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>';
    echo '</li>';
    echo '</ul>';
    echo '</li>';
    echo '</ul>';
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


?>
