<?php
	include "..\..\Connectors\mysqli_connect.php";
	
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
	
		$sql = "SELECT * FROM customer WHERE CustomerID = '$CustomerID'";
      	$results = mysqli_query($dbc, $sql);
      
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($IRSNumber!=null) {
      			mysqli_query($dbc, "UPDATE customer SET IRSNumber='$IRSNumber' WHERE CustomerID = '$CustomerID'");
      		}

      		if ($SocialSecurityNumber!=null) {
      			mysqli_query($dbc, "UPDATE customer SET SocialSecurityNumber='$SocialSecurityNumber' WHERE CustomerID = '$CustomerID' ");
      		}

      		if ($LastName!=null) {
      			mysqli_query($dbc, "UPDATE customer SET LastName='$LastName' WHERE CustomerID = '$CustomerID' ");
      		}

      		if ($FirstName!=null) {
      			mysqli_query($dbc, "UPDATE customer SET FirstName='$FirstName' WHERE CustomerID = '$CustomerID' ");
      		}
      		if ($DriverLicense!=null) {
      			mysqli_query($dbc, "UPDATE customer SET DriverLicense='$DriverLicense' WHERE CustomerID = '$CustomerID'");
      		}

      		if ($FirstRegistration!=null) {
      			mysqli_query($dbc, "UPDATE customer SET FirstRegistration='$FirstRegistration' WHERE CustomerID = '$CustomerID' ");
      		}

      		if ($City!=null) {
      			mysqli_query($dbc, "UPDATE customer SET City='$City' WHERE CustomerID = '$CustomerID' ");
      		}

      		if ($PostalCode!=null) {
      			mysqli_query($dbc, "UPDATE customer SET PostalCode='$PostalCode' WHERE CustomerID = '$CustomerID' ");
      		}
      		if ($Street!=null) {
      			mysqli_query($dbc, "UPDATE customer SET Street='$Street' WHERE CustomerID = '$CustomerID' ");
      		}

      		if ($StreetNumber!=null) {
      			mysqli_query($dbc, "UPDATE customer SET StreetNumber='$StreetNumber' WHERE CustomerID = '$CustomerID' ");
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
		<h1><p>Update customer data</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul> 
       </div>
	<p>Complete the fields:</p>

	<form method="post" action ="update.php">
		<table>
			<tr>
				<td>CustomerID:</td>
				<td><input type ="int" name= "CustomerID" class="textInput" required><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>IRS Number:</td>
				<td><input type ="text" name= "IRSNumber" class="textInput" pattern="[A-Z0-9]{1,10}"  title= "Only A-Z and 0-9"></td>
			</tr>
			<tr>
				<td>Social Security Number:</td>
				<td><input type ="text" name= "SocialSecurityNumber" class="textInput" pattern="[A-Z0-9]{1,10}"  title= "Only A-Z and 0-9"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type ="text" name= "LastName" class="textInput" pattern="[A-Za-z ]{1,20}"  title= "Only Characters"></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type ="text" name= "FirstName" class="textInput" pattern="[A-Za-z ]{1,20}"  title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Driver License:</td>
				<td><input type ="text" name= "DriverLicense" class="textInput" pattern="[A-Z0-9]{1,10}"  title= "Only A-Z and 0-9"></td>
			</tr>
			<tr>
				<td>First Registration:</td>
				<td><input type ="date" name= "FirstRegistration"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type ="text" name= "City" class="textInput" pattern="[A-Za-z ]{1,20}"  title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Postal Code:</td>
				<td><input type ="int" name= "PostalCode" class="textInput" pattern="[0-9]{1,5}" title= "Only 0-9"></td>
			</tr>	
			<tr>
				<td>Street:</td>
				<td><input type ="text" name= "Street" class="textInput" pattern="[A-Za-z ]{1,20}" title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Street Number:</td>
				<td><input type ="text" name= "StreetNumber" class="textInput" pattern="[A-Z0-9]{1,10}" title= "Only A-Z or 0-9"></td>
			</tr>
			<tr>
				<td></td>
				<td><font color="red"> * required fields</font></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Update Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
