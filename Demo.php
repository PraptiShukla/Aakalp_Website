<!DOCTYPE html>
<html>
    <head>
        <title>Aakalp Jewellers Online Shopping</title>
        <link rel="stylesheet" href= "Login.css"/>
    </head>
    <body>
        <div class="container">
            <form name="frm" method="post" action="http://localhost/MCA/Demo.php" autocomplete="off">
            
            <h1 class="glow" style="text-align: center; font-size:70px; font-family:Lucida Calligraphy; color:#E6E8FA; margin-top:15px;">Aakalp</h1>
              <h1><label for="User Login" style="font-size:35px;"> User Login</label></h1>
            <!--   <table style align ="center"> 
                <tr>
                 
                    <td><b><label for="User Name">User Name : </label></td>
                    <td><input type="text" name="uname" id="uname" style="font-size:20px; font-family:Segoe UI;" required></td>
                    <br>
                </tr>
                <tr>
                    <br><br>
                   
                    <td><b><label for="Password">Password : </label></td>
                    <td><input type="password" name="pwd" id="pwd" style="font-size:20px; font-family:Segoe UI" required></td>
                    <br>
                </tr>
            </table> -->
             
            <b><lable for="User Name" style="font-family:Eras Medium ITC; font-size:23px;color:#FFFFF4;"> User Name : </lable></b>
            <input type="text" name="uname" style="font-size:20px; font-family:Segoe UI;" required><br><br><br>

            <b><lable for="Password" style="font-family:Eras Medium ITC; font-size:23px;color:#FFFFF4;"> Password : </lable></b>&nbsp &nbsp
            <input type="password" name="pwd" style="font-size:20px; font-family:Segoe UI;" required><br>
        <br>
        <br>
             <td><button class="btn" type="submit" name="login" style="font-size:20px; font-family:Segoe UI Black;">Login</button></td> 
        <!-- <td><input type="submit" name="login" value="Login"></td> -->
         
        </form>
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
       
        header("location:http://localhost/MCA/Home.php");
    } else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password")';
        echo '</script>';
    }
}

?>