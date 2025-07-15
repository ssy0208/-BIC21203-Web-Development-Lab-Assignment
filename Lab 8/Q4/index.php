<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Welcome</title></head>
<body>
<div class="form">
<p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
<p>This is a secure area.</p>
<p><a href="dashboard.php">Dashboard</a> | <a href="logout.php">Logout</a></p>
</div>
</body>
</html>
