<?php
$db = new mysqli('localhost', 'root',  '');
echo "Connection to the server was successful <br/>";
$dbase_name = "bloodbank";
mysqli_select_db($db, $dbase_name) or die(mysql_error());
echo "Database is selected";
$username=$_POST['username'];
$password=$_POST['pswrd'];
$query="select *from user where Username= '$username'";
$result=mysqli_quuery($db,$query);
$num=mysqli_num_rows($result);
echo($result);

if($num==1)
{
    echo"Username already taken";
}
?>