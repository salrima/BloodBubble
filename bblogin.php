<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/11d397fc54.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
 
    <SCRIPT src="drop.js"></SCRIPT>
</head>

<body>

    <?php include "php/_nav.php"?>

    <?php
        include "php/_connect.php";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['login']))
            {
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];

                $sql="SELECT * FROM `bloodbank` WHERE `Username` = '$uname' AND `password` = '$pass'";
                $result=mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($result)==1)
                {
                    $row=mysqli_fetch_array($result);
                    $_SESSION['bid']=$row['bloodbank_id'];
                    header("location: admin.php");
                }
                else{
                    echo"login failed! ENTER VALID USERNAME AND PASSWORD";
                }
            }
        }
    ?>

    <div class="X">
        <div id="TITLE"></div>
        <script>
            var i = 0;
            setInterval(function func() {
                if (i == 0) {
                    document.getElementById("TITLE").innerHTML = "REGISTER NOW TO DONATE BLOOD AND BECOME A HERO";
                    i++;
                }
                else {
                    document.getElementById("TITLE").innerHTML = "DONATE BLOOD, SAVE LIFE";
                    i--;
                }

            }, 1800)

        </script>
    </div>
    <div class="BACKG"> <img src="images/camp5.jpg" height=100% width=100%>
    </div>

    <!-- Headings for the form -->
    <div class="headingsContainer">
        <div>
            <h3>DONAR LOGIN</h3>
        </div>
    </div>
    <form action="#" id="formLog" method="POST">
        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">Username</label>
            <input class="inputType" type="text" placeholder="Enter Username" name="uname" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Password</label>
            <input class="inputType" type="password" placeholder="Enter Password" name="pass" required>

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <label>
                    <input class="inputTypeCheckBox" type="checkbox" name="remember"> Remember me
                </label>
                <p class="forgotpsd"> <a href="fogotpass.php">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button class="btn btn-danger" type="submit" name="login">Login</button>

            <!-- Sign up link -->
            <p class="register">Not a member? <a href="userform.php">Register here!</a></p>

        </div>

    </form>

    <?php include "php/_footer.php"?>

</body>

</html>