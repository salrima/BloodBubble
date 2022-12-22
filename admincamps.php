<?php
// if(isset($_POST['bloodbank']))
// {
//     $bid=$_POST['bloodbank'];
// }
  session_start();
  // echo $_SESSION['uname'];
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // $disease=$_POST['diseases'];
    // $bgroup=$_POST['bgroup'];
    if(isset($_POST['Searchcamp']))
    {
        $camp=$_POST['camp'];
        include "php/_connect.php";

        if(!$conn)
        {
            die("Sorry we failed to connect:". mysqli_connect_error());
        }
        else{
    
            $sql="SELECT * FROM `camps` WHERE `camp_name`=$camp";
            $result=mysqli_query($conn,$sql);
            
            
            if(mysqli_num_rows($result)==1)
            {

                $row=mysqli_fetch_array($result);
                $_SESSION['cid']=$row['camp_id'];
                header('location: updatecamps.php');
            }
            else{
                echo"No camps with this name";
                //header('location:login.php');
            }
        }
    }
}
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
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/indexcss.css"> -->
    <link rel="stylesheet" href="css/search.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Donor registration</title>
</head>

<body>
<header>
        <nav>
            <div class="nav-links">
                <div class="logo"><img src="images/logo.png"></div>
               
                <ul>
                   
                    <li><a href="#" class="HHOVER">ABOUT US</a></li>
                  
                   
                    <li><a href="php/_logout.php" class="HHOVER">LOG OUT</a></li>
                  
                </ul>
            </div>
        </nav>
        <nav class="navbar bg-danger">
          <div class="container-fluid">
            <a class="navbar-brand "><b>CAMP DETAILS</b></a>
            <form class="d-flex" role="search" action="admincamps.php" method="POST">
              <input class="form-control me-1" type="search" name='camp' placeholder="Camp name" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit" name="Searchcamp">Search</button>
            </form>
          </div>
        </nav>
    </header>
    <br><br>

    <?php
       
          $servername="localhost";
          $username="root";
          $password="";
          $database="bloodbank";

          $conn=mysqli_connect($servername, $username, $password, $database);
          if(!$conn)
          {
            die("Sorry we failed to connect:". mysqli_connect_error());
          }
          else{
            $bid=$_SESSION['bid'];
            $sql="SELECT * FROM `camps` WHERE `bloodbank_id`=$bid";
            $result=mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0)
            {
                ?>
                <table class="table table-danger table-striped-columns">
                <thead>
                  <tr>
                    <th scope="col">Camp ID</th>
                    <th scope="col">Camp Name</th>
                    <th scope="col">Camp Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    
                    <th scope="col">Click here to update</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                while($row=mysqli_fetch_array($result))
                {
                    ?>

                    
                         <tr>
                   
                 <td><?php echo $row['camp_id'];?></td>
                 <td><?php echo $row['camp_name'];?></td>
                 <td><?php echo $row['camp_date'];?></td>
                  <td><?php echo $row['start_time'];?></td>
                  <td><?php echo $row['end_time'];?></td>
                  <td><?php echo $row['organization_name'];?></td>
                 <td><?php echo $row['org_phno'];?></td>
                 <td><?php echo $row['org_email'];?></td>
                 <td><?php echo $row['City'];?></td>
                 <td>
                 <form action="updatecamps.php" method="post">
                    <input type="hidden" name="cid" value=<?php echo $row['camp_id'];?>>
                    <input type="submit" class="btn btn-danger" value="Click Here">
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
               echo"No Camps yet!!";
              //  header('location:updatecamps.php');
            }
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