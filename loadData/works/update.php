<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$IRSNumber= mysqli_real_escape_string($dbc,$_POST['IRSNumber']);
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);
		$FinishDate= mysqli_real_escape_string($dbc,$_POST['FinishDate']);
		$Position= mysqli_real_escape_string($dbc,$_POST['Position']);
		
		$sql = "SELECT * FROM works WHERE IRSNumber='$IRSNumber'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');

      	}
      	else {
      		if ($Street!=null) {
      			mysqli_query($dbc, "UPDATE works SET StoreID='$StoreID' WHERE IRSNumber='$IRSNumber' ");
      		}
      		if ($StreetNumber!=null) {
      			mysqli_query($dbc, "UPDATE works SET StartDate='$StartDate' WHERE IRSNumber='$IRSNumber'");
      		}
      		if ($PostalCode!=null) {
      			mysqli_query($dbc, "UPDATE works SET PostalCode='$PostalCode' WHERE IRSNumber='$IRSNumber'");
      		}
      		if ($City!=null) {
      			mysqli_query($dbc, "UPDATE works SET Position='$Position' WHERE IRSNumber='$IRSNumber'");
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
		<h1><p>Update Work data</p></h1>
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
				<td>IRSNumber:</td>
				<td><input type ="text" name= "IRSNumber" class="textInput" pattern="[A-Z0-9Α-Ω]{1,10}" required title="Only A-Z, 0-9,'-'"><font color="red">*</font></td>
			</tr>
			<tr>
				<td>StoreID:</td>
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,5}"></td>
			</tr>
			<tr>
				<td>Start Date:</td>
				<td><input type ="date" name= "StartDate" ></td>
			</tr>
			<tr>
				<td>Finish Date:</td>
				<td><input type ="date" name= "FinishDate"></td>
			</tr>
			<tr>
				<td>Position:</td>
				<td><input type ="text" name= "Position" class="textInput" pattern="[A-Za-z0-9]{1,500}"></td>
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
