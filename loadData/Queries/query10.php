<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	session_start();
	global $Type;
	$Type = $_SESSION['Type'];

	$query= "SELECT n1.LicensePlate, n1.Year, n1.Model,n1.Make, n1.StoreID, n2.City from vehicle n1, store n2 where UPPER(n1.Type) like '$Type%' and n1.StoreID=n2.StoreID
		GROUP BY n1.StoreID
		ORDER BY n1.Year";

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
		<h1><p>Information for Vehicle Type that was searched</p></h1>
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
			<th>Year</th>
			<th>Model</th>
			<th>Make</th>
			<th>StoreID</th>
			<th>City</th>
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo "<td>".$value['Year']."</td>";
		echo "<td>".$value['Model']."</td>";
		echo "<td>".$value['Make']."</td>";
		echo "<td>".$value['StoreID']."</td>";
		echo "<td>".$value['City']."</td>";
		echo"</tr>";
	}
?>
</html>