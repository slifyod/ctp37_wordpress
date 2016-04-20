<?php

$host = 'hostingmysql290.amen.fr';
$dbName = 'ctp37_test';
$username = 'ctp37@81.88.51.229';
$password = 'Poire2erioP';
try
{
	$bdd = new PDO( "mysql:host=$host; dbname=$dbName;charset=utf8", $username, $password );
}
catch ( Exception $e )
{
	die( 'Erqsdreur : ' . $e->getMessage() );
}
return $bdd;
?>