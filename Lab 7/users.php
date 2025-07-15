<?php
session_start();
if (!isset($_SESSION['matric'])) header("Location: login.php");
include 'db.php';
?>

<h2>User List</h2>
<table border="1">
<tr><th>Matric</th><th>Name</th><th>Level</th><th>Action</th></tr>
<?php
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['matric']}</td>
        <td>{$row['name']}</td>
        <td>{$row['role']}</td>
        <td>
            <a href='update_user.php?matric={$row['matric']}'>Update</a> |
            <a href='delete_user.php?matric={$row['matric']}' onclick=\"return confirm('Delete user?');\">Delete</a>
        </td>
    </tr>";
}
?>
</table>
<p><a href='logout.php'>Logout</a></p>
