<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT * FROM exp_date";

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
	<title>Load</title>
	<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	
	<div class="header">
		<h1><p>Data of vehicles that have insurance expiration date below 30-12-2018</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr class="tableformat">
			<th>License Plate</th>
			<th>Model</th>
			<th>Type</th>
			<th>Make</th>
			<th>Expiration Date</th>
			<th>Store</th>				
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['Model']."</td>";
		echo "<td>".$value['Type']."</td>";
		echo "<td>".$value['Make']."</td>";
		echo "<td>".$value['EXP_Date']."</td>";
		echo "<td>".$value['Store']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>