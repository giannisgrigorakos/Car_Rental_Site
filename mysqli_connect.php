<?php
global $dbc;
$dbc= mysqli_connect( "localhost", "root", "123", "database")OR die('Cound not connect to MySQL'. mysqli_connect_error());
?>