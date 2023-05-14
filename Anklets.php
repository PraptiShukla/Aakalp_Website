<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body>
<div class="jhead">
        <b><h1> Anklets </Style> </h1></b>
</div>
<br><br>

<form name="frm" method="post" action="http://localhost/MCA/Anklets.php" autocomplete="off">
<table style="margin-left: 100px; margin-right: 50px;">
  <tr>
    <td><img src="css/Images/A01.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Anklets 1 <br><br> &#x20b9; 12000  &nbsp &nbsp  <strike>&#x20b9; 12500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/A02.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Anklets 2 <br><br> &#x20b9; 5000  &nbsp &nbsp  <strike>&#x20b9; 6000 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/A04.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Anklets 3 <br><br> &#x20b9; 11000  &nbsp &nbsp  <strike>&#x20b9; 13500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
  </tr>

</table>
</form>

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