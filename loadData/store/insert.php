<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');
	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$Street= mysqli_real_escape_string($dbc,$_POST['Street']);
		$StreetNumber= mysqli_real_escape_string($dbc,$_POST['StreetNumber']);
		$PostalCode= mysqli_real_escape_string($dbc,$_POST['PostalCode']);
		$City= mysqli_real_escape_string($dbc,$_POST['City']);
		
		$query = "INSERT INTO store(StoreID,Street,StreetNumber,PostalCode,City) VALUES ('$StoreID','$Street','$StreetNumber','$PostalCode','$City')";
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
		<title> Insert Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Insert New Store</p></h1>
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
				<td><input type ="int" name= "StoreID" class="textInput" ><font color="red"> *</font></td>
			</tr>
			<tr>
				<td>Street:</td>
				<td><input type ="text" name= "Street" class="textInput" pattern="[A-Za-z ]{1,20}" required title= "Only characters"></td>
			</tr>
			<tr>
				<td>Street Number:</td>
				<td><input type ="text" name= "StreetNumber" class="textInput" pattern="[A-Z0-9]{1,10}" required title= "Only A-Z and 0-9"></td>
			</tr>
			<tr>
				<td>Postal Code:</td>
				<td><input type ="int" name= "PostalCode" class="textInput" pattern="[0-9]{1,5}" required title= "Only digits"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type ="text" name= "City" class="textInput" pattern="[A-Za-z]{1,20}" required title= "Only characters"></td>
			</tr>	
		    <tr>
				<td></td>
				<td><font color="red">* optional field</font></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
