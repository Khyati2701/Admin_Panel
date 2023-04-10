<?php
 include ('inc.php');  
     $email = $_POST['email'];  
     $password = $_POST['password'];  
     echo $email;
     echo $password;
        
      
         $sql = "select * from admin_d where email = '$email' and password = '$password'";  
         $result = mysqli_query($con, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
          
         if($count == 1){  
             echo "<h1><center> Login successful </center></h1>";
             header("Location:http://localhost/admin_panel/adminlogin.php");

         }  
         else{  
             echo "<h1> Login failed. Invalid username or password.</h1>";  
         }     
?>  