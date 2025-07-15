<?php
require('db.php');
include("auth.php");

$id = $_REQUEST['id'];
mysqli_query($con, "DELETE FROM new_record WHERE id='$id'") or die(mysqli_error($con));
header("Location: view.php");
?>
