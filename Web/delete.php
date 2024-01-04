<?php

$con = mysqli_connect ('localhost','root','','testdb');
  $name=$_GET['id'];
 echo $name;
 mysqli_query($con,"DELETE FROM `t-shirt` where name='$name'");
 
    mysqli_query($con,"DELETE FROM `jeans` where name='$name'");
  

  
    mysqli_query($con,"DELETE FROM `sneakers` where name='$name'");
  


 header("Location:products.php");

?>