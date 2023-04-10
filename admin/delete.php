<?php
include 'inc.php';
if(!$con)
{
    die('connection failed'.mysql_error($con));
}
$emai=$_GET["email"];
echo $emai;
//echo "<pre>";print_r($id);
$sql="DELETE FROM user_d WHERE email='$email'";
echo "hi";
if(mysqli_query($con,$sql))
{
    Header( 'Location:http://localhost/admin_panel/view.php');
   
}
else
{
    echo"Error deleting data".mysqli_error($con);
}
?>