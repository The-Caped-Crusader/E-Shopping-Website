<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon_lite</title>
    <link rel="stylesheet" href="css_index.css">
</head>
<body>
   
    <div class="center">

    <div class="main">
        <center>
            <!-- ملف php برضو لازم يتنفذ -->

        <form action="insert.php" method="post" enctype="multipart/form-data" >
            <h2>Amazon lite</h2>
            <img class="img" src="mmm.jfif" alt="pic" width="450px">
            <br><br>
            <label class="nan">Choose type:</label>
            <select class="choice" name="choice">
                <option name="T-shirt" value="T-shirt">T-shirt</option>
                <option name="Jeans" value="Jeans">Jeans</option>
                <option name="Sneakers" value="Sneakers">Sneakers</option>

</select>
<br><br>
            <label class="nan" for="">Name</label>
            <input type="text" name="name" >


            <br><br>
            <label class="nan" for="">Price</label>
            <input type="text" name="price" id="" >
            <br><br>


            <input  type="file" name="image" id="file" >
            <label  class="upl" for="file">upload image</label>
           <button  name="upload">done ✅</button>
          
            <br><br>

            <!-- دة هيبقا فية لينك الصفحة اللى هيظهر فيها كل المنتجات  -->
            <a   href="products.php">see all products</a>
        </form>
    
        </center>
    </div>
</div>
    <!-- <p>devolober</p> -->
    

</body>
</html>