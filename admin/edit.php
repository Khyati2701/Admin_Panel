<?php
include 'inc.php';
if(!$con)
{
	die('connection failed'.mysql_error($con));
}
else
{
	echo "Connection successfully established!!!";
}
$email=$_GET['email'];
$name=$_GET['uname'];

$qry="SELECT email FROM user_d where email='$email'";
$res=mysqli_query($con,$qry);


?>

<html>
	<head><title>Edit View</title></head>
 <body>
 	 <h1>Perform Changes</h1>
 	 <div class="container">
	 <form method="post">
			Enter name <input type="text" name="name" value="<?php echo $name;?>"  required="true"/>
			<br/><br/>
			Enter email <input type="text" name="email" value="<?php echo $email;?>"  required="true" placeholder="Enter email" />
			<br/><br/>
			Enter Password  <input type="password" name="pword" required="true" />
			<br/><br/>
			Confirm Password  <input type="password" name="cpword" required="true" />
			<br/><br/> 
			<label>Hobby:</lable>
			<br>
				<input class="ip5" type="checkbox" name="hobby[]" value="singing">Singing
				<br>
				<input class="ip6" type="checkbox" name="hobby[]" value="reading">Reading
				<br>
				<input class="ip7" type="checkbox" name="hobby[]" value="danceing">Danceing
				<br/><br/> 
			<label type="nationality" value="nationality">Nationality:</label><br/>
			<select class="ip8" name="my">
					<option value="India">India</option>
					<option value="China">China</option>
					<option value="America">America</option>	 

			<input type="submit" value="Update" name="update"/>
			
		</form>
	</div>
 </body>
</html>

<?php

	if (isset($_POST['update'])) 
	{		$name  = $_POST['name'];
			$email = $_POST['email'];
//taking values from the input and comapring them directly with each other
			if($_POST['pword']==$_POST['cpword'])
			{//If true then updste the password and redirect the user to the main page 
			$password=$_POST['pword'];
			}
			else
			{
				echo "Password dont match";
				die();
			}
			$phone=$_POST['phone'];
			$gender=$_POST['gender'];
			$nationality=$_POST['my'];
			$checkbox1=$_POST['hobby'];  
			$chk="";  
			foreach($checkbox1 as $chk1)  
	   		{  
    		  $chk .= $chk1.",";  
   			}  
			   $sql="UPDATE `user_d` SET `email`='$email',`password`='$password',`uname`='$name',`phone`='$phone',`gender`='$gender',`hobby`='$chk',`nationaliy`='$nationality'  WHERE email='$email'";
			   $res=mysqli_query($con,$sql);
			   echo "Data Updated Successfully";
		}	
		//Else display the error
		else
		{
			echo "Error: Please input the same password";
		}

	
?>