<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/indexcss.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
  <SCRIPT src="bbvalidation.js"> </SCRIPT>

  <title>Blood bank registration</title>
</head>

<body background="blood_types.jpg">
  <?php include "php/_nav.php"?>

  <div class="X">
    <div id="TITLE"></div>
    <script>
      var i = 0;
      setInterval(function func() {
        if (i == 0) {
          document.getElementById("TITLE").innerHTML = "REGISTER YOUR BLOOD BANK";
          i++;
        }
        else {
          document.getElementById("TITLE").innerHTML = "MAKE PEOPLE DONATE BLOOD";
          i--;
        }

      }, 1800)

    </script>
  </div>





  <br><br>
  <div class="container " style="background-color:gray; opacity:95%">
    <h3 style="color:maroon;text-align:center">BLOOD BANK REGISTRATION FORM</h3>
    <form action="" method="post"><br>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="bbname" class="col-form-label">Bloodbank name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="bbname" id="bbname" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="uname" class="col-form-label">User name</label>
        </div>
        <div class="col-auto">
          <input type="username" name="uname" id="uname" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="password" class="col-form-label">Password</label>
        </div>
        <div class="col-auto">
          <input type="password" name="pass" id="password" class="form-control" aria-describedby="passwordHelpInline"
            required>
        </div>
      </div><br><br>
      <div class="row g-3 align-items-cente">
        <div class="col-auto">
          <label for="hname" class="col-form-label">Hospital Name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="hname" id="hname" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="contactp" class="col-form-label">Contact Person</label>
        </div>

        <div class="col-auto">
          <input type="text" name="contactp" id="contactp" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="contactno" class="col-form-label">Contact No</label>
        </div>

        <div class="col-auto">
          <input type="text" name="contactno" id="contactno" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
        </div>
      </div><br><br>
      <div class="mb-3" style="width:30%; margin-right:auto">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
      </div>
      <br><br>


      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="city" class="col-form-label">City</label>
        </div>
        <div class="col-auto">
          <input type="text" name="city" id="city" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="district" class="col-form-label">District</label>
        </div>
        <div class="col-auto">
          <input type="text" name="district" id="district" class="form-control" \ required>
        </div>
        <div class="col-auto">
          <label for="state" class="col-form-label">State</label>
        </div>
        <div class="col-auto">
          <input type="text" name="state" id="state" class="form-control" \ required>
        </div>

      </div><br><br>
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-success" type="submit">Submit</button>

      </div>
  </div>

  </form>
  </div>
  <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $bbname=$_POST['bbname'];
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];
            $hname=$_POST['hname'];
            $contactp=$_POST['contactp'];
            $contactno=$_POST['contactno'];
            $email=$_POST['email'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $district=$_POST['district'];
            
            

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
            
            
            $sql="INSERT INTO `bloodbank`(`bloodbank_id`, `bb_name`, `Username`, `password`, `h_name`, `contactno`, `contactperson`, `email`, `City`, `District`, `State`) VALUES ('','$bbname','$uname','$pass','$hname','$contactno','$contactp','$email','$city','$district','$state');";
            $result=mysqli_query($conn,$sql);
           
            
            if($result){
                $sql2="SELECT * FROM `bloodbank` WHERE `bb_name` LIKE '$bbname'";
                $mysqli_result=mysqli_query($conn,$sql2);
                $row=mysqli_fetch_assoc($mysqli_result);
       
                echo"<br>";
                echo'<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>you have successfully registered. </p>
                This is your BLOODB BANK ID: '. $row['bloodbank_id'];
                ' <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
              </div>';
            }else{
                echo"the record was noty inserted successfully--->".mysqli_error($conn);
            }
            
            
          }
        }

       ?>

  <footer>
    <div class="footer">

      <div class="container">
        <div class="foot_menu">
          <h3>LOOKING FOR BLOOD</h3>
          <ul>
            <li><a href="#">Blood Availability</a></li>
            <li><a href="#">Blood Bank</a></li>
            <li><a href="#">Directory</a></li>
            <li><a href="#">Request</a></li>
          </ul>
        </div>
        <div class="foot_menu">
          <h3>WANT TO DONATE BLOOD</h3>
          <ul>
            <li><a href="#">Blood Donation Camp</a></li>
            <li><a href="#">Donor Login</a></li>
            <li><a href="#">Voluntary Donor Group</a></li>
            <li></li>
          </ul>
        </div>

        <div class="foot_menu">
          <h3>NEWSLETTER</h3>
          <form id="FooterForm">
            <input type="email" placeholder="Enter your email address" required>
            <br>
            <button type="SUBMIT">SUBSCRIBE</button>
          </form>
        </div>
        <div class="foot_menu">
          <h3>ABOUT US</h3>
          <ul>
            <li><a href="#">About BLOODBUBBLE</a></li>
            <li><a href="#">BLOODBUBBLE FAQs</a></li>
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>


      </div>
      <div class="clear"></div>
      <div class="social-icons">
        <ul class="footer_social_media">
          <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

        </ul>



      </div>
      <div class="half">
        <p class="copycont">Copyright &copy; 2022. All rights reserved</p>
      </div>
    </div>
  </footer>



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