<?php
     session_start();
     
     if($_SERVER['REQUEST_METHOD'] == "POST"){
        $cid=$_POST['cid'];
        $cname=$_POST['cname'];
        $bloodbankid=$_POST['bloodbankid'];
        $orgtype=$_POST['orgtype'];
        $orgname=$_POST['orgname'];
        $organizer=$_POST['organizer'];
        $orgphno=$_POST['orgphno'];
        $orgemail=$_POST['orgemail'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $district=$_POST['district'];
        $date=$_POST['date'];
        $stime=$_POST['stime'];
        $etime=$_POST['etime'];
 
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
       
          
    
       $sql="UPDATE `camps` SET `bloodbank_id`='$bloodbankid',`camp_name`='$cname',`organization_type`='$orgtype',`organization_name`='$orgname',`organizer_name`='$organizer',`org_phno`='$orgphno',`org_email`='$orgemail',`City`='$city',`District`='$district',`State`='$state',`camp_date`='$date',`start_time`='$stime',`end_time`='$etime' WHERE `camp_id`=`$cid`";
            $result=mysqli_query($conn,$sql);
     }
    }
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
    <form class="d-flex" role="search" action="admincamps.php" method="POST">
      <input class="form-control me-1" type="search" placeholder="Camp name" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>
    <br><br>

 

   
   
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