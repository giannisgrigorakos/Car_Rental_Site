<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$IRSNumber= mysqli_real_escape_string($dbc,$_POST['IRSNumber']);
		$SocialSecurityNumber= mysqli_real_escape_string($dbc,$_POST['SocialSecurityNumber']);
		$DriverLicense= mysqli_real_escape_string($dbc,$_POST['DriverLicense']);
		$FirstName= mysqli_real_escape_string($dbc,$_POST['FirstName']);
		$LastName= mysqli_real_escape_string($dbc,$_POST['LastName']);
		$Street= mysqli_real_escape_string($dbc,$_POST['Street']);
		$StreetNumber= mysqli_real_escape_string($dbc,$_POST['StreetNumber']);
		$PostalCode= mysqli_real_escape_string($dbc,$_POST['PostalCode']);
		$City= mysqli_real_escape_string($dbc,$_POST['City']);

		$sql = "SELECT * FROM employee WHERE IRSNumber='$IRSNumber'";
      	$results = mysqli_query($dbc, $sql);
      	
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($SocialSecurityNumber!=null) {
      			mysqli_query($dbc, "UPDATE employee SET SocialSecurityNumber='$SocialSecurityNumber' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($DriverLicense!=null) {
      			mysqli_query($dbc, "UPDATE employee SET DriverLicense='$DriverLicense' WHERE IRSNumber='$IRSNumber'");
      		}
      		if ($FirstName!=null) {
      			mysqli_query($dbc, "UPDATE employee SET FirstName='$FirstName' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($LastName!=null) {
      			mysqli_query($dbc, "UPDATE employee SET LastName='$LastName' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($Street!=null) {
      			mysqli_query($dbc, "UPDATE employee SET Street='$Street' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($StreetNumber!=null) {
      			mysqli_query($dbc, "UPDATE employee SET StreetNumber='$StreetNumber' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($PostalCode!=null) {
      			mysqli_query($dbc, "UPDATE employee SET PostalCode='$PostalCode' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($City!=null) {
      			mysqli_query($dbc, "UPDATE employee SET City='$City' WHERE IRSNumber='$IRSNumber' ");
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
		<h1><p>Update employee data</p></h1>
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
				<td>IRS Number:</td>
				<td><input type ="text" name= "IRSNumber" class="textInput" pattern="[A-Z0-9Α-Ω]{1,10}" required title= "Only capital letters and digits"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Social Security Number:</td>
				<td><input type ="text" name= "SocialSecurityNumber" class="textInput" pattern="[A-Z0-9Α-Ω]{1,10}"  title= "Only capital letters and digits"></td>
			</tr>
			<tr>
				<td>Driver License:</td>
				<td><input type ="text" name= "DriverLicense" class="textInput" pattern="[A-Z0-9Α-Ω]{1,10}" title= "Only capital letters and digits"></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type ="text" name= "FirstName" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type ="text" name= "LastName" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Street:</td>
				<td><input type ="text" name= "Street" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Street Number:</td>
				<td><input type ="text" name= "StreetNumber" class="textInput" pattern="[A-Za-z0-9Α-Ωα-ω]{1,10}"></td>
			</tr>
			<tr>
				<td>Postal Code:</td>
				<td><input type ="int" name= "PostalCode" class="textInput" pattern="[0-9]{1,5}" title= "Only digits"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type ="text" name= "City" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" title= "Only Characters"></td>
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
