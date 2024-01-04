
<?php

if ($_SERVER["REQUEST_METHOD"]==="POST") {
        $con = mysqli_connect ('localhost','root','','testdb');
    $username=$_POST["user"];
    $password=$_POST["password"];
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $date=$_POST["date"];
   
    $sql="Select * from `account` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo'<div class="wrong" id="wrong"></div>';
            $sql="Select username,id from `account`";
            $result = $con->query($sql);
            echo "<div id='database' style='display:none;'>";
            $i=0;
            while($row = $result->fetch_assoc()) {
                $i++;
                echo "<p id='".$i."'>". $row["username"]."</p>";}
                echo"</div>";
        }else{
            $sql="insert into `account`(username,password,firstname,lastname,date) values('$username','$password','$firstname','$lastname','$date')";
            $result=mysqli_query($con,$sql);
            header('location:index.php');
            exit;
           
          
           
        }
    }

    } ?>  

<!doctype html>
<html>


<head>
   <link rel="stylesheet" href="../project.web/javascript/sign.css">
   <meta name="viewpost" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="../../project.web/project.web/css/normalize.css" />
   <!-- font awesome -->
   <link rel="stylesheet" href="../project.web/css/all.min.css" />

   <title>Sign Up</title>
   <meta charset="UTF-8">

</head>

<body>
    <script src="../project.web/javascript/sign.js"> </script>
    
<div class="container">
<div class="account-form" id="account-form">
    <h1 style="margin-top:0px">Sign up</h1>
    <form id="f" method="post" >
    <div class="inputs">
        <div class="fname" >
        <label>Firstname:</label> 
        <input type="text" placeholder="Enter your name" class="typing" required name="fname" id="fname" >   
        </div>
        <div class="lname" >
        <label>Lastname:</label> 
        <input type="text" placeholder="Enter your mid-name" class="typing" required name="lname" id="lname" >   
        </div>
        <div class="username">
<label>Username:</label>
<input type="text" placeholder="Enter your email" class="typing" id="user"  name="user">
        </div>
        <div class="password">
<label class="pass-label">Password:</label>
<input type="password" placeholder="enter your password" id="password" required class="typing" name="password">
        </div>
        <div class="date" >
        <label id="date-label">Date:</label> 
        <input type="date" placeholder="Enter your birthday" class="typing" required name="date" id="date" >  
        <div class="submit">
    <input type="submit" name="login"   value="Sign" class="clicking">  



    </div>
        
</form>
<div  id="name"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #000000;padding-left: 2px;padding-right: 2px;"></i></div>
<div  id="tag"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #000000;"></i></div>
<div>


   </div>


</body>

</html>