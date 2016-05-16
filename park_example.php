<?php

require 'park_credentials.php';
require 'db_connect.php';

$select = 'SELECT * FROM national_parks';
$statement = $db_connection->query($select);

echo "Columns: " . $statement->columnCount() . PHP_EOL;

var_dump($statement);

$parks = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($parks);