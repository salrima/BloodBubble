<?php
session_start();
if(isset($_POST['campid']))
{
 $cid=$_POST['campid'];
$uname=$_SESSION['uname'];
}

//echo"welcome".$_SESSION['uname'];
?>
<!doctype html>
<html lang="en">


<?php
include "php/_connect.php";

          if(!$conn)
          {
            die("Sorry we failed to connect:". mysqli_connect_error());
          }
          else{
            echo"Connection was successful<br>";
            $sql="SELECT * FROM `user` NATURAL JOIN `donor` WHERE `Username`='$uname'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/indexcss.css">
    <title>Donor registration</title>
</head>

<body>
  <?php include "php/_nav.php"?>

  <div class="X">
    <div id="TITLE"></div>
    <script>
          var i=0;
      setInterval(function func(){
       if(i==0){
        document.getElementById("TITLE").innerHTML="REGISTER FOR BLOOD DOANTION";
        i++;
       }
       else
       {
        document.getElementById("TITLE").innerHTML="PEOPLE LIVE WHEN PEOPLE GIVE";
        i--;
       }
      
      },1800)
     
    </script>
     </div>

     <br><br>
    <div class="container "style="background-color:gray; opacity:95%">
    <h3 style="color:maroon;text-align:center">DONOR REGISTRATION FORM</h3>
    <form action="detailscamps.php" method="POST"><br>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
    <label for="campid" class="col-form-label">Camp ID</label>
  </div>  
  <div class="col-auto"> 

<div class="col-auto">
<input readonly type="number" name="cid" id="campid" value="<?php echo $cid?>" class="form-control" required >
</div>
  

  
  </div>
  <div class="col-auto">
    <label for="donorid" class="col-form-label">Donor ID</label>
  </div> 
  <div class="col-auto">
    <input readonly type="number" name="did" id="donorid" value="<?php echo $row['donor_id']?>" class="form-control" required >
  </div>
 
</div><br><br>
<div class="row align-items-center"style="margin-left:30%">
<div class="col-auto">
    <label for="dtype" class="col-form-label">Donation Type</label>
  </div> 
<select name="dtype" class="form-select form-select-lg mb-1" aria-label=".form-select-lg example">
  <option selected>Select blood component</option>
  <option value="Whole Blood">Whole Blood</option>
  <option value="Single Donor Platelet">Single Donor Platelet</option>
  <option value="Single Donor Plasma">Single Donor Plasma</option>
  <option value="Sagm Packed Red Blood Cells">Sagm Packed Red Blood Cells</option>
  <option value="Platelet Rich Plasma">Platelet Rich Plasma</option>
  <option value="Platelet Poor Plasma">Platelet Poor Plasma</option>
  <option value="Platelet Concentrate">Platelet Concentrate</option>
  <option value="Plasma">Plasma</option>
  <option value="Packed Red Blood Cells">Packed Red Blood Cells</option>
  <option value="Leukoreduced RBC">Leukoreduced RBC</option>
  <option value="Irradiated RBC">Irradiated RBC</option>
  <option value="Fresh Frozen Plasma">Fresh Frozen Plasma</option>
  <option value="Cryoprecipitate">Cryoprecipitate</option>
  <option value="Cryo Poor Plasma">Cryo Poor Plasma</option>
</select>
</div><br><br>

    <div class="d-grid gap-2 col-2 mx-auto">

                    <input type="hidden" name="campid" value=<?php echo $cid;?>>
  <input class="btn btn-success" type="submit"></input>
 
</div>
</div>

</form>
    </div><br><br>
     
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