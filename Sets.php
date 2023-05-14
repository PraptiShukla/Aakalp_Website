<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<body style="background-image: url(css/Images/bg-1.jpg);">
    <div class="jhead"><u><h1 style="text-align: center; font-size:50px; font-family:Lucida Calligraphy; margin-top:15px;">Our Sets</h1></u></div>
    
<br><br><form name="frm" method="post" action="http://localhost/MCA/Sets.php" autocomplete="off">    
    <div class="cards">
      <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Bridal Set</title><image href="css/Images/bridal.jpg" width="100%" height="100%"></svg>
          <div class="card-body">
          <hr><h5 style="font-family: Lucida Calliography;"> Bridal Sets <br> from &#x20b9; 35000</h5><hr>
          <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
          <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>  
        </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Baby gift Set</title><image href="css/Images/baby.jpg" width="100%" height="100%"></svg>
          <div class="card-body">
          <hr><h5 style="font-family: Lucida Calliography;"> Baby Gift Sets <br> from &#x20b9; 12000</h5><hr>
          <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
          <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Puja Thali Set</title><image href="css/Images/puja.jpg" width="100%" height="100%"></svg>
          <div class="card-body">
          <hr><h5 style="font-family: Lucida Calliography;"> Puja Thali Sets <br> from &#x20b9; 22000</h5><hr>
          <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
          <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Gift Set</title><image href="css/Images/gift.jpg" width="100%" height="100%"></svg>
          <div class="card-body">
          <hr><h5 style="font-family: Lucida Calliography;"> Gift Sets <br> from &#x20b9; 16000</h5><hr>
          <button class="btn btn-outline-success" class="btn" name="purchase" style="border-color: #12AD2B; margin-left: 20px;"><span class="lnr lnr-inbox"></span>&nbsp Purchase </button>
          <button class="btn btn-outline-warning" class="btn" name="cart" style="border-color: #FFEF00; width:140px"><span class="lnr lnr-cart"></span>&nbsp Add to Cart </button>
          </div>
        </div>
      </div>
</form>
</div>
</div>
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