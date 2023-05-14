<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body>
<div class="jhead">
        <b><h1> Coins and Bars </Style> </h1></b>
</div>
<br><br>

<form name="frm" method="post" action="http://localhost/MCA/Coins.php" autocomplete="off">
<table style="margin-left: 100px; margin-right: 50px;">
  <tr>
    <td><img src="css/Images/C01.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Gold Coins <br><br> &#x20b9; 25000  &nbsp &nbsp  <strike>&#x20b9; 26000 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/C02.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Gold Bars <br><br> &#x20b9; 22000  &nbsp &nbsp  <strike>&#x20b9; 23500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/C03.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Gold Vedhani <br><br> &#x20b9; 11000  &nbsp &nbsp  <strike>&#x20b9; 13500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
  </tr>

  <tr>
  <td><img src="css/Images/C04.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Silver Coins <br><br> &#x20b9; 8500  &nbsp &nbsp  <strike>&#x20b9; 9000 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/C05.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Silver Bars <br><br> &#x20b9; 3000  &nbsp &nbsp  <strike>&#x20b9; 3500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/C06.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Silver Vedhani <br><br> &#x20b9; 4500  &nbsp &nbsp  <strike>&#x20b9; 5000 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
  </tr>

</table>
</form>

<?php include('footer.php'); ?>
</body>
</html>


<?php include('footer.php'); ?>
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","aakalp");
if (isset($_POST['purchase'])) {
  echo "<script>window.location.href='Order.php';</script>";
    exit;
}
if (isset($_POST['cart'])) {
  echo "<script>window.location.href='Cart.php';</script>";
    exit;
}
?>