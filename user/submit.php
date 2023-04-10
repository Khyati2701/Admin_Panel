<?php
include ('inc.php');
if(!$con){
    echo"database not connect";
}
$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$nationality = $_POST['my'];
$checkbox1 = $_POST['hobby'];  
$password = $_POST['pword'];
$passwordc = $_POST['cpword'];
$chk="";
//echo $gender;
foreach($checkbox1 as $chk1)  
   {  
    $chk .= $chk1.",";  
   }  
if($_POST['pword']==$_POST['cpword'])
   {//If true then updste the password and redirect the user to the main page 
   $password=$_POST['pword'];
   }
else{
    echo "Password doesen't match";
    die();
}

$qry = "INSERT INTO `user_d`(uname,email,phone,gender,nationaliy,hobby,password)VALUES('$uname','$email','$phone','$gender','$nationality','$chk1','$password')";
$res=mysqli_query($con,$qry);
if(mysqli_query($con, $qry)){
  /* echo "<h3>data stored in a database successfully."
       . " Please browse your localhost php my admin"
       . " to view the updated data</h3>";*/

  // echo nl2br("\n$uname\n $phone\n "
       //. "$nationality\n $chk\n $email\n$gender");
} //else{
   //echo "ERROR: Hush! Sorry $qry. "
     //  . mysqli_error($con);
//}
echo "Yesss !! Data inserted Successfully";
?>