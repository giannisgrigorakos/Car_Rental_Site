<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$oldphone= mysqli_real_escape_string($dbc,$_POST['oldphone']);
		$PhoneNumber= mysqli_real_escape_string($dbc,$_POST['PhoneNumber']);

		$sql = "SELECT * FROM phonenumber WHERE StoreID='$StoreID' and PhoneNumber='$oldphone'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($PhoneNumber!=null) {
      			mysqli_query($dbc, "UPDATE phonenumber SET PhoneNumber='$PhoneNumber' WHERE StoreID='$StoreID' and StoreID='$StoreID' and PhoneNumber='$oldphone' ");
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
		<h1><p>Update Phonenumber</p></h1>
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
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,10}" required title= "Only 0-9"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Old Phonenumber:</td>
				<td><input type ="int" name= "oldphone" class="textInput" pattern="[0-9]{10}" required title= "10 digits required"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Phonenumber:</td>
				<td><input type ="int" name= "PhoneNumber" class="textInput" pattern="[0-9]{10}" required title= "10 digits required" ><font color="red"> *</font></td>
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
