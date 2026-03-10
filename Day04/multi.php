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
    <h1> Multi Dimensional Array</h1>
    <?php 
        $arr=[
            [1,2,3],
            ["Aman","Naman","Raman"],
            ["Delhi","Noida"]
        ];

       foreach($arr as $a)
        {
            foreach($a as $n){
                echo $n."<br>";
            }
            echo"================<br>";
        }
    
    ?>

</body>
</html>