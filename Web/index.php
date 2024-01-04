<?php
    if ($_SERVER["REQUEST_METHOD"]==="POST") {
        $con = mysqli_connect ('localhost','root','','testdb');
    
    $username=$_POST["user"];
    $password=$_POST["password"];
   
   
    $sql="Select * from `account` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            header('Location:am.php');
            exit;
        }else{
        
        
    }
    }
    }

?>





<!doctype html>
<html>


<head>
   <link rel="stylesheet" href="../project.web/javascript/monster.css">
   <meta name="viewpost" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="../../project.web/project.web/css/normalize.css" />
   <!-- font awesome -->
   <link rel="stylesheet" href="../project.web/css/all.min.css" />

   <title>Acount access</title>
   <meta charset="UTF-8">

</head>

<body>
    <script src="../project.web/javascript/index.js"></script>
    
<div class="container">
<div class="account-form">
    <h1 style="margin-top:0px">Login</h1>
    <form id="form" method="post" action="index.php">
    <div class="inputs">
        <div class="username">
<label>Username:</label>
<input type="text" placeholder="Enter your email" class="typing" id="user" name="user">
        </div>
        <div class="password">
<label class="pass-label">Password:</label>
<input type="password" placeholder="enter your password" id="password" class="typing" name="password">
        </div>
        <div class="submit">
            <input type="submit" name="login"  value="Login" class="clicking">  
        </div>
        <div class="sign-up">
            <p>Dont have a permission?</p>
        <input id="sign" type="button" value="Request sign up">  
        </div>
</div>
</form>
<div  id="name"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #000000;padding-left: 2px;padding-right: 2px;"></i></div>
<div  id="tag"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #000000;"></i></div>
<div>


   </div>


</body>

</html>