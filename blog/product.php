<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <table width="100%" cellpadding="20">
        <thead>
            <tr>
                <th> <a href="./">Home</a> </th>
                <th> <a href="./about.php">About</a> </th>
                <th> <a href="./product.php">Product</a> </th>
            </tr>
        </thead>
    </table>    
    <?php
            $pid = 101;
            $pname="Tea";
            $price =20;
            $qty=60;

            $total = $price * $qty;
    ?>
    <table border="1" width="100%" >
        <thead>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Price </th>
                <th> Qty </th>
                <th> Total </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $pid; ?> </td>
                <td><?php echo $pname; ?> </td>
                <td><?php echo $price; ?> </td>
                <td><?php echo $qty; ?> </td>
                <td><?php echo $total; ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>