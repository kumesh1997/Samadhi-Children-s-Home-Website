<?php 
include "config.php";

$sqldonation="SELECT COUNT(donarId) AS count FROM donation;";
$sqlstaff="SELECT COUNT(nic) AS count FROM staff;";
$sqlchild="SELECT COUNT(id) AS count FROM child;";
$sqllabor="SELECT COUNT(id) AS count FROM labor;";


$resultdonation=$conn->query($sqldonation);
$resultstaff=$conn->query($sqlstaff);
$resultchild=$conn->query($sqlchild);
$resultlabor=$conn->query($sqllabor);



//Retrieve all from Staff Table
$staffsql="SELECT * FROM staff ORDER BY nic DESC LIMIT 0,5; ";

$staffresult=$conn->query($staffsql);

//Retrieve all from Child Table
$childsql="SELECT * FROM child ORDER BY id DESC LIMIT 0,5;";
$childresult=$conn->query($childsql);

//Retrieve all from Labor Table
$labordsql="SELECT * FROM labor ORDER BY id DESC LIMIT 0,5;";
$laborresult=$conn->query($labordsql);

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
      <h2>SAMADHI CHILDREN HOME</h2>
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
            <li><a href="#" data-toggle="modal" data-target="#logoutModal"><button onclick=" ">Log Out</button></a></li>
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
                    <h1 style=" padding-left: 50px;">Over View</h1>
                </header>
            </div>
    
    
<aside style="float:right;">
    
    <!-- Replace Code Belove-->
    
    
    <div class="container";>
  <div class="row">
   <!--colom 01-->
    <div class="col-sm">
        
         <div>
         <div class="container">
              <div class="row">
                    <div class="col-sm">
                      <img src="donate.png" alt="Donation" style="width:100px; height:100px;">
                    </div>
                    <div class="col-sm">
                        <p style="font-weight: bold;">Total Donations:</p>
                        <h3><?php echo $resultdonation->fetch_assoc()['count']; ?></h3>
                    </div>    
          </div>
        </div>
         </div>     
    </div>
    
    <!--colom 02-->
    <div class="col-sm">
     
     
         <div>
         <div class="container">
              <div class="row">
                    <div class="col-sm">
                      <img src="staffclipart.png" alt="Donation" style="width:100px; height:100px;">
                    </div>
                    <div class="col-sm">
                        <P style="font-weight: bold;">Total Staff Members:</P>
                      <h3><?php echo $resultstaff->fetch_assoc()['count']; ?></h3>
                    </div>    
          </div>
        </div>
         </div>     
     
    </div>
    
    <!--colom 03-->
    <div class="col-sm">
     
     
         <div>
         <div class="container">
              <div class="row">
                    <div class="col-sm">
                      <img src="childclipart.png" alt="Donation" style="width:100px; height:100px;">
                    </div>
                    <div class="col-sm">
                        <p style="font-weight: bold;">Total Childern:</p>
                      <h3><?php echo $resultchild->fetch_assoc()['count']; ?></h3>
                    </div>    
          </div>
        </div>
         </div>     
     
     
    </div>
    
    
    <!--colom 04-->
    <div class="col-sm">
     
     
         <div>
         <div class="container">
              <div class="row">
                    <div class="col-sm">
                      <img src="laborclipart.png" alt="Donation" style="width:100px; height:120px;">
                    </div>
                    <div class="col-sm">
                        <p style="font-weight: bold;">Total Labors:</p>
                     <h3><?php echo $resultlabor->fetch_assoc()['count']; ?></h3>
                    </div>    
          </div>
        </div>
         </div>     
     
     
    </div>
  </div>
</div>
    
    
<!-- Replace Code Above-->
   
    <div class="container" style="margin-top:50px;">
  <div class="row" style="margin-bottom:25px;">
   
   
    <!--for Staff-->
       <div class="col-sm" style="background-color:#EED6D3; margin-right:80px;">
       
       <h2>Staff</h2>
       <div class="container" style="float:right;">
        
    
        <table class="table">
       <thead>
        <tr>
            <th>NIC</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Email</th>
            <th>Post</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            <?php
            //row =firstrow
            while($row=$staffresult->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['nic']; ?></td>
                    <td><?php echo $row['initialName']; ?></td>
                    <td><?php echo $row['dob'] ?></td>
                     <td><?php echo $row['gender'] ?></td>
                     <td><?php echo $row['address'] ?></td>
                     <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['post'] ?></td>
                     
                     
                  
                </tr>
            <?php
            }
            ?>   
            
            <tr>
                  <td><a class="btn btn-info" href="viewstaff.php" style="">More</a>
                    
                    </td>
            </tr>         
        </tbody>
        
    </table>  
        
    </div>
       
       </div>
  </div>
   
   
   
   <!--for Child-->   
    <div class="row" style="margin-bottom:25px;">
   
       <div class="col-sm" style="background-color:#B6E2D3; margin-right:80px;">
       
       <h2>Child</h2>
       <div class="container" style="float:right;">
        
    
        <table class="table">
       <thead>
        <tr>
             <th>ID</th>
            <th>Name With Initials</th>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        </thead>
        
        <tbody>
            <?php
            //row =firstrow
            while($row=$childresult->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['initialname']; ?></td>
                    <td><?php echo $row['fullname'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                     
                     
                  
                </tr>
            <?php
            }
            ?>   
            
            <tr>
                  <td><a class="btn btn-info" href="viewchild.php" style="">More</a>
                    
                    </td>
            </tr>         
        </tbody>
        
    </table>  
        
    </div>
       
       </div>
  </div>
   
   
   
   
   
    <!--for Labor-->
  <div class="row">
   
       <div class="col-sm" style="background-color:#B9B7BD; margin-right:80px;">
       
       <h2>Labor</h2>
       <div class="container" style="float:right;">
        
    
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
            while($row=$laborresult->fetch_assoc()){
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
                     
                     
                  
                </tr>
            <?php
            }
            ?>   
            
            <tr>
                  <td><a class="btn btn-info" href="viewlabor.php" style="float:right;">More</a>
                    
                    </td>
            </tr> 
                    
        </tbody>
        
        
        </table>  
        
        
        </div>
       
   </div>
</div>
  
</div>
    
</aside>    

    
<!-- Logout Model -->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-titile" id="exampleModalLabel">Ready to Leave ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span></button>
             </div>
             <div class="modal-body">Select"Logout" below if you are ready to end your currunt session.</div>
                
              <div class="modal-footer">
                  <button class="btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  
                  <form action="code.php" method="POST">
                     <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                   
                  <button type="submit" name="logout_btn"class="btn btn-primary" href="login.php" >Logout</button>
                     
                  </form>
                  
                  <a class="btn btn-primary" href="login.php">Logout</a>
              </div>
                 
             </div>
              
          </div>
      </div>
      
  
    

    
    
    
</body>
</html>