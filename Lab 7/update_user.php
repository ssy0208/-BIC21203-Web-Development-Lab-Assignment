<?php
include 'db.php';
session_start();
if (!isset($_SESSION['matric'])) header("Location: login.php");

$matric = $_GET['matric'];
$row = $conn->query("SELECT * FROM users WHERE matric='$matric'")->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $conn->query("UPDATE users SET name='$name', role='$role' WHERE matric='$matric'");
    header("Location: users.php");
    exit();
}
?>

<h2>Update User</h2>
<form method="post">
    Matric: <input type="text" name="matric" value="<?= $row['matric'] ?>" readonly><br>
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Access Level:
    <select name="role">
        <option value="student" <?= $row['role']=='student'?'selected':'' ?>>student</option>
        <option value="lecturer" <?= $row['role']=='lecturer'?'selected':'' ?>>lecturer</option>
    </select><br><br>
    <input type="submit" name="update" value="Update">
    <a href="users.php">Cancel</a>
</form>
