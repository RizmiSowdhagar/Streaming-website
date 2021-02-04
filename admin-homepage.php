<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PopcornFlix-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <style type="text/css">
    body{
      background-color: #e6e6e6;
      color: black;
    }
    a{
      text-align: center;
      text-decoration: none;
      color: black;
    }
    a:hover{
      color: black;
      text-decoration: none;
    }
    .manage:hover{
      border-bottom: orange;
      color: black;
    }
    li.nav-item,a.nav-link{
      position: absolute;
      top: 5px;
      display: inline;
      margin-left: 15%;
    }
  </style>
</head>
  <body>
    <header>

        <nav style="height: 90px; width: 100%;overflow: hidden;padding: 0;margin: 0;" class="navbar navbar-expand-md navbar-dark bg-dark ">
            <h1 style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66;overflow: hidden;position: relative;position: absolute;top: 10;" class="navbar-text">PopcornFlix</h1></a>

            <ul class="navbar-nav">

              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li style='color: white;margin-left: 13% ' class='nav-item'> <a   href='admin-account.php' style='color: white;' class='nav-link'>Account</a> </li>

              

                  <li style='color: white;margin-left: 25% ' class='nav-item'> <a   href='logout.php' style='color: white;' class='nav-link'>Logout</a> </li>

                  

                  </ul>
                  </nav>
                  <div style='background-image: url(images/popcorn.jpg);
  background-color: white;
  height: 50vh;
  border: none;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  text-align: center;' class='container-fluid'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM admin WHERE id = '$id' ";
                  
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  

              echo"<h1 style='color:white;position:sticky;'>WELCOME </h1><b style = 'color: white;font-size: 25px'><i> ".ucwords($rel['name'])." </i></b>
                  </div>
                  </header>";
                  ?>
                  <section>
                  <h2 style='color:black;font-family: Century Schoolbook; margin-top: 45px;margin-left: 45px;'>Admin Dashboard</h2>
                  <div style="color: orange;border: 1px solid orange; margin: 30px;margin-right: 75%;margin-bottom: 50px;" ></div>
                  <div style="position: relative;bottom: 10%;" class="main">
                    <div style="border: 1px solid black; width: 10%;padding: 120px;margin-left: 5%;margin-top: 10px;position: relative;display: inline;position: absolute;" class="panel">
                      <a style="display: inline;position: absolute;left: 70px;top: 30px;font-family: Century Schoolbook;font-size: 30px;" href="#">Movies</a>
                      
                      <a class="manage" style="display: inline;position: absolute;left: 50px;bottom: 30px;font-family: Century Schoolbook;font-size: 20px; " href="movie-details.php"> Manage Movies</a>
                      
                    </div>
                    <div style="border: 1px solid black; width: 10%;padding: 120px;margin-left: 29%;margin-top: 10px;position: relative;display: inline;position: absolute;" class="panel">
                      <a style="display: inline;position: absolute;left: 75px;top: 30px;font-family: Century Schoolbook;font-size: 30px;" href="#">Series</a>
                      <a class="manage" style="display: inline;position: absolute;left: 50px;bottom: 30px;font-family: Century Schoolbook;font-size: 20px;" href="series-details.php"> Manage Series</a>
                      
                    </div>
                    <div style="border: 1px solid black; width: 10%;padding: 120px;margin-left: 53%;margin-top: 10px;position: relative;display: inline;position: absolute;" class="panel">
                      <a style="display: inline;position: absolute;left: 60px;top: 30px;font-family: Century Schoolbook;font-size: 30px;" href="#">Podcasts</a>
                      <a class="manage" style="display: inline;position: absolute;left: 50px;bottom: 30px;font-family: Century Schoolbook;font-size: 20px;" href="pod-details.php"> Manage Podcasts</a>
                       </div>
                      <div style="border: 1px solid black; width: 10%;padding: 120px;margin-left: 77%;position: relative;display: inline;position: absolute;margin-top: 10px;" class="panel">
                      
                   <a style="display: inline;position: absolute;left: 15px;top: 30px;font-family: Century Schoolbook;font-size: 30px;" href="#">Documenatries</a>
                   <a class="manage" style="display: inline;position: absolute;left: 10px;bottom: 30px;font-family: Century Schoolbook;font-size: 20px;" href="docu-details.php"> Manage Documentaries</a>
                      
                    </div>
                  </div>
                </section>
    
 <footer>
  <div style="font-weight: bold;margin-top: 2%;position: relative;position: absolute;margin-top: 22%;margin-left: 40%" class="footer-copyright text-center py-3">Copyrights © 2020,All Rights Reserved
    </div>
  </footer>
  </body>
</html>
