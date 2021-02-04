<?php
	session_start();
	include'dbh.php';

	if(isset($_GET['mid'])){
		$sql = "DELETE FROM movies WHERE mid = '".$_GET['mid']."'";

		//use for MySQLi OOP
		//if($conn->query($sql)){
		//	$_SESSION['success'] = 'Movie deleted successfully';
		//}
		////////////////

		//use for MySQLi Procedural
		 if(mysqli_query($conn, $sql))
		 {
		 	$_SESSION['success'] = 'Movie deleted successfully';
		}
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting movie';
		}
	}
	else{
		$_SESSION['error'] = 'Select movie to delete first';
	}

	header('location: movie-details.php');
?>