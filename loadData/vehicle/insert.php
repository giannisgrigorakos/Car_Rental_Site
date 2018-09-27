<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$Model= mysqli_real_escape_string($dbc,$_POST['Model']);
		$Type= mysqli_real_escape_string($dbc,$_POST['Type']);
		$Make= mysqli_real_escape_string($dbc,$_POST['Make']);
		$Year= mysqli_real_escape_string($dbc,$_POST['Year']);
		$Kilometers= mysqli_real_escape_string($dbc,$_POST['Kilometers']);
		$CylinderCapacity= mysqli_real_escape_string($dbc,$_POST['CylinderCapacity']);
		$Horsepower= mysqli_real_escape_string($dbc,$_POST['Horsepower']);
		$Damages= mysqli_real_escape_string($dbc,$_POST['Damages']);
		$Malfunctions= mysqli_real_escape_string($dbc,$_POST['Malfunctions']);
		$NextService= mysqli_real_escape_string($dbc,$_POST['NextService']);
		$InsuranceExpDate= mysqli_real_escape_string($dbc,$_POST['InsuranceExpDate']);
		$LastService= mysqli_real_escape_string($dbc,$_POST['LastService']);
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);

		$query = "INSERT INTO vehicle(LicensePlate,Model,Type,Make,Year, Kilometers, CylinderCapacity, Horsepower,Damages,Malfunctions,NextService, InsuranceExpDate, LastService,StoreID) VALUES ('$LicensePlate','$Model','$Type','$Make','$Year', '$Kilometers', '$CylinderCapacity', '$Horsepower','$Damages','$Malfunctions','$NextService','$InsuranceExpDate','$LastService','$StoreID')";
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
		<title> Insert Data </title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	
	<div class="header">
		<h1><p>Insert New Vehicle</p></h1>
	</div>
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
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9-]{1,8}" required title="Only A-Z, 0-9 and '-'"></td>
			</tr>
			<tr>
				<td>Model:</td>
				<td><input type ="text" name= "Model" class="textInput" pattern="[A-Za-z0-9- ]{1,20}" required></td>
			</tr>
			<tr>
				<td>Type:</td>
				<td><input type ="text" name= "Type" class="textInput" pattern="[A-Za-z0-9 -]{1,20}" required></td>
			</tr>
			<tr>
				<td>Make:</td>
				<td><input type ="text" name= "Make" class="textInput" pattern="[A-Za-z0-9 -]{1,20}" required></td>
			</tr>
			<tr>
				<td>Year:</td>
				<td><input type ="text" name= "Year" class="textInput" pattern="[0-9]{4}" required></td>
			</tr>
			<tr>
				<td>Kilometers:</td>
				<td><input type ="int" name= "Kilometers" class="textInput" pattern="[0-9]{1,10}" required></td>
			</tr>
			<tr>
				<td>Cylinder Capacity:</td>
				<td><input type ="int" name= "CylinderCapacity" class="textInput" pattern="[0-9]{1,5}" required></td>
			</tr>
			<tr>
				<td>Horse Power:</td>
				<td><input type ="int" name= "Horsepower" class="textInput" pattern="[0-9]{1,5}" required></td>
			</tr>
			<tr>
				<td>Damages:</td>
				<td><input type ="textarea" name= "Damages" class="textInput" pattern="[A-Za-z0-9 -]{1,500}" required title="If there is no damage, insert None"></td>
			</tr>
			<tr>
				<td>Malfunctions:</td>
				<td><input type ="textarea" name= "Malfunctions" class="textInput" pattern="[A-Za-z0-9 -]{1,500}" required title="If there are no Malfunctions, insert None"></td>
			</tr>
			<tr>
				<td>Next Service:</td>
				<td><input type ="date" name= "NextService" required></td>
			</tr>
			<tr>
				<td>Insurance Exp Date:</td>
				<td><input type ="date" name= "InsuranceExpDate" required></td>
			</tr>
			<tr>
				<td>Last Service:</td>
				<td><input type ="date" name= "LastService" required></td>
			</tr>
			<tr>
				<td>Store ID:</td>
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,5}" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	

		</table>
	</form>		
</body>
</html>
