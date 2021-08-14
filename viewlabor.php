
<?php 
include "config.php";

$sql="SELECT * FROM labor;";

$result=$conn->query($sql);

?>



<!DOCTYPE html>
<html>
<head>
   <title>Over View</title>
    <link rel="stylesheet" type="text/css" href="AddChildForm.css">
    <link rel="stylesheet" type="text/css" href="assessment.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
      <script>
    
   
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
        <li class="overviewBtn"><a href="overview.php"><button>OverView
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
    
    
    
            <div  class="commonClass"style="margin: auto;
">
                <header>
                    <h1 style=" padding-left: 50px;">View Labor</h1>
                </header>
            </div>
    
    
    
<div class="container" style="float:right;">
        
        <a style="float:right; "class="btn btn-primary" href="addlabor.php">ADD New Labour</a>
        <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>Name With Initials</th>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Company</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            <?php
            //row =firstrow
            while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['initialname']; ?></td>
                    <td><?php echo $row['fullName'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['contact'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['company'] ?></td>
                    
                     
                    <td><a class="btn btn-info" href="updatelabor.php?id=<?php echo $row['id']?>" >Edit</a>&nbsp;&nbsp;
                    <a class="btn btn-danger" href="deletelabor.php?id=<?php echo $row['id'] ?>">Delete</a>
                    
                    </td>
                </tr>
            <?php
            }
            ?>            
        </tbody>
        
    </table>  
        
    </div>
    
    
    
    
</body>
</html>