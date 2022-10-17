<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'himel');
define('DB_PASS', '123456');
define('DB_NAME', 'php-dev');

//Create Connection 

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Checking the Connection

if($conn->connect_error){
    die('Connection Failed ' . $conn->connect_error );
}
