<!doctype html>
<html lang="en">
<?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $mobileno=$_POST['mobileno'];
            $gender=$_POST['gender'];
            $age=$_POST['age'];
            $dob=$_POST['dob'];
            $city=$_POST['city'];
            $district=$_POST['district'];
            $state=$_POST['state'];
            $pincode=$_POST['pincode'];
            

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
           
            $sql="INSERT INTO `user`(`Fname`, `Mname`, `Lname`, `Username`, `Password`, `mobileno`, `Email`, `Gender`, `Age`, `Dob`, `City`, `State`, `Pincode`, `District`) VALUES ('$fname','$mname','$lname','$uname','$pass','$mobileno','$email','$gender','$age','$dob','$city','$state','$pincode','$district');";
            $result=mysqli_query($conn,$sql);

            if($result){
                echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>THANK YOU FOR REISTERING</strong> You have successfully registered.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            }else{
                echo"the record was noty inserted successfully--->".mysqli_error($conn);
            }
          }
        }

        ?>
    

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/11d397fc54.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexcss.css">
    <title>User</title>
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: rgb(143, 12, 12)">

<img src="images/withBackground (1).png" width="80" height="80" alt="">
&emsp;
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#"><b>Home </b><span class="sr-only">(current)</span></a>
        </li>
        &emsp;
        <li class="nav-item">
            <a class="nav-link" href="#"><b>Donate Blood</b></a>
        </li>
        &emsp;
        <li class="nav-item">
            <a class="nav-link" href="#"><b>Blood Bank</b></a>
        </li> &emsp;
        <li class="nav-item">
            <a class="nav-link" href="#"><b>Blood Availability</b></a>
        </li> &emsp;
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
    </ul>
</div>
</nav>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];
            

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
            echo"Connection was successful<br>";
            $sql="INSERT INTO `usern` (`username`, `password`) VALUES ('$uname', '$pass');";
            $result=mysqli_query($conn,$sql);

            if($result){
                echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            }else{
                echo"the record was noty inserted successfully--->".mysqli_error($conn);
            }
          }
        }

        ?>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/BANNER1.svg" alt="First slide"
                    width="10" height="300">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/donating-blood-banner.jpg" alt="Second slide" width="10" height="300">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/camp5.jpg" alt="Third slide" width="10"
                    height="300" s>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br><br>
    <div class="container ">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="GIF_ForSRCsite_RedBloodbag_V2.gif" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b>CHECK NOW!</b></h5>
                        <p class="card-text">Check the eligibility criteria and Register as donor and DONATE BLOOD</p>
                        <a href="#" class="btn btn-success">Eligibility</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <img class="d-block w-100" src="images/camp3.jpg" alt="Second slide" width="10" height="300">
    </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="BANNER1.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BLOOD DONATION CAMP</h5>
                        <p class="card-text">Go and register now as a donor to take part in this blood donation camp</p>
                        <a href="donorregistration.php" class="btn btn-danger">Register as donor</a>
                        <a href="#" class="btn btn-danger">Donate now</a>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <br><br>
    <div class="card">
  <div class="card-header">
    Register and search for blood stock
  </div>
  <div class="card-body">
    <h5 class="card-title">Receive Blood</h5>
    <p class="card-text">Search for blood stock and help save your loved ones.</p>
    <a href="#" class="btn btn-danger">Register as receiver</a>
    <a href="#" class="btn btn-danger">Request blood</a>
  </div>
</div>

   
 


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