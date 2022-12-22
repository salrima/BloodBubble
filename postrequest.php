<?php
session_start();
//echo"welcome".$_SESSION['uname'];

?>
<!doctype html>
<html lang="en">
<?php
      
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        
          $bid=$_POST['bloodbank'];
          $uname=$_SESSION['uname'];
          $quantity=$_POST['qnt'];
          $date=$_POST['date'];
            // $pass=$_POST['pass'];

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
            $sql1="SELECT * FROM `user` NATURAL JOIN `receiver` WHERE `Username`='$uname'";
            $result1=mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_array($result1);
            $rid=$row1['receiver_id'];
            $sql="INSERT INTO `request`(`receiver_id`, `bloodbank_id`, `request_id`, `rdate`, `status`, `qnty`) VALUES ('$rid','$bid','','$date','Not granted','$quantity')";
            $result=mysqli_query($conn,$sql);
            $receiver = $row1['Email'];
            $subject = "Blood Request Successful";
            $body = "Your request for blood donation has been registered successfully. Kindly try to be there on $date";
            $sender = "From: Bloodbubble";
            if(mail($receiver, $subject, $body, $sender)){
                echo "Email sent successfully to $receiver";
            }else{
                echo "Sorry, failed while sending mail!";
            }
        }
    }
?>