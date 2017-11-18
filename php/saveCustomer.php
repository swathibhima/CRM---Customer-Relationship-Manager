

<?php
include ("database.php");

$firstName 	=$_POST["firstName"];
$lastName 	=$_POST["lastName"];
$email 		=$_POST["email"];

mysqli_query($connect,"insert into Customer(first_name,last_name,email) values('$firstName','$lastName','$email')");

if(mysqli_affected_rows($connect)>0){
	
	include ("list-customers.php");
	
}else{
	echo 'Customer not Saved';
}

?>