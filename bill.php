<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body style="background-image: url(css/Images/bg-1.jpg);">
    <div class="jhead"><u><h1 style="text-align: center; font-size:50px; font-family:Lucida Calligraphy; margin-top:15px;">Invoice</h1></u></div>
    <br><br><br>

<div class="bill">
<label> Thank You for Shopping With Us.... <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Visit Again !!! </label>

<form name="frm" method="post" action="http://localhost/MCA/bill.php" autocomplete="off"><br><br>
<input type="text" placeholder="Please Enter Your Order Id Here..." name="order"><br><br>
<button class="btn btn-outline-primary" type="submit" class="btn" name="invoice" style="border-color: #AFDCEC; margin-left: 520px; width:230px; font-size:20px; font-family:Lucida Calligraphy;" onclick="show2();"> Generate Invoice </button>
</form>
</div>

   
</body>
</html>    

<!-- <script>
    function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script> -->


<?php
$conn = mysqli_connect("localhost","root","","aakalp");
$order = $_POST['order'];
// if (isset($_POST['invoice'])) {
//   echo "Thank You For Shopping With Us.....";
// }
if(isset($_POST['invoice'])){
  echo "<center><table border=1>";
      echo "<th>Invoice</th><br>";
      echo "<tr>";
      echo "<th>Date</th>";
      echo "<th>Time</th>";
      echo "<th>Order Id</th>";
      echo "<th>Cust_Id</th>";
      echo "<th>OT_Id</th>";
      echo "<th>Quantity</th>";
      echo "<th>Amount</th>";
      echo "<th>Order Given By</th>";
      echo "<th>Payment Mode</th>";
      echo "</tr>";
  $query = "select * from orders where order_id='$order'";
$run = mysqli_query($conn,$query) or die(mysql_error());
while($row=mysqli_fetch_array($run))
  {
    echo "<td>".date("Y-m-d")."</td>";
    echo "<td>".date("h:i:sa")."</td>";  
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";
    
  }
echo "</table></center>";
}
?>

<?php include('footer.php'); ?>