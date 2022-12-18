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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <SCRIPT src="formvalidation.js" of the External file> 
    </SCRIPT>
    <title>User Registration</title>
</head>

<body>
<?php
 include "php/_nav.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $rid=$_POST['rid'];
       


        include "php/_connect.php";
 $conn=mysqli_connect($servername, $username, $password, $database);
 if(!$conn)
 {
   die("Sorry we failed to connect:". mysqli_connect_error());
 }
 else{
   
   $sql="SELECT * FROM `user` NATURAL JOIN `receiver` NATURAL JOIN  `request` WHERE `receiver_id`= '$rid';";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
 }
}
   ?>

    
    <div class="container" style="background-color:gray; opacity:95%"><br>
    <h3 style="color:maroon;text-align:center">REGISTRATION FORM</h3>
    <form action="userspage.php" onsubmit="return validateReqFields(this)" method="post">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="Fname" class="col-form-label">First name</label>
  </div>
  <div class="col-auto">
    <input readonly type="text" name="fname" id="fname" value="<?php echo $row['Fname'];?>" class="form-control" required >
  </div>
  <div class="col-auto">
    <label for="mname" class="col-form-label">Middle name</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="mname" id="mname" value="<?php echo $row['Mname'];?>"  class="form-control" required>
  </div>
  <div class="col-auto">
    <label for="lname" class="col-form-label">Last name</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="lname" id="lname" value="<?php echo $row['Lname'];?>"  class="form-control" required>
  </div>
</div><br><br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="username" class="col-form-label">Username</label>
  </div>
  <div class="col-auto">
    <input readonly  type="username" name="uname" id="username" value="<?php echo $row['Username'];?>"  class="form-control"required >
  </div>

  <div class="col-auto">
    <label for="email" class="col-form-label">Email</label>
  </div>
    
  <div class="col-auto" style="margin-left:3%">
    <input readonly  type="email" name="email" id="email" value="<?php echo $row['Email'];?>"  class="form-control" required>
  </div>
    </div><br><br>
  <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="mobileno" class="col-form-label">Mobile No</label>
  </div>
  <div class="col-auto">
<input readonly  type="number" name="mobileno" id="mobileno" value="<?php echo $row['mobileno'];?>"  class="form-control" required>
  </div>
  <div class="col-auto" style="margin-left:3%">
    <label for="gender" class="col-form-label">Gender</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="gender" id="gender" value="<?php echo $row['Gender'];?>"  class="form-control"\ required>
  </div>
    </div><br><br>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
    <label for="dob" class="col-form-label">Date of birth</label>
  </div>
  <div class="col-auto">
    <input readonly  type="date" name="dob" id="dob" value="<?php echo $row['Dob'];?>"  class="form-control"\ required>
  </div>
  <div class="col-auto">
    <label for="age" class="col-form-label">Age</label>
  </div>
  <div class="col-auto">
    <input readonly  type="number" name="age" id="age" value="<?php echo $row['Age'];?>"  class="form-control" required>
  </div>
 
    </div><br><br>
    
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="city" class="col-form-label">City</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="city" id="city" value="<?php echo $row['City'];?>"   class="form-control" required>
  </div>
  <div class="col-auto">
    <label for="district" class="col-form-label">District</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="district" id="district" value="<?php echo $row['District'];?>"  class="form-control"\required>
  </div>
  <div class="col-auto">
    <label for="state" class="col-form-label">State</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="state" id="state" value="<?php echo $row['State'];?>"   class="form-control"\required>
  </div>
  
    </div><br><br>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
    <label for="pincode" class="col-form-label">Pin Code</label>
  </div>
  <div class="col-auto">
    <input readonly  type="text" name="pincode" id="pincode" value="<?php echo $row['Pincode'];?>"  class="form-control"\required>
  </div>
    </div><br>
    

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