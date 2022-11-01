<?php
require '../controllers/general_controller.php';
$id = $_GET['id'];

$record = select_ctr($id);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $tel = $_POST['tele'];

    update_ctr($id,$name,$tel);

    header("Location: ../view/form.php");
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>form {padding: 1rem;font: 1rem sans-serif;}</style>
    <title>Document</title>
</head>
<body>
    <h1 style="padding: 1rem; font: 2rem sans-serif;">Update Contact Record</h1>
    <form method="POST">
        <input name="name"type="text" value="<?php echo $record['pname']; ?>">
        <br>
        <br>
        <input name = "tele" type="text" value="<?php echo $record['pphoned'];?>" >
        <br>
        <br>
        <input type = "Submit" name="submit" value="Update">
    </form>
    
</body>
</html>