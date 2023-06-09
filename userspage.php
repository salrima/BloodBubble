<!doctype html>
<html lang="en">
<?php
    

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
    <link rel="stylesheet" href="indexcss.css">
    <title>User</title>
</head>

<body>
<?php include "php/_nav.php";
    
    if(isset($_SESSION['uname']))
    {
                ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/human-blood-donate-white-background_1308-110835.jpg"
                        alt="First slide" width="10" height="300">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/donating-blood-banner.jpg" alt="Second slide" width="10"
                        height="300">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/Blood-donation-myths-HN1221-Stock-844661710-Sized.png"
                        alt="Third slide" width="10" height="300" s>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br><br>
        <div class="container ">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/GIF_ForSRCsite_RedBloodbag_V2.gif" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><b>CHECK NOW!</b></h5>
                            <p class="card-text">Check the eligibility criteria and Register as donor and DONATE BLOOD</p>
                            <a href="#" class="btn btn-success">Eligibility</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/gh-blood-type-chart-1596206816.png" width=300 height=500 alt="">
                </div>
                <div class="col-4">
                    <div class="card" style="width: 25rem;">
                        <img src="images/BANNER1.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BLOOD DONATION CAMP</h5>
                            <p class="card-text">Go and register now as a donor to take part in this blood donation camp</p>
                            <?php
                            if(isset($_SESSION['uname']))
                            {
                                include "php/_connect.php";
                                $sql="SELECT * FROM `donor` WHERE `Username` = '{$_SESSION['uname']}'";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_array($result);
                                if($row['bloodgroup']!=NULL)
                                {
                                ?>
                                    <a href="donorsearch.php" class="btn btn-danger">Register</a>
                                <?php
                                }
                                else{
                                ?>
                                    <a href="donorregistration.php" class="btn btn-danger">Register</a>
                                <?php
                                }
                            }
                            else{
                                ?>
                                <a href="login.php" class="btn btn-danger">Register</a>
                                <?php
                            }
                        ?>
                            
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body btn-secondary">
                        <h5 class="card-title btn-danger"><b>WANT BLOOD? NO WORRIES </b></h5>
                        <p class="card-text">Register and find blood stock in the nearby blood banks.</p>
                        <a href="login.php" class="btn btn-danger">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card ">
                    <div class="card-body btn-secondary">
                        <h5 class="card-title btn-danger">DONATE BLOOD,SAVE LIFE</h5>
                        <p class="card-text ">Check the eligibility criteria, donation process and register to donate blood
                        </p>
                        <a href="login.php" class="btn btn-danger">Register</a>
                    </div>
                </div>
            </div>
        </div>    
        
               <?php include "php/_footer.php"?>

</body>

</html>