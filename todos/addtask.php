<?php
include('./config/db.php');

$task = $_GET["task"];

$sql = "insert into todo (taskName) values('" . $task . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>