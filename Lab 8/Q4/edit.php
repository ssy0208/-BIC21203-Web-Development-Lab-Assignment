<?php
require('db.php');
include("auth.php");

$id = $_REQUEST['id'];
$result = mysqli_query($con, "SELECT * FROM new_record WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $trn_date = date("Y-m-d H:i:s");
    $submittedby = $_SESSION["username"];

    $update = "UPDATE new_record SET trn_date='$trn_date', name='$name', age='$age', submittedby='$submittedby' WHERE id='$id'";
    mysqli_query($con, $update) or die(mysqli_error($con));
    header("Location: view.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Record</title></head>
<body>
<div class="form">
<h2>Edit Record</h2>
<form method="post">
    <p><input type="text" name="name" value="<?php echo $row['name']; ?>" required /></p>
    <p><input type="number" name="age" value="<?php echo $row['age']; ?>" required /></p>
    <p><input type="submit" name="update" value="Update" /></p>
</form>
<p><a href="view.php">Back</a></p>
</div>
</body>
</html>
