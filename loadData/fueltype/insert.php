<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$FuelType= mysqli_real_escape_string($dbc,$_POST['FuelType']);
				
		$query = "INSERT INTO fueltype(LicensePlate,FuelType) VALUES ('$LicensePlate','$FuelType')";
		$result = mysqli_query($dbc,$query);
		if ($result){
    		header('Location: ./successful_insert.php');
		} 
		else {
    		header('Location: ./error_insert.php');
    	}
    	
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Insert Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Insert Fuel Type of a Vehicle</p></h1>
	</div>
	<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul> 
    </div>
	<p>Complete the following fields:</p>
	<form method="post" action ="insert.php">
		<table>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9-]{1,8}" required title="Only A-Z, 0-9,'-'"></td>
			</tr>
			<tr>
				<td>Fuel Type :</td>
				<td><input type ="text" name= "FuelType" class="textInput" pattern="[A-Za-z]{1,20}" required title= "Only characters"></td>
			</tr>
						
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
