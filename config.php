<?php
$databaseHost = 'delphi.dsh.gg:3306';//or localhost
$databaseName = 'tfydeinw_login'; // your db_name
$databaseUsername = 'log'; // root by default for localhost 
$databasePassword = 'Mirzocker';  // by defualt empty for localhost
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>