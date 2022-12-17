<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resetpass.css">

</head>
<body>
  
    <?php include "php/_nav.php"?>

    <from id="resetpassfrom">
        <div class="resetpassheading">
            <div> <h3>Reset Password</h3></div>
         </div>
    
         <!-- Main container for all inputs -->
         <div class="mainrestepass">
        
             <label for="pswrd1">Password</label>
         <input class="inputType" type="password" placeholder="Enter password" name="pswrd" required>

         <label for="pswrd2">Confirm Password</label>
         <input class="inputType" type="password" placeholder="Confirm password" name="pswrd" required>
    
             <!-- Submit button -->
             <button type="submit">Send OTP</button>
    
         </div>
    
    </from>
    
    
    <?php include "php/_footer.php"?>
    </body>
    </html>