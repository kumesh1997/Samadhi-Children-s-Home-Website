<?php 
include "config.php";

if(isset($_POST['submit'])){
    $initialname=$_POST['initName'];
    $fullname=$_POST['fullname'];
    $firstname=$_POST['fname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];
    $paddress=$_POST['textarea'];
    $company=$_POST['company'];
    
    
    //query
    $sql="INSERT INTO labor(fullName,firstName,dob,gender,contact,address,company,initialname) VALUES('$fullname','$firstname','$dob','$gender','$contact','$paddress','$company','$initialname');";
    
    //Execute Query
    $result=$conn->query($sql);
    
    if($result==TRUE){
        echo "Labor Added Successfully ";
            header("location:viewlabor.php");
    }else{
        
        echo "Error".$sql."<br>".$conn->error;
    }
}

?>



<!DOCTYPE html>
<html>
<head>
   <title>Add Labour</title>
    <link rel="stylesheet" type="text/css" href="AddChildForm.css">
    <link rel="stylesheet" type="text/css" href="assessment.css">
     <link rel="stylesheet" href="css/bootstrap.css">
    
      <script>
    
     function validation(){
        
         var initname=document.forms["myForm"]["initName"].value;
        var fullname=document.forms["myForm"]["fullname"].value;
        var firstname=document.forms["myForm"]["fname"].value;
        var dob=document.forms["myForm"]["dob"].value;
        var gender=document.forms["myForm"]["gender"].value;
        var contact=document.forms["myForm"]["contact"].value;
        var company=document.forms["myForm"]["company"];
        
        if(initname==""){
                alert("Name with Initials is required! ");
                return false;
        }else if(!isNaN(initname)){
                alert(" A valid Initial Name is required! ");
                return false;
        }
        
        
             
       if(fullname==""){
                alert("Full Name is required! ");
                return false;   
        }else if(!isNaN(fullname)){
                alert(" A valid Name is required! ");
                return false;
        }
        
        
        
        if(firstname==""){
                alert("First Name is required! ");
                return false;   
        }else if(!isNaN(firstname)){
                alert(" A valid Name is required! ");
                return false;
        }
        
        
        
         if(dob==""){
                alert("Birth Date is Required! ");
                return false;
        }
        
        
        if(gender==""){
                alert("Choose your Gender! ");
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
        
        
        if(company==""){
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
    
    
    
    
    
    
    
    <div class="commonClass" style="background-color: #61cfcf; margin: auto;border-top-right-radius: 20px;
    border-top-left-radius:20px;float:right; margin-right:150px;margin-top:100px;padding:20px;
">
                <header>
                    <h1 style="padding-left: 50px;">Add Labour</h1>
                </header>
            </div>
            
        
        <div class="commonClass" style="background-color:#dbdbc1;border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
            <form name="myForm" action="" onsubmit="return validation()" method="POST">
        
                
                <div class="innerDiv">
                <label for="initname">Name with Initials</label><br>
                <input type="text" id="initName" name="initName" placeholder="W.P.C.Perera">
            </div>
                
          
                
            <div class="innerDiv">
                <label for="fullname">Full Name</label><br>
                <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name">
            
            </div>
            
            
             <div class="innerDiv">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="fname" placeholder="Enter First Name">
            
            </div>
            
            
            
             <div class="innerDiv">
                <label for="dob">Birth Date</label><br>
                <input type="date" id="dob" name="dob">
            </div>
            
            
                <div class="innerDiv">
                <label>Gender</label>
                 <input type="radio" id="gender" name="gender" value="male">&nbsp;
                 <label for="gender">Male</label>
                 
                 <input type="radio" id="gender" name="gender" value="female">&nbsp;
                 <label for="gender">Female</label>
            </div>
                
                
              
            <div class="innerDiv">
                <label for="contact">Contact</label><br>
                <input type="text" id="contact" name="contact">
            </div>
            
                
            
            <div class="innerDiv">
                <label for="address">Permanent Address</label><br>
               <textarea id="textarea" name="textarea" rows="5" cols="20"></textarea>
            </div>
            
            
                
            <div class="innerDiv">
                <label for="company">Name of the Hiring Company</label><br>
                <select id="company" name="company">
                <option value="sunshine">Sunshine</option>
                <option value="moonlight">Moonlight</option>
                </select>
            </div>
        
                    <br><br><br>  
            
             <div class="innerDiv">
                 <button name="submit" type="submit" style="width: 20%">Submit</button>
            </div>
            
            </form>  
        </div>
    
      
    
</body>
</html>