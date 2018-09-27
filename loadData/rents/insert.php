<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);
		$StartLocation= mysqli_real_escape_string($dbc,$_POST['StartLocation']);
		$FinishLocation= mysqli_real_escape_string($dbc,$_POST['FinishLocation']);
		$FinishDate= mysqli_real_escape_string($dbc,$_POST['FinishDate']);
		$ReturnState= mysqli_real_escape_string($dbc,$_POST['ReturnState']);
		$CustomerID= mysqli_real_escape_string($dbc,$_POST['CustomerID']);
		$IRSNumber= mysqli_real_escape_string($dbc,$_POST['IRSNumber']);
		
		$query = "INSERT INTO rents(LicensePlate, StartDate, StartLocation, FinishLocation, FinishDate, ReturnState, CustomerID, IRSNumber) VALUES ('$LicensePlate','$StartDate','$StartLocation','$FinishLocation','$FinishDate','$ReturnState', '$CustomerID', '$IRSNumber')";
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
		<title>Insert Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>
	<body>
	<div class="header">
		<h1><p>Insert New Rent</p></h1>
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
				<td>Start Date:</td>
				<td><input type ="date" name= "StartDate" required></td>
			</tr>
			<tr>
				<td>Start Location:</td>
				<td><input type ="int" name= "StartLocation" class="textInput" pattern="[0-9]{1,5}" required></td>
			</tr>
			<tr>
				<td>Finish Location:</td>
				<td><input type ="int" name= "FinishLocation" class="textInput" pattern="[0-9]{1,5}" required></td>
			</tr>
			<tr>
				<td>Finish Date:</td>
				<td><input type ="date" name= "FinishDate" required></td>
			</tr>
			<tr>
				<td>Return State:</td>
				<td><input type ="textarea" name= "ReturnState" class="textInput" pattern="[A-Za-z0-9 ]{1,500}" required></td>
			</tr>
			<tr>
				<td>Costumer ID:</td>
				<td><input type ="int" name= "CustomerID" class="textInput" pattern="[0-9]{1,10}" required></td>
			</tr>
			<tr>
				<td>IRSNumber:</td>
				<td><input type ="text" name= "IRSNumber" class="textInput" pattern="[A-Z0-9]{1,10}" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
