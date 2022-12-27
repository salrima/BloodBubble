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
  <!-- <link rel="stylesheet" href="indexcss.css"> -->
  <!-- <link rel="stylesheet" href="login.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <SCRIPT src="campregistrationformvalidation.js">
  </SCRIPT>
  <style>
    body {
      font-family: sans-serif;
      color: whitesmoke;
    }


    .X {
      background: #d80202ff;
      min-height: 80px;
      width: auto;
      background-size: cover;
      position: relative;
      display: grid;
      place-items: center;
    }

    #TITLE {
      font-size: 25px;
      font-weight: bold;
      font-family: "Helvetica";
    }
  </style>
  <title>Camp Registration</title>
</head>

<body background="images/blood_types.jpg">
  <?php
include "php/_nav.php";
?>
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

  <form action="" onsubmit="return validateReqFields(this)" method="post">

    <br><br>
    <div class="container " style="background-color:gray; opacity:95%">
      <h3 style="color:maroon;text-align:center">CAMPS REGISTRATION FORM</h3>

      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="cname" class="col-form-label">Camp name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="cname" id="cname" class="form-control" required>
        </div>
        <div class="col-auto" style="margin-left:5%">
          <label for="bloodbankid" class="col-form-label">Blood Bank ID</label>
        </div>
        <div class="col-auto">
          <input readonly type="bloodbankid" name="bloodbankid" value='<?php echo $_SESSION['bid']?>' id="bloodbankid"
          class="form-control" required>
        </div>
      </div><br><br>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="orgtype" class="col-form-label">Organizer Type</label>
        </div>

        <div class="col-auto">
          <input type="text" name="orgtype" id="orgtype" class="form-control" required>
        </div>


        <div class="col-auto">
          <label for="orgname" class="col-form-label">Organization Name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="orgname" id="orgname" class="form-control" required>
        </div>


      </div><br><br>
      <div class="row g-3 align-items-center">
        <div class="col-auto" style="margin-left:-1%">
          <label for="Organizer" class="col-form-label">Organizer Name</label>
        </div>
        <div class="col-auto">
          <input type="text" name="organizer" id="organizer" class="form-control" required>
        </div>
        <div class="col-auto" style="margin-left:3%">
          <label for="orgphno" class="col-form-label">Contact No</label>
        </div>
        <div class="col-auto">
          <input type="text" name="orgphno" id="orgphno" class="form-control" \ required>
        </div>
        <div class="col-auto">
          <label for="orgemail" class="col-form-label">Email</label>
        </div>
        <div class="col-auto">
          <input type="email" name="orgemail" id="orgemail" class="form-control" \ required>
        </div>

      </div><br><br>

      <div class="row g-3 align-items-center">
        <div class="col-auto" style="margin-left:5%">
          <label for="city" class="col-form-label">City</label>
        </div>
        <div class="col-auto">
          <input type="text" name="city" id="city" class="form-control" required>
        </div>
        <div class="col-auto" style="margin-left:8%">
          <label for="district" class="col-form-label">District</label>
        </div>
        <div class="col-auto">
          <input type="text" name="district" id="district" class="form-control" \required>
        </div>
        <div class="col-auto">
          <label for="state" class="col-form-label">State</label>
        </div>
        <div class="col-auto">
          <input type="text" name="state" id="state" class="form-control" \required>
        </div>

      </div><br><br>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="date" class="col-form-label">Camp Dtae</label>
        </div>
        <div class="col-auto">
          <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="stime" class="col-form-label">Start Time</label>
        </div>
        <div class="col-auto">
          <input type="time" name="stime" id="stime" class="form-control" \required>
        </div>
        <div class="col-auto">
          <label for="etime" class="col-form-label">End Time</label>
        </div>
        <div class="col-auto">
          <input type="time" name="etime" id="etime" class="form-control" \required>
        </div>

      </div><br><br>
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-success" type="submit">Submit</button>

      </div>


  </form>
  </div>
  <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
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
            
            
            $sql="INSERT INTO `camps`(`camp_id`, `bloodbank_id`, `camp_name`, `organization_type`, `organization_name`, `organizer_name`, `org_phno`, `org_email`, `City`, `District`, `State`, `camp_date`, `start_time`, `end_time`,`status`) VALUES ('','$bloodbankid','$cname','$orgtype','$orgname','$organizer','$orgphno','$orgemail','$city','$district','$state','$date','$stime','$etime','Ndone');";
            $result=mysqli_query($conn,$sql);
            // header('location:admin.php');
            ?>
                  <script>
                    window.location='admin.php';
                  </script>
                <?php
            
            // if($result){
            //     $sql2="SELECT * FROM `camps` WHERE `camp_name` LIKE '$cname'";
            //     $mysqli_result=mysqli_query($conn,$sql2);
            //     $row=mysqli_fetch_assoc($mysqli_result);
               
            //     echo"<br>";
            //     echo'<div class="alert alert-success" role="alert">
            //     <h4 class="alert-heading">Well done!</h4>
            //     <p>you have successfully registered. </p>
            //     This is your CAMP ID: '. $row['camp_id'];
            //     ' <hr>
            //     <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            //   </div>';
            // }else{
            //     echo"the record was noty inserted successfully--->".mysqli_error($conn);
            // }
            
            
          }
        }

       ?>





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