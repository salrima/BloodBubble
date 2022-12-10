<header>
        <nav>
            <div class="nav-links">
                <div class="logo"><img src="images/withBackground (1).png"></div>
                <ul>
                    <?php
                        if(isset($_SESSION['uname']))
                        {
                            ?> <li><a href='account.php'><img src='images/user.jpg' alt='' style='width:29px;height:29px;'></a></li>
                            <?php
                        }
                        else{
                            ?><li><a href='login.php'><img src='images/user.jpg' alt='' style='width:29px;height:29px;'></a></li>
                            <?php
                        }
                    ?>
                    <li><a href="php/_logout.php" class="HHOVER">LOG OUT</a></li>
                    <li><a href="#" class="HHOVER">ABOUT US</a></li>
                    <li><a href="#" class="HHOVER">LOOKING FOR BLOOD</a></li>
                    <li><a href="#" class="HHOVER">DONATE BLOOD</a></li>
                    <!--<li><a href="#" class="HHOVER"></a></li>-->
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">BLOOD BANK LOGIN</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">Blood Bank login </a>
                            <a href="bloodbanklogin.php">Add Blood Bank</a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </header>