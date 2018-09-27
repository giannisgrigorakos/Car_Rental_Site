<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);

		$query = "DELETE FROM rents WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate' ";

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
		<h1><p>Delete a Rental</p></h1>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<p>Insert the License Plate and the Start Date of the rent you want to delete:</p>
	<form method="post" action ="delete.php">
		<table>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9-]{1,8}" required title="Only A-Z, 0-9,'-'"></td>
			<tr>
				<td>Start Date:</td>
				<td><input type ="date" name= "StartDate" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Delete Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
