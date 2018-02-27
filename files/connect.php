
<!--connection file -->
<?php 

$con = mysqli_connect("localhost","root","","akash");

if (mysqli_connect_errno())
{
	echo "failed to connect to MySQL:" .mysqli_connect_error();	
}

 ?>