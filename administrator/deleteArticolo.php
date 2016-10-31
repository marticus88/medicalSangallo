<?php

require_once("php/variabili.php");
require_once("php/template.php");

session_start();
if(!isset($_SESSION['user'])){
  header('Location: '.$index);
  exit;
}

$id = $_POST['id'];

deleteArticolo($id);

header('Location: '.$dashboard);


?>
