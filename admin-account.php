<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>PopcornFlix-Account</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <style type="text/css">
    body{
      background-color: #e6e6e6;
      color: black;
    }
      li.nav-item,a.nav-link{
      position: absolute;
      top: 5px;
      display: inline;
      margin-left: 15%;
    }
   </style>
 </head>
   <body>
     <header>
        <nav style="height: 90px; width: 100%;overflow: hidden;padding: 0;margin: 0;" class="navbar navbar-expand-md navbar-dark bg-dark ">
            <h1 style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66;overflow: hidden;position: relative;position: absolute;top: 10;" class="navbar-text">PopcornFlix</h1></a>

            <ul class="navbar-nav">

               <li class="nav-item"> <a style='color: white;margin-left: 13% ' href="admin-homepage.php" style="color: white;" class="nav-link">Home</a> </li>

               <li style='color: white;margin-left: 25% ' class="nav-item"> <a href="logout.php" style="color: white;" class="nav-link">Logout</a> </li>
             </ul>


         </nav>

      </header>

      <div class="container">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM admin WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='admin-update.php' method='POST'>

          <br><br><input style='box-shadow: none;padding-top: 10px;padding-bottom: 10px; font-size: 20px' type='text' class='form-control' placeholder='Enter full name' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input style='box-shadow: none;padding-top: 10px;padding-bottom: 10px; font-size: 20px' type='text' class='form-control' placeholder='Enter mobile number' name='phn' value='".$result['phone']."'>
          <br>
          <label style='font-size:20px;'><b>Date of Birth : </b></label>
          <input style='box-shadow: none;padding-top: 2px;padding-bottom: 2px; font-size: 20px' type='text' class='from-control' placeholder='Enter Date of Birth' name='dob' value='".$result['DOB']."'><br>

              <div class='signupbutton'>
                <br><br>
                <button style='padding: 10px;color: black;font-size: 20px; font-family:Bookman Old Style;padding-left: 5%; padding-right: 5%;' type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>

              </div>
              </form>


              <br><br>
              <label style='font-size:20px;'><b>Email Id : </b>".$result['email']."</label>
              <br><br>
              <a href='admin-accountp.php' style='font-size:20px;'>Change Password</a>



              ";
         ?>




      </div>

    </body>

  </html>
