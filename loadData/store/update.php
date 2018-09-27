<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$Street= mysqli_real_escape_string($dbc,$_POST['Street']);
		$StreetNumber= mysqli_real_escape_string($dbc,$_POST['StreetNumber']);
		$PostalCode= mysqli_real_escape_string($dbc,$_POST['PostalCode']);
		$City= mysqli_real_escape_string($dbc,$_POST['City']);

		$sql = "SELECT * FROM store WHERE StoreID='$StoreID'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($Street!=null) {
      			mysqli_query($dbc, "UPDATE store SET Street='$Street' WHERE StoreID='$StoreID' ");
      		}
      		if ($StreetNumber!=null) {
      			mysqli_query($dbc, "UPDATE store SET StreetNumber='$StreetNumber' WHERE StoreID='$StoreID'");
      		}
      		if ($PostalCode!=null) {
      			mysqli_query($dbc, "UPDATE store SET PostalCode='$PostalCode' WHERE StoreID='$StoreID'");
      		}
      		if ($City!=null) {
      			mysqli_query($dbc, "UPDATE store SET City='$City' WHERE StoreID='$StoreID'");
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
		<h1><p>Update Data of a Store</p></h1>
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
				<td>Store ID:</td>
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,5}" required title= "Maximum five digits"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Street:</td>
				<td><input type ="text" name= "Street" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" title= "Only characters"></td>
			</tr>
			<tr>
				<td>Street Number:</td>
				<td><input type ="text" name= "StreetNumber" class="textInput" pattern="[A-Z0-9Α-Ωα-ω]{1,10}" title= "Only characters and digits"></td>
			</tr>
			<tr>
				<td>Postal Code:</td>
				<td><input type ="int" name= "PostalCode" class="textInput" pattern="[0-9]{1,5}" title= "Only digits"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type ="text" name= "City" class="textInput" pattern="[A-Za-z Α-Ωα-ω]{1,20}" title= "Only characters"></td>
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
