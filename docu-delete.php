<?php
	session_start();
	include_once'dbh.php';

	if(isset($_GET['mid'])){
		$sql = "DELETE FROM documentaries WHERE mid = '".$_GET['mid']."'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Documentary deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting documentary';
		}
	}
	else{
		$_SESSION['error'] = 'Select documentarytodeletefirst';
	}

	header('location: docu-details.php');
?>