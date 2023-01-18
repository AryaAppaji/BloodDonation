<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <?php include_once "navbar.php"?>
        <h1>REGISTER</h1>
        <br>
        <form action="insert.php" method="post" target="_blank"align="center">
            <input type="text" name="Name" placeholder="Name" required><br><br>
            Blood Group <select name="B-GRP" id="bgroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <br><br>    
            <textarea name="Address" cols="30" rows="10" placeholder="Address"></textarea><br><br>    
            <input type="number" name="phno" placeholder="Mobile Number" required><br><br>    
            <input type="email" name="mail" placeholder="E-Mail Address" required><br><br>
            <button type="submit"><span>Register</span></button>
        </form>
        <br>
        <?php include_once "footer.php"?>
</body>
</html>



































