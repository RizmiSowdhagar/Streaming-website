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
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">


  <style type="text/css">
    body{
      background-color: #e6e6e6;
    }
    
    tr,th,td{
      font-style: normal;
      font-weight: normal;
      font-family: Arial;
    }

    header{
      overflow: hidden;
      overflow: auto;
    }
    li.nav-item,a.nav-link{
      position: absolute;
      top: 5px;
      display: inline;
      margin-left: 15%;
    }
    .height10{
      height:10px;
    }
    .mtop10{
      margin-top:10px;
    }
    .modal-label{
      position:relative;
      top:7px
    }
    
  </style>
</head>
  <body>
    <header>

        <nav style="height: 90px; width: 100%;overflow: hidden;padding: 0;margin: 0;" class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> 
            <h1 style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66;overflow: hidden;position: relative;position: absolute;top: 0;" class="navbar-text">PopcornFlix</h1></a>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='admin-homepage.php' style='color: white;' class='nav-link'>Home</a> </li>

              <li style='margin-left:25%' class='nav-item'> <a href='account.php' style='color: white;' class='nav-link'>Account</a> </li>

                  <li class='nav-item' style='margin-left:38%'> <a href='logout.php' style='color: white;' class='nav-link'>Logout</a> </li>

                  

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
                  <h2 style='color:black;font-family: Century Schoolbook; margin-top: 45px;margin-left: 45px;'>Manage Movies</h2>
                  <div style="color: orange;border: 1px solid orange; margin: 30px;margin-right: 75%;margin-bottom: 50px;" ></div>
                  <div style="position: relative;bottom: 10%;" class="main">
                    

                    <form action="docu-search.php" method="POST">
            <input style="padding: 5px;" type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input style="position: relative;position: absolute;left: 0;padding: 10px;background-color: darkcyan;width: 100px;"type="submit" name="submit" value="Search"><br><br>

        
           </form>
           <?php echo "<style>
           table{
            position:relative;
            left:0;}
            </table>
            </style>";
             include 'docu-search2.php'; ?>
                  </div>
  </body>
</html>
