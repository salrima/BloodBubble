<?php
if(isset($_POST['bloodbank']))
{
 $bid=$_POST['bloodbank'];
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
    <form action="details.php" method="POST"><br>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
    <label for="bbid" class="col-form-label">Blood bank ID</label>
  </div>  
  <div class="col-auto"> <?php


    echo $bid;

  ?>
  </div>
  <div class="col-auto">
    <label for="donorid" class="col-form-label">Donor ID</label>
  </div> 
  <div class="col-auto">
    <input type="number" name="did" id="donorid" class="form-control" required >
  </div>
  <div class="col-auto">
    <label for="ddate" class="col-form-label">Donation Date</label>
  </div> 
  <div class="col-auto">
    <input type="date" name="ddate" id="ddate" class="form-control" required >
</div>
</div><br><br>
<div class="row align-items-center"style="margin-left:30%">
<div class="col-auto">
    <label for="dtype" class="col-form-label">Donation Type</label>
  </div> 
<select name="dtype" class="form-select form-select-lg mb-1" aria-label=".form-select-lg example">
  <option selected>Select blood component</option>
  <option value="1">Whole Blood</option>
  <option value="2">Single Donor Platelet</option>
  <option value="3">Single Donor Plasma</option>
  <option value="1">Sagm Packed Red Blood Cells</option>
  <option value="2">Platelet Rich Plasma</option>
  <option value="3">Platelet Poor Plasma</option>
  <option value="1">Platelet Concentrate</option>
  <option value="2">Plasma</option>
  <option value="3">Packed Red Blood Cells</option>
  <option value="2">Leukoreduced RBC</option>
  <option value="3">Irradiated RBC</option>
  <option value="1">Fresh Frozen Plasma</option>
  <option value="2">Cryoprecipitate</option>
  <option value="3">Cryo Poor Plasma</option>
</select>
</div><br><br>

    <div class="d-grid gap-2 col-2 mx-auto">
    <form action="deatils.php.php" method="post">
                    <input type="hidden" name="bloodbank" value=<?php echo $bid;?>>
  <input class="btn btn-success" type="submit">Submit</input>
 
</div>
</div>

</form>
    </div><br><br>
     
   
    

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