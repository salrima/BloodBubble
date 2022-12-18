<?php
    session_start();
    include "php/_connect.php";

    //echo"welcome".$_SESSION['uname'];
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/indexcss.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Donor registration</title>
</head>

<body style="background-color:#cc0000">
    <?php include "php/_nav.php";?>
    <br><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title btn-light" style="text-align:center"><b>My Account </b></h5>
                    <?php
                        // $sql="SELECT * FROM `donates_bb` NATURAL JOIN `donor` WHERE `bloodbank_id`='{$_SESSION['bbid']}' AND `status`='' AND `donation_date`='current_date()'";
                        $sql="SELECT * FROM `user` NATURAL JOIN `donor` NATURAL JOIN `donates_bb` WHERE `Username`={$_SESSION['uname'] };";
                        
                        $result=mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            ?>
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Donor ID</th>
                                <th scope="col">Blood Group</th>
                                <th scope="col">Donation Date</th>
                                <th scope="col">Certificate</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row=mysqli_fetch_array($result)){
                                ?>
                            <tr>


                                <?php echo $row['Fname'];?>
                                </td>
                                <td>
                                    <?php echo $row['Lname'];?>
                                </td>
                                <td>
                                    <?php echo $row['Username'];?>
                                </td>
                                <td>
                                    <?php echo $row['donor_id'];?>
                                </td>
                                <td>
                                    <?php echo $row['bloodgroup']?>
                                </td>
                                <td>
                                    <?php echo $row['donation_date'];?>

                                </td>
                                <?php if($row['donation_date']=="Donated")
{ ?>
                                <td>Download</td>
                                <?php
}else{?>
                                <td>Null</td>
                                <?php
}
?>

                            </tr>

                            <form action="" method="post">
                                <input type="hidden" name="did" value=<?php echo $row['donor_id']?>>
                                <label>
                                    <?php echo $row['Username']?>
                                </label>
                                <input type="submit" class="btn btn-success" name="donated" value="Donated!"
                                    style="margin-left:4%">
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


        <?php
        

        include "php/_footer.php";
        mysqli_close($conn);
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