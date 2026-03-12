<h1> Register data will display here  </h1>

<?php
    $name = $_POST["fname"];
    $user = $_POST["userName"];
    $password = $_POST["pass"];
?>

<ul>
    <li> <?php echo $name;   ?> </li>
    <li> <?php echo $user;   ?> </li>
    <li> <?php echo $password;   ?> </li>
</ul>