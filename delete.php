<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){
     $id=$_GET['deleteid'];

     $sql="DELETE from product where id=$id";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:index.php');
     }
     else{
        die(mysqli_error($conn));
     }
 }

 ?>