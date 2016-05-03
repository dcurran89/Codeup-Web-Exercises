<!DOCTYPE html>
<html>
<head>
	<title>Including Other Files</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/portfolioIndex.css">
</head>
<body>

  <!-- START OF NAVBAR -->
  <?php include 'navbar.php' ?>
  <!-- START OF HEADER -->
  <?php include 'header.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 separate" id="firstBox">
        First project
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 separate" id="secondBox">
        Second project
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 separate" id="thirdBox">
        Third project
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 separate" id="fourthBox">
        Fourth project
      </div>



    </div>
  </div>
  <p>This is a paragraph</p>



  <!-- START OF FOOTER -->
  <?php include 'footer.php' ?>


    <!-- jquery library find by searching google "jquery cdn"-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!-- Put Javascript at bottom of page because script could call things in the body and needs them to load -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>