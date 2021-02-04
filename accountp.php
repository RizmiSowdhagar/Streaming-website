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
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> 
             <span style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66" class="navbar-text">PopcornFlix</span></a>

             <ul class="navbar-nav">

               <li class="nav-item"> <a style="color: white;" href="homepage.php" class="nav-link">Home</a> </li>

               <li class="nav-item"> <a style="color: white;" href="logout.php" class="nav-link">Logout</a> </li>
             </ul>


         </nav>

      </header>

      <div class="container">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

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
              <form class='' action='updatep.php' method='post'>
                <input style='box-shadow: none;padding-top: 2px;padding-bottom: 2px; font-size: 20px' type='password' class='form-control' placeholder='Enter old password' name='oldp'><br>
                <input style='box-shadow: none;padding-top: 2px;padding-bottom: 2px; font-size: 20px' type='password' class='form-control' placeholder='Enter new password' name='newp'><br>
                <button style='padding: 10px;color: black;font-size: 20px; font-family:Bookman Old Style;padding-left: 5%; padding-right: 5%;margin-bottom:5%;' type='submit' class='btn btn-success ' name='subpass' value='submit'>Update Password</button><br>


              </form>


              ";
         ?>




      </div>

    </body>

  </html>
