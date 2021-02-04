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
  


  <style type="text/css">
    html{
      overflow: auto;
      margin: 0;
      padding: 0;
    }
    body{
      background-color: #e6e6e6;
    }
  
           table{
            position:relative;
            width: 100%;
          }
     th,tr{
      width: 100%;
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

                  <li class='nav-item' style='margin-left:37%'> <a href='logout.php' style='color: white;' class='nav-link'>Logout</a> </li>
                  

                  </ul>
                  </nav>
                  <div style='background-image: url(images/popcorn.jpg);
  background-color: white;
  height: 50vh;
  width:100%;
  border: none;
  background-position: center;
  background-size: cover;
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
                  <h2 style='color:black;font-family: Century Schoolbook; margin-top: 45px;margin-left: 45px;'>Manage Series</h2>
                  <div style="color: orange;border: 1px solid orange; margin: 30px;margin-right: 80%;margin-bottom: 50px;" ></div>
                  <div style="position: relative;bottom: 10%;" class="main">
<form style="position: absolute;left: 1px;" action="series-search.php" method="POST">
  <input style="padding: 5px;" type="text" id="value" name="valueToSearch" placeholder="Value To Search"><br><br>

            <input style="position: relative;position: absolute;left: 0;padding: 10px;background-color: darkcyan;width: 100px;"type="submit" name="submit" value="Search"><br><br><br><br>
                    
                    <div style="position: absolute; width: : 100%;" class="row">
    <div  class="col-sm-8 col-sm-offset-2">
      <div class="row">
      <?php
        if(isset($_SESSION['error'])){
          echo
          "
          <div class='alert alert-danger text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['error']."
          </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo
          "
          <div class='alert alert-success text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['success']."
          </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      </div>
      <div class="row">
        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus" ></span> New</a>
        
        
      </div>
      <div class="height10">
      </div>
      <div style="position: absolute;margin-top: 5px;" class="row">
        <table id="myTable" style="width: 100px;" class="table table-bordered table-striped">
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Release Year</th>
            <th>Runtime</th>
            <th>Language</th>
            <th>Description</th>
            <th>Cast</th>
            <th>Director</th>
            <th>Rating</th>
            
            <th>Poster</th>
            <th>Episodes</th>
            
            

          </thead>
          <tbody>
            <?php
              include('dbh.php');
              $sql = "SELECT * FROM series";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
                echo 
                "<tr>
                  <td>".$row['mid']."</td>
                  <td>".$row['name']."</td>
                  <td>".$row['genre']."</td>
                  <td>".$row['rdate']."</td>
                  <td>".$row['runtime']."</td>
                  <td>".$row['lang']."</td>
                  <td>".$row['description']."</td>
                  <td>".$row['cast']."</td>
                  <td>".$row['director']."</td>
                  <td>".$row['rating']."</td>
                
                  <td>".$row['imgpath']."</td>
                  <td>".$row['v1'].'<br>'.$row['v2'].'<br>'.$row['v3']."</td>";



                  echo"<form action='series-edit_delete_modal.php method='POST'>";
                  echo"<td>
                    <a href='#edit_".$row['mid']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                    <a href='#delete_".$row['mid']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                  </td>";
                  echo"</form>";
                echo"</tr>";
                include('series-edit_delete_modal.php');
              }
              

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include('series-add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
  //inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
      $('.alert').hide();
    })
});
</script>
</form>

  </body>
</html>
