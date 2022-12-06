<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
  
  <header>
    <nav>
        <div class="nav-links">
            <div class="logo"><img src="logo.png"></div>
            <ul>
                <li><a href="#" class="HHOVER">ABOUT US</a></li>
                <li><a href="#"class="HHOVER">LOOKING FOR BLOOD</a></li>
                <li><a href="#" class="HHOVER">DONATE BLOOD</a></li>
                <li><a href="#" class="HHOVER">BLOOD BANK LOGIN</a></li>
            </ul>
        </div>
    </nav>
  </header>




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
   



    <footer>
      <div class="footer">
  
          <div class="container">
              <div class="foot_menu">
                  <h3>LOOKING FOR BLOOD</h3>
                  <ul>
                      <li><a href="#">Blood Availability</a></li>
                      <li><a href="#">Blood Bank</a></li>
                      <li><a href="#">Directory</a></li>
                      <li><a href="#">Request</a></li>
                  </ul>
              </div>
              <div class="foot_menu">
                  <h3>WANT TO DONATE BLOOD</h3>
                  <ul>
                      <li><a href="#">Blood Donation Camp</a></li>
                      <li><a href="#">Donor Login</a></li>
                      <li><a href="#">Voluntary Donor Group</a></li>
                      <li></li>
                  </ul>
              </div>

              <div class="foot_menu">
                  <h3>NEWSLETTER</h3>
                  <form id="FooterForm">
                      <input type="email" placeholder="Enter your email address" required>
                      <br>
                      <button type="SUBMIT">SUBSCRIBE</button>
                  </form>
              </div>
              <div class="foot_menu">
                  <h3>ABOUT US</h3>
                  <ul>
                      <li><a href="#" >About BLOODBUBBLE</a></li>
                      <li><a href="#">BLOODBUBBLE FAQs</a></li>
                      <li><a href="#">Notifications</a></li>
                      <li><a href="#">Contact Us</a></li>
                  </ul>
              </div>


          </div>
          <div class="clear"></div>
          <div class="social-icons">
              <ul class="footer_social_media">
                  <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

              </ul>



          </div>
          <div class="half">
              <p class="copycont">Copyright &copy; 2022. All rights reserved</p>
          </div>
      </div>
  </footer>
 
</body>
</html>
