


<?php
include "database.php";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$parts = parse_url($actual_link);
parse_str($parts['query'], $query);
$del_id = $query['id'];

mysqli_query($connect,"delete from Customer where id = '$del_id'");

if(mysqli_affected_rows($connect)>0){
	
	include "list-customers.php";

}else{
	echo 'Customer not deleted';
}

?>