<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT LicensePlate, Model, Make, count(CustomerID) as num FROM customer join reserves using (CustomerID) natural join vehicle group by LicensePlate Having count(CustomerID)>=2";

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
		<h1><p>Data for the vehicles with total reservations more than 2</p></h1>
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
			<th>Model</th>
			<th>Make</th>
			<th>num</th>
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['Model']."</td>";
		echo "<td>".$value['Make']."</td>";
		echo "<td>".$value['num']."</td>";
		echo"</tr>";
	}
?>
</html>