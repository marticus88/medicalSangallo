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
$homepage = $_POST['homepage'];

$numeroArticoli = getNumeroArticoli();

if($homepage==0){
  changeEvidenza($id,$homepage);
} else if($numeroArticoli<$maxArticoli){
  changeEvidenza($id,$homepage);
}


header('Location: '.$dashboard);


?>
