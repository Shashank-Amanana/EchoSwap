<?php
session_start();
$server = 'localhost:3342';
$database = 'echoswap';
$errors = array();
$name = "";
$password = "";

$conn = mysqli_connect($server, 'root', '', $database) or die("Couldn't connect the database");


function create_unique_id(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>