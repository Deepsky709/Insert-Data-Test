<?php
include 'data.php';
$data = [
    $_GET['id'],
    $_GET['nama'],
    $_GET['harga'],
    $_GET['review'],
    $_GET['developer']
];


foreach ($data as $a){
    echo "- ", $a;
    echo "<br>"; 
};

$e = "INSERT INTO puzzle_games (id, nama, harga, review, developer) VALUES ($data[0], $data[1], $data[2], $data[3], $data[4])";
mysqli_query($conn, $e);
?>