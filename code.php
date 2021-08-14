


<?php 

include "config.php";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pw=$_POST['pw'];
    
    $sql="SELECT * FROM login WHERE username='$username' AND password='$pw';";
    
    $result=$conn->query($sql);
    if($result==TRUE){
        $_SESSION['username']=$username;
        $_SESSION['password']=$pw;
        header("location:overview.php");
    }else{
       header("location:login.php");
    }
}



if(isset($_POST['logout_btn'])){
    session_destroy();
    unset($_SESSION['username']);
}


    
?>