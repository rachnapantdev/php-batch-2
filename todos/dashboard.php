<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body {
            background-color: black;
        } */

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;

        }

        thead th {
            background: #ccc;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #efefef;
        }

        tr:hover {
            background: #d1d1d1;
        }

        .add,
        .delete {
            padding: 10px 15px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 20px;
            background-color: black;
            color: white;
            text-decoration: none;
        }

        .delete {
            background-color: black;
            color: white;
        }
    </style>
</head>





<body>

    <a class="add" href="./addtodo.php"> Add </a>

    <table class="my_table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Task Name </th>
                <th>Action </th>
            </tr>
        </thead>

        <?php
        include('./config/db.php');

        // fetch all the data from todo table

        $sql = "select * from todo";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>
                <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['taskName']; ?> </td>
                    <td><button class="delete"> Delete </button></td>

                </tr>

        <?php

            }
        } else {
            echo "Inavlid User Name or Password";
        }

        ?>






    </table>

</body>

</html>