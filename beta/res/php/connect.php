<?php

/**
 *	Returns false if there was a problem connecting to the database
 *  Returns true if the database was successfully connected to
 */

$server = 'localhost';
$username = 'rlj';
$password = 'rlj';
$database = 'website_forum';

try {
	$con = mysql_connect($server, $username, $password);
	$db = mysql_select_db($database, $con);
	if (!$con || !$db) { return false; }
	return true;
} catch (Exception $e) {
	return false;
}

?>