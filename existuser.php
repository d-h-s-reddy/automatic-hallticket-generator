<?php
 session_start();
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>existinguser</title>
</head>
<body>
    <h1> If your are the existing user then enter your hallticket number to print the hallticket</h1>
    <form action="index.php" method="post">
        <label class="te"> Enter the hallticket number:</label>
        <input type="text" name="id"><br>
        <?php$_SESSION['id']=$_POST['id'];?>
        <input type="submit" value="print the hallticket" class="btn2">
        
    </form>
</body>
</html>