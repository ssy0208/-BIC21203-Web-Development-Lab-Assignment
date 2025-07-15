<?php
include "db_connect.php";

$sql = "SELECT * FROM persons";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Persons</title>
</head>
<body>
    <h2>List of Persons</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo "ID: " . $row["ID"] . "<br>";
        echo "Name: " . $row["FirstName"] . " " . $row["LastName"] . "<br>";
        echo "Address: " . $row["Address"] . "<br>";
        echo "City: " . $row["City"];
        echo "</p><hr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</body>
</html>
