<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	$query="SELECT Type,LicensePlate,count(Type) as num FROM vehicle group by Type order by LicensePlate";

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
		<h1><p>Data of the Types of the Vehicles</p></h1>
	</div>
	<form method="post" action ="query2.php">

		</table>
	</form>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr class="tableformat">
			<th>Type</th>
			<th>LicensePlate</th>
			<th>Vehicles' Number of this Type</th>
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['Type']."</td>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['num']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>