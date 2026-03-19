<?php
    include('../config/db.php');

    $email = $_POST["email"];
    $password = $_POST['password'];

    // select email, password from user where email="sj@gmail.com" and password="123";


    $sql = "select email, password from user where email='".$email."' and password = '".$password."'";


    $result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Email :  " . $row["email"]. " - Password: " . $row["password"]. "<br>";
    header("Location: ../dashboard.php");
  }
} else {
  echo "Inavlid User Name or Password";
}

$conn->close();




?>