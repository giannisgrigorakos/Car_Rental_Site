<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT n2.FirstName, n2.LastName, n1.CustomerID, n1.IRSNumber, n3.StoreID, n4.City, n3.Position
		 	FROM customer n1, employee n2, works n3, store n4 
		 	WHERE n1.IRSNumber=n2.IRSNumber and n2.IRSNumber=n3.IRSNumber and n4.StoreID=n3.StoreID
		 	GROUP BY n4.StoreID
		 	ORDER BY n2.LastName";

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
		<h1><p>The Employees who are Customers too</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="900" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Customer ID</th>
			<th>IRS Number</th>
			<th>Store ID</th>
			<th>City</th>
			<th>Position</th>
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['FirstName']."</td>";
		echo "<td>".$value['CustomerID']."</td>";
		echo "<td>".$value['IRSNumber']."</td>";
		echo "<td>".$value['StoreID']."</td>";
		echo "<td>".$value['City']."</td>";
		echo "<td>".$value['Position']."</td>";
		echo"</tr>";
	}
?>
</html>