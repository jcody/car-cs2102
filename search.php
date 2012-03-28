<?php


//If valid search query, then process results
if(isset($_POST['search_query'])) {
	//Debugging
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	//Include server db details
	require_once('config.php');
	
	//Open a connection to the mysql server
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	
	
	//Inputted search term from submitted search boxes
	$search_query = $_POST['search_query'];
	
	
	//Search for a specific make OR specific model
	if ($result = $mysqli->query("SELECT make, model, engine, type FROM models WHERE model LIKE '%$search_query%' OR make LIKE '%$search_query%'")) {
		$count = 0;
		$arr = array();
		while ($row = $result->fetch_assoc()) {
			$count++;
			
			//Formatted for HTML table output
			$arr(count) = $row['model'] . $row['make'] . $row['engine'] . $row['type'];
		}
		echo json_encode($arr());

	} else 
		echo $mysqli->error;
}




?>