<?php
session_start();
// echo"welcome".$_SESSION['uname'];
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/login.css"> -->
  <link rel="stylesheet" href="css/style.css">
  
  <SCRIPT src="drop.js"></SCRIPT>
  <style>
    body{
  font-family:sans-serif; 
  color:whitesmoke;
}

      .X{
   background: #d80202ff;
    min-height: 80px;
    width:auto;
    background-size: cover;
    position: relative;
    display:grid;
    place-items: center;  
}

#TITLE{
  font-size:25px;
  font-weight: bold;
  font-family: "Helvetica";
}
</style>

  <title>Receiver</title>
</head>

<body>
  <?php include "php/_nav.php"?>

  <div class="X">
    <div id="TITLE"></div>
    <script>
      var i = 0;
      setInterval(function func() {
        if (i == 0) {
          document.getElementById("TITLE").innerHTML = "REGISTER FOR BLOOD DOANTION";
          i++;
        }
        else {
          document.getElementById("TITLE").innerHTML = "PEOPLE LIVE WHEN PEOPLE GIVE";
          i--;
        }

      }, 1800)

    </script>
  </div>

  <br><br>
  <div class="container " style="background-color:gray; opacity:95%">
    <h3 style="color:maroon;text-align:center">RECEIVER REGISTRATION FORM</h3>
    <form action="receiver.php" method="POST" autocomplete='off'><br>
      <div class="row g-3 align-items-center">
        <div class="col-auto" style="margin-left:10%">
          <label for="bgroup" class="col-form-label">Blood Group</label>
        </div>
        <div class="col-auto">
          <input type="text" name="bgroup" id="bgroup" class="form-control" required>
        </div>

        <div class="col-auto" style="margin-left:2%">
          <label for="btype" class="col-form-label">Blood Type</label>
        </div>
        <select name="btype" class="form-select form-select-lg mb-1" aria-label=".form-select-lg example" required>
          <option selected>Select blood component</option>
          <option value="WholeBlood">Whole Blood</option>
          <option value="SingleDonorPlatelet">Single Donor Platelet</option>
          <option value="SingleDonorPlasma">Single Donor Plasma</option>
          <option value="SagmPackedRedBloodCells">Sagm Packed Red Blood Cells</option>
          <option value="PlateletRichPlasma">Platelet Rich Plasma</option>
          <option value="PlateletPoorPlasma">Platelet Poor Plasma</option>
          <option value="PlateletConcentrate">Platelet Concentrate</option>
          <option value="Plasma">Plasma</option>
          <option value="PackedRedBloodCells">Packed Red Blood Cells</option>
          <option value="LeukoreducedRBC">Leukoreduced RBC</option>
          <option value="IrradiatedRBC">Irradiated RBC</option>
          <option value="FreshFrozenPlasma">Fresh Frozen Plasma</option>
          <option value="Cryoprecipitate">Cryoprecipitate</option>
          <option value="CryoPoorPlasma">Cryo Poor Plasma</option>
        </select>


      </div><br><br>

      <div class="row g-3 align-items-center">
        <div class="col-auto" style="margin-left:3%">
          <label for="quantity" class="col-form-label">Quantity</label>
        </div>
        <div class="col-auto">
          <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="district" class="col-form-label">District</label>
        </div>
        <div class="col-auto">
          <input type="text" name="district" id="district" class="form-control" required>
        </div>
        <div class="col-auto">
          <label for="state" class="col-form-label">State</label>
        </div>
        <div class="col-auto">
          <input type="text" name="state" id="state" class="form-control" required>
        </div>
      </div><br><br>
      <div class="d-grid gap-2 col-2 mx-auto">
        <input class="btn btn-danger" type="submit"></input>

      </div>
  </div>

  </form>
  </div><br><br>
  <?php

    include "Php/_connect.php";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    
      $bgroup=$_POST['bgroup'];
      $btype=$_POST['btype'];
      $quantity=$_POST['quantity'];
      $district=$_POST['district'];
      $state=$_POST['state'];
      
      $sql2="INSERT INTO `receiver`(`Username`, `blood_type`, `bloodgroup`) VALUES ('{$_SESSION['uname']}','$btype','$bgroup')";
      mysqli_query($conn,$sql2);

      $sql="SELECT * FROM `bloodbank` NATURAL JOIN `bloodgroup` WHERE `district` = '$district' AND `state` = '$state' AND `bloodtype`='$btype' AND `bgroup`='$bgroup'";
      $result=mysqli_query($conn,$sql);

      ?>

  <table class="table table-danger table-striped-columns" style="color:black">
    <thead>
      <tr>
        <th scope="col">Bloodbank Name</th>
        <th scope="col">Availability</th>
        <th scope="col">Quantity</th>
        <th scope="col">Email</th>
        <th scope="col">Phone No</th>
        <th scope="col">City</th>
        <th scope="col">District</th>
        <th scope="col">State</th>
        <th scope="col">Click here to donate</th>
      </tr>
    </thead>
    <tbody>

        <?php
          if(mysqli_num_rows($result)==0){
            echo"result is zero";
          }
          echo"Before the if statement to print the table body";
          if(mysqli_num_rows($result)>0)
          {
            while($row=mysqli_fetch_array($result))
            {
        ?>
            <tr>
              <td>
                <?php echo $row['bb_name'];?>
              </td>
              <td>
                <?php 
                    if($quantity<=$row['quantity'])
                      echo "Available";
                    else
                      echo "Not Available";
                    ?>
              </td>
              <td>
                <?php echo $row['quantity'];?>
              </td>
              <td>
                <?php echo $row['email'];?>
              </td>
              <td>
                <?php echo $row['contactno'];?>
              </td>
              <td>
                <?php echo $row['City'];?>
              </td>
              <td>
                <?php echo $row['District'];?>
              </td>
              <td>
                <?php echo $row['State'];?>
              </td>
              <td>
                <form action="request.php" method="post" >
                  <input type="hidden" name="bloodbank" value=<?php echo $row['bloodbank_id'];?>>
                  <input type="hidden" name="qnt" value=<?php echo $quantity?>>
                  <input type="submit" class="btn btn-dange" value="Click Here">
                </form>
              </td>
            </tr>
      <?php
            }
          }
          ?>
    </tbody>
  </table>
  <?php
        }
      ?>



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