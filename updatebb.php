<?php
if(isset($_POST['bid']))
{
 $bid=$_POST['bid'];
}
session_start();
//echo"welcome".$_SESSION['uname'];
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
            $sql="SELECT * FROM `bloodbank` WHERE `bloodbank_id`=$bid";
            $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
          }
               
   ?>
        <div class="container " style="background-color:gray; opacity:95%">
    <h3 style="color:maroon;text-align:center">BLOOD BANK</h3>
    <form action="updatebb.php" method="post"><br>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="bbname" class="col-form-label">Bloodbank name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="bbname" id="bbname" value="<?php echo $row['bb_name'];?>" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="uname" class="col-form-label">User name</label>
        </div>
        <div class="col-auto">
          <input type="username" name="uname" id="uname" value="<?php echo $row['Username'];?>" class="form-control" required>
        </div>
      </div><br><br>
      <div class="row g-3 align-items-cente">
        <div class="col-auto">
          <label for="hname" class="col-form-label">Hospital Name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="hname" id="hname" value="<?php echo $row['h_name'];?>" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="contactp" class="col-form-label">Contact Person</label>
        </div>

        <div class="col-auto">
          <input type="text" name="contactp" id="contactp" value="<?php echo $row['contactperson'];?>"  class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="contactno" class="col-form-label">Contact No</label>
        </div>

        <div class="col-auto">
          <input type="text" name="contactno" id="contactno" value="<?php echo $row['contactno'];?>" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
        </div>
      </div><br><br>
      <div class="mb-3" style="width:30%; margin-right:auto">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'];?>"  aria-describedby="emailHelp" required>
      </div>
      <br><br>


      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="city" class="col-form-label">City</label>
        </div>
        <div class="col-auto">
          <input type="text" name="city" id="city" value="<?php echo $row['City'];?>"  class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="district" class="col-form-label">District</label>
        </div>
        <div class="col-auto">
          <input type="text" name="district" id="district"  value="<?php echo $row['District'];?>" class="form-control" \ required>
        </div>
        <div class="col-auto">
          <label for="state" class="col-form-label">State</label>
        </div>
        <div class="col-auto">
          <input type="text" name="state" id="state" value="<?php echo $row['State'];?>" class="form-control" \ required>
        </div>

      </div><br><br>
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-success" type="submit">Submit</button>

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