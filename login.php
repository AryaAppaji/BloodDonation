<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php include_once "navbar.php"?>
    <h1>LOGIN</h1>
    <br>
    <form action="login2.php" method="post" align="center">
        <input type="email" name="mail" id="" placeholder="E-Mail Address" required><br><br>
        <input type="number" name="phno" id="" placeholder="Mobile Number" required><br><br>
        <button type="submit"><span>Login</span></button>
    </form>
    <br>
    <?php include_once "footer.php"?>
</body>
</html>