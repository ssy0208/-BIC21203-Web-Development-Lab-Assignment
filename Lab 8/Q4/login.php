<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
require('db.php');
session_start();

if (isset($_POST['username'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($con, $username);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query);
    if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
$rows = mysqli_num_rows($result);


    if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "<div class='form'><h3>Incorrect credentials.</h3><br/>Click <a href='login.php'>here</a> to try again.</div>";
    }
} else {
?>

<div class="form">
<h1>Login</h1>
<form method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered? <a href='registration.php'>Register here</a></p>
</div>

<?php } ?>
</body>
</html>
