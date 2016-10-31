<?php

require_once('variabili.php');

$database = "database/medicalSangallo.db";
$maxArticoli = 4;

function changePosition($id, $posizione, $newPosizione)
{
    $idSwap = getArticoloIdByPosizione($newPosizione);
    setPosizioneById($idSwap, $posizione);
    setPosizioneById($id, $newPosizione);
}


function getNumeroArticoli()
{
    $results = getArticoliInEvidenza();
    $count = 0;
    while ($articolo = $results->fetchArray()) {
        $count++;
    }
    return $count;
}

function setPosizioneById($id, $posizione)
{
    global $database;
    $db = new SQLite3($database);
    $query = 'update articolo set posizione=' . $posizione . ' where id=' . $id;
    $db->exec($query);
    $db->close();
}


function getArticoloIdByPosizione($posizione)
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select id from articolo where posizione=\'' . $posizione . '\'';
    $results = $db->query($query);
    $db->close();
    while ($articolo = $results->fetchArray()) {
        return $articolo['id'];
    }
}

function deleteArticolo($id)
{
    global $database;
    $db = new SQLite3($database);
    $query = 'delete from articolo where id=\'' . $id . '\'';
    $db->exec($query);
    $db->close();

}
//todo sistemare
function updatePosizione($idOld)
{
    $articoli = getArticoliInEvidenza();
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where homepage=1 order by posizione';
    $articoli = $db->query($query);
    while ($articolo = $articoli->fetchArray()) {
        if ($articolo['id'] > $idOld) {
            $posizione = 'select posizione from articolo where id=' . $articolo['id'];
            $query = 'update articolo set posizione=(' . $posizione . ')-1 where id=' . $articolo['id'];
            $db->exec($query);
        }
    }
    $db->close();
}

function changeEvidenza($id, $value)
{
    if ($value == 1) {
        $max = 'select max(posizione)+1 from articolo';
        $query = 'update articolo set homepage=' . $value . ',posizione = (' . $max . ') where id=' . $id;
    } else {
        $query = 'update articolo set homepage=' . $value . ',posizione=0 where id=' . $id;
        updatePosizione($id);
    }
    global $database;
    $db = new SQLite3($database);
    $db->exec($query);
    $db->close();
}


function getArticoliInEvidenza()
{
    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where homepage=1 order by posizione';
    $results = $db->query($query);
    return $results;
}

function printArticoliInEvidenza(){

    $results = getArticoliInEvidenza();
    while ($articolo = $results->fetchArray()) {
        printRowDashbordInEvidenza($articolo);
    }
    return $results;
}

function printAllertMaxArticoli(){
    global $maxArticoli;
    if (getNumeroArticoli() == $maxArticoli) {
        echo '<div class="alert alert-info" role="alert">';
        echo '<strong>Attenzione!</strong> Hai raggiunto il numero massimo di articoli da mettere in evidenza.';
        echo '</div>';
    }
}

function printArticoliNotInEvidenza(){

    global $database;
    $db = new SQLite3($database);
    $query = 'select * from articolo where homepage=0';
    $results = $db->query($query);
    while ($articolo = $results->fetchArray()) {
        printRowDashbord($articolo);
    }
    $db->close();
    return $results;
}

function getAllArticoli()
{
    global $database;
    $db = new SQLite3($database);
    $query = "select * from articolo order by data_creazione desc";
    $results = $db->query($query);
    $db->close();
    return $results;
}

function checkLogin($post)
{
    global $database;
    if (!isset($post['user'])) {
        return false;
    }
    $user = $post['user'];
    $psw = $post['password'];
    $db = new SQLite3($database);
    $queryCheckLogin = "select * from utente where user='" . $user . "' AND psw='" . $psw . "'";
    $results = $db->query($queryCheckLogin);
    while ($row = $results->fetchArray()) {
        $db->close();
        return true;
    }
    $db->close();
    return false;
}

function checkSession($session)
{
    if ($session['login'] == true) {
        return true;
    }
    return false;
}
