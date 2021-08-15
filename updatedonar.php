<?php

 include "config.php";

// get the ID
if(isset($_GET['id'])){
    $userId=$_GET['id'];
   
    //sql query
    $sqlString="SELECT * FROM donation WHERE donarId='$userId';";
    
    //EXECUTE THE QUERY
   $result=$conn->query($sqlString);


        if($raw=$result->fetch_assoc()){
            $DonarId=$raw['donarId'];
            $DonarName=$raw['donarName'];
            $Contact=$raw['contact'];
            $Address=$raw['address'];
            $Type=$raw['type'];
            
        }
    }

// check the update button click

  if(isset($_POST['submit'])){
      
        $donarname=$_POST['dname'];
        $donarcontact=$_POST['contact'];
        $donaraddress=$_POST['textarea'];
        $donationtype=$_POST['type'];
        $donarId=$_POST['id'];
      
//sql query
$sqlquery="UPDATE donation SET donarName='$donarname', contact='$donarcontact',address='$donaraddress', type='$donationtype' WHERE donarId='$userId'";

$result=$conn->query($sqlquery);

if($result==TRUE){
        echo "Record Updated Successfully ";
        //header("location:view.php"); 
        header ("location:viewdonation.php");
}else{
   
    echo "Error".$sqlquery."<br>".$conn->error;
    }

  }
      
?>








<!DOCTYPE html>
<html>
<head>
   <title>Add Donation</title>
    <link rel="stylesheet" type="text/css" href="AddChildForm.css">
    <link rel="stylesheet" type="text/css" href="assessment.css">
   
    
       <script>
    
     function validation(){
        
         var donarname=document.forms["myForm"]["dname"].value;
        var contact=document.forms["myForm"]["contact"].value;
        var address=document.forms["myForm"]["textarea"].value;
        var type=document.forms["myForm"]["type"].value;
        
        if(donarname==""){
                alert(" Donar Name is required! ");
                return false;
        }else if(!isNaN(donarname)){
                alert(" A valid Donar Name is required! ");
                return false;
        }
        
       
        
        if(contact==""){
             alert("Contact Number is required!");
                return false;
        }else{
            if(contact.length<10){
                alert(" A valid Contact Number is required !! "); 
                return false;
            }if(contact.length>10){
                alert("A valid Contact Number is required.Maximum length should be 10 !!"); 
                return false;
            }else if(contact.length==10){
                return true;
            }
            
        }  
        
        
        if(type==""){
            alert("Choose your Hiring Company! ");
                return false;
        }          
    }
          
    </script>
      
        
</head>
<body style="margin: auto">
    
  <header class="header">
    <div>
      <h3>SAMADHI CHILDREN HOME</h3>
      </div>
    </header>
    
   <aside class="SideBar">
    <nav>
        <span><img src="overview.png" id="imgRight"></span>
    <ul>
        <li class="overviewBtn"> <a href="overview.php"><button>OverView
            </button> </a>
        </li>    
    </ul>   
        
       <span><img src="donation.png" id="imgRight"></span> 
    <ul>
        <li class="donation"> <button onclick="donationView()">Donation
            <span><img src="whitearrow.png" id="imeageLeft"></span>
            </button>
            <ul>
                <li id="viewList1"><a href="adddonation.php">Add Donation</a></li> 
                <li id="viewList2"><a href="viewdonation.php">View Donation</a></li> 
            </ul>    
        </li>    
    </ul>   
        
        <span><img src="staff.png" id="imgRight"></span>
    <ul>
        <li><button onclick="staffView()">Staff
            <span><img src="whitearrow.png" id="imeageLeft"></span>
            </button>
            <ul>
                <li id="viewList3"><a href="addstaff.php">Add Staff</a></li> 
                <li id="viewList4"><a href="viewstaff.php">View Staff</a></li> 
            </ul>    
        </li>    
    </ul>
        
        <span><img src="child.png" id="imgRight"></span>
    <ul>
        <li> <button onclick="childView()">Child
            <span><img src="whitearrow.png" id="imeageLeft"></span>
            </button>
            <ul>
                <li id="viewList5"><a href="addchild.php">Add Child</a></li> 
                <li id="viewList6"><a href="viewchild.php">View Child</a></li> 
            </ul>    
        </li>    
    </ul>
        
        <span><img src="labor.png" id="imgRight"></span>
        <ul>
        <li><button onclick="laborView()">Labor
            <span><img src="whitearrow.png" id="imeageLeft"></span>
            </button>
            <ul>
                <li id="viewList7"><a href="addlabor.php">Add Labor</a></li> 
                <li id="viewList8"><a href="viewlabor.php">View Labor</a></li> 
                <li id="viewList9">View Labor Salary</li> 
            </ul>    
        </li>    
    </ul>
        
         <span><img src="whitelogout.png" id="imgRight" style="margin-top: 20px;"></span>
        <ul class="LogoutBtn">
            <li><a href="logout.php"><button>Log Out</button></a></li>
        </ul>
        
        
    </nav>
    </aside>
   
   
    
    
    <script>
        
      function donationView(){
            if((document.getElementById('viewList1').style.display)=='block'){
            document.getElementById('viewList1').style.display='none';
            document.getElementById('viewList2').style.display='none'; 
            }else{
            document.getElementById('viewList1').style.display='block';
            document.getElementById('viewList2').style.display='block';
        }
      }
        
        
        function staffView(){
        if((document.getElementById('viewList3').style.display)=='block'){
            document.getElementById('viewList3').style.display='none';
            document.getElementById('viewList4').style.display='none';
        }else{
            document.getElementById('viewList3').style.display='block';
            document.getElementById('viewList4').style.display='block';
        }
      }
        
        
        function childView(){
        if((document.getElementById('viewList5').style.display)=='block'){
            document.getElementById('viewList5').style.display='none';
            document.getElementById('viewList6').style.display='none';
        }else{
            document.getElementById('viewList5').style.display='block';
            document.getElementById('viewList6').style.display='block';
        }
      }
        
        
        function laborView(){
        if((document.getElementById('viewList7').style.display)=='block'){
            document.getElementById('viewList7').style.display='none';
            document.getElementById('viewList8').style.display='none';
            document.getElementById('viewList9').style.display='none';
        }else{
            document.getElementById('viewList7').style.display='block';
            document.getElementById('viewList8').style.display='block';
            document.getElementById('viewList9').style.display='none';
        }
      }
        
      
    </script>
    
    
    
           
            <div  class="commonClass"style="background-color: #61cfcf; margin: auto; border-top-right-radius: 20px;
    border-top-left-radius:20px;float:right; margin-right:150px;margin-top:100px;padding:20px;
">
                <header>
                    <h1 style=" padding-left: 50px;">Update Donation </h1>
                </header>
            </div>
    
    
    
    

    <div class="commonClass" style="background-color: #dbdbc1; border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
            <form name="myForm" action="" method="POST" onsubmit="return validation()">
            
            <div class="innerDiv">
                <label for="dname">Donar Name</label><br>
                <input type="text" id="dname" name="dname" placeholder="Enter Name" value="<?php echo $DonarName; ?>">
                <input type="hidden" name="id" value="<?php $DonarId; ?>">
            </div>
            
            
            <div class="innerDiv">
                <label for="contact">Contact</label><br>
                <input type="text" id="contact" name="contact" value="<?php echo $Contact; ?>">
            </div>
            
            
            
            <div class="innerDiv">
                <label for="address">Address</label><br>
               <textarea id="address" name="textarea" rows="5" cols="20"><?php echo $Address; ?></textarea>
            </div>
            
            
            
            <div class="innerDiv">
                <label for="type">Donation Type</label><br>
                <select name="type" id="type" >
                <option value="cash" <?php if($Type=='cash'){ echo "selected";} ?>>Cash</option>
                <option value="items" <?php if($Type=='items'){ echo "selected";} ?>>Items</option>
                <option value="both" <?php if($Type=='both'){ echo "selected";} ?>>Both</option>
                </select>
            
            </div>
            
              
            
             <div class="innerDiv">
                <button name="submit" type="submit" style="width: 20%" >Update</button>
            </div>
            
            </form>  
        </div>
    
    
    
</body>
</html>