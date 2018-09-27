<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$CustomerID= mysqli_real_escape_string($dbc,$_POST['CustomerID']);

		$query = "DELETE FROM customer WHERE CustomerID='$CustomerID'";

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
		<h1><p>Delete Customer</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>          
	</div>
	<p>Insert the Customer ID of the customer you want to delete:</p>
	<form method="post" action ="delete.php">
		<table>
			<tr>
				<td>Customer ID:</td>
				<td><input type ="int" name= "CustomerID" class="textInput" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Delete Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
