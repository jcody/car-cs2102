<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_LOGIN']) || (trim($_SESSION['SESS_LOGIN']) == '')) {
		header("location: access-denied.php");
		exit();
	}
?>