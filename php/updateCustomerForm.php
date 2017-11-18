

<?php
include "database.php";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$parts = parse_url($actual_link);
parse_str($parts['query'], $query);
$update_id = $query['id'];

$result =mysqli_query($connect, "select * from Customer where id = $update_id ");

if(mysqli_affected_rows($connect)>0){
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Customer</title>
<link type="text/css" rel="stylesheet" href="resources/css/style.css" />
<link type="text/css" rel="stylesheet" href="resources/css/add-customer-style.css" />
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h2>CRM - Customer Relationship Manager</h2>
		</div>
	
		<div id="container">
			<h3>Update Customer</h3>
			<?php while($row = mysqli_fetch_array($result)):?>
			
			<form method ="post" action ="updateCustomer.php?id=<?php echo $row["id"];?>">
				<table>
					<tbody>
								<tr>
									<td><label>First Name :</label> </td>
									<td> <input type ="text" name ="firstName" value ="<?php echo $row["first_name"];?>" ></td>
								</tr>
								<tr>
									<td><label>Last Name :</label> </td>
									<td> <input type ="text" name ="lastName" value ="<?php echo $row["last_name"];?>"></td>
								</tr>
								<tr>
									<td><label>Email :</label> </td>
									<td> <input type ="text" name ="email" value ="<?php echo $row["email"];?>"></td>
								</tr>	
								
								<tr>
									<td><label></label> </td>
									<td> <input type="submit" value="Save" class="save"/> </td>
								</tr>
						<?php 
							endwhile; 
						?>
					</tbody>
				</table>
			
			<div style="clear;both;"></div>
			<p>
				<a href="list-customers.php">Back to List</a>
			</p>
			
		</div>
	</div>
</body>
</html>


<?php	
}else{
	echo 'Customer not Updated';
}

?>

