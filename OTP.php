<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/OTP.css">
    <link rel="stylesheet" href="css/style.css">


</head>


<header>
    <nav>
        <div class="nav-links">
            <div class="logo"><img src="images/logo.jpg"></div>
            <ul>
                <li><a href="#" class="HHOVER">ABOUT US</a></li>
                <li><a href="#" class="HHOVER">LOOKING FOR BLOOD</a></li>
                <li><a href="#" class="HHOVER">DONATE BLOOD</a></li>
                <li><a href="#" class="HHOVER">BLOOD BANK LOGIN</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <div id="bckIMG"><img src="images/sg1.jpg" height="100%" width="100%">
        </script>
        <div class="FormContainer">
            <div id="otpform">
                <div class="otpheadings">
                    <br><br>
                    <div>
                        <p>Please enter the OTP to verify your account</p>
                    </div>
                    <div>
                        <p>An OTP is send via Email</p>
                    </div>
                </div>
                <div class="userin">
                    <input type="text1" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')">
                    <input type="text2" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
                    <input type="text3" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">
                    <input type="text4" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')">
                    <input type="text5" id="fifth" maxlength="1">
                </div>
                <div class="cbutton">
                    <button class="vbutton" type="validate">VALIDATE</button>
                </div>

                <div class="timer">
                    <p class="sub1"><br>OTP is invaild in <span id="timer"></p>
                </div>>
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

                <div>
                    <p class="sub2">Resend OTP</p>
                </div>












</main>



<footer>
    <div class="footer">

        <div class="footer-container">
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
                    <li><a href="#">About BLOODBUBBLE</a></li>
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