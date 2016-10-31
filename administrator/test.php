<?php


if (!isset($_POST['title'])) {
    echo "EROROR";
}

$titolo = $_POST['title'];
$sottotitolo = $_POST['subtitle'];
$categoria = $_POST['category'];
$testo = $_POST['articolo'];
$nameFile = "";

$path= "";
if($_FILES['ufile']['name'] != "")
{
    $nameFile = str_replace(' ', '_', $titolo).".jpg";
    $nameFile = strtolower($nameFile);
    $path="../images/blog/".$nameFile;
    if(!copy($_FILES['ufile']['tmp_name'], $path)){
        header('Location: errorPage.php');
    }

}


$query = 'UPDATE articolo set titolo = \'' . $titolo . '\', sottotitolo = \'' . $sottotitolo . '\', testo = \'' . trim($testo) . '\', categoria = \'' . $categoria . '\' where id=' . $_POST['id'];

$db = new SQLite3('database/medicalSangallo.db');
$query = 'insert into articolo (titolo,sottotitolo,testo,categoria,pathImg) values (\'' . $titolo . '\',\'' . $sottotitolo . '\',\'' . trim($testo) . '\',\'' . $categoria.'\',\''. $nameFile . '\')';
$db->exec($query);
$db->close();
print_r($query);