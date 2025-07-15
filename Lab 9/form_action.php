<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "Enter name: <b>$name</b><br><br><br>Enter new name.";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Submit Form"><br>
</form>
