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
    <h1> Assosiative Array  </h1>

    <?php 
        $emp=[
            "id"=>1,
            "name"=>"Aman",
            "city"=>"Dehradun",
            "dept"=>"IT",
            "isActive"=>true
        ];

        // echo $emp;
    print_r($emp);
    echo $emp["name"];
    ?>
</body>
</html>