<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'courier';
$db_pass		= '';
$db_database	= 'courier'; 

/* End config */



$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die('Unable to establish a DB connection');


?>
