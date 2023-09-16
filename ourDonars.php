<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Donars</title>
    <link rel="stylesheet" href="ourDonars.css">
</head>
<body>
<?php
    include_once "navbar.php";
    //Connecting to MySQL Database.
    $conn = mysqli_connect($_ENV["DB_HOST"],$_ENV["DB_USER_NAME"],$_ENV["DB_PASSWORD"],$_ENV["DB_NAME"]);

    $fetch="SELECT `Name`, `BGRP`, `Address`, `Mobile`, `EMail` FROM `donars` ";
    $result = mysqli_query($conn,$fetch);
?>
<br>
<center>
<table>
    <tr>
        <td>Name</td>
        <td>Blood group</td>
        <td>Address</td>
        <td>Mobile</td>
        <td>E-Mail</td>
    </tr>
    <?php 
    //Showing fetched data from MySQL database in tabular format.
    while($res=mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <!--Loading the fetched database elements into table cells.-->
        <td><?php echo $res['Name'];?></td>
        <td><?php echo $res['BGRP'];?></td>
        <td><?php echo $res['Address'];?></td>
        <td><?php echo $res['Mobile'];?></td>
        <td><?php echo $res['EMail'];?></td>
    </tr>
    <?php } ?>
</table>
</center>
<br>
<?php include_once "footer.php";?>    
</body>
</html>

