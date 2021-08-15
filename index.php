<?php 
$Con = mysqli_connect("localhost", "root", "", "samadhichidrenhome");

 session_start();

if(isset($_POST['submit'])){

$uname = mysqli_real_escape_string($Con,$_POST['username']);
$pass = mysqli_real_escape_string($Con,$_POST['pw']);

$get_admin = "select * from login where username='$uname' AND password='$pass'";
$run_admin = mysqli_query($Con,$get_admin);
$count = mysqli_num_rows($run_admin);

    if($count==1){
        $_SESSION['username']=$uname;
                echo "<script>alert('You are Logged in into system ')</script>";
                echo "<script>window.open('overview.php?overview','_self')</script>";
            }
            else {
                echo "<script>alert('Username or Password is Wrong')</script>";
                echo "<script>window.open('login.php?overview','_self')</script>";
                }
            }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
   
   
   
   <div class="wrapper">
                 <h1>Sign in</h1>
                  
 
     <form method="POST" action="#">
      <div class="form_input">
    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
  </div>
  
  <div class="form_input">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pw">
  </div>
  
 <!-- MISSING CODE HERE -->
 <!--<form action="code.php" method="POST"> -->
 <div>
  <button class="btn btn-info" name="submit" type="submit" style="width: 20%">Log in</button>
 <!--</form> -->
         </div>
</form>
 
    </div>      
    
   <style>
    
       body{
           margin: 0;
           padding: 0;
           background-image: url(bck.webp);
           -webkit-background-size:cover;
           background-size: cover;
           font-family: Poppins;
           
       }
       
       .wrapper{
           width: 400px;
           height: 500px;
           color: #000;
           top: 50%;
           left: 50%;
           padding: 60px 30px;
           position: absolute;
           transform: translate(-50%,-50%);
           box-sizing: border-box;
           box-shadow: 8px 8px 50px #000;
       }
       
       h1{
           margin: 0;
           padding: 0;
           font-weight: bold;
           font-size: 30px;
           color: #fff;
           text-align: center;
           margin-bottom: 8%;
           font-family: Courgette;
       }
       
       .wrapper input{
           width: 100%;
           margin-bottom: 20px;
       }
       
       .wrapper input[type=text], .wrapper input[type=password]{
           border: none;
           border-bottom: 1px solid #ddd;
           background: transparent;
           outline: none;
           height: 30px;
           font-size: 16px;
           opacity: 1;
           color: black;
       }
       
       .warpper input[type=submit]{
           border: none;
           outline: none;
           height: 40px;
           background: #f6648b;
           color: #fff;
           font-size: 14px;
           font-weight: bold;
           
       }
       
       .wrapper input[typr=submit]:hover{
           cursor: pointer;
       }
       
       .bottom-text{
           color: #fff;
       }
       .bottom-text input{
           float: right;
       }
       
       #overlay-area{
           position: absolute;
           background-color: rgba(0,0,0,0.5);
           z-index: -3;
           height: 100%;
           width: 100%;
           top: 0;
           bottom: 0;
       }
    </style>
    
    
    
      
    

</body>
</html>
