<?php
include "database.php"; 

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$parts = parse_url($actual_link);
parse_str($parts['query'], $query);
$del_id = $query['id'];

// delete a record
$sql = "delete from customer where id = '$del_id'";

if ($conn->query($sql) === TRUE) {
    include ("list-customers.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>