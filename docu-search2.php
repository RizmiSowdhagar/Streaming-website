<?php
include 'dbh.php';
if(isset($_POST['submit'])){
    $text =  strtolower($_POST['valueToSearch']);
    $person = $_SESSION['id'];

    $found = "SELECT * FROM documentaries WHERE name LIKE '$text%'";
    $display = mysqli_query($conn,$found);

  start:
  $i=0;
    
    while($final = mysqli_fetch_assoc($display)){
      echo "<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>PopcornFlix-Homepage</title>
  <link rel='stylesheet' href='homepage.css' type='text/css'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
  <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='datatable/dataTable.bootstrap.min.css'>";
  echo"<style>
  body{
     background-color: #e6e6e6;
  }
  </style>";
  echo "</head>";
  echo "<body>";
        

        echo"<div style='position: absolute;margin-top: 40px;margin-left:2px;' class='row'>";
        echo"<table id='myTable' class='table table-bordered table-striped'>";
          echo"<thead>";
            echo"<th>ID</th>
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
            <th>Documentary</th>

          </thead>";
          echo "<tbody>";
                echo 
                "<tr>";
                  echo"<th>".ucwords($final['mid'])."</th>";
                    echo"<th>".ucwords($final['name'])."</th>";
                    echo"<th>".ucwords($final['genre'])."</th>";
                    echo"<th>".ucwords($final['rdate'])."</th>";
                    echo"<th>".ucwords($final['runtime'])."</th>";
                    echo"<th>".ucwords($final['lang'])."</th>";
                    echo"<th>".ucwords($final['description'])."</th>";
                    echo"<th>".ucwords($final['cast'])."</th>";
                    echo"<th>".ucwords($final['director'])."</th>";
                    echo"<th>".ucwords($final['rating'])."</th>";
                    echo"<th>".($final['imgpath'])."</th>";
                    echo"<th>".($final['videopath'])."</th>";
                  

                  echo"<td>";
                    echo"<a href='#edit_".$final['mid']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
                    
                    echo"<a href='#delete_".$final['mid']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>";
                  echo"</td>";
                echo"</tr>";
                
        
          echo"</tbody>";
        echo"</table>";
      echo"</div>";
      include('docu-add_modal.php') ;

echo"<script src='jquery/jquery.min.js'></script>
<script src='bootstrap/js/bootstrap.min.js'></script>
<script src='datatable/jquery.dataTables.min.js'></script>
<script src='datatable/dataTable.bootstrap.min.js'></script>
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
</script>";
      echo "</body>";
      echo "</html>";
  }
  
}
 ?>
