<?php

$server = 'localhost';
$user = 'root';
$pswd = '';
$db = 'e_commerce';

    $conn = new mysqli($server, $user, $pswd, $db);

    if($conn){
        // echo "Successful";
    }
?>