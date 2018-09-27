<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT * FROM rents";

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
		<h1><p>Rent Records</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>License Plate</th>
			<th>Start Date</th>
			<th>Start Location</th>
			<th>Finish Location</th>
			<th>Finish Date</th>
			<th>Return State</th>	
			<th>Customer ID</th>
			<th>IRS Number</th>
		</tr>
<?php
	while($rent=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$rent['LicensePlate']."</td>";
		echo "<td>".$rent['StartDate']."</td>";
		echo "<td>".$rent['StartLocation']."</td>";
		echo "<td>".$rent['FinishLocation']."</td>";
		echo "<td>".$rent['FinishDate']."</td>";
		echo '<td><div class="scrollable">'.$rent['ReturnState']."</div></td>";
		echo "<td>".$rent['CustomerID']."</td>";
		echo "<td>".$rent['IRSNumber']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>