<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');

	$query="SELECT * FROM employee";		

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
		<h1><p>Employee Records</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr class="tableformat">
			<th>IRS Number</th>
			<th>Social Security Number </th>
			<th>First Name </th>
			<th>Last Name</th>		
			<th>Street</th>
			<th>Street Number</th>
			<th>Postal Code</th>
			<th>City</th>		
		</tr>
<?php
	while($employee=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$employee['IRSNumber']."</td>";
		echo "<td>".$employee['SocialSecurityNumber']."</td>";
		echo "<td>".$employee['FirstName']."</td>";
		echo "<td>".$employee['LastName']."</td>";
		echo "<td>".$employee['Street']."</td>";
		echo "<td>".$employee['StreetNumber']."</td>";
		echo "<td>".$employee['PostalCode']."</td>";
		echo "<td>".$employee['City']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>