<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query ="SELECT n1.IRSNumber,n1.LastName,n1.FirstName,n2.Position,n3.StoreID,n3.City FROM employee n1,works n2,store n3 WHERE n1.IRSNumber=n2.IRSNumber and n3.StoreID=n2.StoreID order by n3.StoreID";

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
		<h1><p>Data for employees of all the stores</p></h1>
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
			<th>IRSNumber </th>
			<th>Last Name </th>
			<th>First Name </th>
			<th>Position</th>
			<th>StoreID</th>
			<th>City</th>
		</tr>
<?php
	while($value= mysqli_fetch_array($records)){

		echo "<tr>";
		echo "<td>".$value['IRSNumber']."</td>";
		echo "<td>".$value['LastName']."</td>";
		echo "<td>".$value['FirstName']."</td>";
		echo "<td>".$value['Position']."</td>";
		echo "<td>".$value['StoreID']."</td>";
		echo "<td>".$value['City']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>