<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');
	if(isset($_POST['show_btn'])){
		session_start();	
		$CustomerID= mysqli_real_escape_string($dbc,$_POST['CustomerID']);
		$IRSNumber= mysqli_real_escape_string($dbc,$_POST['IRSNumber']);
		$SocialSecurityNumber= mysqli_real_escape_string($dbc,$_POST['SocialSecurityNumber']);
		$LastName= mysqli_real_escape_string($dbc,$_POST['LastName']);
		$FirstName= mysqli_real_escape_string($dbc,$_POST['FirstName']);
		$DriverLicense= mysqli_real_escape_string($dbc,$_POST['DriverLicense']);
		$FirstRegistration= mysqli_real_escape_string($dbc,$_POST['FirstRegistration']);
		$City= mysqli_real_escape_string($dbc,$_POST['City']);
		$PostalCode= mysqli_real_escape_string($dbc,$_POST['PostalCode']);	
		$Street= mysqli_real_escape_string($dbc,$_POST['Street']);	
		$StreetNumber= mysqli_real_escape_string($dbc,$_POST['StreetNumber']);	

		$query = "INSERT INTO customer(CustomerID,IRSNumber,SocialSecurityNumber,LastName,FirstName,DriverLicense,FirstRegistration,City,PostalCode,Street,StreetNumber) VALUES ('$CustomerID','$IRSNumber','$SocialSecurityNumber','$LastName','$FirstName','$DriverLicense','$FirstRegistration','$City','$PostalCode','$Street','$StreetNumber')";
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
		<title>  Insert Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Insert New Customer</p></h1>
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
				<td>CustomerID:</td>
				<td><input type ="int" name= "CustomerID" class="textInput" ><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>IRS Number:</td>
				<td><input type ="text" name= "IRSNumber" class="textInput" pattern="[A-Z0-9a-zΑ-Ωα-ω]{1,10}" required title= "Only characters and digits"></td>
			</tr>
			<tr>
				<td>Social Security Number:</td>
				<td><input type ="text" name= "SocialSecurityNumber" class="textInput" pattern="[A-Z0-9a-zΑ-Ωα-ω]{1,10}" required title= "Only characters and digits"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type ="text" name= "LastName" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" required title= "Only Characters"></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type ="text" name= "FirstName" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" required title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Driver License:</td>
				<td><input type ="text" name= "DriverLicense" class="textInput" pattern="[A-Za-z0-9]{1,10}" required title= "Only characters and digits"></td>
			</tr>
			<tr>
				<td>First Registration:</td>
				<td><input type ="date" name= "FirstRegistration" required></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type ="text" name= "City" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" required title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Postal Code:</td>
				<td><input type ="int" name= "PostalCode" class="textInput" pattern="[0-9]{1,5}" required title= "Only 0-9"></td>
			</tr>	
			<tr>
				<td>Street:</td>
				<td><input type ="text" name= "Street" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" required title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Street Number:</td>
				<td><input type ="text" name= "StreetNumber" class="textInput" pattern="[A-Za-z0-9 ]{1,10}" required title= "Only A-Z or 0-9"></td>
			</tr>
			<tr>
				<td></td>
				<td><font color="red">* optional fields</font></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
