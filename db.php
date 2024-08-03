<?php 

$server = "localhost";
$userName = "root";
$password = '';
$dbName = 'crud';


$conn = new mysqli($server,$userName,$password,$dbName);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

