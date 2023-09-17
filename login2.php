<?php
session_start();
$_SESSION["login"]=false;
if(isset($_POST["mail"],$_POST["phno"])){
    $mail = $_POST["mail"];
    $phno = $_POST["phno"];
}
$conn = mysqli_connect("localhost","root","","blooddonation");
$query = mysqli_query($conn,"SELECT * from `donars` WHERE `EMail`='{$mail}' and `Mobile` = '{$phno}'");
$user = mysqli_fetch_assoc($query);

if($user){
    $_SESSION["login"] = true;    
}
header("Location: index.php");
exit;
?>