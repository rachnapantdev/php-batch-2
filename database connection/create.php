<?php
include('./db.php');


// Create table:

$sql = " create table student (sid int primary key auto_increment, 
                sname varchar(33), email varchar(33) ) ";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>