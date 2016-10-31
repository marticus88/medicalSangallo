<?php

require_once("php/variabili.php");
require_once("php/template.php");
require_once("php/utility.php");

session_start();
if(!isset($_SESSION['user'])){
  header('Location: '.$index);
  exit;
}



$id = $_POST['id'];
$posizione = $_POST['posizione'];
$newPosizione = $_POST['newPosizione'];

changePosition($id,$posizione,$newPosizione);



header('Location: '.$dashboard);


?>
