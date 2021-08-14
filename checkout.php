<?php 
include "config.php";

if(isset($_GET['username'])){
$username=$_GET['username'];
$pw=$GET_['password'];
    
    echo $username;
    echo $pw;
    

$sql="SELECT * FROM login WHERE username='$username' AND password='$pw';";

$result=$conn->query($sql);
if($result==TRUE){
    echo "Welcome to the Samadhi Children's Home";
    header("location:overview.php");
}
}
?>