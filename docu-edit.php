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
		$videopath = $_POST['videopath'];

		$sql = "UPDATE documentaries SET name = '$name', genre = '$genre', rdate = '$rdate', runtime = '$runtime', lang = '$lang' , description = '$description', cast = '$cast', director = '$director', rating = '$rating',imgpath= '$imgpath', videopath = '$videopath' WHERE mid = '$mid'";
		

		

		//use for MySQLi Procedural
		 if(mysqli_query($conn, $sql)){
		 	echo "<style>
           table{
            position:relative;
            left:0;}
            </table>
            </style>";
		 	$_SESSION['success'] = 'Documentary updated successfully';
		 }
		///////////////
		
		else{
			echo "<style>
           table{
            position:relative;
            left:0;}
            </table>
            </style>";
			$_SESSION['error'] = 'Something went wrong in updating ';
		}
	}
	else{
		echo "<style>
           table{
            position:relative;
            left:0;}
            </table>
            </style>";
		$_SESSION['error'] = 'Select Documentary to edit first';
	}

	header('location: docu-details.php');

?>