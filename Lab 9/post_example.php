<!DOCTYPE html>
<html>
<head><title>POST Method</title></head>
<body>

<?php
if (isset($_POST["name"])) {
    echo "<p>Hi, " . $_POST["name"] . "</p>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>

</body>
</html>
