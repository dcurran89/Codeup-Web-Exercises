<?php

require_once '../park_credentials.php';
require_once '../db_connect.php';
require_once '../Input.php';

var_dump($_POST);


// uses php to try and parse a date out of the given string
// throws an exception if a date cannot be parsed out of the string
function formatDate($dateString)
{
    $timestamp = strtotime($dateString);
    if ($timestamp === false) {
        throw new Exception('not a valid date!');
    }
    return date('Y-m-d', $timestamp);
}
function savePark($db_connection, $park)
{
    $query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description)';
    $query.= 'VALUES (:name, :location, :date_established, :area_in_acres, :description)';
    $stmt  = $db_connection->prepare($query);
    $stmt->bindValue('name',             $park['name'],             PDO::PARAM_STR);
    $stmt->bindValue('location',         $park['location'],         PDO::PARAM_STR);
    $stmt->bindValue('date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue('area_in_acres',    $park['area_in_acres'],    PDO::PARAM_STR);
    $stmt->bindValue('description',      $park['description'],      PDO::PARAM_STR);
    $stmt->execute();
}
function getParkFromInput(){

    $errors = [];
    $park = [];
        try {
            $park['name'] = Input::getString('name');
        } catch (Exception $e1) {
            $errors[] = $e1->getMessage();
        }
        try {
            $park['location'] = Input::getString('location');
        } catch (Exception $e2) {
            $errors[] = $e2->getMessage();
        }
        try {
            $date = Input::getString('date_established');
            $park['date_established'] = formatDate($date);
        } catch (Exception $e3) {
            $errors[] = $e3->getMessage();
        }
        try {
            $park['area_in_acres'] = Input::getNumber('area_in_acres');
        } catch (Exception $e4) {
            $errors[] = $e4->getMessage();
        }
        try {
            $park['description'] = Input::getString('description');
        } catch (Exception $e5) {
            $errors[] = $e5->getMessage();
        }
        return [
            'park' => $park,
            'errors' => $errors
        ];
}

function pageController($db_connection)
{
    // this gives us the park and errors variables
    extract(getParkFromInput());
    if (empty($errors)) {
        savePark($db_connection, $park);
        header('Location: national_parks.php');
        die();
    }
    return [
        'park'   => $park,
        'errors' => $errors,
    ];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract(pageController($db_connection));
}
// function pageController(){

//     if(!empty($_POST)){
//         extract(pageController());
//     }
// }
?> <!-- END OF PHP -->

<!DOCTYPE html>
<html>
<head>
    <title>Submit New Park</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/national_parks_form.css">
</head>
<body>
    <?php if(isset($errors)): ?>
        <?php foreach($errors as $message):?>
            <p id="errorMessage"><?= $message ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class="container">
      <!-- <h2>Submit a New Park</h2> -->
      <form role="form" method="POST" action="national_parks_form.php">
        <div class="form-group col-xs-6">
          <!-- <label for="name">Name:</label> -->
          <input type="text" class="form-control" name = "name" placeholder="Name:" id="name">
        </div>
        <div class="form-group col-xs-6">
          <!-- <label for="location">Location:</label> -->
          <input type="location" class="form-control" name = "location" placeholder="Location:" id="location">
        </div>
        <div class="form-group col-xs-6">
          <!-- <label for="date_established">Date Established:</label> -->
          <input type="date_established" class="form-control" name = "date_established" placeholder="Date Established: YYYY-MM-DD" id="date_established">
        </div>
        <div class="form-group col-xs-6">
          <!-- <label for="area_in_acres">Area In Acres:</label> -->
          <input type="area_in_acres" class="form-control" name = "area_in_acres" placeholder="Area In Acres:" id="area_in_acres">
        </div>
        <div class="form-group col-xs-6">
          <!-- <label for="area_in_acres">Description:</label> -->
          <input type="description" class="form-control" name = "description" placeholder="Description:" id="description">
        </div>
        <button type="submit" class="btn btn-default pull-right" id="Submit">Submit A New Park!</button>
      </form>
    </div>

</body>
</html>