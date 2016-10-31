<?php


if (!isset($_POST['title'])) {
    echo "EROROR";
}

$titolo = $_POST['title'];
$sottotitolo = $_POST['subtitle'];
$categoria = $_POST['category'];
$testo = $_POST['articolo'];
$nameFile = str_replace(' ', '_', $titolo).".jpg";
$nameFile = strtolower($nameFile);

$path= "../images/blog/".$nameFile;
if($_FILES['ufile']['name'] != "")
{
    if(!copy($_FILES['ufile']['tmp_name'], $path)){
        header('Location: errorPage.php');
    }
}


$db = new SQLite3('database/medicalSangallo.db');
$query = 'insert into articolo (titolo,sottotitolo,testo,categoria,pathImg) values (\'' . $titolo . '\',\'' . $sottotitolo . '\',\'' . trim($testo) . '\',\'' . $categoria.'\',\''. $nameFile . '\')';

print_r($query);
$db->exec($query);
$db->close();

?>