<?php
include "database.php";

$firstName 	=$_POST["firstName"];
$lastName 	=$_POST["lastName"];
$email 		=$_POST["email"];

// sql to insert a record in customer table
$sql = "insert into customer(first_name,last_name,email) values('$firstName','$lastName','$email')";
	
if ($conn->query($sql) === TRUE) {
    include ("list-customers.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>