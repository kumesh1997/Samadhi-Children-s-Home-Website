<?php 

$servername="localhost";
$username="root";
$pw="";
$databse="samadhichidrenhome";

//connect to db
$conn=new mysqli($servername,$username,$pw,$databse);
//if db not connected
if($conn->connect_error){
    die("Connection Faild".$conn->connect_error);
}

?>