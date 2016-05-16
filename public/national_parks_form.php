<?php
    // var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Submit New Park</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/national_parks_form.css">
</head>
<body>

    <div class="container">
      <h2>Submit a New Park</h2>
      <form role="form" method="POST" action="/national_parks.php">
        <div class="form-group">
          <!-- <label for="name">Name:</label> -->
          <input type="name" class="form-control" name = "name" placeholder="Name:" id="name">
        </div>
        <div class="form-group">
          <!-- <label for="location">Location:</label> -->
          <input type="location" class="form-control" name = "location" placeholder="Location:" id="location">
        </div>
        <div class="form-group">
          <!-- <label for="date_established">Date Established:</label> -->
          <input type="date_established" class="form-control" name = "date_established" placeholder="Date Established:" id="date_established">
        </div>
        <div class="form-group">
          <!-- <label for="area_in_acres">Area In Acres:</label> -->
          <input type="area_in_acres" class="form-control" name = "area_in_acres" placeholder="Area In Acres:" id="area_in_acres">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>

</body>
</html>