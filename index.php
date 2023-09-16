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