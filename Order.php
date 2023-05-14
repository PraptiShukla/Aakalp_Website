<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body style="background-image: url(css/Images/bg-1.jpg);">
    <div class="jhead"><u><h1 style="text-align: center; font-size:50px; font-family:Lucida Calligraphy; margin-top:15px;">Order</h1></u></div>
    <div class="order">
    <form name="frm" method="post" action="http://localhost/MCA/Order.php" autocomplete="off">
        
        <lable for="Order Id" style="font-family:Eras Medium ITC; font-size:20px;"> Order Id : </lable>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="text" name="oid" style="font-size:20px; font-family:Segoe UI;" required><br><br>

        <lable for="Cust Id" style="font-family:Eras Medium ITC; font-size:20px;"> Customer Id : </lable>&nbsp &nbsp &nbsp &nbsp
        <input type="text" name="cid" style="font-size:20px; font-family:Segoe UI;" required><br><br>
        <lable for="OrderType" style="font-family:Eras Medium ITC; font-size:20px;"> Order Type : </lable> &nbsp &nbsp &nbsp &nbsp &nbsp 
        <select name="ordertype" id="">
        <option value="Ot01">Item</option>
        <option value="Ot02">Set</option>
        <option value="Ot03">Customized</option>
        </select><br><br>
        <lable for="Quantity" style="font-family:Eras Medium ITC; font-size:20px;"> Content Quantity : </lable>
        <input type="text" name="quantity" style="font-size:20px; font-family:Segoe UI;" required><br><br>
        <lable for="TotAmount" style="font-family:Eras Medium ITC; font-size:20px;"> Total Amount : </lable> &nbsp &nbsp &nbsp
        <input type="text" name="amount" style="font-size:20px; font-family:Segoe UI;" required><br><br>

        <lable for="Orde_given_by" style="font-family:Eras Medium ITC; font-size:20px;"> Order Given By : </lable>&nbsp
        <select name="ogb" id="">
        <option value="E01">Sakshi Pathak</option>
        <option value="E02">Sonam Kulkarni</option>
        <option value="E03">Vasant Gadgil</option>
        <option value="E04">Meenal Joshi</option>
        <option value="E05">Rahul Vaidya</option>
        </select><br><br>


    <lable for="Payment" style="font-family:Eras Medium ITC; font-size:20px;">
    Payment Method : </lable> &nbsp &nbsp &nbsp &nbsp  
    <input class="form-check-input" style="width: 20px; font-size:20px;"; type="radio" name="method" value="Online" id="method" onclick="show2();"> &nbsp Online &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" style="width: 20px; font-size:20px;"; type="radio" name="method" value="Offline" id="method" onclick="show1();"> &nbsp Offline
     
    <br><br><button class="button" type="submit" name="purchase" style="font-size:20px; font-family:Times New Roman; margin-left: 120px;">Purchase</button><br><br>
    </div></div>
    <div id="div1" class="hide">
    <hr><br>

    <div class="payment"><br>
  <h2 style="margin-left:170px;"> Make Payment </h2> <br>
 <p style="font-size:20px; margin-left:25px;"> Saved Cards: </p>
 <input type="text" placeholder="**** **** **** 3193">&nbsp &nbsp &nbsp &nbsp
  <img  src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/> &nbsp &nbsp &nbsp &nbsp &nbsp 
  <a href="" style="text-decoration:none; font-size:16px;" >Remove card</a> <br><br>
  <input type="text" placeholder="**** **** **** 4296">&nbsp &nbsp &nbsp &nbsp
  <img  src="https://img.icons8.com/color/48/000000/visa.png"/> &nbsp &nbsp &nbsp &nbsp &nbsp 
  <a href="" style="text-decoration:none; font-size:16px;" >Remove card</a> <br><br>
  <p style="font-size:20px; margin-left:25px;"> Add New Card: </p>
  <input type="text" placeholder="Card Holder Name eg. Meera Joshi" style="width:450px;"><br><br>
  <input type="text" placeholder="Card No. eg. 5134-5264-4" style="width:210px;">
  <input type="text" placeholder="Exp. Date" style="width:75px;"> 
  <input type="text" placeholder="CVV" style="width:65px;"><br><br><br>
  <button> Add Card </button>
  </div>
    </div>
    </form>  
    <!-- <div class="order1">
    <form name="frm" method="post" action="http://localhost/MCA/Order.php" autocomplete="off">
    <lable for="custbyname" style="font-family:Eras Medium ITC; font-size:20px;"> Find Customer Id By Name : </lable>
        <input type="text" name="custbyname" style="font-size:20px; font-family:Segoe UI; margin-left:20px;" required> &nbsp
        <button class="button" type="submit" name="findname" style="font-size:20px; font-family:Times New Roman;">Find</button>
</form>
    </div> -->

<?php include('footer.php'); ?>
</body>
</html>  

<script>
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>    
      




<?php
$conn = mysqli_connect("localhost","root","","aakalp");

if(isset($_POST['purchase'])){
    $oid = $_POST['oid'];
    $cid = $_POST['cid'];
    $ordertype = $_POST['ordertype'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $ogb = $_POST['ogb'];
    $payment = $_POST['method'];
   
    $query = "insert into orders(order_id, cust_id, ot_id, content_quantity, tot_amount, order_given_by, payment)values('$oid','$cid','$ordertype','$quantity','$amount','$ogb','$payment')";
    $run = mysqli_query($conn, $query);
    if($run){   echo"<center>";
        echo "Item Purchased Successfully....";
        echo "<script>window.location.href='bill.php';</script>";
    exit;
        echo"</center>";
    }else{   echo"<center>";
      //  echo "Can't Purchase....";
        echo"</center>";
    }
}

if(isset($_POST['findname'])){
    $custbyname = $_POST['custbyname'];

    echo "<center><table border=1>";
        echo "<caption>Customer ID</caption><br>";
        echo "<tr>";
        echo "<th>Customer Name</th>";
        echo "<th>Customer Id</th>";
        echo "</tr>";
    $query = "select cust_name, cust_id from customer where cust_name='$custbyname'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
?>