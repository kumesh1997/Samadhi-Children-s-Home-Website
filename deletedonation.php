<?php 

include "config.php";
if(isset($_GET['id'])){
    $getId=$_GET['id'];
    
    //query
    $sqlquery="DELETE FROM donation WHERE donarId='$getId';";
    
    //Execution of the Query
    $result=$conn->query($sqlquery);
    
    if($result==TRUE){
        echo "Record Deleted Successfully ";
       
        header ("location:viewdonation.php");
       
    }else{
        echo "Error".$sqlquery."<br>".$conn->error;
    }
}

?>