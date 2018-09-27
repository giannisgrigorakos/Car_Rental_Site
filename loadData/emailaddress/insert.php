<?php
	include "..\..\Connectors\mysqli_connect.php";

	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$EmailAddress= mysqli_real_escape_string($dbc,$_POST['EmailAddress']);


		
		
		$result = mysqli_query($dbc,"INSERT INTO emailaddress (StoreID,EmailAddress) VALUES ('$StoreID','$EmailAddress')");
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
		<title> Insert Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Insert New Email</p></h1>
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
				<td>Store ID:</td>
				<td><input type ="int" name= "StoreID" class="textInput" pattern="[0-9]{1,5}" required title= "Only 0-9"></td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td><input type ="email" name= "EmailAddress" pattern= "[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required></td>
			</tr>			
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
