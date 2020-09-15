<?php
$servername = "localhost";
$username = "goship_goship";
$password = "goship12345";
$dbname = "goship_track";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `users` (`user_id`, `email`, `username`,`password`) VALUES
(3, 'cornelle@gmail.com', 'admin', md5('admin123'));";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
