<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="updating.php" method="post">
        <label>Enter your college id:<label>
        <input type="text" name="id"><br>
        <label>Enter your Name<label>
        <input type="text" name="name"><br>
        <label >Branch</label>
        <input type="text" name="branch"><br>
        <label>Regulation</label>
        <input type="text" name="reg"><br>
        <label >select the First subject:</label>
        <select name="subj1">
            <option value="R201921">R201921</option>
            <option value="R201922">R201922</option>
            <option value="R201923">R201923</option>
            <option value="R201924">R201924</option>
            <option value="R201925">R201925</option>
            <option value="R201926">R201926</option>
        </select><br>
        <label >select the second subject:</label>
        <select name="subj2">
            <option value="R201921">R201921</option>
            <option value="R201922">R201922</option>
            <option value="R201923">R201923</option>
            <option value="R201924">R201924</option>
            <option value="R201925">R201925</option>
            <option value="R201926">R201926</option>
        </select><br>
        <label >select the third subject:</label>
        <select name="subj3">
            <option value="R201921">R201921</option>
            <option value="R201922">R201922</option>
            <option value="R201923">R201923</option>
            <option value="R201924">R201924</option>
            <option value="R201925">R201925</option>
            <option value="R201926">R201926</option>
        </select><br>
        <input type="submit" value="login"><br>
    </form>
    <?php
    if(isset($_SESSION["status"])){
        echo $_SESSION["status"];
        unset($_SESSION["status"]);
    }
    ?>
    <center><br>
    <form action="index.php">
        <input type="submit" value="print">
    </form>
</center>
</body>
</html>