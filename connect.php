<?php
  session_start();
  include 'dbh.php';

    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['date'];
    $contact = $_POST['contact'];
    $fathername = $_POST['fathername'];
    $fathercontact = $_POST['fathercontact'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $house = $_POST['house'];
    $Proof =  $_POST['Proof'];



    $sql = "INSERT INTO form (firstname, lastname, email, gender, dob, contact, fathername, fathercontact, state, city, house, proof)
    values('$firstname', '$lastname','$email','$gender','$dob','$contact','$fathername', '$fathercontact' '$state' '$city' '$house', '$Proof')";

    $result = $conn->query($sql);
if($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        header("Location: welcome.php");
      }
      
?>
