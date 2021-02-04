<?php
  session_start();
  include 'dbh.php';

if(isset($_POST['subpass'])){

    $oldpass = $_POST['oldp'];
    $newpass =  $_POST['newp'];
    $rid = $_SESSION['id'];

    $psql = "UPDATE admin SET passwd = '$newpass' WHERE id='$rid' AND passwd='$oldpass'";
    $result = mysqli_query($conn,$psql);
     if($result) {
      echo "<script>";
      echo"alert('Password updated successfully')";
      echo "</script>";
       header("Location: admin-accountp.php");
    }else {
        echo "<script>";
      echo"alert('unsuccessfull')";
      echo "</script>";
       
      }
     
}
?>
