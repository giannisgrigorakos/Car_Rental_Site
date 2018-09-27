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

		$sql = "SELECT * FROM vehicle WHERE LicensePlate='$LicensePlate'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($Model!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Model='$Model' WHERE LicensePlate='$LicensePlate' ");
      		}
      		if ($Type!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Type='$Type' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Make!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Make='$Make' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Year!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Year='$Year' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Kilometers!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Kilometers='$Kilometers' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($CylinderCapacity!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET CylinderCapacity='$CylinderCapacity' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Horsepower!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Horsepower='$Horsepower' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Damages!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Damages='$Damages' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Malfunctions!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET Malfunctions='$Malfunctions' WHERE LicensePlate='$LicensePlate' ");
      		}
      		if ($NextService!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET NextService='$NextService' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($InsuranceExpDate!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET InsuranceExpDate='$InsuranceExpDate' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($LastService!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET LastService='$LastService' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($StoreID!=null) {
      			mysqli_query($dbc, "UPDATE vehicle SET StoreID='$StoreID' WHERE LicensePlate='$LicensePlate'");
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
		<h1><p>Update vehicle data</p></h1>
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
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9- Α-Ωα-ω]{1,8}" required title="Only characters, digits and '-'"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Model:</td>
				<td><input type ="text" name= "Model" class="textInput" pattern="[A-Za-z0-9 Α-Ωα-ω-./%]{1,20}"></td>
			</tr>
			<tr>
				<td>Type:</td>
				<td><input type ="text" name= "Type" class="textInput" pattern="[A-Za-z Α-Ωα-ω- ]{1,20}" ></td>
			</tr>
			<tr>
				<td>Make:</td>
				<td><input type ="text" name= "Make" class="textInput" pattern="[A-Za-z Α-Ωα-ω- ]{1,20}" ></td>
			</tr>
			<tr>
				<td>Year:</td>
				<td><input type ="text" name= "Year" class="textInput" pattern="[0-9]{4}"></td>
			</tr>
			<tr>
				<td>Kilometers:</td>
				<td><input type ="int" name= "Kilometers" class="textInput" pattern="[0-9]{1,10}"></td>
			</tr>
			<tr>
				<td>Cylinder Capacity:</td>
				<td><input type ="int" name= "CylinderCapacity" class="textInput" pattern="[0-9]{1,5}"></td>
			</tr>
			<tr>
				<td>Horse Power:</td>
				<td><input type ="int" name= "Horsepower" class="textInput" pattern="[0-9]{1,5}"></td>
			</tr>
			<tr>
				<td>Damages:</td>
				<td><input type ="textarea" name= "Damages" class="textInput" pattern="[A-Za-z0-9,./%Α-Ωα-ω- ]{1,500}" title="If there is no damage, insert None"></td>
			</tr>
			<tr>
				<td>Malfunctions:</td>
				<td><input type ="textarea" name= "Malfunctions" class="textInput" pattern="[A-Za-z0-9,./%Α-Ωα-ω- ]{1,500}" title="If there are no Malfunctions, insert None"></td>
			</tr>
			<tr>
				<td>Next Service:</td>
				<td><input type ="date" name= "NextService"></td>
			</tr>
			<tr>
				<td>Insurance Exp Date:</td>
				<td><input type ="date" name= "InsuranceExpDate"></td>
			</tr>
			<tr>
				<td>Last Service:</td>
				<td><input type ="date" name= "LastService" ></td>
			</tr>
			<tr>
				<td>Store ID:</td>
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,5}" title="Complete a Store ID""></td>
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
