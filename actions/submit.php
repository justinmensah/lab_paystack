<?php

include "../controllers/general_controller.php";


if (isset($_POST['submit'])){
    $name = $_POST['fname'];
    $tele = $_POST['pnumber'];
}
else{
    echo "something went wrong";
}

insert_ctr($name,$tele);
   

header("Location: ../view/done.php");


//header("Location: ../view/done.php");




?>