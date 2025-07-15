<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<h2>Register</h2>
<form method="post">
    Matric:<br><input type="text" name="matric" required><br>
    Name:<br><input type="text" name="name" required><br>
    Password:<br><input type="password" name="password" required><br>
    Role:<br>
    <select name="role" required>
        <option value="">Please select</option>
        <option value="student">student</option>
        <option value="lecturer">lecturer</option>
    </select><br><br>
    <input type="submit" name="register" value="Submit">
</form>

<?php
if (isset($_POST['register'])) {
    $matric = $_POST['matric'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (matric, name, password, role) VALUES ('$matric', '$name', '$password', '$role')";
    if ($conn->query($sql)) {
        echo "<p>Registration successful.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
