<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');

	$query="SELECT * FROM phonenumber";

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
		<h1><p>Phone Numbers</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<table width="900" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Store ID</th>
			<th>Phone Number</th>		
		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['StoreID']."</td>";
		echo "<td>".$value['PhoneNumber']."</td>";
		echo"</tr>";
	}
?>
	</table>
	</body>



</html>