<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	$query="SELECT * FROM reserves Join customer using (CustomerID)";

	$records= mysqli_query($dbc,$query);

?>


<html>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
	<head>
	<title>Load</title>
	<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Data for all the Reserves with the Data of the Customers</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="900" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>License Plate</th>
			<th>Start Date</th>
			<th>Start Location</th>
			<th>Finish Location</th>
			<th>Finish Date</th>		
			<th>Paid</th>	

			<th>CostumerID</th>
			<th>IRSNumber</th>		
			<th>Social Security Number</th>	
			<th>Last Name</th>
			<th>First Name </th>
			<th>Driver License</th>		
			<th>First Registration</th>	
			<th>City</th>
			<th>Postal Code</th>
			<th>Street</th>
			<th>Street Number</th>	
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['StartDate']."</td>";
		echo "<td>".$value['StartLocation']."</td>";
		echo "<td>".$value['FinishLocation']."</td>";
		echo "<td>".$value['FinishDate']."</td>";
		echo "<td>".$value['Paid']."</td>";

		echo "<td>".$value['CustomerID']."</td>";
		echo "<td>".$value['IRSNumber']."</td>";
		echo "<td>".$value['SocialSecurityNumber']."</td>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['FirstName']."</td>";
		echo "<td>".$value['DriverLicense']."</td>";
		echo "<td>".$value['FirstRegistration']."</td>";
		echo "<td>".$value['City']."</td>";
		echo "<td>".$value['PostalCode']."</td>";
		echo "<td>".$value['Street']."</td>";
		echo "<td>".$value['StreetNumber']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>