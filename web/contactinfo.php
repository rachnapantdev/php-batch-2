<?php
    include('./includes/header.php');
// How to fetch data from FORM with name
    $fullName = $_GET["fname"];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $message=$_GET['msg'];
 ?>
    <h1> Information will Display here !! </h1>
        <ul>
            <li>
                <?php  echo $fullName;  ?>
            </li>
            <li>
                <?php  echo $email;  ?>
            </li>
            <li>
                <?php  echo $phone;  ?>
            </li>
            <li>
                <?php  echo $message;  ?>
            </li>
        </ul>
<?php
    include('./includes/footer.php')
 ?>