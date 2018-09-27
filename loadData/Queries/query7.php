<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT n4.PaymentAmount, n1.CustomerID, n1.LastName, n2.IRSNumber, n2.LastName, n3.LicensePlate 
	 From customer n1, employee n2, rents n3, paymenttransaction n4
	 Where n1.CustomerID=n3.CustomerID AND n2.IRSNumber=n3.IRSNumber AND n3.LicensePlate=n4.LicensePlate AND n3.StartDate=n4.StartDate AND n4.PaymentAmount>999
	 ORDER BY n4.PaymentAmount DESC";

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
		<h1><p>Data of customers and employees with rent's payment amount greater than 999 $</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="900" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Payement Amount</th>
			<th>Customer ID</th>
			<th>Customer's Last Name</th>
			<th>Employee's IRS Number</th>
			<th>Employee's Last Name</th>
			<th>License Plate</th>
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['PaymentAmount']."</td>";
		echo "<td>".$value['CustomerID']."</td>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['IRSNumber']."</td>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['LicensePlate']."</td>";
		echo"</tr>";
	}
?>
</html>