<?php
include 'dbh.php';


  $im = "SELECT * FROM podcast WHERE mid = 1 " ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo "<div style='display:hidden'>";
  while($result = mysqli_fetch_assoc($records)){
  	echo "<h1 class='season'>Season 1</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='podcast-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='podcast-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='podcast-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          
          echo "<br><br><br><br>";

          
  }
   echo"</div>";
    ?>