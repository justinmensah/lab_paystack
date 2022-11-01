<?php
include "../controllers/general_controller.php";

$recs = sel_all_ctr("phonebook");
echo json_encode($recs);
?>

