<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT CustomerID,FirstName,LastName,count(distinct LicensePlate) as num FROM customer join rents using (CustomerID) group by CustomerID";

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
		<h1><p>The Total Number of Different Vehicles that Every Customer has rent</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="900" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Customer ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Different Rented Cars</th>

		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['CustomerID']."</td>";
		echo "<td>".$value['FirstName']."</td>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['num']."</td>";
		echo"</tr>";
	}
?>
</html>