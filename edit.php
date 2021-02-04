<?php
	session_start();
	include('dbh.php');

	if(isset($_POST['edit'])){
		$mid = $_POST['mid'];
		$name = $_POST['name'];
		$genre = $_POST['genre'];
		$rdate = $_POST['rdate'];
		$runtime = $_POST['runtime'];
		$lang = $_POST['lang'];
		$description = $_POST['description'];
		$cast = $_POST['cast'];
		$director = $_POST['director'];
		$rating = $_POST['rating'];
		$imgpath = $_POST['imgpath'];
		$videopath = $_POST['videopath']

		$sql = "UPDATE movies SET name = '$name', genre = '$genre', rdate = '$rdate', runtime = '$runtime', lang = '$lang' , description = '$description', cast = '$cast', director = '$director', rating = '$rating',imgpath= '$imgpath', videopath = '$videopath' WHERE mid = '$mid'";
		

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Movie updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		 //if(mysqli_query($conn, $sql)){
		 //	$_SESSION['success'] = 'Member updated successfully';
		 //}
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select movie to edit first';
	}

	header('location: movie-details.php');

?>