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


    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/style.css">

    <title>Admin</title>
</head>

<body style="background-color:#cc0000; color: black;">
    <header>
        <nav>
            <div class="nav-links">
                <div class="logo"><img src="images/withBackground (1).png"></div>
                <ul>
                    <li><a href="#" class="HHOVER">ABOUT US</a></li>
                    <li><a href="php/_logout.php" class="HHOVER">LOG OUT</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br>

    <?php
        include "php/_connect.php";
        // echo"welcome".$_SESSION['bid'];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['donated'])){
                $did=$_POST['did'];
                $dtype=$_POST['dtype'];
                $dgrp=$_POST['dgrp'];
                $sql="UPDATE `donates_bb` SET `status`='Donated' WHERE `donor_id`='$did'";
                mysqli_query($conn,$sql);

                echo "$dtype";
                echo "$dgrp";

                $sql2="SELECT * FROM `bloodgroup` WHERE `bgroup`='$dgrp' AND `bloodtype`='$dtype' AND `bloodbank_id`='{$_SESSION['bid']}'";
                $result2=mysqli_query($conn,$sql2);

                if(mysqli_num_rows($result2)==0){
                    $sql4="INSERT INTO `bloodgroup`(`bgroup`, `bloodtype`, `quantity`, `bloodbank_id`) VALUES ('$dgrp','$dtype','1','{$_SESSION['bid']}')";
                    mysqli_query($conn,$sql4);
                    
                }
                else{
                    $row=mysqli_fetch_array($result2);
                    $qnt=(int)$row['quantity'];
                    $qnt+=1;
                    $sql3="UPDATE `bloodgroup` SET `quantity`='$qnt' WHERE `bgroup`='$dgrp' AND `bloodbank_id`='{$_SESSION['bid']}' AND `bloodtype`='$dtype'";
                    mysqli_query($conn,$sql3);
                }
                

                
                
            }
            if(isset($_POST['Request Granted'])){
                $rid=$_POST['rid'];
                $sql="UPDATE `request` SET `status`='Request Granted' WHERE `request_id`='$rid'";
                mysqli_query($conn,$sql);
            }
        }
    ?>


    <div class="btn-group" role="group" aria-label="Basic example" style="margin-left:25%">
    <?php
    // if(isset($_SESSION['bid']))
    // $bid= $_SESSION['bid'];
    ?>
        <a href="campregistration.php" class="btn btn-primary">Add camps</a>
        <a href="admincamps.php" class="btn btn-secondary">search camps</a>
        <a href="admindonors.php" class="btn btn-success">search donor</a>
        <a href="adminreceivers.php" class="btn btn-danger">search receivers</a>
        <a href="updatebb.php" class="btn btn-dark">Edit BB Details</a>

        <!-- <form href="admincamps.php" method="post"> -->
        <!-- <input type="hidden" name="bloodbank" value=<?php //echo $bid;?>> -->
        <!-- <input class="btn btn-success" type="submit" value="search camps">
  </form> --> 

        <!-- <form href="admindonors.php" method="post">
        <input type="hidden" name="bloodbank" value=<?php $bid;?>> -->
        <!-- <input class="btn btn-success" type="submit" value="search donor">
  </form> --> 

        <!-- <form href="campregistration.php" method="post"> -->
        <!-- <input type="hidden" name="bloodbank" value=<?php //echo $bid;?>> -->
        <!-- <input class="btn btn-success" type="submit" value="Search receivers">
  </form> -->

        <!-- <form href="updatebb.php" method="post"> -->
        <!-- <input type="hidden" name="bloodbank" value=<?php //echo $bid;?>> -->
        <!-- <input class="btn btn-dark" type="submit" value="Edit BB Details" >
  </form> -->

    </div>

    <br><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title btn-light" style="text-align:center"><b>DONORS FOR THE DAY </b></h5>
                    <?php
                        // $sql="SELECT * FROM `donates_bb` NATURAL JOIN `donor` WHERE `bloodbank_id`='{$_SESSION['bbid']}' AND `status`='' AND `donation_date`='current_date()'";
                        $sql="SELECT * FROM `donates_bb` NATURAL JOIN `donor` WHERE `bloodbank_id`='{$_SESSION['bid']}' AND `donation_date`=current_date() AND `status`='Not Donated';";
                        $result=mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_array($result)){
                                ?>
                                <form action="" method="post">
                                    <input type="hidden" name="did" value=<?php echo $row['donor_id']?>>
                                    <input type="hidden" name="dtype" value=<?php echo "{$row['donor_type']}"?>>
                                    <input type="hidden" name="dgrp" value=<?php echo "{$row['bloodgroup']}"?>>
                                    <label>
                                        <?php echo $row['Username']?>
                                    </label>
                                    <input type="submit" class="btn btn-success" name="donated" value="Donated!"
                                        style="margin-left:4%"><br><br>
                                </form>
                                <?php
                            }
                        }
                        else{
                            echo "No Donor for the day JUST CHILL!!";
                        }
                        
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title btn-light" style="text-align:center"><b>RECEIVERS FOR THE DAY </b></h5>
                    <?php
                        // $sql="SELECT * FROM `donates_bb` NATURAL JOIN `donor` WHERE `bloodbank_id`='{$_SESSION['bbid']}' AND `status`='' AND `donation_date`='current_date()'";
                        $sql2="SELECT * FROM `request` NATURAL JOIN `receiver` NATURAL JOIN `bloodgroup` WHERE `bloodbank_id`='{$_SESSION['bid']}' AND `status`='Not granted' AND quantity>=qnty AND `blood_type`=`bloodtype` AND `rdate`=current_date();
                        ";
                        $result2=mysqli_query($conn,$sql2);

                        if(mysqli_num_rows($result2)>0)
                        {
                            while($row=mysqli_fetch_array($result2)){
                                ?>
                    <form action="" method="post">
                        <input type="hidden" name="rid" value=<?php echo $row['request_id']?>>
                        <label>
                            <?php echo $row['Username']?>
                        </label>
                        <input type="submit" class="btn btn-success" name="Request Granted" value="request Granted"
                            style="margin-left:4%"><br><br>
                    </form>
                    <?php
                            }
                        }
                        else{
                            echo "No Donor for the day JUST CHILL!!";
                        }
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title btn-light" style="text-align:center"><b>UPCOMING CAMPS </b></h5>
                <?php
                    // $sql="SELECT * FROM `donates_bb` NATURAL JOIN `donor` WHERE `bloodbank_id`='{$_SESSION['bbid']}' AND `status`='' AND `donation_date`='current_date()'";
                    $sql2="SELECT * FROM `camps` WHERE `bloodbank_id`='{$_SESSION['bid']}' AND month(camp_date)=month(current_date()) AND `status`='Ndone'";
                    $result2=mysqli_query($conn,$sql2);

                    if(mysqli_num_rows($result2)>0)
                    {
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Camp Name</th>
                                    <th scope="col">Camp Date</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Contact No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Camp Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($row=mysqli_fetch_array($result2)){
                            ?>
                                <tr>
                                <td>
                                    <?php echo $row['camp_name'];?>
                                </td>
                                <td>
                                    <?php echo $row['camp_date'];?>
                                </td>
                                <td>
                                    <?php echo $row['start_time'];?>
                                </td>
                                <td>
                                    <?php echo $row['end_time'];?>
                                </td>
                                <td>
                                    <?php echo $row['org_phno']?>
                                </td>
                                <td>
                                    <?php echo $row['org_email'];?>
                                </td>
                                <td>
                                    <?php echo $row['City'];?>
                                </td>
                                <td>
                                    <form action="handlecamps.php" method="post">
                                        <input type="hidden" name="cid" value=<?php echo $row['camp_id'];?>>
                                     
                                        <input type="submit" class="btn btn-success" name="Successful" value="Camp Successful" style="margin-left:4%">
                                    </form>
                                </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        
                        <?php
                        }
                        else{
                            echo "No Donor for the day JUST CHILL!!";
                        }
                        
                    ?>
            </div>
        </div>
    </div>
    </div>
    <?php
        mysqli_close($conn);
        include "php/_footer.php";
    ?>


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