
<?php

session_start();
//echo"welcome".$_SESSION['uname'];
?>
<!doctype html>
<html lang="en">
<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // $disease=$_POST['diseases'];
        // $bgroup=$_POST['bgroup'];
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        

        include "php/_connect.php";

        if(!$conn)
        {
            die("Sorry we failed to connect:". mysqli_connect_error());
        }
        else{
      
        $sql="SELECT * FROM `bloodbank` WHERE `Username` = '$uname' AND `password` = '$pass'";
        $result=mysqli_query($conn,$sql);
        
        
        if(mysqli_num_rows($result)==1)
        {
           
            $_SESSION['uname']=$uname;
            // $_SESSION['diseases']=$disease;
            // $_SESSION['bloodgroup']=$bgroup;
            // $sql2="INSERT INTO `donor`(`donor_id`, `Username`, `diseases`, `bloodgroup`) VALUES ('','$uname','$disease','$bgroup')";
            // $result2=mysqli_query($conn,$sql2);
            // header('location:donorregistration.php');
            //<meta http-equiv="refresh" content="0; url=http://localhost/sal/donorregistration.php"/>
            //<?php
            $row=mysqli_fetch_array($result);
       
            $bid= $row['bloodbank_id'];
            

        }
        else{
            echo"login failed! ENTER VALID USERNAME AND PASSWORD";
            //header('location:login.php');
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/indexcss.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Donor registration</title>
</head>

<body style="background-color:#cc0000">
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
    </header>
    <br><br>

<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:25%" >
  <a href="campregistration.php" class="btn btn-primary">Add camps</a>

  <form href="admincamps.php" method="post">
  <input type="hidden" name="bloodbank" value=<?php echo $bid;?>>
  <input class="btn btn-success" type="submit" value="search camps"></input>
  </form>

  <form href="admindonors.php" method="post">
  <input type="hidden" name="bloodbank" value=<?php echo $bid;?>>
  <input class="btn btn-success" type="submit" value="search donor"></input>
  </form>

  <form href="campregistration.php" method="post">
  <input type="hidden" name="bloodbank" value=<?php echo $bid;?>>
  <input class="btn btn-success" type="submit" value="Search receivers"></input>
  </form>

  <form href="updatebb.php" method="post">
  <input type="hidden" name="bloodbank" value=<?php echo $bid;?>>
  <input class="btn btn-dark" type="submit" value="Edit BB Details" ></input>
  </form>
  
</div><br><br>
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Search for a BLOOD BANK</h5>
        <p class="card-text">Search for a blood bank and book a date to donate blood.</p>
        <a href="searchbb.php" class="btn btn-danger">Search Bloodbank</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Search for CAMPS </h5>
        <p class="card-text">Search for blood donation camps near you and donatev blood.</p>
        <a href="searchcamps.php" class="btn btn-danger">Search Camps</a>
      </div>
    </div>
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