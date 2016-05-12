<?php

// Get new instance of PDO object
$db_connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
//ABOVE IS SAME AS DOING BELOW
//mysql -u codeup -p
//codeupp@$$
//USE employees
// Tell PDO to throw exceptions on error
$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

