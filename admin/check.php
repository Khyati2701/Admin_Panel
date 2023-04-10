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
?>