<?php

 include "connect.php";

 if(isset($_POST['submit'])){
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$expire_date = $_POST['expire_date'];

$sql = "INSERT INTO `product`(name, description, quantity, price,expire_date)
 VALUES('$name','$description',$quantity,$price,'$expire_date')";
 $result=mysqli_query($conn,$sql);
 if($result){
    header('location:index.php');
 }
 else{
    die(mysqli_error($conn));
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <style>
    #add-form .add-form-main {
    border: 1px solid #d4d4d4;
    box-shadow: 5px 5px 3px gray,-5px 5px 3px gray;
    width:500px;
    height: 450px; margin: 30px auto;} 
    #add-form form{
    text-align: center;font-size: 1rem;  }
    #add-form h3{
        text-align: center;color:rgb(113, 62, 113);
        margin: 25px 0px;font-size: 2rem;font-weight: bold;}
      .content{
          width: 45%;padding: 10px 0px;}
    </style>
</head>
<body>
<div id="add-form" style="text-align:center;">
  <div class="add-form-main">
    <h3>Add New Product</h3>
    <form class="add-form" action="#" method="post">   
    <div class="form-group">
            <label style="margin-right:30px;">Name:</label>
            <input type="text" name="name" class="content"><br><br>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" name="description" class="content" id="des"><br><br>
        </div>
        <div class="form-group">
            <label style="margin-right:22px;">Quantity:</label>
            <input type="text" name="quantity" class="content"><br><br>
        </div>
        <div class="form-group">
            <label style="margin-right:40px;">Price:</label>
            <input type="text" name="price" class="content"><br><br>
        </div>
        <div class="form-group">
            <label>Expire Date:</label>
            <input type="date" name="expire_date" class="content"><br><br>
        </div>
        <button type="submit" class="btn" name="submit" style="padding:5px 10px; width:20%;">Insert</button>
    </form>
</div>
</div>
</div>
</body>
</html>
