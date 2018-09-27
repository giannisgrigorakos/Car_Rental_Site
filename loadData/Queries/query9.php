<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT LicensePlate, Model, Make, Kilometers from vehicle where Kilometers<
																	(select avg(Kilometers) from vehicle) 
																	order by Kilometers";

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
		<h1><p>The vehicles with kilometers less than the average kilometers of all vehicles</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="900" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Lisence Plate</th>
			<th>Model</th>
			<th>Make</th>
			<th>Kilometers</th>
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['Model']."</td>";
		echo "<td>".$value['Make']."</td>";
		echo "<td>".$value['Kilometers']."</td>";
		echo"</tr>";
	}
?>
</html>