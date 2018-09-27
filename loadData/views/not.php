<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT * FROM not_up";

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
		<h1><p>Data for all the rents of each employee</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr class="tableformat">
			<th>IRSNumber</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>License Plate</th>
			<th>Payment Amount</th>
			<th>Payment Method</th>			
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['IRSNumber']."</td>";
		echo "<td>".$value['FirstName']."</td>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['PaymentAmount']."</td>";
		echo "<td>".$value['PaymentMethod']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>