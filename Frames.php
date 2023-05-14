<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body>
<div class="jhead">
        <b><h1> Frames and Decors </Style> </h1></b>
</div>
<br><br>

<form name="frm" method="post" action="http://localhost/MCA/Frames.php" autocomplete="off">
<table style="margin-left: 100px; margin-right: 50px;">
  <tr>
    <td><img src="css/Images/F01.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Item 1 <br><br> &#x20b9; 2000  &nbsp &nbsp  <strike>&#x20b9; 2500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/F02.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Item 2 <br><br> &#x20b9; 1500  &nbsp &nbsp  <strike>&#x20b9; 2500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/F03.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Item 3 <br><br> &#x20b9; 9000  &nbsp &nbsp  <strike>&#x20b9; 1045 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
  </tr>

  <tr>
  <td><img src="css/Images/F04.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Item 4 <br><br> &#x20b9; 4000  &nbsp &nbsp  <strike>&#x20b9; 4500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/F05.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Item 5 <br><br> &#x20b9; 3500  &nbsp &nbsp  <strike>&#x20b9; 4300 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/F06.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Item 6 <br><br> &#x20b9; 5000  &nbsp &nbsp  <strike>&#x20b9; 5575 </strike></div><br>
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