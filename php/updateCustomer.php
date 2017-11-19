<?php
include "database.php";

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$parts = parse_url($actual_link);
parse_str($parts['query'], $query);
$update_id = $query['id'];

$firstName 	=$_POST["firstName"];
$lastName 	=$_POST["lastName"];
$email 		=$_POST["email"];

// update a record
$sql = "update customer set first_name = '$firstName' ,last_name ='$lastName' ,email ='$email' where id = $update_id ";

if ($conn->query($sql) === TRUE) {
    include ("list-customers.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

