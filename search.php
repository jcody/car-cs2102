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
	
	//Return value
	$sr = '';
	
	//Search for a specific make OR specific model
	if ($result = $mysqli->query("SELECT make, model, engine, type FROM models WHERE model LIKE '%$search_query%' OR make LIKE '%$search_query%'")) {
		//Formatted for HTML table output
		//NOT an elegant piece of code, but hack to render the dynamic table properly
		//otherwise <tr> and <td> elements won't render in search_query
		$sr .= '<table class="table table-striped table-bordered">
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
			$sr .= '<tr><td>'.$row->model.'</td><td>'.$row->make.'</td><td>'.$row->engine.'</td><td>'.$row->type.'</td></tr>';
		}
		//Finish table structure
		$sr .= '</tbody>';
		$sr .= '</table>';
	
	echo $sr;
		
	} else 
		echo $mysqli->error;
}




?>