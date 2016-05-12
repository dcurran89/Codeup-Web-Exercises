<?php

require 'park_credentials.php';
require 'db_connect.php';

echo $db_connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$tableDelete = 'DROP TABLE IF EXISTS national_parks';
$db_connection->exec($tableDelete);

$tableCreate = 'CREATE TABLE national_parks (
    id               INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name             VARCHAR(50) NOT NULL,
    location         VARCHAR(100),
    date_established DATE,
    area_in_acres    DOUBLE NOT NULL,
    PRIMARY KEY (id)
)';
$db_connection->exec($tableCreate);