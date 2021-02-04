<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM podcast WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
      echo "<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous'>";
      echo "<style>
      body{
        background-color:black;
      }
      h1.season{
      color: white;
      font-size: 30px;
      position: relative;
      top: 55px;
      margin-bottom:25px;
      display: inline;
      font-family:Century Schoolbook;
    }
    .video-link {
    display: inline;
    position: relative;
    padding: 10px;
    border-radius: 10px;
    text-decoration: none;
    color: white;
    background-color: #ff9966;
    margin-right:10px;
    top: 35px;
}
a:hover{
  text-decoration:none;
  color:white;
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
            $newsql = "UPDATE podcast SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<br>";
         
          echo "<img src='uploads/".$result['imgpath']."' style='position:relative;position:absolute;width:270px;height:290px;margin-left:50%;'>";
             echo "<br><br><h1 style='display: inline;font-family: Century Schoolbook;color: white; font-size:30px;position:relative;left:180px;'>".ucwords($result['name'])."</h1>";
             echo"<br><h4 style='display: inline;font-family: Century Schoolbook;color:#cccccc;font-size:20px;position:relative;left:180px;margin-bottom:10px;'>"
             .$result['lang'].", ".$result['rdate']."</h4>";
             echo"<br><h4 style='display: inline;font-size:20px;position:relative;font-family: Century Schoolbook;color: white;left:180px;border:1px solid white; padding:5px;border-radius:5px;top:20px;padding-left:15px;padding-right:15px;'>".$result['runtime']."</h4>";
             echo"<br><h4 style='display: inline;font-family: Century Schoolbook;color:#cccccc;font-size:20px;position:relative;margin-left:19%;position:absolute;'>".ucwords($result['genre'])."</h4>";
             echo"<br><h4 style='display: inline;font-family: Century Schoolbook;color:white;font-size:20px;position:relative;left:180px;margin-bottom:10px;top:10px;'>"
             .$result['cast']."</h4>";

             echo"<br><h4 style='display: inline;font-family: Century Schoolbook;color:#cccccc;font-size:20px;position:relative;left:180px;margin-bottom:10px;top:10px;'>"
             .$result['rating']."</h4>";
             echo"<h4 style='font-family: Century Schoolbook;color: white;position:relative;top:90px;'>".ucfirst($result['description'])."</h4>";

             echo"<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;position:relative;top:70px;font-size:25px;' >Views : </h5><h4 style='display: inline;font-family: Century Schoolbook;color: white;position:relative;top:70px;'>".$result['viewers']."</h4>";


          

          echo "<br><h5 style='display: inline;font-family: Century Schoolbook;color: white;position:relative;top:90px;' >Rate your Experience : </h5>
          <div style='color:white; left:20%;position:relative;position:relative;top:60px; '>
        <i class='fa fa-star fa-2x' data-index='0'></i>
        <i class='fa fa-star fa-2x' data-index='1'></i>
        <i class='fa fa-star fa-2x' data-index='2'></i>
        <i class='fa fa-star fa-2x' data-index='3'></i>
        <i class='fa fa-star fa-2x' data-index='4'></i>
        <br><br>
    </div>

    <script src='http://code.jquery.com/jquery-3.4.0.min.js' integrity='sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=' crossorigin='anonymous'></script>
    <script>
        var ratedIndex = 0, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'yellow');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>";
    echo "<div class=season-body>";
       include 'dc.php';

    echo"</div>";

        }
        echo"</div>";
        echo"</div>";


    echo"</body>";


  echo"</html>";


}
?>
