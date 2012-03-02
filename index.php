<?php
//$_ENV['external-db.s109497.gridserver.com'];

require_once('config.php');

$host = DB_HOST;
$user = DB_USER;
$pass = DB_PASSWORD;
$db = DB_DATABASE;

//Open a connection to the mysql server
$link = mysql_connect($host, $user, $pass);
if(!$link) {
	print('Failed to establish connection to mysql server!');
	exit();
}

//Select the database
$status = mysql_select_db($db);

//Run query
$query = "SELECT * FROM testing";
$result = mysql_query($query);
if(!$result) {
	print("Query Error: ".mysql_error());
}
$numrows = mysql_num_rows($result);
print("Number of rows returned: $numrows \n");

$person = mysql_fetch_assoc($result);

//Print results of our db query
print($person['first_name']);
print($person['last_name']);
print($person['phone']);

?>