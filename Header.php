<html>
<head>
        <title>Aakalp Jewellers Online Shopping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="css/Images/Logo.jpg" type="image/x-icon">
        
        <link rel="stylesheet" href= "css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href= "css/Home.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="up">
      <div class="slide-right"><h6><?php 
      error_reporting(0);
      // echo "<font color='#6A0DAD'>"."<b>"."Hello, User...."."</b>"."</font>";
         session_start();
         if (isset($_SESSION["uname"])){
           echo "<font color='#6A0DAD'>"."<b>"."Welcome, " . $_SESSION["uname"]."...</b>"."</font>";
        }
        // $conn = mysqli_connect("localhost","root","","aakalp");
        // $query = "SELECT cust_id FROM customer";
        // $run = mysqli_query($conn, $query);
        // $row = mysqli_fetch_array($run);
        // if (is_array($row)) {
        //    $_SESSION["uname"] = $row['0'];
        // echo $row;}
        ?></h6></div>
        <a style="color:green; margin:20px; text-decoration:none" href="https://www.whatsapp.com/"><b><span class="lnr lnr-bubble"></span>&nbsp Whatsapp</b></a>
        <a style="color:#6A0DAD; margin-left:900px; text-decoration:none" href="Login.php"><b><span class="lnr lnr-user"></span>&nbspLogout</b></a>
        <a style="color:#6A0DAD; margin:20px; text-decoration:none" href="Cart.php"><b><span class="lnr lnr-cart"></span>&nbsp Cart</b></a>
      </div>

      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
  <div class="container-fluid" style="background-color:#6f42c1;">
  <a href="About.php" style="text-decoration:none"><h1 class="glow" style="font-size:20px; font-family:Lucida Calligraphy; color:#E6E8FA; margin:0px 0px 0px 0px;">Aakalp</h1></a>&nbsp &nbsp &nbsp
    <!-- <a class="navbar-brand" href="#">Aakalp</a> -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:10px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="Index.php" style="color:antiquewhite">Home</a>
         </li>&nbsp &nbsp &nbsp
      <li class="nav-item">
          <a class="nav-link" href="wishlist.php" style="color:antiquewhite">Wishlist</a>
         </li>&nbsp &nbsp &nbsp
      <li class="nav-item">
          <a class="nav-link" href="offers.php" style="color:antiquewhite">Offers</a>
         </li>&nbsp &nbsp &nbsp
         <li class="nav-item">
          <a class="nav-link" href="Index.php#set" style="color:antiquewhite">Customize</a>
         </li>&nbsp &nbsp &nbsp
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:antiquewhite">
            Items
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Necklaces.php">Necklaces</a></li>
            <li><a class="dropdown-item" href="Earrings.php">Earrings</a></li>
            <li><a class="dropdown-item" href="Rings.php">Rings</a></li>
            <li><a class="dropdown-item" href="Bridal.php">Bridal Sets</a></li>
            <li><a class="dropdown-item" href="Bangles.php">Bangles</a></li>
            <li><a class="dropdown-item" href="Mangalsutra.php">Mangalsutra</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Maharashtrian.php">Maharashtrian</a></li>
            <li><a class="dropdown-item" href="Latest.php">Latst Designs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="SilverJ.php">Silver Jewellery</a></li>
            <li><a class="dropdown-item" href="Anklets.php">Anklets</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Puja.php">Puja Thali</a></li>
            <li><a class="dropdown-item" href="Idols.php">Idols</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Thali.php">Silver Thali</a></li>
            <li><a class="dropdown-item" href="Frames.php">Frames and Decors</a></li>
            <li><a class="dropdown-item" href="Baby.php">Baby Gifts</a></li>
            <li><a class="dropdown-item" href="Coins.php">Coins and Bars</a></li>
          </ul>
        </li>&nbsp &nbsp &nbsp
        <li class="nav-item">
          <a class="nav-link" href="Sets.php" style="color:antiquewhite">Sets</a>
         </li>&nbsp &nbsp &nbsp
         <li class="nav-item">
          <a class="nav-link" href="About.php" style="color:antiquewhite">About Us</a>
         </li>
      </ul>
       <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="height:40px; margin-top:7px;">
        <button class="btn btn-outline-primary" type="submit" style="margin-top:9px; margin-bottom:4px;">Search</button>
      </form> 
    </div>
  </div>
</nav>

        </body>
</html>