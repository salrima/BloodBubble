
<?php
if(isset($_POST['bloodbank']))
{
 $bid=$_POST['bloodbank'];
 echo $bid;
}
session_start();
    
       if($_SERVER['REQUEST_METHOD'] == "POST"){
        
         $did=$_POST['did'];
          $date=$_POST['ddate'];
         $type=$_POST['dtype'];
        
         

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
           $sql="INSERT INTO `donates_bb`(`donor_id`, `bloodbank_id`, `donor_type`, `donation_date`, `status`) VALUES ('$did','$bid','$type','$date','Not donated')";
            $result=mysqli_query($conn,$sql);
            
           $sql2="SELECT * FROM `bloodbank` WHERE `bloodbank_id`=$bid";
           $result2=mysqli_query($conn,$sql2);
          $row=mysqli_fetch_array($result2);

      }
    }
        ?>
        <html>
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
   <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/indexcss.css">-->
    <title>Donor registration</title>
</head>
<body>
  <?php include "php/_nav.php"?>
  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>REGISTRATION SUCCESSFUL!</strong> You have to come to donate blood at the bloodbank <?php $row['bb_name'] ?> on <?php echo $date ?>. Thank you!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
<?php include "php/_footer.php"?>
  </body>
          </html>