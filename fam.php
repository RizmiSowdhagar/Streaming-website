<?php
include 'dbh.php';


  $im = "SELECT * FROM series WHERE mid = 2 " ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo "<div style='display:hidden'>";
  while($result = mysqli_fetch_assoc($records)){
  	echo "<h1 class='season'>Season 1</h1>";

          echo"<br><br><br>";
          echo"
          <a class='video-link' style href='series2-uploads/".$result['v1']."' allowfullscreen>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v2']."' allowfullscreen>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v3']."' allowfullscreen>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v3']."' allowfullscreen>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v3']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series2-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";

          
  }
   echo"</div>";
    ?>