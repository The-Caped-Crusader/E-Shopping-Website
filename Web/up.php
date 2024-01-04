<?php

$con = mysqli_connect ('localhost','root','','testdb');
if(isset($_POST['update']))
{
    $type =$_POST['type'];
    $ID   =$_POST['id'];
    $name =$_POST['name'];
    $price =$_POST['price'];
    $img =$_FILES['image'];
    $image_location =$_FILES['image']['tmp_name'];
    $image_name    =$_FILES['image']['name'];
    $image_up       ="images/".$image_name;
    $update  = "UPDATE `$type` SET name='$name',price='$price',image='image_up',type='$type' WHERE id='$ID'";
     mysqli_query($con,$update);
     
     if(move_uploaded_file( $image_location,'images/'.$image_name))
     {
         echo"<script>alert ('تم رفع المنتج بنجاح') </script>";
     }

 else
     {
         echo"<script>alert ('حدث خطا ') </script>";
     }

     header ('location: products.php');
}

?>