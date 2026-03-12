<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        nav{
            background-color: wheat;
        }
        nav ul{
            list-style-type: none;
        }
        nav ul li {
            display: inline-block;
            padding: 10px;
        }
        nav ul li a{
            color: black;
            text-decoration: none;
        }
        /* contact page css */
        .form-container{
            height: 100vh;
            display: flex ;
            justify-content: center;
            align-items: center;
        }        
        label{
            display: block;
            font-size: 20px;
        }
        input, textarea{
            width: 80%;
        }
        form{
            width: 70%;
            border: 5px solid;
            padding: 20px;
        }
        input[type="submit"]{
            width: 25%;
            padding: 10px 0px;
            background-color: black;
            color:beige
        }

    </style>
</head>
<body>
 <nav>
    <ul>
        <li> <a href="./"> Home </a> </li>
        <li> <a href="./about.php"> About </a> </li>
        <li> <a href="./product.php"> Products </a> </li>
        <li> <a href="./contact.php"> Contact </a> </li>
        <li> <a href="./blogs.php"> Blog </a> </li>
    </ul>
 </nav>   
