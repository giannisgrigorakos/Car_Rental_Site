<?php
	include "..\..\Connectors\mysqli_connect.php";

	$query="SELECT n1.StoreID, n2.City, n1.PhoneNumber as num FROM phonenumber n1,store n2 WHERE n1.StoreID=n2.StoreID
			UNION
			SELECT n1.StoreID, n2.City,n1.EmailAddress as num FROM emailaddress n1, store n2 WHERE n1.StoreID=n2.StoreID
			ORDER BY StoreID";

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
		<h1><p>Contact Information</p></h1>
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
			<th>City</th>
			<th>Contact INFO</th>

		</tr>
<?php
	while($value=mysqli_fetch_array($records)){
		echo "<tr>";
		echo "<td>".$value['StoreID']."</td>";
		echo "<td>".$value['City']."</td>";
		echo "<td>".$value['num']."</td>";
		echo"</tr>";
	}
?>
</html>