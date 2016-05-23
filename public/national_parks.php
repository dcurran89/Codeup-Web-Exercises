<?php

require_once '../park_credentials.php';
require_once '../db_connect.php';
require_once '../Input.php';

function pageController($db_connection){
    //initialize an array
    $data = [];
    $limitAmount = 4;
    $data['offsetAmount'] = !(Input::has('offset')) ? 0 : Input::get('offset');
    $data['page'] = !(Input::has('page')) ? 0 : Input::get('page');

    $select = "SELECT * FROM national_parks LIMIT :limitAmount OFFSET :offsetAmount";
    $selectAll = "SELECT * FROM national_parks";

    //statement is an object with our query in it
    $statement = $db_connection->prepare($select);
    $statementAll = $db_connection->prepare($selectAll);

    $statement->bindValue(':limitAmount', $limitAmount, PDO::PARAM_INT);
    $data['offsetAmount'] = (int)$data['offsetAmount'];
    $statement->bindValue(':offsetAmount', $data['offsetAmount'], PDO::PARAM_INT);
    
    $statement->execute();
    $statementAll->execute();

    $data['parks'] = $statement->fetchAll(PDO::FETCH_ASSOC);
    $data['max_pages'] = ceil($statementAll->rowCount()/$limitAmount);


    return $data;
}

extract(pageController($db_connection));

?>

<!DOCTYPE html>
<html>
<head>
    <title>National Park List</title>
    <link rel="stylesheet" type="text/css" href="/css/national_parks.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.park').hover(function(){
                $(this).css("background-color", "white");
                }, function(){
                $(this).css("background-color", 'rgba(192,192,192,0.7)');
            });
            $('.description').hover(function(){
                $(this).css("background-color", "white");
                }, function(){
                $(this).css("background-color", 'rgba(192,192,192,0.7)');
            });
        });

    </script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="title">
            <h1 class>National Parks</h1>
            </div>
                <div class="row">
                    <div class = "column tableHead park col-xs-2">Name</div>
                    <div class = "column tableHead park col-xs-2">Location</div>
                    <div class = "column tableHead park col-xs-2">Date Established</div>
                    <div class = "column tableHead park col-xs-2">Area In Acres</div>
                    <div class = "column tableHead park col-xs-3">Description</div>

                </div>
                <?php foreach($parks as $park): ?>
                <div class="row">
                    <div class = "column park col-xs-2"><?= $park['name']; ?></div>
                    <div class = "column park col-xs-2"><?= $park['location']; ?></div>
                    <div class = "column park col-xs-2"><?= $park['date_established']; ?></div>
                    <div class = "column park col-xs-2"><?= $park['area_in_acres']; ?></div>
                    <div class = "column description col-xs-3"><?= $park['description']; ?></div>
                </div>
                <?php endforeach; ?>
        </div>

        <div class="row">
            <?php if ($offsetAmount > 0) {?>
                <a class="btn btn-default pull-left" href="/national_parks.php?page=<?= $page - 1 ?>&offset=<?= $offsetAmount - 4 ?>">Previous</a>
            <?php } ?>
            <?php if ($page < $max_pages - 1) { ?>
                <a class="btn btn-default pull-right" href="/national_parks.php?page=<?= $page + 1 ?>&offset=<?= $offsetAmount + 4 ?>">Next</a>
            <?php } ?>
        </div>
        <div class="footer">
            <a class="btn btn-default pull-left" href="/national_parks.php">Home</a>
            <a class="btn btn-default pull-right" href="/national_parks_form.php">Submit New Park</a>
        </div>
    </div>

</body>
</html>