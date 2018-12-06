<?php
include ('config.inc.php');
$con=mysqli_connect ($host, $user, $pass) or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,$db);
?>