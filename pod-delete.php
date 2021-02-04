<?php
	session_start();
	include'dbh.php';

	if(isset($_GET['mid'])){
		$sql = "DELETE FROM podcast WHERE mid = '".$_GET['mid']."'";

		//use for MySQLi OOP
		//if($conn->query($sql)){
		//	$_SESSION['success'] = 'Movie deleted successfully';
		//}
		////////////////

		//use for MySQLi Procedural
		 if(mysqli_query($conn, $sql))
		 {
		 	$_SESSION['success'] = 'Podcast deleted successfully';
		}
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong';
		}
	}
	else{
		$_SESSION['error'] = 'Select Podcast to delete first';
	}

	header('location: pod-details.php');
?>