<?php
require_once('php/utilityFrontEnd.php');

if (!isset($_POST['email'])) {
    header('Location: errorPage.html');
}

$email = $_POST['email'];

insertNewsletter($email);

header('Location: index.php');
