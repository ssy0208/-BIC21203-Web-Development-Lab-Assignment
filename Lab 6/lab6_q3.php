<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<h2>Calculate Area of a Rectangle</h2>

<form method="post">
    <label for="width">Width:</label>
    <input type="number" name="width" id="width" required><br><br>

    <label for="length">Length:</label>
    <input type="number" name="length" id="length" required><br><br>

    <input type="submit" value="Calculate Area">
</form>

<?php
// Function to calculate area
function calculateArea($width, $length) {
    return $width * $length;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $width = $_POST['width'];
    $length = $_POST['length'];
    $area = calculateArea($width, $length);

    echo "<p><strong>The area of a rectangle with a width of $width and $length is $area</strong></p>";
}
?>

</body>
</html>
