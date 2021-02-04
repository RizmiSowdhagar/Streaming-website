<?php
include 'dbh.php';
if(isset($_POST['submit'])){
    $text =  strtolower($_POST['valueToSearch']);
    $person = $_SESSION['id'];

    $found = "SELECT * FROM movies WHERE name LIKE '$text%'";
    $display = mysqli_query($conn,$found);

  start:
  $i=0;
    
    while($final = mysqli_fetch_assoc($display)){
        

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
            <th>Movie</th>

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
      echo "</body>";
      echo "</html>";
  }
  
}
 ?>
