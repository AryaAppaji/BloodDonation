<?php
session_start();
$_SESSION["login"]=false;
if(isset($_POST["mail"],$_POST["phno"])){
    $mail = $_POST["mail"];
    $phno = $_POST["phno"];
}
$conn = $conn = mysqli_connect($_ENV["DB_HOST"],$_ENV["DB_USER_NAME"],$_ENV["DB_PASSWORD"],$_ENV["DB_NAME"]);
$query = mysqli_query($conn,"SELECT * from `donars` WHERE `EMail`='{$mail}' and `Mobile` = '{$phno}'");
$user = mysqli_fetch_assoc($query);

if($user){
    $_SESSION["login"] = true;    
}
header("Location: index.php");
exit;
?>