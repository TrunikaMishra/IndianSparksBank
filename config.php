<?php 

$con=new mysqli("localhost","root","","mybank");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>