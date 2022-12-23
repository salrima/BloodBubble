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
    <link rel="stylesheet" href="css/slides.css">
    <SCRIPT src="drop.js"></SCRIPT>
    <SCRIPT src="slidesjs.js"></SCRIPT>
    <style>
        body {
            <?php
            if(isset($_SESSION['uname']))
            {
                ?>background-color: white;
              
          <?php  } else
          {
            ?>
            background-color: #FF8080;<?php
          }?>
  
}?></style>
    <title>Home</title>
</head>

<body >
    <?php include "php/_nav.php";?>

    <?php
        echo"";
        include "php/_connect.php";

        if(isset($_SESSION['uname']))
        {
           
            ?>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/human-blood-donate-white-background_1308-110835.jpg"
                        alt="First slide" width="10" height="320">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/donating-blood-banner.jpg" alt="Second slide" width="10"
                        height="320">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/Blood-donation-myths-HN1221-Stock-844661710-Sized.png"
                        alt="Third slide" width="10" height="320" s>
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
        <div class="container" >
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/GIF_ForSRCsite_RedBloodbag_V2.gif" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><b>CHECK NOW!</b></h5>
                            <p class="card-text">Check the eligibility criteria and Register as donor and DONATE BLOOD</p>
                            <a href="eligibilityview.php" class="btn btn-success">Eligibility</a>
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
                                if(mysqli_num_rows($result)==1){
                                    $row=mysqli_fetch_array($result);
                                    if($row['bloodgroup']!=NULL)
                                    {
                                    ?>
                                        <a href="eligibility.php" class="btn btn-danger">Register</a>
                                    <?php
                                    }
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
                    <div class="card-body btn-dark">
                        <h5 class="card-title btn-danger"><b>WANT BLOOD? NO WORRIES </b></h5>
                        <p class="card-text">Register and find blood stock in the nearby blood banks.</p>
                        <?php
                        if(isset($_SESSION['uname']))
                            {
                                include "php/_connect.php";
                                $sql="SELECT * FROM `receiver` WHERE `Username` = '{$_SESSION['uname']}'";
                                $result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)==1){
                                    $row=mysqli_fetch_array($result);
                                    if($row['bloodgroup']!=NULL)
                                    {
                                    ?>
                                        <a href="searchblood.php" class="btn btn-danger">Register</a>
                                    <?php
                                    }
                                }
                                else{
                                ?>
                                    <a href="receiver.php" class="btn btn-danger">Register</a>
                                <?php
                                }
                            }
                            else{
                                ?>
                                <a href="login.php" class="btn btn-danger">Register</a>
                                <?php
                            }?>
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card ">
                    <div class="card-body btn-dark">
                        <h5 class="card-title btn-danger">DONATE BLOOD,SAVE LIFE</h5>
                        <p class="card-text ">Check the eligibility criteria, donation process and register to donate blood
                        </p><?php
                        if(isset($_SESSION['uname']))
                            {
                                include "php/_connect.php";
                                $sql="SELECT * FROM `donor` WHERE `Username` = '{$_SESSION['uname']}'";
                                $result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)==1){
                                    $row=mysqli_fetch_array($result);
                                    if($row['bloodgroup']!=NULL)
                                    {
                                    ?>
                                        <a href="eligibility.php" class="btn btn-danger">Register</a>
                                    <?php
                                    }
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
            <?php
        }
        else{
            ?>
            <br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                    <img src="images/post-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Blood Donation</h5>
                        <li style="list-style:circle;color:red;">The Blood Donation process from the time you arrive until the time you leave takes about an hour.</li>
                        <li style="list-style:circle;color:red;">The donation itself is only about 8-10 minutes on average.</li>
                       
                    </div>
                    
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="images/sr9mqjqcgwmnrfp4_1655186281.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Blood Donation Day</h5>
                        <li style="list-style:circle;color:red;">The World Blood Donor Day is celebrated every year on June 14.</li>
                        <li style="list-style:circle;color:red;">The World Blood Donor Day was established by the WHO.</li>
                       
                    </div>
                    
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="images/Blood-facts_10-illustration-graphics__canteen.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Did You Know?</h5>
                    
                    <li style="list-style:circle;color:red;">Just 1 donation can save up to 3 lives.</li>
                    <li style="list-style:circle;color:red;">The average red blood cell transfusion is 3 pints(or 3 whole-blood donations).</li>
                    
                </div>
                    </div>
                   
                    </div>
                </div>
                </div><br><br><br>
                <div class="col-sm-12">
            <div class="card">
                <div class="card-body"><br>
                <a href="blooddonationprocess.php" style="margin-left:20%" class="btn btn-success">Click to know blood donation process</a>
                <a href="blooddonationprocess.php" style="margin-left:10%" class="btn btn-success">Click to know the eligibility</a><br><br>
                </div>
            </div>
        </div><br><br>
                <div class="slideshow-container" >

                <div class="mySlides" style="display:block">
                <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                <p class="author">- John Keats</p>
                </div>

                <div class="mySlides">
                <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
                <p class="author">- Ernest Hemingway</p>
                </div>

                <div class="mySlides">
                <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                <p class="author">- Thomas A. Edison</p>
                </div>

                <a class="prev" onclick="plusSlides(-1)"></a>
                <a class="next" onclick="plusSlides(1)"></a>

                </div>

                <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div>

        
            <?php
        }
    ?>
    

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