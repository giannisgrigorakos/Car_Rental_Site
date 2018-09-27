<?php
	include "..\..\Connectors\mysqli_connect.php";
	//mysql_set_charset('utf8');
	if(isset($_POST['show_btn'])){
		session_start();	
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$PhoneNumber= mysqli_real_escape_string($dbc,$_POST['PhoneNumber']);		

		$query = "INSERT INTO phonenumber(StoreID,PhoneNumber) VALUES ('$StoreID','$PhoneNumber')";
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
		<h1><p>Insert New Phonenumber</p></h1>
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
				<td>PhoneNumber:</td>
				<td><input type ="int" name= "PhoneNumber" class="textInput" pattern="[0-9]{10}" required title= "10 digits required" ></td>
			</tr>				
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
