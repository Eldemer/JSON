<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $password = $_POST['Password'];


    $sql = "INSERT INTO crud_table (Name, Email, Phone,Password) VALUES ('$name', '$email'.'$phone','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("Location: index.html");
