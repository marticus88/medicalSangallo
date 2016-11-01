<?php
$header = "html/header.html";
$footer = "html/footer.html";
$index = "index.php";
$home = "../index.php";
$dashboard = "dashboard.php";
$changeStatus = "changeStatus.php";
$deleteArticolo = "deleteArticolo.php";
$changeOrder = "changeOrder.php";


$pagine = array(
    array(
        'nome' => 'Dashboard',
        'link' => 'dashboard.php',
        'icon' => 'dashboard'
    ),
    array(
        'nome' => 'Nuovo Articolo',
        'link' => 'nuovoArticolo.php',
        'icon' => 'edit'
    ),
    array(
        'nome' => 'Salva Mailing List',
        'link' => 'mailingList.php',
        'icon' => 'save'
    ),
    array(
        'nome' => 'Esci',
        'link' => 'logout.php',
        'icon' => 'sign-out'
    )
);
