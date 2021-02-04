
<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PopcornFlix-Login</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </head>
  <body style="background-color: black;">
    <header>
      <div style="background-image:url(images/popcorn.jpg);
  height: 130vh;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;" class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> 
            <span style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66" class="navbar-text">PopcornFlix</span></a>

        </nav>

        <div class="container">

          <div style="opacity: 0.8;" class="jumbotron">
            <h1 style="font-family: Century Schoolbook;">Login to your account</h1> <br>
            <form class="" action="admin-connection.php" method="POST" id="login_form"> <br><br>
              <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="email" class="form-control" id="form_email" placeholder="Usename/ Email Address" name="mail" value="">
              <span class="error_form" id="email_error_message"></span>
              <br>
              <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="password" class="form-control" id="form_password" placeholder="Password" name="pass" value="">
              <span class="error_form" id="password_error_message"></span>
              <br><br>

              <div class="loginbutton">
                <button style="padding: 15px;color: black;font-size: 25px; font-family:Bookman Old Style;padding-left: 45%; padding-right: 45%; " type="submit" class="btn btn-success btn-lg" name="login">Login</button>

              </div>
              <script type="text/javascript">
      $(function() {

         
         $("#email_error_message").hide();
         $("#password_error_message").hide();

         var error_email = false;
         var error_password = false;
         
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });


         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 4) {
               $("#password_error_message").html("Invalid Password");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#login_form").submit(function() {
            error_email = false;
            error_password = false;

            check_email();
            check_password();

            if (error_email === false && error_password === false) {
               alert('Admin Logged In Successfully')
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>
              </form>

              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

    <div style="font-weight: bold;margin-top: 2%;" class="footer-copyright text-center py-3">Copyrights © 2020,All Rights Reserved
    </div>

  </footer>
  </body>

</html>
