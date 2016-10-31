<?php
$header = "html/header.html";
$footer = "html/footer.html";
$database = "database/medicalSangallo.db";
$index = "index.php";
$home = "../index.html";
$dashboard = "dashboard.php";
$changeStatus = "changeStatus.php";
$deleteArticolo = "deleteArticolo.php";
$changeOrder = "changeOrder.php";
$maxArticoli = 3;

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
    )
);
?>
