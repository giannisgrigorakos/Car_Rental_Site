<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');

	$query="SELECT * FROM vehicle";

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
		<h1><p>Vehicle Records</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>License Plate </th>
			<th>Model</th>
			<th>Type</th>
			<th>Make</th>
			<th>Year</th>			
			<th>Kilometers</th>
			<th>Cylinder Capacity</th>
			<th>Horse Power</th>
			<th>Damages</th>
			<th>Malfunctions</th>
			<th>Next Service</th>
			<th>Insurance Exp Date</th>
			<th>Last Service</th>
			<th>Store ID</th>
		</tr>
<?php
	while($vehicle=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$vehicle['LicensePlate']."</td>";
		echo "<td>".$vehicle['Model']."</td>";
		echo "<td>".$vehicle['Type']."</td>";
		echo "<td>".$vehicle['Make']."</td>";
		echo "<td>".$vehicle['Year']."</td>";
		echo "<td>".$vehicle['Kilometers']."</td>";
		echo "<td>".$vehicle['CylinderCapacity']."</td>";
		echo "<td>".$vehicle['Horsepower']."</td>";
		echo '<td><div class="scrollable">'.$vehicle['Damages']."</div></td>";
		echo '<td><div class="scrollable">'.$vehicle['Malfunctions']."</div></td>";
		echo "<td>".$vehicle['NextService']."</td>";
		echo "<td>".$vehicle['InsuranceExpDate']."</td>";
		echo "<td>".$vehicle['LastService']."</td>";
		echo "<td>".$vehicle['StoreID']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>