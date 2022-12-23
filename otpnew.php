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
       if(isset($_POST['email']))
       {
           $email=$_POST['email'];
         
           
           $sql="SELECT * FROM `user` WHERE `Email` = '$email'";
           $result=mysqli_query($conn,$sql);
           
           if(mysqli_num_rows($result)==1)
           {
            
                $num=0;
                $i=0;
                while($i<6)
                {
                    $num=$num*10;
                    $num=$num+rand(0,9);
                    $i+=1;
                }
                $receiver = "$email";
                $subject = "OTP Verification";
                $body = "Your OTP is $num it is valid only for 2 mins thank you.";
                $sender = "From: Bloodbubble";
                if(mail($receiver, $subject, $body, $sender)){
                    echo "Email sent successfully to $receiver";
                }else{
                    echo "Sorry, failed while sending mail!";
                }
              $_SESSION['email']=$email;
                $_SESSION['otp']=$num;
               // echo "$uname";
            //    header('location: otpnew.php');
           }
           else{
               echo"Username doesn't exist";
               header('location: forgot.php');
           }
       }
       if(isset($_POST['resend']))
       {
            $num=0;
            $i=0;
            while($i<6)
           {
            $num*=10;
            $num+=rand(0,9);
            $i+=1;
       }
       $receiver = "$email";
       $subject = "OTP Verification";
       $body = "Your OTP is $num it is valid only for 2 mins thank you.";
       $sender = "From: Bloodbubble";
       if(mail($receiver, $subject, $body, $sender)){
           echo "Email sent successfully to $receiver";
       }else{
           echo "Sorry, failed while sending mail!";
       }
       $_SESSION['otp']=$num;
       header('location: otpnew.php');
        }
        
    } 
?>
   <div class="BACKG"> <img src="images/blood-donation-image.jpg" height=100% width=100%> </div>

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
           <label for="otp" style="text-align:center; color:black">Enter the OTP sent to you</label>
           <input class="inputType" type="number" placeholder="Enter OTP" name="otp">

          


                <div class="timer">
                    <p class="sub1" style="text-align:center; color:black"><br>OTP is invaild in <span id="timer"></p>
                </div>
                <script>
                    let timerOn = true;

                    function timer(remaining) {
                        var m = Math.floor(remaining / 60);
                        var s = remaining % 60;

                        m = m < 10 ? '0' + m : m;
                        s = s < 10 ? '0' + s : s;
                        document.getElementById('timer').innerHTML = m + ':' + s;
                        remaining -= 1;

                        if (remaining >= 0 && timerOn) {
                            setTimeout(function () {
                                timer(remaining);
                            }, 1000);
                            return;
                        }

                        if (!timerOn) {
                            // Do validate stuff here
                            return;
                        }

                        // Do timeout stuff here
                        alert('Timeout for otp');
                    }

                    timer(120);

                </script>

           <!-- Submit button -->
           <input type="submit" class="btn btn-danger" value="Validate" name="submit">
           <br>
            <input type="submit" class="btn btn-danger" value="Resend OTP" name="resend">


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