<?php
include "../controllers/general_controller.php";
$id = $_GET['id'];

$record = select_ctr($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <diV style="padding: 1rem; font: 1rem sans-serif;float:left;">
    <h1>View Record for <?php echo $record['pname'];?></h1>
    
    <p>ID: <?php echo $record['pid'];?></p>
    <p>Name: <?php echo $record['pname']; ?></p>
    <p>Number: <?php echo $record['pphoned']; ?></p>
    </div>
</body>
</html>