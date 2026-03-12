<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="reg">
        <form action="regdata.php" method="post">
            <div class="box">
                <label for=""> Name</label>
                <input type="text" name="fname">
            </div>
            <div class="box">
                <label for=""> User Name</label>
                <input type="text" name="userName">
            </div>
            <div class="box">
                <label for="">Password</label>
                <input type="password" name="pass">
            </div>
            <div class="box">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>