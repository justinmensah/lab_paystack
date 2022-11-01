<?php
require '../controllers/general_controller.php';

$id = $_GET['id'];

del_ctr($id);

header("Location: ../view/form.php");


?>