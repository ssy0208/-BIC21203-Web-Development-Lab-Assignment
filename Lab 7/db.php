<?php
$conn = new mysqli("localhost", "root", "", "Lab_7");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
