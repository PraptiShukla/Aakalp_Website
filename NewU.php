<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aakalp Jewellers Online Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/Login.css"/>
    <link rel="icon" href="css/Images/Logo.jpg" type="image/x-icon">
</head>
<body>
<div class="container">

<form name="frm" method="post" action="http://localhost/MCA/NewU.php" autocomplete="off">

<h1 class="glow" style="text-align: center; font-size:70px; font-family:Lucida Calligraphy; color:#E6E8FA; margin-top:15px;">Aakalp</h1>
<u style="color:white;"><h1 style=" text-align :center;"><label for="User Login" style="font-size:35px;"> New User Login</label></h1></u>
<br><br> 

<lable for="User Name" style="font-family:Eras Medium ITC; font-size:20px;color:#FFFFF4;"> User Name : </lable>
<input type="text" name="uname" style="font-size:20px; font-family:Segoe UI;" required><br><br><br>

<lable for="Password" style="font-family:Eras Medium ITC; font-size:20px;color:#FFFFF4;"> Password : </lable>&nbsp &nbsp
<input type="password" name="pwd" style="font-size:20px; font-family:Segoe UI;" required><br><br><br><br>

<button class="btn" type="submit" name="add" style="font-size:20px; font-family:Segoe UI Black;">Add</button>
</form>
</div>
</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost","root","","aakalp");

if (isset($_POST['add'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $query = "insert into login(username,upassword)values('$uname','$pwd')";
    $run = mysqli_query($conn, $query);
    if($run){   echo"<center>";
        echo "User Added Successfully....";
        header("location:http://localhost/MCA/Login.php");
        echo"</center>";
    }else{   echo"<center>";
        echo "Can't Add User....";
        echo"</center>";
    }
}
?>