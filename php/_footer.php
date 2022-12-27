<footer>
    <div class="footer">

        <div class="container">
            <div class="foot_menu">
                <h3>LOOKING FOR BLOOD</h3>
                <ul>
                    <li><a href="receiver.php">Blood Availability</a></li>
                    <li><a href="bblogin.php">Blood Bank</a></li>
                    <li><a href="receiver.php">Request</a></li>
                </ul>
            </div>
            <div class="foot_menu">
                <h3>WANT TO DONATE BLOOD</h3>
                <ul>
                    <li><a href="receiver.php">Blood Donation Camp</a></li>
                    <li><a href="login.php">Donor Login</a></li>
               
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
                    <li><a href="BloodBub.php">About BLOODBUBBLE</a></li>
                    <li><a href="#">BLOODBUBBLE FAQs</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="BloodBub.php">Contact Us</a></li>
                </ul>
            </div>


        </div>
        <div class="clear"></div>
        <div class="social-icons">
            <ul class="footer_social_media">
                <li><a href="facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="instagram.com"><i class="fa-brands fa-instagram"></i></a></li>

            </ul>



        </div>
        <div class="half">
            <p class="copycont">Copyright &copy; 2022. All rights reserved</p>
        </div>
    </div>
</footer>
<?php mysqli_close($database)?>