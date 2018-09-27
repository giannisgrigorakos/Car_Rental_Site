<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$oldAddress= mysqli_real_escape_string($dbc,$_POST['oldAddress']);
		$EmailAddress= mysqli_real_escape_string($dbc,$_POST['EmailAddress']);

		$sql = "SELECT * FROM emailaddress WHERE StoreID='$StoreID' and EmailAddress='$oldAddress'";
      	$results = mysqli_query($dbc, $sql);
      	if (mysqli_num_rows($results)===0) {
      			header('Location: ./error_update.php');
      	}
      	else {
      		if ($EmailAddress!=null) {
      			mysqli_query($dbc, "UPDATE emailaddress SET EmailAddress='$EmailAddress' WHERE StoreID='$StoreID' and EmailAddress='$oldAddress' ");
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
		<h1><p>Update Email Address </p></h1>
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
				<td>Old Email Address:</td>
				<td><input type ="email" name= "oldAddress" pattern= "[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td><input type ="email" name= "EmailAddress" pattern= "[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><font color="red"> *</font></td>
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
