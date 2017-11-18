<?php
$connect = mysqli_connect("localhost", "springstudent", "springstudent", "web_customer_tracker");

if(mysqli_connect_errno($connect)){
	
	echo"falied to connect";
}

?>