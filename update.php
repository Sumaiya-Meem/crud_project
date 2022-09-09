<?php

 include "connect.php";
 $id=$_GET['updateid'];
 $sql="select * from product where id=$id";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['name'];
 $description=$row['description'];
 $quantity=$row['quantity'];
 $price=$row['price'];
 $expire_date=$row['expire_date'];

 if(isset($_POST['submit'])){
$name = $_POST['name'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$expire_date = $_POST['expire_date'];

$sql = "update product set id=$id,name='$name',description='$description',quantity=$quantity,
price=$price,expire_date='$expire_date' where id=$id ";
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
    <title>CRUD Operation</title>
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
        .btn{font-weight:bold;background-color:white;color:purple;font-size:1.2rem;}
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
            <input type="text" name="name" class="content" value=<?php echo $name; ?> ><br><br>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" name="description" class="content" id="des" value=<?php echo $description; ?>><br><br>
        </div>
        <div class="form-group">
            <label style="margin-right:22px;">Quantity:</label>
            <input type="text" name="quantity" class="content" value=<?php echo $quantity; ?>><br><br>
        </div>
        <div class="form-group">
            <label style="margin-right:40px;">Price:</label>
            <input type="text" name="price" class="content" value=<?php echo $price; ?>><br><br>
        </div>
        <div class="form-group">
            <label>Expire Date:</label>
            <input type="date" name="expire_date" class="content" value=<?php echo $expire_date; ?>><br><br>
        </div>
        <button type="submit" class="btn" name="submit">Update</button>
    </form>
</div>
</div>
</div>
</body>
</html>
