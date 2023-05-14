<!DOCTYPE html>
<html>
    <head>
        <title>Aakalp Jewellers Online Shopping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "css/Login.css"/>
        <!-- <link rel="stylesheet" href= "css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css"/> -->
        <link rel="icon" href="css/Images/Logo.jpg" type="image/x-icon">
        
    </head>
    <body>
        <div class="container">
            <form name="frm" method="post" action="http://localhost/MCA/Login.php" autocomplete="off">
            
            <h1 class="glow" style="text-align: center; font-size:70px; font-family:Lucida Calligraphy; color:#E6E8FA; margin-top:15px;">Aakalp</h1>
            <h1><label for="User Login" style="font-size:40px;"> User Login</label></h1><br><br>
 
            <b><lable class="L" for="User Name" style="font-family:Eras Medium ITC; font-size:23px;color:#FFFFF4;"> User Name : </lable></b>
            <input type="text" name="uname" style="font-size:20px; font-family:Segoe UI;" required><br><br><br>

            <b><lable class="L" for="Password" style="font-family:Eras Medium ITC; font-size:23px;color:#FFFFF4;"> Password : </lable></b>&nbsp &nbsp
            <input type="password" name="pwd" style="font-size:20px; font-family:Segoe UI;" required><br>

        <br>
        <br>
             <button class="btn" type="submit" name="login" style="font-size:20px; font-family:Segoe UI Black;">Login</button>
        <!-- <td><input type="submit" name="login" value="Login"></td> -->
        </form><br>
        <p style="font-family:lucida calliography; font-size:20px; color:white; margin-left:40px;">Don't have an account?....
        <a href="NewU.php" style="font-size:20px; color:#5f0c93; margin:25px;">New User?</a> or &nbsp
        <a href="DelU.php" style="font-size:20px; color:#5f0c93;" >Delete User?</a>

        </div>
    </body>
</html>

<!-- <td><input name=sbm  type="submit" value="Submit"></td> -->


<?php
//error_reporting(0);
session_start();
$conn = mysqli_connect("localhost","root","","aakalp");
/* if($conn){
    echo "Connection Established";
} */
if (isset($_POST['login'])) {
    // echo "Inside Form";
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM login WHERE username = '$uname' && upassword = '$pwd' ";
    $run = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($run);

    if (is_array($row)) {
        $a = $_SESSION["uname"] = $row['0'];
        $b = $_SESSION["pwd"] = $row['1'];
       echo "Hello " . $_SESSION["uname"];
       
        header("location:http://localhost/MCA/Index.php");
    } else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password")';
        echo '</script>';
    }
}

?>

