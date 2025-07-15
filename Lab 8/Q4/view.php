<?php
require('db.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head><title>View Records</title></head>
<body>
<div class="form">
<h2>All Records</h2>
<table border="1" width="100%">
<tr>
    <th>ID</th><th>Name</th><th>Age</th><th>Edit</th><th>Delete</th>
</tr>
<?php
$count = 1;
$result = mysqli_query($con, "SELECT * FROM new_record ORDER BY id DESC");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $count++; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Delete this record?')">Delete</a></td>
</tr>
<?php } ?>
</table>
<p><a href="insert.php">Insert New</a> | <a href="dashboard.php">Back to Dashboard</a></p>
</div>
</body>
</html>
