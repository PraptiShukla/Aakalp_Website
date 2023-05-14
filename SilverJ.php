<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body>
<div class="jhead">
        <b><h1> Silver Jewellery </Style> </h1></b>
</div>
<br><br>

<form name="frm" method="post" action="http://localhost/MCA/SilverJ.php" autocomplete="off">
<table style="margin-left: 100px; margin-right: 50px;">
  <tr>
    <td><img src="css/Images/Sj04.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Rings <br><br> &#x20b9; 9500  &nbsp &nbsp  <strike>&#x20b9; 10500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/Sj06.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Chains <br><br> &#x20b9; 3500  &nbsp &nbsp  <strike>&#x20b9; 4000 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/Sj03.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Bracelet <br><br> &#x20b9; 4000  &nbsp &nbsp  <strike>&#x20b9; 4645 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
  </tr>

  <tr>
  <td><img src="css/Images/Sj01.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Necklace <br><br> &#x20b9; 8000  &nbsp &nbsp  <strike>&#x20b9; 9200 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/Sj05.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Nosepin <br><br> &#x20b9; 3000  &nbsp &nbsp  <strike>&#x20b9; 3500 </strike></div><br>
    <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
    <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
    <b><span class="lnr lnr-heart"></span></b></td>
    <td><img src="css/Images/Sj02.jpg" height="300px" width="330px" style="margin: 15px 15px 15px 15px"> <br>
    <div class="content"> Earrings <br><br> &#x20b9; 1500  &nbsp &nbsp  <strike>&#x20b9; 2075 </strike></div><br>
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