<?php 
include "config.php";

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $initname=$_POST['initname'];
    $dob=$_POST['dob'];
    $nic=$_POST['nic'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];
    $paddress=$_POST['textarea'];
    $email=$_POST['email'];
    $post=$_POST['post'];
    $image=$_POST['image'];
    
    
    //query
    $sql="INSERT INTO staff(nic,firstName,lastName,initialName,dob,gender,address,email,post,image,contact) VALUES('$nic','$fname','$lname','$initname','$dob','$gender','$paddress','$email','$post','$image','$contact');";
    
    //Execute Query
    $result=$conn->query($sql);
    
    if($result==TRUE){
        echo "Staff Member Added Successfully ";
            header("location:viewstaff.php");
    }else{
        alert("OOPS!! Something went Wrong!!");
        //echo "Error".$sql."<br>".$conn->error;
    }
}

?>




<!DOCTYPE html>
<html>
<head>
   <title>Add Staff</title>
    <link rel="stylesheet" type="text/css" href="AddChildForm.css">
    <link rel="stylesheet" type="text/css" href="assessment.css">
   
    
     <script>
    
    function validation(){
       
         var firstname=document.forms["myForm"]["fname"].value;
        var lastname=document.forms["myForm"]["lname"].value;
        var initname=document.forms["myForm"]["initname"].value;
        var dob=document.forms["myForm"]["dob"].value;
        var nic=document.forms["myForm"]["nic"].value;
        var gender=document.forms["myForm"]["gender"].value;
        var contact=document.forms["myForm"]["contact"].value;
        var address=document.forms["myForm"]["address"].value;
        var email=document.forms["myForm"]["email"].value;
        var post=document.forms["myForm"]["post"].value;
        
        if(firstname==""){
                alert("First Name is required! ");
                return false;
        }else if(!isNaN(firstname)){
                alert(" A valid Name is required! ");
                return false;
        }
        
        
             
      if(lastname==""){
                alert("Last Name is required! ");
                return false;   
        }else if(!isNaN(lastname)){
                alert(" A valid Name is required! ");
                return false;
        }
        
        
        
        if(initname==""){
                alert("Name with Initial is required! ");
                return false;   
        }else if(!isNaN(initname)){
                alert(" A valid Name is required! ");
                return false;
        }
        
        
        
         if(dob==""){
                alert("Birth Date is Required! ");
                return false;
        }
        
        
        if(nic==""){
            alert(" NIC is required! ");
                return false; 
        }
        else{
            
            if(nic.length<10){
                   alert("Invalid Nic Number! ");
                   return false;
               }else if(nic.length>12){
                   alert("Invalid Nic Number! NIC should not exeed 12 ");
                   return false;
               }else if(nic.length==10){
                  return true; 
               }
            
            
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
        
        
        
        if(address.length>200){
           
             alert("Maximum character limit is 200 !! ");
                return false;
           }
        
        if(email==""){
                alert("Email Address is required !! ");
                return false;
           }else{
             var regEmail=/^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/;
             if(!regEmail.text(email)){
                 alert("A valid Email Address is required !! ");
                return false;
             }
           }
        
        
        if(post==""){
            alert("Choose the Post ! ");
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
           <li><button onclick="logoutEvent()">Log Out</button></li>
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
                    <h1 style=" padding-left: 50px;">Add Staff</h1>
                </header>
            </div>
    
    
    
    
    
           <div class="commonClass" style="background-color: #dbdbc1; border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
            <form name="myForm" action="" method="POST" onsubmit="return validation()">
            
            <div class="innerDiv">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="fname" placeholder="Enter Name">
            
            </div>
            
            
             <div class="innerDiv">
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name">
            
            </div>
            
            
             <div class="innerDiv">
                <label for="initname">Name with Initials</label><br>
                <input type="text" id="initname" name="initname">
            </div>
            
            
             <div class="innerDiv">
                <label for="dob">Birth Date</label><br>
                <input type="date" id="dob" name="dob">
            </div>
            
            
             <div class="innerDiv">
                <label for="nic">NIC</label><br>
                <input type="text" id="nic" name="nic" >
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
               <textarea id="address" name="textarea" rows="5" cols="20"></textarea>
            </div>
            
            
              <div class="innerDiv">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email">
            </div> 
            
            
            <div class="innerDiv">
                <label for="post">Post</label><br>
                <select name="post" id="post" >
                <option value="admin">Admin</option>
                <option value="principal">Principal</option>
                <option value="matron">Matron</option>
                </select>
            </div>
            <br><br><br><br>
            <div class="innerDiv">
                <label for="image">Employee Image</label><br>
                <input type="file" id="image" name="image">
            </div>
            
             <div class="innerDiv">
                <button name="submit" type="submit" style="width: 20%">Submit</button>
            </div>
            
            </form>  
        </div>
    

    
    
    
    
</body>
</html>