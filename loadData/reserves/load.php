<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');

	$query="SELECT * FROM reserves";

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
		<h1><p>Reservation Records</p></h1>
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
			<th>Customer ID</th>
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
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>