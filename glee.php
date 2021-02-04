<?php
include 'dbh.php';


  $im = "SELECT * FROM series WHERE mid = 1 " ;
  $records = mysqli_query($conn,$im);

  start:

  echo "<div>";
  while($result = mysqli_fetch_assoc($records)){
  	echo "<h1 class='season'>Season 1</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";

          echo "<h1 class='season'>Season 2</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";
          echo "<h1 class='season'>Season 3</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";
          echo "<h1 class='season'>Season 4</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";
          echo "<h1 class='season'>Season 5</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";
          echo "<h1 class='season'>Season 6</h1>";

          echo"<br><br><br>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 1
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 2
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 3
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 4
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 5
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 6
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v3']."'>
    Episode 7
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v4']."'>
    Episode 8
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v1']."'>
    Episode 9
          </a>";
          echo"<a class='video-link' href='series-uploads/".$result['v2']."'>
    Episode 10
          </a>";
          echo "<br><br><br><br>";
  }
   echo"</div>";
    ?>