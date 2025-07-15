<?php
require_once("connection.php");

// Check if not empty
if (!empty($_POST['shout'])) {
    $text = mysqli_real_escape_string($link, $_POST['shout']);
    mysqli_query($link, "INSERT INTO shouts (shout_text) VALUES ('$text')") or die(mysqli_error($link));
}
?>

<html>
<head><meta http-equiv="refresh" content="0; url=index.php"></head>
<body><p>Please wait... Redirecting...</p></body>
</html>
