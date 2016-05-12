<?php

require 'db_credentials.php';
require 'db_connect.php';

echo $db_connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$listOfUsers = [
    ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
    ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
    ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
];

foreach ($listOfUsers as $user) {
    $query = 'INSERT INTO users (email, name) VALUES ("'. $user['email'] . '", "'. $user['name'] . '")';
    $db_connection->exec($query);
    var_dump($query);
}