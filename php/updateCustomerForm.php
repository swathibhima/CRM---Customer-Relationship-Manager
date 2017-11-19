<?php
include "database.php"; 

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$parts = parse_url($actual_link);
parse_str($parts['query'], $query);
$update_id = $query['id'];

// select a record based on id
$sql = "select * from customer where id = $update_id ";

$result = $conn->query($sql);
	
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
			
			<?php if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {

				?>
			
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
				 }
			} else {
				echo "0 results";
			}
			$conn->close();
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


