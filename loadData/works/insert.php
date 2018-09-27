<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$IRSNumber= mysqli_real_escape_string($dbc,$_POST['IRSNumber']);
		$StoreID= mysqli_real_escape_string($dbc,$_POST['StoreID']);
		$StartDate= mysqli_real_escape_string($dbc,$_POST['StartDate']);
		$FinishDate= mysqli_real_escape_string($dbc,$_POST['FinishDate']);
		$Position= mysqli_real_escape_string($dbc,$_POST['Position']);

		$query = "INSERT INTO works(IRSNumber, StoreID,  StartDate, FinishDate, Position) VALUES ('$IRSNumber','$StoreID','$StartDate','$FinishDate','$Position')";
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
		<title> Insert Data </title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	
	<div class="header">
		<h1><p>Insert New Work Relation</p></h1>
	</div>
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
				<td> IRSNumber:</td>
				<td><input type ="int" name= "IRSNumber" class="textInput" pattern="[A-Z0-9]{1,10}" required title="Only digits"></td>
			</tr>
			<tr>
				<td>StoreID:</td>
				<td><input type ="text" name= "StoreID" class="textInput" pattern="[A-Za-z0-9]{1,20}" required></td>
			</tr>
			<tr>
				<td>Start Date:</td>
				<td><input type ="text" name= "StartDate"  required></td>
			</tr>
			<tr>
				<td>Finish Date:</td>
				<td><input type ="text" name= "FinishDate"  required><font color="red">* </font></td>
			</tr>
			<tr>
				<td>Position:</td>
				<td><input type ="text" name= "Position" class="textInput" pattern="[0-9]{4}" required></td>
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
