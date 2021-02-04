<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM hidden WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
      echo "<style>
      body{
      	background-color:black;
      }
      </style>";
    echo"</head>";
    echo"<body>";

        echo"<div style='background-color:black' class='jumbotron-fluid'>";
        echo"<div class='container'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<br>";
            echo"<a href='homepage.php' style='font-size: 20px;color:black;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;background-color:orange;'>Back to Home </a>";
          echo "<br><br><h5 style='display: inline;font-family: Century Schoolbook;color: white;'><br>Name : </h5><h1 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucwords($result['name'])."</h1>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Genre : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucwords($result['genre'])."</h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Release year : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".$result['rdate']."</h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Runtime : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".$result['runtime']." mins </h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Language : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".$result['lang']."  </h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Description : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucfirst($result['description'])."</h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Cast : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucfirst($result['cast'])." </h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Director : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucfirst($result['director'])."  </h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Rating : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucfirst($result['rating'])."</h4>";
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Awards : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".ucfirst($result['awards'])." </h4>";
          
          echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;' >Views : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;'>".$result['viewers']."</h4>";

          echo"<br><br><br>";
          echo"<div class='embed-responsive embed-responsive-16by9'>";
          echo"<iframe class='embed-responsive-item' src='video-uploads/".$result['videopath']."' poster='uploads/".$result['imgpath']."' frameborder='0' allowfullscreen >
          </iframe>";
          echo"</video>";
          echo"</div>";

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
