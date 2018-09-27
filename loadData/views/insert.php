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

		$query = "INSERT INTO exp_date(LicensePlate, Model,Type,Make,EXP_Date,Store) VALUES ('$LicensePlate','$Model','$Type','$Make','$EXP_Date','$Store')";
		$result = mysqli_query($dbc,$query);
		if ($result){
    		header('Location: ./successful_insert.php');
		} 
		else {
    		header('Location: ./error_insert.php');
    	}
	}
?>


<html>
	<head>
		<title>Insert Data</title>
		<link rel="stylesheet" type= text/css href="style.css">
	</head>
	<body>
	<div class="header">
		<h1><p>Insert new view</p></h1>
	</div>
		<div id=home>
		<ul>
                    <li><a href="/vaseis/project/index.html"/><img src="../../img/icon.jpg"></a>
                    </li>
        </ul> 
       </div>
	<p>Complete the required fields:</p>

	<form method="post" action ="insert.php">
		<table>
			<tr>
				<td>License Plate:</td>
				<td><input type ="text" name= "LicensePlate" class="textInput" pattern="[A-Za-zΑ-Ωα-ω0-9- ]{1,8}" required></td>
			</tr>
			<tr>
				<td>Model:</td>
				<td><input type ="text" name= "Model" class="textInput" pattern="[A-Za-zΑ-Ωα-ω0-9 ]{1,20}" required title= "Μονό χαρακτήρες"></td>
			</tr>
			<tr>
				<td>Type:</td>
				<td><input type ="text" name= "Type" class="textInput" pattern="[A-Za-zΑ-Ωα-ω ]{1,20}" required ></td>
			</tr>
			<tr>
				<td>Make:</td>
				<td><input type ="text" name= "Make" class="textInput" pattern="[A-Za-zΑ-Ωα-ω ]{1,20}" required ></td>
			</tr>
			<tr>
				<td>Expiration Date:</td>
				<td><input type ="date" name= "EXP_Date" class="textInput" required ></td>
			</tr>
			<tr>
				<td>Store ID:</td>
				<td><input type ="int" name= "Store" class="textInput" pattern="[0-9]{1,5}" required ></td>
			</tr>
				<td></td>
				<td><input type ="submit" name= "show_btn" value="Insert Data" pattern="[A-Za-z]{20}"></td>
			</tr>	
		</table>
	</form>		
</body>
</html>
