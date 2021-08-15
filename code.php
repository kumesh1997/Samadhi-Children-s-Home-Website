 


<?php 

include "config.php";
include "security.php";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pw=$_POST['pw'];
    
    $sql="SELECT * FROM login WHERE username='$username' AND password='$pw';";
    
    $result=$conn->query($sql);
    if($result==TRUE){
        $_SESSION['username']=$username;
       
        header("location:overview.php");
    }else{
       header("location:overview.php");
    }
}


    
?>