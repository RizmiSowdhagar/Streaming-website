<?php
  session_start();
  include 'dbh.php';




    $username =  $_POST['mail'];
    $password =  $_POST['pass'];



    $sql = "SELECT * FROM admin WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($username == 'rizminsowdhagar@gmail.com' && $password == '1234') {
      $_SESSION['id'] = $row['id'];
      echo "<script>
      alert('Admin Logged In Successfully')
      </script>";
        header("Location: admin-homepage.php");

      
    }else {
       echo "<script>";
      echo"alert('try again')";
      echo "</script>";
      
      }

    

?>
