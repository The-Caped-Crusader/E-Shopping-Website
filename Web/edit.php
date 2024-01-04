<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css_index.css">
</head>
<body>
<?php
    $con = mysqli_connect ('localhost','root','','testdb');
    $ID=$_GET['id'];
    $sql="select * from `t-shirt` where name= '$ID' ";
     $result=mysqli_query($con,$sql);
     if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            
            $DATA=mysqli_fetch_array($result);
        }
         
         }else{

         }
    $sql="select * from `sneakers` where name= '$ID' ";
     $result=mysqli_query($con,$sql);
     if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            
            $DATA=mysqli_fetch_array($result);
        }
         
         }else{

         }
    $sql="select * from `jeans` where name= '$ID' ";
     $result=mysqli_query($con,$sql);
     if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           
            $DATA=mysqli_fetch_array($result);
        }
         
         }else{

         }

 
     
       
    ?>
    <div class="center">

    <div class="main">
        <center>
            <!-- ملف php برضو لازم يتنفذ -->

        <form action="up.php" method="post" enctype="multipart/form-data" >
            <h2>Update Product</h2>
            
            <label class="type" >Type:</label>
            <input type="text" name="type" value=<?php echo $DATA['type'] ?> >
            <br><br>
            <label class="id">ID:</label>
            <input type="text" name="id" value=<?php echo $DATA['id'] ; ?> >
            <br><br>
            <label>Name:</label>
            <input type="text" name="name" value=<?php echo $DATA['name'] ; ?> >


            <br><br>
            <label class="price">Price:</label>
            <input type="text" name="price" id="" value=<?php echo $DATA['price'] ; ?> >
            <br><br>


            <input  type="file" name="image" id="file" >
            <label  class="upl" for="file">update image</label>
           <button  name="update" type="submit">update product</button>
          
            <br><br>
        
         
        </form>
    
        </center>
    </div>
</div>
    <!-- <p>devolober</p> -->
    

</body>
</html>