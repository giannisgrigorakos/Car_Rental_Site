	<?php
	include "..\..\Connectors\mysqli_connect.php";
	if(isset($_POST['show_btn'])){
		session_start();	
		$LicensePlate= mysqli_real_escape_string($dbc,$_POST['LicensePlate']);
		$Model= mysqli_real_escape_string($dbc,$_POST['Model']);
		$Type= mysqli_real_escape_string($dbc,$_POST['Type']);
		$Make= mysqli_real_escape_string($dbc,$_POST['Make']);
		$EXP_Date= mysqli_real_escape_string($dbc,$_POST['EXP_Date']);
		$Store= mysqli_real_escape_string($dbc,$_POST['Store']);

		$sql="SELECT * FROM exp_date WHERE LicensePlate='$LicensePlate'"; 
		$results = mysqli_query($dbc, $sql);
		if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');
      	}
      	else {
      		if ($LicensePlate!=null) {
      			mysqli_query($dbc, "UPDATE exp_date SET LicensePlate='$LicensePlate' WHERE LicensePlate='$LicensePlate' ");
      		}
      		if ($Model!=null) {
      			mysqli_query($dbc, "UPDATE exp_date SET Model='$Model' WHERE LicensePlate='$LicensePlate'");
      		}
      		if ($Type!=null) {
      			mysqli_query($dbc, "UPDATE exp_date SET Model='$Model' WHERE LicensePlate='$LicensePlate' ");
      		}
      		if ($Make!=null) {
      			mysqli_query($dbc, "UPDATE exp_date SET Make='$Make' WHERE LicensePlate='$LicensePlate' ");
      		}
      		if ($EXP_Date!=null) {
      			mysqli_query($dbc, "UPDATE exp_date SET EXP_Date= '$EXP_Date' WHERE LicensePlate='$LicensePlate' ");
      		}
      		if ($Store!=null) {
      			mysqli_query($dbc, "UPDATE exp_date SET Store= '$Store' WHERE LicensePlate='$LicensePlate' ");
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
		<h1><p>Update View</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul> 
       </div>
	<p>Complete the required fields:</p>

	<form method="post" action ="update.php">
		<table>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Za-zΑ-Ωα-ω0-9- ]{1,8}" required><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Model:</td>
				<td><input type ="text" name= "Model" class="textInput" pattern="[A-Za-zΑ-Ωα-ω0-9 ]{1,20}" title= "Only Characters"></td>
			</tr>
			<tr>
				<td>Type:</td>
				<td><input type ="text" name= "Type" class="textInput" pattern="[A-Za-zΑ-Ωα-ω ]{1,20}" ></td>
			</tr>
			<tr>
				<td>Make:</td>
				<td><input type ="date" name= "Make" class="textInput" pattern="[A-Za-zΑ-Ωα-ω ]{1,20}" ></td>
			</tr>
			<tr>
				<td>Expiration Date:</td>
				<td><input type ="date" name= "EXP_Date" class="textInput"></td>
			</tr>
			<tr>
				<td>Store ID:</td>
				<td><input type ="int" name= "Store" class="textInput" pattern="[0-9]{1,5}" ></td>
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
