<?php
include 'db.php';
$data = [
    $_GET['id'],
    $_GET['nama'],
    $_GET['harga'],
    $_GET['review'],
    $_GET['developer']
];

// variabel sasaran -> variabel sementara
foreach ($data as $a){
    echo "- " , $a ;
    echo "<br>";
};


// query yang isinya adalah perintahnya

$perintah = "INSERT INTO puzzle_games VALUES (
            '$data[0]',
            '$data[1]',
            '$data[2]',
            '$data[3]',
            '$data[4]')";

mysqli_query($conn,$perintah);


?>