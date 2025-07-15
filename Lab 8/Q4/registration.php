<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
require('db.php');

if (isset($_POST['username'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($con, $username);

    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $trn_date = date("Y-m-d H:i:s");

    $query = "INSERT into users (username, password, email, trn_date) 
              VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<div class='form'><h3>Registration successful.</h3><br/>Click <a href='login.php'>here</a> to login.</div>";
    }
} else {
?>

<div class="form">
<h1>Register</h1>
<form method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
</form>
</div>

<?php } ?>
</body>
</html>
