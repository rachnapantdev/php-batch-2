<?php
    include('./db.php');


    $studentName =  $_GET["sname"];
    $email =  $_GET["email"];


      $sql = "insert into student (sname, email) values ('".$studentName."','".$email."')";

    if ($conn->query($sql) === TRUE) {
    echo "Data Inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>