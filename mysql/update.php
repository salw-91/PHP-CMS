<?php include('db.php');?>
<?php include('functions.php');?>
<?php 
if (isset($_POST['submit'])) {
    update();
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
        <!-- <div class="">test</div> -->
        <div class="card col-xs-6">
        <form action="update.php" method="Post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="ID">ID</label>
                <select name="id" id="">

                    <?php 
                        allData();
                    ?>

                </select>
            </div>


<button type="submit" class="btn btn-primary mt-2" name="submit" >Submit</button>
</div>
        </form>
        </div>
    </div>
</body>

</html>