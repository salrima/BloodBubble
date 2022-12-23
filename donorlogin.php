<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/style.css">
    
    <SCRIPT src="drop.js"></SCRIPT>
<style>
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
        document.getElementById("TITLE").innerHTML="RENZA";
        i--;
       }
      
      },1800)
     
    </script>
     </div>
     <div class="BACKG"> <img src="BB.jpg" height=100% width=100%> </div>
 


   
    
     
        <!-- Headings for the form -->
        <div class="headingsContainer">
           <div> <h3>DONAR LOGIN</h3></div>
        </div>
        <form action="donorregistration.php" id="formLog" method="post">
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
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="register">Not a member?  <a href="userform.php">Register here!</a></p>

        </div>

    </form>
   



    <?php include "php/_footer.php"?>
</body>
</html>
