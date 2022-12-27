<?php
    session_start();
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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
   
    <SCRIPT src="drop.js"></SCRIPT>


    <title>Home</title>
</head>

<body>
    <?php
       include "php/_nav.php";
include "php/_connect.php";
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    if(isset($_POST['otp']))
    {
        echo $_SESSION['otp'];
        echo $_POST['otp'];
        if(time()-$_SESSION['time']<=120){
            if($_SESSION['otp']!=$_POST['otp'])
            {
                echo"sorry the otp is wrong click on resend OTP";
                header('location: otpnew.php');
            }
        }
        else{
            echo"OTP Expired";
            header('location: otpnew.php');
        }
        
    }
    if(isset($_SESSION['email'])&& isset($_POST['pswrd1']))
        {
        $pss1=$_POST['pswrd1'];
        $pss2=$_POST['pswrd2'];
            if($pss1==$pss2)
            {
                $hashed_password = password_hash($pss1, PASSWORD_DEFAULT);
                $sql= "UPDATE `user` SET `Password`='$hashed_password' WHERE `Email`='{$_SESSION['email']}';";
                mysqli_query($conn,$sql);
                header('location: login.php');
            }
        }
   }
?>
  
   <div class="BACKG"> <img src="images/blood_types.jpg" height=100% width=100%> </div>

   <!-- Headings for the form -->
   <div class="headingsContainer">
       <div>
           <h3>DONAR LOGIN</h3>
       </div>
   </div>
   <form action="resetp.php" id="formLog" method="post">
       <!-- Main container for all inputs -->
       <div class="mainContainer">
           <!-- Username -->
           <label for="pswrd1">Password</label><br>
                <input type="password" placeholder="Enter password" name="pswrd1" required>
                <br><br>
                <label for="pswrd2">Confirm Password</label><br>
                <input type="password" placeholder="Confirm password" name="pswrd2" required>
                <br>
                <!-- Submit button -->
                <button type="submit" class="center" >Reset Password</button>


        
           
       </div>

   </form>

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