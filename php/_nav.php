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
                
                <li><a href="#" class="HHOVER">ABOUT US</a></li>
                <?php
                    if(isset($_SESSION['uname']))
                    {
                        ?> <li><a href="" class="HHOVER">LOOKING FOR BLOOD</a></li>
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
                        ?> 
                        <li><a href="donorregistration.php" class="HHOVER">DONATE BLOOD</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li><a href="login.php" class="HHOVER">DONATE BLOOD</a></li>
                        <?php
                    }
                ?>
                
                <!--<li><a href="#" class="HHOVER"></a></li>-->
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">BLOOD BANK LOGIN</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="bblogin.php">Blood Bank login </a>
                        <a href="bloodbanklogin.php">Add Blood Bank</a>
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['uname']) && (checkDonor() || checkReceiver()) )
                    {
                        ?> <li><a href='account.php'><img src='images/user.jpg' alt='' style='width:29px;height:29px;'></a></li>
                        <?php
                    }
                    else{
                        ?><li><a href='login.php'><img src='images/user.jpg' alt='' style='width:29px;height:29px;'></a></li>
                        <?php
                    }
                ?>
                <li><a href="php/_logout.php"><img src='images/logout.png' alt='' style='width:80px;height:29px;'></a></li>
            </ul>
        </div>
    </nav>
</header>