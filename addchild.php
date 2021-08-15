
<?php 
include "config.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $fullname=$_POST['fname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $image=$_POST['childImage'];
    
    
    //query
    $sql="INSERT INTO child(fullname,dob,gender,image,initialname) VALUES('$fullname','$dob','$gender','$image','$name');";
    
    //Execute Query
    $result=$conn->query($sql);
    
    if($result==TRUE){
        echo "Child Added Successfully ";
            header("location:viewchild.php");
    }else{
       
       echo "Error".$sql."<br>".$conn->error;
    }
}

?>


<!DOCTYPE html>
<html>
<head>
   <title>Add Child</title> 
    <link rel="stylesheet" type="text/css" href="AddChildForm.css">
    <link rel="stylesheet" type="text/css" href="assessment.css">
     <link rel="stylesheet" href="css/bootstrap.css">
    
      <script>
    
    function validateForm(){
        var x=document.forms["myForm"]["name"].value;
        var y=document.forms["myForm"]["fname"].value;
        var dob=document.forms["myForm"]["dob"].value;
        var gender=document.forms["myForm"]["gender"].value;
        var file=document.forms["myForm"]["childImage"].value;
        
        if(x==""){
                alert("Name with Initials is required! ");
                return false;
        }else if(!isNaN(x)){
                alert(" A valid Name is required! ");
                return false;
        }
        
        
             
       if(y==""){
                alert("Full Name is required! ");
                return false;   
        }else if(!isNaN(y) || !isNaN(y)){
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
        
        
        if(file.value!=""){
           
           }else{
                if(file.size<1024*1024){
                   alert("File too small. Please select a file more than 1 MB !! ");

                   }else if(file.size>4*1024*1024){
                           alert(" File too large. Please select a file less than 4 MB !!");
 
                            }
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
            <li><a href="logout.php"><button onclick="">Log Out</button></a></li>
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
    
    
    
    
    
    
    
    <div class="commonClass" style="background-color:#61cfcf;border-top-right-radius: 20px;
    border-top-left-radius:20px;float:right; margin-right:150px;margin-top:100px;padding:20px;
">
    <header><h1 style="padding-left: 50px;">Add Child </h1></header>  
    </div>
    
    
    <div class="commonClass" style="background-color:#dbdbc1; border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
        
        <form name="myForm" action="" onsubmit="return validateForm()" method="POST">
    
        <div class="innerDiv">
        <label for="name">Name with Initials</label><br>
            <input type="text" id="name" name="name" placeholder="W.P.C.Perera">
        </div>
        
        
        <div class="innerDiv">
        <label for="fname">Full Name</label><br>
            <input type="text" id="fname" name="fname" placeholder="Enter Full Name">
        </div>
        
        
        <div class="innerDiv">
        <label for="dob">Birth Date</label><br>
            <input type="date" id="dob" name="dob">
        </div>
        
        
        <div class="innerDiv">
        <label>Gender</label>&nbsp;
       <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        
        
        <div class="innerDiv">
        <label for="image">Child Image</label><br>
            <input type="file" id="image" name="childImage">
        </div>
        
        
        <div class="innerDiv">
           <button name="submit" type="submit" style="width: 20%">Submit</button>
         
        </div>
         
        </form>  
    </div>
      
</body>
</html>