<?php
//Debugging
error_reporting(E_ALL);
ini_set('display_errors', '1');

//Include server db details
require_once('config.php');

//Assign db details to variable
$host = DB_HOST;
$user = DB_USER;
$pass = DB_PASSWORD;
$db = DB_DATABASE;

//Open a connection to the mysql server
$mysqli = new mysqli($host, $user, $pass, $db);


//Query for all cars in db
function all_cars() {
	global $mysqli;
	
	if ($result = $mysqli->query("SELECT make, model FROM models")) {
		while ($row = $result->fetch_object()) {
			//Formatted for HTML table output
			echo '<tr><td>'.$row->model.'</td><td>'. $row->make.'</td></tr>';
		}
	} else 
		echo $mysqli->error;
}

//Search for a specific make OR specific model
function search_cars($query) {
	global $mysqli;
	
	if ($result = $mysqli->query("SELECT make, model FROM models WHERE model LIKE '$query' OR make LIKE '$query'")) {
	while ($row = $result->fetch_object()) {
			//Formatted for HTML table output
			echo '<tr><td>'.$row->model.'</td><td>'. $row->make.'</td></tr>';
		}
	} else 
		echo $mysqli->error;
}






?>