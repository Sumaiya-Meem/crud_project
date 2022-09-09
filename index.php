<?php

 include "connect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>CRUD Operation</title>
  </head>
  <body>
   <div class="container">
       <button class="btn btn-success my-5"><a href="add_new.php" class="text-light">Add Product</a></button>

       <table class="table">
  <thead>
    <tr>
      <th scope="col">Product_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Decription</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Expire_date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $sql="SELECT * FROM `product` ";
     $result=mysqli_query($conn,$sql);
     if($result){
       while($row=mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $name=$row['name'];
         $description=$row['description'];
         $quantity=$row['quantity'];
         $price=$row['price'];
         $expire_date=$row['expire_date'];

         echo '<tr>
         <th scope="row">'.$id.'</th>
         <td>'.$name.'</td>
         <td>'.$description.'</td>
         <td>'.$quantity.'</td>
         <td>'.$price.'</td>
         <td>'.$expire_date.'</td>
         <td>
         <button class="btn btn-info"><a href="update.php?
         updateid='.$id.'" class="text-light">Edit</a></button>
         <button class="btn btn-success"><a href="delete.php?
         deleteid='.$id.'" class="text-light">Delete</a></button>
     </td>
       </tr>';

       }
     }
  ?>

 </tbody>
 </table>
   </div>
  </body>
</html>