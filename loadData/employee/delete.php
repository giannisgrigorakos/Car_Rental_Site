<?php
	include "..\..\Connectors\mysqli_connect.php";
	
	if(isset($_POST['show_btn'])){
		session_start();	
		$IRSNumber= mysqli_real_escape_string($dbc,$_POST['IRSNumber']);

		$query = "DELETE FROM employee WHERE IRSNumber='$IRSNumber'";

		$result = mysqli_query($dbc,$query);
		if (mysqli_affected_rows($dbc)){
    		header('Location: ./successful_delete.php');
		} 
		else {
    		header('Location: ./error_delete.php');
    	}

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>

	<body>
	<div class="header">
		<h1><p>Delete Employee</p></h1>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul>           
	</div>
	<p>Insert the IRS Number of the employee you want to delete</p>
	<form method="post" action ="delete.php">
		<table>
			<tr>
				<td>IRS Number:</td>
				<td><input type ="text" name= "IRSNumber" class="textInput" pattern="[A-Z0-9]{1,10}" required title= "Only A-Z and 0-9"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Delete Data"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
