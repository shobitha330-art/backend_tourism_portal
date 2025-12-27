<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$package = $_POST['package'];

$sql = "INSERT INTO bookings(name, email, package)
        VALUES('$name', '$email', '$package')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Booking Successful</h2>";
    echo "<a href='index.html'>Go to Home</a>";
} else {
    echo "Error";
}
?>
