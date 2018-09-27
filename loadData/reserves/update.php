<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);
		$StartLocation= mysqli_real_escape_string($dbc,$_POST['StartLocation']);
		$FinishLocation= mysqli_real_escape_string($dbc,$_POST['FinishLocation']);
		$FinishDate= mysqli_real_escape_string($dbc,$_POST['FinishDate']);
		$valuee= mysqli_real_escape_string($dbc,$_POST['Paid']);
		$CustomerID= mysqli_real_escape_string($dbc,$_POST['CustomerID']);
		
		$sql = "SELECT * FROM reserves WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($StartLocation!=null) {
      			mysqli_query($dbc, "UPDATE reserves SET StartLocation='$StartLocation' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate' ");
      		}
      		if ($FinishLocation!=null) {
      			mysqli_query($dbc, "UPDATE reserves SET FinishLocation='$FinishLocation' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'");
      		}
      		if ($FinishDate!=null) {
      			mysqli_query($dbc, "UPDATE reserves SET FinishDate='$FinishDate' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'");
      		}
      		if ($valuee!=null) {
      			mysqli_query($dbc, "UPDATE reserves SET Paid='$valuee' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'");
      		}
      		if ($CustomerID!=null) {
      			mysqli_query($dbc, "UPDATE reserves SET CustomerID= '$CustomerID' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'");
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
		<h1><p> Update Reserves</p></h1>
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
				<td>Start Date:</td>
				<td><input type ="date" name= "StartDate" required><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Start Location:</td>
				<td><input type ="int" name= "StartLocation" class="textInput" pattern="[0-9]{1,5}" title="Complete a Store ID"></td>
			</tr>
			<tr>
				<td>Finish Location:</td>
				<td><input type ="int" name= "FinishLocation" class="textInput" pattern="[0-9]{1,5}" title="Complete a Store ID"></td>
			</tr>
			<tr>
				<td>Finish Date:</td>
				<td><input type ="date" name= "FinishDate" ></td>
			</tr>
			<tr>
				<td>Paid:</td>
				<td><input type ="radio" name= "Paid" value ="Yes" > Paid</td>
				<td><input type ="radio" name= "Paid" value ="No" > Not Paid</td>
			</tr>
			<tr>
				<td>Costumer ID:</td>
				<td><input type ="int" name= "CustomerID" class="textInput" pattern="[0-9]{1,10}" ></td>
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
