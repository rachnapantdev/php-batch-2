<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li> <a href="./indexedArray.php"> Indexed Array </a> </li>
        <li> <a href="./assosiativeArray.php"> Assosiative Array </a> </li>
        <li> <a href="./multi.php"> Multi Array </a> </li>
    </ul>

    <?php
    $city = ["Delhi", "Noida", "Ghaziabad", "Nainital", "Rishikesh", "Dehradun"];
    // fetch with index number
    echo $city[0];

    for ($c = 0; $c < count($city); $c++) {
        echo $city[$c] . "<br>";
    }
    foreach ($city as $c) {
        echo "<h1> Welcome to the " . $c . "</h1>";
    }

    ?>
</body>

</html>