<?php
	session_start();
	include('dbh.php');

	if(isset($_POST['add'])){
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
		$video = $_POST['video'];
		$sql = "INSERT INTO podcast (name, genre, rdate, runtime, lang, description, cast, director, rating, imgpath, v1,v2,v3) VALUES ('$name', '$genre', '$rdate','$runtime','$lang','$description','$cast','$director','$rating','$imgpath ','$video','$video','$video')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Episode added successfully';
			
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: pod-details.php');
?>