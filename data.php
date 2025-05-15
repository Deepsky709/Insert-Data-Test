<?php


//traditional
$conn = mysqli_connect(
    $host = "localhost",
    $user = "root",
    $pass = "root",
    $db = "games"
);

if ($conn -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysql;
    exit();
};

?>