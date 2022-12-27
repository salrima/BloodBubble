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
    
    <link rel="stylesheet" href="css/style.css">
    
    <SCRIPT src="drop.js"></SCRIPT>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <!-- <SCRIPT src="formvalidation.js" of the External file>  -->
    </SCRIPT>
    <title>User Registration</title>
</head>

<body>
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
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        $sql="INSERT INTO `user`(`Fname`, `Mname`, `Lname`, `Username`, `Password`, `mobileno`, `Email`, `Gender`, `Age`, `Dob`, `City`, `State`, `Pincode`, `District`) VALUES ('$fname','$mname','$lname','$uname','$hashed_password','$mobileno','$email','$gender','$age','$dob','$city','$state','$pincode','$district');";
        $result=mysqli_query($conn,$sql);

        if($result){
            $_SESSION['uname']=$uname;
           
            $receiver = $email;
            $subject = "Registration Successful";
            $body = "Thank you for registering with Blood Bubble";
            $sender = "From: Bloodbubble";
            if(mail($receiver, $subject, $body, $sender)){
                echo "Email sent successfully to $receiver";
            }else{
                echo "Sorry, failed while sending mail!";
            }
                      
                        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>THANK YOU FOR REISTERING</strong> You have successfully registered.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  header('location: index.php');
                    }else{
                        echo"the record was noty inserted successfully--->".mysqli_error($conn);
                    }
                  }
                }

            ?>

            <?php include "php/_nav.php"?>
    
   

    
    <div class="container" style="background-color:gray; opacity:95%"><br>
    <h3 style="color:maroon;text-align:center">REGISTRATION FORM</h3>

  <form action="" id="userform" method="post">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="Fname" class="col-form-label">First name</label>
  </div>
  <div class="col-auto">
    <input type="text" name="fname" id="fname" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" required >
  </div>
  <div class="col-auto">
    <label for="mname" class="col-form-label">Middle name</label>
  </div>
  <div class="col-auto">
    <input type="text" name="mname" id="mname" onkeydown="return /[a-z]/i.test(event.key)" class="form-control" >
  </div>
  <div class="col-auto">
    <label for="lname" class="col-form-label">Last name</label>
  </div>
  <div class="col-auto">
    <input type="text" name="lname" id="lname" onkeydown="return /[a-z]/i.test(event.key)" class="form-control" required>
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
    <label for="Password" class="col-form-label">Password</label>
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
  <div class="col-auto" style="margin-left:9%">
    <label for="age" class="col-form-label">Age</label>
  </div>
  <div class="col-auto">
    <input type="number" name="age" id="age" class="form-control" required>
  </div>
 
    </div><br><br>
    
    <div class="row g-3 align-items-center">
  <div class="col-auto" style="margin-left:3%">
    <label for="city" class="col-form-label">City</label>
  </div>
  <div class="col-auto">
    <input type="text" name="city" id="city" onkeydown="return /[a-z]/i.test(event.key)" class="form-control" required>
  </div>
  <div class="col-auto" style="margin-left:4%">
    <label for="district" class="col-form-label">District</label>
  </div>
  <div class="col-auto">
    <input type="text" name="district" id="district" onkeydown="return /[a-z]/i.test(event.key)" class="form-control"\required>
  </div>
  <div class="col-auto">
    <label for="state" class="col-form-label">State</label>
  </div>
  <div class="col-auto">
    <input type="text" name="state" id="state" onkeydown="return /[a-z]/i.test(event.key)" class="form-control"\required>
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

        
        <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="validationjQuery.js"></script>
</body>

</html>