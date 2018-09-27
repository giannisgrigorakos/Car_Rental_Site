<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);

		$query = "DELETE FROM paymenttransaction WHERE StartDate='$StartDate' and LicensePlate='$LicensePlate'";

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
		<h1><p>Delete a Payment Transaction</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>          
	</div>
	<p>Insert the Start Date and the License Plate of the Payment Transaction you want to delete:</p>
	<form method="post" action ="delete.php">
		<table>
			<tr>
				<td>Start Date:</td>
				<td><input type ="date" name= "StartDate" required></td>
			</tr>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9-]{1,8}" required title="Only A-Z, 0-9,'-'"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Delete Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
