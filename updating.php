<?php
  session_start();
  $mysqli=mysqli_connect('localhost','root','','examination');
  $id=$_POST['id'];
  $name=$_POST['name'];
  $branch=$_POST['branch'];
  $reg=$_POST['reg'];
  $sub1=$_POST['subj1'];
  $sub2=$_POST['subj2'];
  $sub3=$_POST['subj3'];
  $sub4=$_POST['subj4'];
  $sub5=$_POST['subj5'];
  $sql="INSERT INTO student VALUES ('$id','$name','$branch','$reg','JNTUGV','JNTUGV')";
  $val=$mysqli->query($sql);
  $sql1="INSERT INTO subjects VALUES ('$id','$sub1','$sub2','$sub3','$sub4','$sub5')";
  $val1=$mysqli->query($sql1);
  if(($val && $val1)==1){
  $_SESSION["status"]="rows are effected successfully";
  }
  else{
    $_SESSION["status"]="values are not entered into the database";
  }
  header("Location:loginpage.php");
?>