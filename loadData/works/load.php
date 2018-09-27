<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	$query="SELECT * FROM works";

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
		<h1><p>Work Records</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>IRSNumber</th>
			<th>Store ID</th>
			<th>Start Date</th>
			<th>Finish Date</th>
			<th>Position</th>			
		</tr>
<?php
	while($vehicle=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$vehicle['IRSNumber']."</td>";
		echo "<td>".$vehicle['StoreID']."</td>";
		echo "<td>".$vehicle['StartDate']."</td>";
		echo "<td>".$vehicle['FinishDate']."</td>";
		echo "<td>".$vehicle['Position']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>