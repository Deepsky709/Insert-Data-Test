<?php


// traditional
$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "games"
);

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

?>