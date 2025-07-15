<?php
include 'db.php';
session_start();
if (!isset($_SESSION['matric'])) header("Location: login.php");

$matric = $_GET['matric'];
$conn->query("DELETE FROM users WHERE matric='$matric'");
header("Location: users.php");
?>
