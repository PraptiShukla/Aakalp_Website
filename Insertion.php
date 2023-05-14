<!DOCTYPE html>
<html> 
<?php include('header.php'); ?>
    <body>
<div class="jhead">
        <b><h1> Add New Item </h1></b>
</div>

<form name="frm" method="post" action="http://localhost/MCA/Insertion.php" autocomplete="off"> <br><br><br>

<lable for="Item Details ID" style="font-family:Eras Medium ITC; font-size:14px;"> Item Details ID : </lable>
<input type="text" name="item_details_id" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Item ID" style="font-family:Eras Medium ITC; font-size:14px;"> Item ID : </lable>
<input type="text" name="item_id" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Material" style="font-family:Eras Medium ITC; font-size:14px;"> Material : </lable>
<input type="text" name="material" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Purity" style="font-family:Eras Medium ITC; font-size:14px;"> Purity : </lable>
<input type="text" name="purity" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Metal Percentage" style="font-family:Eras Medium ITC; font-size:14px;"> Metal Percentage : </lable>
<input type="text" name="metal_percentage" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Net Weight" style="font-family:Eras Medium ITC; font-size:14px;"> Net Weight : </lable>
<input type="text" name="net_weight" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Gross Weight" style="font-family:Eras Medium ITC; font-size:14px;"> Gross Weight : </lable>
<input type="text" name="gross_weight" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Price" style="font-family:Eras Medium ITC; font-size:14px;"> Price : </lable>
<input type="text" name="price" style="font-size:14px; font-family:Segoe UI;" required><br><br>

<lable for="Image" style="font-family:Eras Medium ITC; font-size:14px;"> Image : </lable>
<input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""><br><br>

<button class="btn" type="submit" name="submit" style="font-size:20px; font-family:Segoe UI Black;">Submit</button>
</form>  
</body>  
</html>


<?php
//error_reporting(0);
$conn = mysqli_connect("localhost","root","","aakalp");
/* if($conn){
    echo "Connection Established";   
} */

/* if(isset($_POST["submit"])){

$item_details_id = $_POST['item_details_id'];
$item_id = $_POST['item_id'];
$material = $_POST['material'];
$purity = $_POST['purity'];
$metal_percentage = $_POST['metal_percentage'];
$net_weight = $_POST['net_weight'];
$gross_weight = $_POST['gross_weight'];
$price = $_POST['price'];

if($_FILES["image"]["error"] === 4){
    echo "<script> alert('Image does not exists'); </script>";
}
else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if(!in_array($imageExtension, $validImageExtension)){
        echo "<script> alert('Invaid Image Extension'); </script>";  
    }
    else if($fileSize > 1000000){
        echo "<script> alert('Image size is too large'); </script>";
    }
    else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName, 'css/Images/' . $newImageName);
        $query = "insert into item_details(item_details_id, item_id, material, purity, metal percentage, net_weight, gross_weight, price, image)
                  values('$item_details_id','$item_id', '$material','$purity', '$metal_percentage', '$net_weight', '$gross_weight', '$price', '$newImageName')";
        $run = mysqli_query($conn,$query);
        if($run){ echo "<center>";
                  echo "Data enterd Successfully";  echo "</center>";
                }
        else{
               echo "Data can not enter";
             }          
    }
}
} */

if (isset($_POST['submit']) && isset($_FILES['image'])) {
    echo "Hello";
}
?>