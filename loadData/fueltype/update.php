<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$FuelType= mysqli_real_escape_string($dbc,$_POST['FuelType']);
		
		$sql = "SELECT * FROM fueltype WHERE LicensePlate='$LicensePlate'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($FuelType!=null) {
      			mysqli_query($dbc, "UPDATE fueltype SET FuelType='$FuelType' WHERE LicensePlate='$LicensePlate' ");
      		}

    	header('Location: ./successful_update.php');
      	}
		
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Update Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>
	<body>
	<div class="header">
		<h1><p>Update Fuel Type of a Vehicle </p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul> 
       </div>
	<p>Complete the following fields:</p>

	<form method="post" action ="update.php">
		<table>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9-Α-Ω]{1,8}" required title="Only capital letters, digits and '-'"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Fuel Type :</td>
				<td><input type ="text" name= "FuelType" class="textInput" pattern="[A-Za-z Α-Ωα-ω-]{1,20}" title= "Only characters"></td>
			</tr>
			<tr>
				<td></td>
				<td><font color="red">* required fields</font></td>
			</tr>					
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Update Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
