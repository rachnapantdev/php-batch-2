<?php
        include('./db.php');

    $sql = "insert into student (sname, email) values ('Aman','aman@gmail.com')";

    if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>