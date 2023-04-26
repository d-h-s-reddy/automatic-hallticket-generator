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
    <title>Loginpage</title>
    <style>
        body{
            text-align:center;
        }
        label{
            text-align:left;
        }
    
    </style>
</head>
<body>
    <h1>Enter the details to store in the database.</h1>
    <form action="updating.php" method="post">
        <label class="te">Enter your college id:<label>
        <input type="text" name="id"><br>
        <label class="te">Enter your Name:<label>
        <input type="text" name="name"><br>
        <label class="te">Branch:</label>
        <input type="text" name="branch"><br>
        <label class="te">Regulation:</label>
        <input type="text" name="reg"><br>
        <label class="te">select the First subject:</label>
        <select name="subj1" class="te1">
            <option value="R201921">R201921</option>
            <option value="R201922">R201922</option>
            <option value="R201923">R201923</option>
            <option value="R201924">R201924</option>
            <option value="R201925">R201925</option>
            <option value="R201926">R201926</option>
        </select><br>
        <label >select the second subject:</label>
        <select name="subj2" class="te1">
            <option value="R201921">R201921</option>
            <option value="R201922">R201922</option>
            <option value="R201923">R201923</option>
            <option value="R201924">R201924</option>
            <option value="R201925">R201925</option>
            <option value="R201926">R201926</option>
        </select><br>
        <label >select the third subject:</label>
        <select name="subj3" class="te1">
            <option value="R201921">R201921</option>
            <option value="R201922">R201922</option>
            <option value="R201923">R201923</option>
            <option value="R201924">R201924</option>
            <option value="R201925">R201925</option>
            <option value="R201926">R201926</option>
        </select><br>
        <input type="submit" value="login" class="btn2"><br>
    </form>
    <?php
    if(isset($_SESSION["status"])){
        echo $_SESSION["status"];
        unset($_SESSION["status"]);
    }
    ?>
    <center><br>
    <form action="existuser.php">
        <label class="te">Download the Hallticket from here:</label>
        <input type="submit" value="print" class="btn2">
    </form>
</center>
</body>
</html>