<?php
    $server = "localhost";
    $userName = "root";
    $password = "";
    $databaseName="sms";

   $conn = new mysqli($server, $userName, $password, $databaseName);

   if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo " Database Connected Successfully";
    }
?>

<!-- create table user (uid int primary Key auto_increment, userName varchar(44), email varchar(44), password varchar(33) ) -->