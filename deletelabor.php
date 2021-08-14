<?php 

include "config.php";
if(isset($_GET['id'])){
    $getId=$_GET['id'];
    
    //query
    $sqlquery="DELETE FROM labor WHERE id='$getId';";
    
    //Execution of the Query
    $result=$conn->query($sqlquery);
    
    if($result==TRUE){
        echo "Record Deleted Successfully ";
        //header ("location:view.php");
        header ("location:viewlabor.php");
       
    }else{
        echo "Error".$sqlquery."<br>".$conn->error;
    }
}

?>