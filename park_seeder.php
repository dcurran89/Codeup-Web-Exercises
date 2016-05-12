<?php

require 'park_credentials.php';
require 'db_connect.php';

$truncate = 'TRUNCATE national_parks';
$db_connection->exec($truncate);

$listOfParks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.67],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' =>  76518.98],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26],
    ['name' => 'Channel Islands', 'location' => 'California', 'date_established' => '1980-03-05', 'area_in_acres' => 249561.00],
    ['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => '2003-11-10', 'area_in_acres' => 26545.86],
];

foreach ($listOfParks as $parks) {
    $query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres) 
        VALUES ("'. $parks['name'] . '", "'. $parks['location'] . '", "'. $parks['date_established'] . '", "'. $parks['area_in_acres'] . '")';
    $db_connection->exec($query);
}