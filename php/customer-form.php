<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Save Customer</title>
<link type="text/css" rel="stylesheet" href="resources/css/style.css" />
<link type="text/css" rel="stylesheet" href="resources/css/add-customer-style.css" />
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h2>CRM - Customer Relationship Manager</h2>
		</div>
	
		<div id="container">
			<h3>Save Customer</h3>
		
			<form method ="post" action ="saveCustomer.php">
				<table>
					<tbody>
						<tr>
							<td><label>First Name :</label> </td>
							<td> <input type ="text" name ="firstName"></td>
						</tr>
						<tr>
							<td><label>Last Name :</label> </td>
							<td> <input type ="text" name ="lastName"></td>
						</tr>
						<tr>
							<td><label>Email :</label> </td>
							<td> <input type ="text" name ="email"></td>
						</tr>	
						
						<tr>
							<td><label></label> </td>
							<td> <input type="submit" value="Save" class="save"/> </td>
						</tr>	
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