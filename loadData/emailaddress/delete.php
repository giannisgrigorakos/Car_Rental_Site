<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');
	if(isset($_POST['show_btn'])){
		session_start();	
		//$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$EmailAddress= mysqli_real_escape_string($dbc,$_POST['EmailAddress']);

		$query = "DELETE FROM emailaddress WHERE /*StoreID='$StoreID' and */EmailAddress='$EmailAddress'";

		$result = mysqli_query($dbc,$query);
		if (mysqli_affected_rows($dbc)){
    		header('Location: ./successful_delete.php');
		} 
		else {
    		header('Location: ./error_delete.php');
    	}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Delete Email Address</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>          
	</div>
	<p>Insert the Store ID and the Email Address of the store's email address you want to delete:</p>
	<form method="post" action ="delete.php">
		<table>
			<tr>
				<td>Email Address:</td>
				<td><input type ="email" name= "EmailAddress" pattern= "[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required></td>
			</tr>		
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Delete Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
