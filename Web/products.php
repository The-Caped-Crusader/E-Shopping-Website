<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="prod_css.css">
</head>
<body>
    <div class="products">
<h3 class="ava">All available products</h3>


</div>


    
    <?php
    echo "<div class='all'>";
    echo "<h4 >T-shirt</h4>";
    $con = mysqli_connect ('localhost','root','','testdb');
        $result = mysqli_query($con,"SELECT *FROM `t-shirt`");
        echo" <center class='t-shirt'>";
        while($row = mysqli_fetch_array($result))
        {
           
        echo "
       
            <main>

                <div class='card' style='width: 15rem;'>
                        <img src='$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <!-- مخصص لاسم المنتج  -->
                        <h5 class='card-title'>Name:$row[name]</h5>
                            <!-- مخصص لسعر المنتج -->
                        <p class='card-text'>Price:$row[price]</p>
                        <a href='delete.php? id=$row[name]  ' class='btn btn-danger'>delete product</a>

                        <a  href='edit.php? id=$row[name] 'class='btn btn-primary'>Edit product</a>
                    </div>
                </div>
            </main> ";
        
        }
        echo "</center> ";
        echo "<br><br>";
    echo "<h4 >Sneakers</h4>";
        $result = mysqli_query($con,"SELECT *FROM `sneakers`");
        echo "<center class='sneakers'>";
        while($row = mysqli_fetch_array($result))
        {
           
        echo "
        
            <main>

                <div class='card' style='width: 15rem;'>
                        <img src='$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <!-- مخصص لاسم المنتج  -->
                        <h5 class='card-title'>Name:$row[name]</h5>
                            <!-- مخصص لسعر المنتج -->
                        <p class='card-text'>Price:$row[price]</p>
                        <a href='delete.php? id=$row[name] ' class='btn btn-danger'>delete product</a>

                        <a  href='edit.php? id=$row[name] 'class='btn btn-primary'>Edit product</a>
                    </div>
                </div>
            </main> 
        
        ";}
        echo " </center>;";

        echo "<br><br>";
        echo "<h4 >Jeans</h4>";
        $result = mysqli_query($con,"SELECT *FROM `jeans`");
        echo "<center class='jeans'>";
        while($row = mysqli_fetch_array($result))
        {
           
        echo "
        
            <main>

                <div class='card' style='width: 15rem;'>
                        <img src='$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <!-- مخصص لاسم المنتج  -->
                        <h5 class='card-title'>Name:$row[name]</h5>
                            <!-- مخصص لسعر المنتج -->
                        <p class='card-text'>Price:$row[price]</p>
                        <a href='delete.php? id=$row[name] 'class='btn btn-danger'>delete product</a>

                        <a  href='edit.php? id=$row[name] 'class='btn btn-primary'>Edit product</a>
                    </div>
                </div>
            </main> 
       
        ";}


        echo "</center>;";

    echo "</div>";
    
    echo"<h3 class='back' ><a href='am.php' class='back'>Back to insert </a></h3>";
    
    
    
    
    ?>
    <!-- <a href='edit.php?id='".$row["id"]."alt='edit'>Bearbeiten</a> -->

</body>
</html>