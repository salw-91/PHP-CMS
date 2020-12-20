<?php

include('db.php');

$query = "SELECT * FROM users";
// $query .= "VALUES ('$username', '$password')";

$result = mysqli_query($conn, $query);
if (!$result) {
    die('Query FAILED');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card col-xs-6">
            <?php
            while ($row = mysqli_fetch_row($result)) {
            ?>

                <pre>
                    <?php print_r($row); ?>
                </pre>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>