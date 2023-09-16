<?php
$log = NULL;
session_start();
if(isset($_SESSION["login"])){
    $log = "Logout";
    $href = "logout.php";
}
else{
    $log = "Login";
    $href = "login.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href=<?php echo $href?>><?php echo $log ?></a></li>
            <li><a href="ourDonars.php">Our Donars</a></li>
            <li><input type="search" placeholder="Search" name="" id=""><button>🔍</button></li>
        </ul>
    </nav>
</body>
</html>