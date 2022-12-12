hygugu
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
           $sql="INSERT INTO `donates_bb`(`donor_id`, `bloodbank_id`, `donor_type`, `donation_date`, `status`) VALUES ('$did','$bid','$type','$date','NULL')";
            $result=mysqli_query($conn,$sql);
            
           
          

      }
    }
        ?>
        <html>
          </html>