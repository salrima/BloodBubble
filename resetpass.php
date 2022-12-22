<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resetpass.css">

</head>

<body background="images/sg1.jpg">

     <?php include "php/_nav.php"?> 

     <div class="center">
        <form id="resetform" >
            <div class="resetpassheading">
                <div>
                    <h3>Reset Password</h3>
                </div>
            </div>

            <!-- Main container for all inputs -->
            <div class="mainreset">
                <br>
                <label for="pswrd1">Password</label><br>
                <input type="password" placeholder="Enter password" name="pswrd" required>
                <br><br>
                <label for="pswrd2">Confirm Password</label><br>
                <input type="password" placeholder="Confirm password" name="pswrd" required>
                <br>
                <!-- Submit button -->
                <button type="submit" class="center" style="width:25%">Reset Password</button>

            </div>

        </form>
     </div>
    <!-- <?php include "php/_footer.php"?> -->
</body>

</html>