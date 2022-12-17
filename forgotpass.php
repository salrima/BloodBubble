<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/forgotpass.css">

</head>
<body>
  
<?php include "php/_nav.php"?>

    <from id="emailfrom">
        <div class="forgotheading">
            <div> <h3>Forgot Password</h3></div>
            <div>Let us help you</div>
         </div>
    <br> <br>
         <!-- Main container for all inputs -->
         <div class="mainforgot">
        
             <label for="email">Email</label>
             <br> 
         <input class="inputType" type="email" placeholder="Enter Email" name="email" required>
             <!-- Submit button -->
             <br>
             <button class="forgot" type="frgt">Send OTP</button>
    
         </div>
    
    </from>
    
    

    <?php include "php/_footer.php"?>
    </body>
    </html>