<?php
  session_start();
  $mysqli=mysqli_connect('localhost','root','','examination');
  $v=$_SESSION['id'];
  $sql="SELECT * FROM student where rollno='$v'";
  $result=$mysqli->query($sql);
//   $result2=$mysqli->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
            border: 1px solid black;
        }
        img{
            padding-top:5px;
            height:100px;
            width:100px;
        }
        .tb1{
            margin-left:50px;
            text-align:left;
        }
        .tb2{
            margin-left:auto;
            margin-right:auto;
            background-color:#D8D8D8;
            border:2px solid white;
            border-collapse:collapse;
        }
        .tb2tr{
            border:2px solid white;
            border-collapse:collapse;
        }
        .tb2tb1{
            border:2px solid white;
            border-collapse:collapse;
            text-align:left;
            padding-right:20px;

        }
        .tb2td2{
            padding-right:250px;
            padding-left:10px;
            height:30px;
            border:2px solid white;
            border-collapse:collapse;
        }
        .tb2td3{
           text-align:right;
           padding-left:30px;
           border:2px solid white;
            border-collapse:collapse;
        }
        hr{
            align:center;
            width:90%;
        }
        li{
            text-align:left;
        }h2{
            text-align:left;
            padding-left:30px;
        }
        .dd{
            text-align:left;
            padding-left:30px;  
        }
        .div1{
            border:1px solid black;
        }

    </style>
</head>
<body>
    <?php
       $rows=$result->fetch_assoc()?>
       <img src="logo.png" alt="college logo"/>
       <h3>JNTU-GV College of Engineering, Vizianagaram</h3>
       <h4>Examination Section</h4><hr>
       <h4>Hall Ticket</h4><hr>
    <table class="tb1">
        <tr>
           <td>Roll No:</td>
           <td><?php 
           $val=$rows['rollno'];
           echo $val;?></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><?php echo $rows['name'];?></td>
        </tr>   
        <tr>
            <td>Branch:</td>
            <td><?php echo $rows['branch'];?></td>
        </tr>   
        <tr>
            <td>Regulation:</td>
            <td><?php echo $rows['regulation'];?></td>
        </tr>   
        <tr>
            <td>college:</td>
            <td><?php echo $rows['college'];?></td>
        </tr> 
        <tr>
            <td>center:</td>
            <td><?php echo $rows['center'];?></td>
        </tr> 
    </table>
        <h3>B.Tech IV B.Tech II Semester R20 April 2023</h3>
        <?php
           $sql1="SELECT * FROM subjects WHERE rno='$val'";
           $result1=$mysqli->query($sql1);
           $dd=array();
           $num=1;
        ?>
        <table class="tb2" >
            <?php
              while($rows1= mysqli_fetch_array($result1)){
                for($i=0;$i<3;$i++){
                   $dd[$i]=$rows1[$i+1];
                }
              }
              foreach($dd as $r){
                $sql2="SELECT * FROM dates WHERE subcodes='$r'";
                $result2=$mysqli->query($sql2);
                while($row2 = $result2->fetch_assoc()){
                    echo "<tr class='tb2tr'>";
                    echo "<td class='tb2td1'>$num</td>";
                    echo "<td class='tb2td2'>$row2[subcodes]-$row2[names]</td>";
                    // echo "<td class='tb2td2'>$row2[names] </td>";
                    echo "<td class='tb2td3'>$row2[dates] </td>";
                    echo "</tr>";
                }
                $num=$num+1;
              }
           ?>  
        <table>
        <br><br><br><br><br><br><br>
        <h2>Note:</h2>
        <ul>
            <li>Students should be present in the examination hall at least 15
                minutes before the commencement of examination.</li>
            <li>No student is allowed into the examination hall after the
                commencement of examination.</li>
            <li>Students are NOT permitted to bring Cell Phone inside the
                examination hall. Possession of these inside the examination hall /
                premises will be viewed seriously</li>
        </ul>
        <p class="dd"><b>Download:</b><?php date_default_timezone_set("Asia/Kolkata");
        echo date("Y-m-d h:i:s")?></p>
       
        <br><br>
</body>
</html>