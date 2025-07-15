<?php
include 'db.php';
session_start();
?>

<form method="post">
    Matric:<br><input type="text" name="matric" required><br>
    Password:<br><input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<p><a href="registration.php">Register</a> here if you have not.</p>

<?php
if (isset($_POST['login'])) {
    $matric = $_POST['matric'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE matric='$matric'");
    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['matric'] = $matric;
            header("Location: users.php");
            exit();
        }
    }
    echo "<p style='color:red;'>Invalid username or password, try <a href='login.php'>login</a> again.</p>";
}
?>
