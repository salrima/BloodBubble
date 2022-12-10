
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
    <link rel="stylesheet" href="css/search.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="indexcss.css">
    <title>Donor registration</title>
</head>

<body>
<header>
    <nav>
        <div class="nav-links">
            <div class="logo"><img src="images/withBackground (1).png"></div>
            <ul>
                <li><a href="#" class="HHOVER">ABOUT US</a></li>
                <li><a href="#"class="HHOVER">LOOKING FOR BLOOD</a></li>
                <li><a href="#" class="HHOVER">DONATE BLOOD</a></li>
                <li><a href="#" class="HHOVER">BLOOD BANK LOGIN</a></li>
            </ul>
        </div>
    </nav>
  </header>
  <div class="X">
    <div id="TITLE"></div>
    <script>
          var i=0;
      setInterval(function func(){
       if(i==0){
        document.getElementById("TITLE").innerHTML="REGISTER FOR BLOOD DOANTION";
        i++;
       }
       else
       {
        document.getElementById("TITLE").innerHTML="PEOPLE LIVE WHEN PEOPLE GIVE";
        i--;
       }
      
      },1800)
     
    </script>
     </div>

     <br><br>
    <div class="container "style="background-color:gray; opacity:95%">
    <h3 style="color:maroon;text-align:center">SEARCH A BLOOD BANK</h3>
    <form action="" method="post"><br>
   
    <div class="row g-3 align-items-center">
  <div class="col-auto" style="margin-left:90px">
    <label for="district" class="col-form-label">District</label>
  </div>
  <div class="col-auto">
    <input type="district" name="district" id="district" class="form-control" required >
  </div>
  
  <div class="col-auto" style="margin-left:250px">
    <label for="state" class="col-form-label">State</label>
  </div>
  <div class="col-auto">
    <input type="state" name="state" id="state" class="form-control" required >
  </div>
 
</div><br><br>
    <div class="d-grid gap-2 col-2 mx-auto">
  <button class="btn btn-success" type="submit">search</button>
 
</div>
</div>

</form>
    </div><br><br>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $district=$_POST['district'];
            $state=$_POST['state'];
            

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
            echo"Connection was successful<br>";
            $sql="SELECT * FROM `bloodbank` WHERE `district` = '$district' AND `state` = '$state'";
            $result=mysqli_query($conn,$sql);
            
           

            if(mysqli_num_rows($result)>0)
            {
                ?>
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Bloodbank Name</th>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Contact Person</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">State</th>
                    <th scope="col">Click here to donate</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                while($row=mysqli_fetch_array($result))
                {
                    ?>

                    
                         <tr>
                   
                 <td><?php echo $row['bb_name'];?></td>
                 <td><?php echo $row['h_name'];?></td>
                 <td><?php echo $row['contactno'];?></td>
                  <td><?php echo $row['contactperson'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['City'];?></td>
                 <td><?php echo $row['District'];?></td>
                 <td><?php echo $row['State'];?></td>
                 <td><a href="bbdonation.php">Click here</td>
                 </tr>
    
   
              
            <?php
                }
                ?>
                </tbody>
            </table>
            
              <?php
            }
            else{
               echo"login failed! ENTER VALID USERNAME AND PASSWORD";
               header('location:login.php');
            }
          }
        }

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