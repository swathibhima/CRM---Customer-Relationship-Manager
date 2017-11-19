
<?php
include "database.php";  

$sql = "select * from customer";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<title>List Customers</title>
<!-- reference your style sheet -->
<link type="text/css" rel="stylesheet" href="resources/css/style.css" />
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h2>CRM - Customer Relationship Manager</h2>
		</div>
	</div>
	
	<div id="container">
		<div id="content">
		
			<!-- put new button: Add Customer -->
			<input type="button" value="Add Customer" onclick="window.location.href='customer-form.php'; return false;" class="add-button" />
			
			<!-- add out html table here -->
			<table>
				<tr>
					<th>First Name </th>
					<th>Last Name </th>
					<th>Email </th>
					<th>Action </th>
				</tr>
				
				<?php if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
				
				?>
				
					<tr>
						<td><?php echo $row["first_name"];?></td>
						<td><?php echo $row["last_name"];?></td>
						<td><?php echo $row["email"];?></td>
						
						<td>
							<!-- display the update link -->
							<a href="updateCustomerForm.php?id=<?php echo $row['id']; ?>">Update</a>
							|
							<a href="deleteCustomer.php?id=<?php echo $row['id']; ?>"
								onclick="if(!confirm('Are you sure you want to delete this customer?')) return false">Delete</a>
							
						</td>
						
					</tr>
		<?php 
			 }
		} else {
			echo "0 results";
		}
		$conn->close();
		?>

			</table>
		</div>
	</div>
	
</body>
</html>