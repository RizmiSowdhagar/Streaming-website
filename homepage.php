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
      background-color: black;
    }
  </style>
</head>
  <body>
    <header>

        <nav style="overflow: hidden;" class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> 
            <span style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66" class="navbar-text">PopcornFlix</span></a>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='account.php' style='color: white;' class='nav-link'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' style='color: white;' class='nav-link'>Logout</a> </li>
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
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT *
                  FROM movies 
                  WHERE mid in (SELECT mid from user1 where id = '$id')";
                  
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);
                  

              echo"<h1 style='color:white;position:sticky;'>WELCOME </h1><b style = 'color: white;font-size: 25px'><i> ".ucwords($rel['name'])." </i></b>
                  </div>
                  </header>
                  <section>


                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;overflow:hidden;background-color:black;border-bottom:2px solid white;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:white;font-size:30px;'>Recent :
                    <input style='color: black;font-size: 25px; font-family:Bookman Old Style;width:400px;' type='submit' name='submit' class='btn btn-success' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:11px;'>
                        <option selected>Search By</option>
                        <option value='name'>Name</option>
                        <option value='genre'>Genre</option>
                        <option value='rdate'>Release year</option>
                      </select>
                      <input type='text' placeholder='Enter' style='box-shadow: none;padding-top: 10px;padding-bottom: 10px; font-size: 17px' name='textoption'>
 
                      <input type='submit' name='submit' class='btn btn-success' style='color: black;font-size: 25px; font-family:Bookman Old Style;padding-left: 4%; padding-right: 4%;margin-bottom:3px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      <div style="background-color: black;border-bottom: 2px solid white;margin-bottom: 0" class="jumbotron">
        <h2 style='margin-top:0px;padding-top:0px;color: white;'>Latest updated</h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div>
      
      <div style="background-color: black;border-bottom: 2px solid white" class="jumbotron">
        <h2 style="color: white;"> Movies</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>
      <div style="background-color: black;border-bottom: 2px solid white" class="jumbotron">
        <h2 style="color: white;"> Documentaries</h2>
          <?php
            include 'fetcher2.php';
            ?>

      </div>
      <div style="background-color: black;border-bottom: 2px solid white" class="jumbotron">
        <h2 style="color: white;">TV Shows</h2>
          

      </div>
      <div style="background-color: black;border-bottom: 2px solid white" class="jumbotron">
        <h2 style="color: white;">Podcasts</h2>
          

      </div>

  </section>
  <footer class="page-footer font-small blue">

  <div style="font-weight: bold;margin-top: 2%;" class="footer-copyright text-center py-3">Copyrights © 2020,All Rights Reserved
    </div>

  </footer>
  </body>
</html>
