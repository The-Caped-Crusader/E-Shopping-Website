<?php

$con = mysqli_connect ('localhost','root','','testdb');
if(isset($_POST['upload']))
{

    $name =$_POST['name'];
    $price =$_POST['price'];
    $img =$_FILES['image'];
    $image_location =$_FILES['image']['tmp_name'];
    $image_name    =$_FILES['image']['name'];
    $image_up       ="image/".$image_name;

    if(isset($_POST['choice'])){
        $select = $_POST['choice'];
        switch ($select) {
            case 'T-shirt':
                $insert  = "INSERT INTO `t-shirt` (name ,price, image,type )VALUES (' $name','$price','$image_up ','t-shirt')"  ;
                mysqli_query($con,$insert); 
                break;
            case 'Sneakers':
                $insert  = "INSERT INTO `sneakers` (name ,price, image,type )VALUES (' $name','$price','$image_up ','sneakers')"  ;
                mysqli_query($con,$insert); 
                break;
                case 'Jeans':
                    $insert  = "INSERT INTO `jeans` (name ,price, image,type )VALUES (' $name','$price','$image_up ','jeans')"  ;
                    mysqli_query($con,$insert); 
                    break;
            default:
                # code...
                break;
        }
    }
    
    
     
     if(move_uploaded_file( $image_location,'images/'.$image_name))
     {
         echo"";
     }

 else
     {
         echo"";
     }

     header ('location: am.php');
}

?>

<!-- if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
        case 'value1':
            echo 'this is value1<br/>';
            break;
        case 'value2':
            echo 'value2<br/>';
            break;
        default:
            # code...
            break;
    }
} -->