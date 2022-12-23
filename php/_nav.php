<?php

    function checkDonor(){
        include "php/_connect.php";
        $sql="SELECT * FROM `donor` WHERE `Username` = '{$_SESSION['uname']}'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    function checkReceiver(){
        include "php/_connect.php";
        $sql="SELECT * FROM `receiver` WHERE `Username` = '{$_SESSION['uname']}'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
?>
<header>
    <nav>
        <div class="nav-links">
            <div class="logo"><img src="images/withBackground (1).png"></div>
            <ul>
            <li><a href="index.php" class="HHOVER">HOME</a></li>
                <li><a href="BloodBub.php" class="HHOVER">ABOUT US</a></li>
                <?php
                    if(isset($_SESSION['uname']))
                    {
                        ?> <li><a href="receiver.php" class="HHOVER">LOOKING FOR BLOOD</a></li>
                        <?php
                    }
                    else{
                        ?><li><a href="login.php" class="HHOVER">LOOKING FOR BLOOD</a></li>
                        <?php
                    }
                ?>
                <?php
                    if(isset($_SESSION['uname']))
                    {
                        if(checkDonor() || checkReceiver())
                        {
                            ?> 
                        <li><a href="eligibility.php" class="HHOVER">DONATE BLOOD</a></li>
                        <?php
                        }
                        else{
                        ?> 
                        <li><a href="donorregistration.php" class="HHOVER">DONATE BLOOD</a></li>
                        <?php
                        }
                    }
                    else{
                        ?>
                        <li><a href="login.php" class="HHOVER">DONATE BLOOD</a></li>
                        <?php
                    }
                
                ?>
                
                <!--<li><a href="#" class="HHOVER"></a></li>-->
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn HHOVER">BLOOD BANK LOGIN</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="bblogin.php">Blood Bank login </a>
                        <a href="bloodbanklogin.php">Add Blood Bank</a>
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['uname']) && (checkDonor() || checkReceiver()) )
                    {
                        ?> <li><a href='account.php' class="HHOVER">ACCOUNT</a></li>
                        <?php
                    }
                    else{
                        ?><li><a href='login.php' class="HHOVER">LOGIN</a></li>
                        <?php
                    }
                ?>
                <li><a href="php/_logout.php" class="HHOVER">LOGOUT</a></li>
            </ul>
        </div>
    </nav>
</header>