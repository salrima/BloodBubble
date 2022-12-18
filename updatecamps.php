<?php
// if(isset($_POST['cid']))
// {
//  $cid=$_POST['cid'];
// }
session_start();
$cid=$_POST['cid'];
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/11d397fc54.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/indexcss.css">
    <link rel="stylesheet" href="css/search.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Donor registration</title>
</head>

<body>
<header>
        <nav>
            <div class="nav-links">
                <div class="logo"><img src="images/withBackground (1).png"></div>
               
                <ul>
                   
                    <li><a href="#" class="HHOVER">ABOUT US</a></li>
                  
                   
                    <li><a href="php/_logout.php" class="HHOVER">LOG OUT</a></li>
                  
                </ul>
            </div>
        </nav>
        <nav class="navbar bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand "><b>CAMP DETAILS</b></a>
   
  </div>
</nav>
    </header>
    <br><br>

 

   
    <?php
          $servername="localhost";
          $username="root";
          $password="";
          $database="bloodbank";

          $conn=mysqli_connect($servername, $username, $password, $database);
          if(!$conn)
          {
            die("Sorry we failed to connect:". mysqli_connect_error());
          }
          else{
            $sql="SELECT * FROM `camps` WHERE `camp_id`='$cid'";
            $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
          }
       
   ?>
           
          

        
<div class="container "style="background-color:gray; opacity:95%">
    <h3 style="color:maroon;text-align:center">CAMPS REGISTRATION FORM</h3>
    <form action="campsupdated.php" method="post"><br>
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="cname" class="col-form-label">Camp name</label>
  </div>
  <div class="col-auto">
    <input type="cname" name="cname" id="cname" value="<?php echo $row['camp_name'];?>"  class="form-control" >
  </div>
  <div class="col-auto">
    <label for="bloodbankid" class="col-form-label">Blood Bank ID</label>
  </div>
  <div class="col-auto">
    <input type="bloodbankid" name="bloodbankid" id="bloodbankid" value="<?php echo $row['camp_id'];?>" class="form-control" >
  </div>
</div><br><br>
<div class="row g-3 align-items-center">
<div class="col-auto">
    <label for="orgtype" class="col-form-label">Organizer Type</label>
  </div>
    
  <div class="col-auto">
    <input type="orgtype" name="orgtype" id="orgtype" value="<?php echo $row['organization_type'];?>" class="form-control" >
  </div>


  <div class="col-auto">
    <label for="orgname" class="col-form-label">Organization Name</label>
  </div>
  <div class="col-auto">
    <input type="orgname" name="orgname" id="orgname" value="<?php echo $row['organization_name'];?>" class="form-control" >
  </div>
  
  
    </div><br><br>
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="Organizer" class="col-form-label">Organizer Name</label>
  </div>
  <div class="col-auto">
    <input type="organizer" name="organizer" id="organizer" value="<?php echo $row['organizer_name'];?>" class="form-control" >
  </div>
  <div class="col-auto">
    <label for="orgphno" class="col-form-label">Contact No</label>
  </div>
  <div class="col-auto">
    <input type="text" name="orgphno" id="orgphno" value="<?php echo $row['org_phno'];?>"  class="form-control"\>
  </div>
  <div class="col-auto">
    <label for="orgemail" class="col-form-label">Email</label>
  </div>
  <div class="col-auto">
    <input type="email" name="orgemail" id="orgemail" value="<?php echo $row['org_email'];?>"  class="form-control"\>
  </div>
  
    </div><br><br>
    
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="city" class="col-form-label">City</label>
  </div>
  <div class="col-auto">
    <input type="text" name="city" id="city" value="<?php echo $row['City'];?>" class="form-control" >
  </div>
  <div class="col-auto">
    <label for="district" class="col-form-label">District</label>
  </div>
  <div class="col-auto">
    <input type="text" name="district" id="district" value="<?php echo $row['District'];?>" class="form-control"\>
  </div>
  <div class="col-auto">
    <label for="state" class="col-form-label">State</label>
  </div>
  <div class="col-auto">
    <input type="text" name="state" id="state" value="<?php echo $row['State'];?>" class="form-control"\>
  </div>
  
    </div><br><br>
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="date" class="col-form-label">Camp Dtae</label>
  </div>
  <div class="col-auto">
    <input type="date" name="date" id="date" value="<?php echo $row['camp_date'];?>" class="form-control" >
  </div>
  <div class="col-auto">
    <label for="stime" class="col-form-label">Start Time</label>
  </div>
  <div class="col-auto">
    <input type="time" name="stime" id="stime" value="<?php echo $row['start_time'];?>"  class="form-control"\>
  </div>
  <div class="col-auto">
    <label for="etime" class="col-form-label">End Time</label>
  </div>
  <div class="col-auto">
    <input type="time" name="etime" id="etime" value="<?php echo $row['end_time'];?>" class="form-control"\>
  </div>
  
    </div><br><br>
    <div class="d-grid gap-2 col-2 mx-auto">
    <input type="hidden" name="cid" value=<?php echo $row['camp_id'];?>>
  
    <input class="btn btn-success" type="submit" value="Save">
</div>
</div>

</form>
    </div>
   
    <?php include "php/_footer.php"?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>