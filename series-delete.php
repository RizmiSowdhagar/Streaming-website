<?php
	session_start();
	include'dbh.php';

	if(isset($_GET['mid'])){
		$sql = "DELETE FROM series WHERE mid = '".$_GET['mid']."'";

		//use for MySQLi OOP
		//if($conn->query($sql)){
		//	$_SESSION['success'] = 'Movie deleted successfully';
		//}
		////////////////

		//use for MySQLi Procedural
		 if(mysqli_query($conn, $sql))
		 {
		 	$_SESSION['success'] = 'Episode deleted successfully';
		}
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong ';
		}
	}
	else{
		$_SESSION['error'] = 'Select Episodee to delete first';
	}

	header('location: series-details.php');
?>