<?php
//include this file to esatblis connection
$host="localhost";
$user ="root";
$pass ="";
$db ="testcpanel";
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "cf";
}
//else echo "connection_success";
?>