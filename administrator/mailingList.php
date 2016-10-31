<?php

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=newsletterMedicalsangallo.csv');

$output = fopen('php://output', 'w');

fputcsv($output, array('Email'));

$db = new SQLite3('database/medicalSangallo.db');
$query = 'select * from newsletter order by email';
$results = $db->query($query);

echo "\n";
while ($row = $results->fetchArray()) {
    echo $row['email']."\n";
}

exit();