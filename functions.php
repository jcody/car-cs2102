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
	
	if ($result = $mysqli->query("SELECT make, model, engine, type FROM models")) {
	
		//Formatted for HTML table output
		//NOT an elegant piece of code, but hack to render the dynamic table properly
		//otherwise <tr> and <td> elements won't render in search_query
		echo '<table class="table table-striped table-bordered">
				  <thead>
				    <tr>
				      <th>Model</th>
				      <th>Manufacturer</th>
				      <th>Engine</th>
				      <th>Type</th>
				    </tr>
				  </thead>
				  <tbody id="results" class="update">';
		while ($row = $result->fetch_object()) {
			//Output a table entry for every row in db
			echo '<tr><td>'.$row->model.'</td><td>'. $row->make.'</td><td>'.$row->engine.'</td><td>'.$row->type.'</td></tr>';
		}
		//Finish table structure
		echo '</tbody>';
		echo '</table>';
	} else 
		//If no connection to db
		echo $mysqli->error;
}

//Search for a specific make OR specific model
function search_cars($query) {
	global $mysqli;
	
	if ($result = $mysqli->query("SELECT make, model, engine, type FROM models WHERE model LIKE '$query' OR make LIKE '$query'")) {
	while ($row = $result->fetch_object()) {
			//Formatted for HTML table output
			echo '<tr><td>'.$row->model.'</td><td>'. $row->make.'</td><td>'.$row->engine.'</td><td>'.$row->type.'</td></tr>';
		}
	} else 
		echo $mysqli->error;
}






?>