<html>
<head>
    <style>
.links{ 
text-decoration:none;
border: 2px solid black;
color:black;
background-color:red;
padding: 10px;
font-size:15px;
margin:20px auto;
border-radius:5px;
}
</style>
</head>
<body> 
<?php

include 'inc.php';
if(!$con){
    die('connection failed'.mysql_error($con));
}


$sql="SELECT * FROM user_d";
$res=mysqli_query($con,$sql);
//echo"<table border="1">";
//echo"<h1>Details of users</h1>";
echo"<center>";
echo"<h1>Users Details</h1>";
if (mysqli_num_rows($res))//display details till the rows in the database becomes zero
{
    echo"<table border='1'>";
    echo"<tr>";
    echo"<th>name</th>";
    echo"<th>email</th>";
    echo"<th>password</th>";
    echo"<th>phone</th>";
    echo"<th>gender</th>";
    echo"<th>hobby</th>";
    echo"<th>nartionality</th>";
   
echo"</tr>";

    while ($row=mysqli_fetch_array($res))//this will fetch the data in $row variable
    {
        echo"<tr>";
        echo"<td>".$row['uname']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['password']."</td>";
        echo"<td>".$row['phone']."</td>";
        echo"<td>".$row['gender']."</td>";
        echo"<td>".$row['hobby']."</td>";
        echo"<td>".$row['nationaliy']."</td>";
        $email=$row['email'];
        $name=$row['uname'];      
        echo "<td><form action='edit.php.' method='get'>
         
         <input type='hidden' name='uname' value='<?php echo $name;?>'>
         <input type='hidden' name='email' value='<?php echo $email;?>'>
        <input type='submit' value='EDIT'>
        </form>
        </td>";
        echo "<td><form action='delete.php' method='get'>
        <input type='hidden' name='email' value='<?php echo $email;?>'>
        <input type='submit' value='Delete'>
       </form>
       </td>";
		
        echo"</tr>";
    }
    echo"</table>";
}
echo"</center>";
echo"<center>";
echo "<br><a class='links' href='logoutredirector.php'><strong>Logout</strong></a> ";
echo"</center>";

mysqli_close($con);
?>
</body>
</html>