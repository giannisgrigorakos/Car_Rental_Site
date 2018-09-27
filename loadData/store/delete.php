<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);

		$query = "DELETE FROM store WHERE StoreID='$StoreID'";

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
		<h1><p>Delete Store</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>          
	</div>
	<p>Complete the Store ID of the Store you want to delete:</p>
	<form method="post" action ="delete.php">
		<table>
			<tr>
				<td>Store ID:</td>
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,5}" required title= "Maximum five digits"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Delete Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
