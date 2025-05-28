<?php

$server = 'localhost';
$user = 'root';
$pswd = '';
$db = 'e_commerce';

    $conn = new mysqli($server, $user, $pswd, $db);

  try {
      if(!$conn){
          die('Connection Failed');
      }
  } catch (\Throwable $th) {
      throw $th;
  }
?>