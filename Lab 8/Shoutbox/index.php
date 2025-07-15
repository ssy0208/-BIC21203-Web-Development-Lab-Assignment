<?php require_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>ShoutBox</title>
</head>
<body>

<h2>Mini ShoutBox</h2>

<form action="send.php" method="post">
    Message: <textarea name="shout" maxlength="300" required></textarea>
    <br><br>
    <input type="submit" value="Shout!">
</form>

<hr>

<?php
// Get all shouts
$result = mysqli_query($link, "SELECT * FROM shouts ORDER BY shout_date DESC");

while ($data = mysqli_fetch_assoc($result)) {
    echo "<p><strong>{$data['shout_date']}</strong><br>{$data['shout_text']}</p><hr>";
}
?>

</body>
</html>
