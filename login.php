<?php
    session_start();
    include "php/_connect.php";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['login'])){
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];

          

          
                $sql="SELECT * FROM `user` WHERE `Username` = '$uname' AND `Password` = '$pass'";
                $result=mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($result)==1)
                {
                    $_SESSION['uname']=$uname;
                    // echo "$uname";
                    header('location: index.php');
                }
                else{
                    echo"login failed! ENTER VALID USERNAME AND PASSWORD";
                }
            }
        }
    
?>


<!DOCTYPE html>
<html lang="en">
    
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
    
        <?php include "php/_nav.php"?>

        <div class="X">
            <div id="TITLE"></div>
                <script>
                    var i=0;
                    setInterval(function func(){
                        if(i==0){
                            document.getElementById("TITLE").innerHTML="REGISTER NOW TO DONATE BLOOD AND BECOME A HERO";
                            i++;
                        }
                        else
                        {
                            document.getElementById("TITLE").innerHTML="DONATE BLOOD, SAVE LIFE";
                            i--;
                        }
                    },1800)
                
                </script>
            </div>
        <div class="BACKG"> <img src="images/BB.jpg" height=100% width=100%> </div>
        
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <div> <h3>DONAR LOGIN</h3></div>
        </div>
        <form action="index.php" id="formLog" method="post">
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
                        <input class="inputTypeCheckBox" type="checkbox"  name="remember"> Remember me
                    </label>
                    <p class="forgotpsd"> <a href="forgotpass.php">Forgot Password?</a></p>
                </div>


                <!-- Submit button -->
                <input type="submit" class="btn btn-danger" value="Login" name="login">

                <!-- Sign up link -->
                <p class="register">Not a member?  <a href="userform.php">Register here!</a></p>

            </div>

        </form>
        
        <?php include "php/_footer.php"?>
    </body>
</html>