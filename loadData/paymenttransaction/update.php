<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$PaymentAmount= mysqli_real_escape_string($dbc,$_POST['PaymentAmount']);
		$PaymentMethod= mysqli_real_escape_string($dbc,$_POST['PaymentMethod']);

		$sql = "SELECT * FROM paymenttransaction WHERE (LicensePlate ='$LicensePlate' AND StartDate='$StartDate')";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');
      	}
      	else {
      		if ($PaymentAmount!=null) {
      			mysqli_query($dbc, "UPDATE paymenttransaction SET PaymentAmount='$PaymentAmount' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate' ");
      		}
      		if ($PaymentMethod!=null) {
      			mysqli_query($dbc, "UPDATE paymenttransaction SET PaymentMethod='$PaymentMethod' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate' ");
      		}
      		header('Location: ./successful_update.php');
      	}
		
    	
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>
	<body>
	<div class="header">
		<h1><p>Update Payment Transactions</p></h1>
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
				<td>Start Date:</td>
				<td><input type ="date" name= "StartDate" required><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Z0-9- Α-Ωα-ω]{1,8}" required title="Only characters, digits and '-'"><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Payment Amount:</td>
				<td><input type ="int" name= "PaymentAmount" class="textInput" pattern="[0-9]{1,10}" title= "Only digits"></td>
			</tr>
			<tr>
				<td>Payment Method:</td>
				<td><input type ="text" name= "PaymentMethod" class="textInput" pattern="[A-Za-z- Α-Ωα-ω.]{1,20}" title= "Only characters, '-', '.'"></td>
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
