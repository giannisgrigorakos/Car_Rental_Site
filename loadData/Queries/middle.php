<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$Type= mysqli_real_escape_string($dbc,$_POST['Type']);
		$_SESSION['Type'] = $Type;
    	 header('Location: ./query10.php');

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Search Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Search for Vehicles of the same Type</p></h1>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<p>Complete the Type:</p>
	<form method="post" action ="middle.php">
		<table>
			<tr>
				<td>Type of Vehicle:</td>
				<td><input type ="text" name= "Type" class="textInput" pattern="[A-Z0-9 -]{1,20}" title="Only capital letters and digits" required><td>*Capital letters only</td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Search Type"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
