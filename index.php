<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donars</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php include_once "navbar.php"?>
    <div class="content" align="center">
    <?php
    $conn = mysqli_connect($_ENV["DB_HOST"],$_ENV["DB_USER_NAME"],$_ENV["DB_PASSWORD"],$_ENV["DB_NAME"]);

    $fetch="SELECT `Name`, `BGRP`, `Address`, `Mobile`, `EMail` FROM `donars`";
    $result = mysqli_query($conn,$fetch);

    $Apos=0;
    $Aneg=0;
    $Bpos=0;
    $Bneg=0;
    $ABpos=0;
    $ABneg=0;
    $Opos=0;
    $Oneg=0;
    while($res=mysqli_fetch_assoc($result)){
        if($res["BGRP"]=="A+"){
            $Apos+=1;
        }
        elseif($res["BGRP"]=="A-"){
            $Aneg+=1;
        }
        elseif($res["BGRP"]=="B+"){
            $Bpos+=1;
        }
        elseif($res["BGRP"]=="B-"){
            $Bneg+=1;
        }
        elseif($res["BGRP"]=="AB+"){
            $ABpos+=1;
        }
        elseif($res["BGRP"]=="AB-"){
            $ABneg+=1;
        }
        elseif($res["BGRP"]=="O+"){
            $Opos+=1;
        }
        elseif($res["BGRP"]=="O-"){
            $Oneg+=1;
        }
    }
    $total=$Apos+$Aneg+$Bpos+$Bneg+$ABpos+$ABneg+$Opos+$Oneg;
    /*$Apos=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`A+`");
    $Aneg=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`A-`");
    $Bpos=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`B+`");
    $Bneg=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`B-`");
    $ABpos=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`AB+`");
    $ABneg=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`AB-`");
    $Opos=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`O+`");
    $Oneg=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars` WHERE `BGRP`=`O-`");
    $total=mysqli_query($conn,"SELECT COUNT(`BGRP`) FROM `donars`");

    $q1=mysqli_fetch_assoc($q1);
    $q2=mysqli_fetch_assoc($q2);
    $q3=mysqli_fetch_assoc($q3);
    $q4=mysqli_fetch_assoc($q4);
    $q5=mysqli_fetch_assoc($q5);
    $q6=mysqli_fetch_assoc($q6);
    $q7=mysqli_fetch_assoc($q7);
    $q8=mysqli_fetch_assoc($q8);
    $q9=mysqli_fetch_assoc($q9);*/
?>

        <div class="sub2"><img src="donation.png"></div>
        <br>
        <table cellspacing="20px">
            <tr>
                <td><h1>A+</h1><p>Available Donars: <?php echo $Apos;?></p></td>
                <td><h1>A-</h1><p>Available Donars: <?php echo $Aneg;?></p></td>
                <td><h1>B+</h1><p>Available Donars: <?php echo $Bpos;?></p></td>
                <td><h1>B-</h1><p>Available Donars: <?php echo $Bneg;?></p></td>
            </tr>
            
            <tr>
                <td><h1>AB+</h1><p>Available Donars: <?php echo $ABpos;?></p></td>
                <td><h1>AB-</h1><p>Available Donars: <?php echo $ABneg;?></p></td>
                <td><h1>O+</h1><p>Available Donars: <?php echo $Opos;?></p></td>
                <td><h1>O-</h1><p>Available Donars: <?php echo $Oneg;?></p></td>
            </tr>
            
            <tr>
                <td colspan=4>
                    <?php echo"Total Available Donars: {$total}";?>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <?php include_once "footer.php"?>
</body>
</html>