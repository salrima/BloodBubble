<?php
session_start();
?>

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <SCRIPT src="formvalidation.js" of the External file> 
    </SCRIPT>
    <title>User Registration</title>
</head>

<body>



<header>
    <nav>
        <div class="nav-links">
            <div class="logo"><img src="withBackground (1).png"></div>
            <ul>
                <li><a href="#" class="HHOVER">ABOUT US</a></li>
                <li><a href="#"class="HHOVER">LOOKING FOR BLOOD</a></li>
                
               
                    <li><a href="#">DONATE BLOOD</a></li> 
                    
              
                <li><a href="#" class="HHOVER">BLOOD BANK LOGIN</a></li>
            </ul>
        </div>
    </nav>
  </header>
    
   

    
    <div class="container" style="background-color:gray; opacity:95%"><br>
    <h3 style="color:maroon;text-align:center">REGISTRATION FORM</h3>
    <form action="userspage.php" onsubmit="return validateReqFields(this)" method="post">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="Fname" class="col-form-label">First name</label>
  </div>
  <div class="col-auto">
    <input type="text" name="fname" id="fname" class="form-control" required >
  </div>
  <div class="col-auto">
    <label for="mname" class="col-form-label">Middle name</label>
  </div>
  <div class="col-auto">
    <input type="text" name="mname" id="mname" class="form-control" required>
  </div>
  <div class="col-auto">
    <label for="lname" class="col-form-label">Last name</label>
  </div>
  <div class="col-auto">
    <input type="text" name="lname" id="lname" class="form-control" required>
  </div>
</div><br><br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="username" class="col-form-label">Username</label>
  </div>
  <div class="col-auto">
    <input type="username" name="uname" id="username" class="form-control"required >
  </div>
  <div class="col-auto">
    <label for="Password" class="col-form-label">Password   </label>
  </div>
    
  <div class="col-auto" style="margin-left:2%">
    <input type="password" name="pass" id="password" class="form-control" aria-describedby="passwordHelpInline" required>
  </div>
  <div class="col-auto">
    <label for="email" class="col-form-label">Email</label>
  </div>
    
  <div class="col-auto" style="margin-left:3%">
    <input type="email" name="email" id="email" class="form-control" required>
  </div>
    </div><br><br>
  <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="mobileno" class="col-form-label">Mobile No</label>
  </div>
  <div class="col-auto">
    <input type="number" name="mobileno" id="mobileno" class="form-control" required>
  </div>
  <div class="col-auto" style="margin-left:3%">
    <label for="gender" class="col-form-label">Gender</label>
  </div>
  <div class="col-auto">
    <input type="text" name="gender" id="gender" class="form-control"\ required>
  </div>
    </div><br><br>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
    <label for="dob" class="col-form-label">Date of birth</label>
  </div>
  <div class="col-auto">
    <input type="date" name="dob" id="dob" class="form-control"\ required>
  </div>
  <div class="col-auto">
    <label for="age" class="col-form-label">Age</label>
  </div>
  <div class="col-auto">
    <input type="number" name="age" id="age" class="form-control" required>
  </div>
 
    </div><br><br>
    
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
    <input type="text" name="district" id="district" class="form-control"\required>
  </div>
  <div class="col-auto">
    <label for="state" class="col-form-label">State</label>
  </div>
  <div class="col-auto">
    <input type="text" name="state" id="state" class="form-control"\required>
  </div>
  
    </div><br><br>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
    <label for="pincode" class="col-form-label">Pin Code</label>
  </div>
  <div class="col-auto">
    <input type="text" name="pincode" id="pincode" class="form-control"\required>
  </div>
    </div><br>
    <div class="d-grid gap-2 col-2 mx-auto">
    <button type="submit" class="btn btn-success">Submit</button>
</div><br><br>

</form>
    </div>

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
                      <li><a href="#" >About BLOODBUBBLE</a></li>
                      <li><a href="#">BLOODBUBBLE FAQs</a></li>
                      <li><a href="#">Notifications</a></li>
                      <li><a href="#">Contact Us</a></li>
                  </ul>
              </div>


          </div>
          <div class="clear"></div>
          <div class="social-icons">
              <ul class="footer_social_media">
                  <li><a href="facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a href="instagram.com"><i class="fa-brands fa-instagram"></i></a></li>

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