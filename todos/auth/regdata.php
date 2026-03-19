<?php
include('../config/db.php');
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // insert into user (userName, email,password )values ('Aman','aman@gmail.com','3434');

    $sql = "insert into user (userName, email , password) values ('".$fname."','".$email."','".$password."')";

    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location:login.php");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>