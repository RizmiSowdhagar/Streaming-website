<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>PopcornFlix-Registration</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

   <style type="text/css">
     body{
      background-color: black;
     }
     
   </style>
 </head>
 <body>
   <header>
     <div style="background-image:url(images/popcorn.jpg);
  height: 150vh;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;" class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="login.php" class="navbar-brand">
           <span style="font-size: 30px;font-family: Century Schoolbook;color: #ffcc66" class="navbar-text">PopcornFlix</span></a>

           <ul class="navbar-nav">
             <li class="nav-item"> <a style="color: white;" href="user-login.php" class="nav-link"> SignIn</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div style="opacity: 0.8;" class="jumbotron">
           <h1 style="font-family: Century Schoolbook;">Create an account</h1>
           <p style="font-family: Century Schoolbook;">It's free and always will be. </p> <br>

           <form class="" action="user.php" method="POST" id="signup_form">
             <div class="row">
               <div class="col">
                 <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="text" class="form-control" placeholder="First Name" id="form_fname" name="fname" value="">
                 <span class="error_form" id="fname_error_message"></span>

               </div>
               <div class="col">
                 <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="text" class="form-control" placeholder="Last Name" id="form_lname" name="lname" value="">
                 <span class="error_form" id="lname_error_message"></span>
               </div>

             </div> <br>
             <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="text" class="form-control" placeholder="Mobile Number" id="form_phn" name="phn" value="">
             <br>
             <span class="error_form" id="phn_error_message"></span>

             <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="email" class="form-control" id="form_email" placeholder="Email Address" id="form_email" name="mail" value="">
             <span class="error_form" id="email_error_message"></span>

             <br>
             <input style="box-shadow: none;padding-top: 20px;padding-bottom: 20px; font-size: 20px" type="password" class="form-control" placeholder="Password" id="form_password" name="pass" value="">
             <span class="error_form" id="password_error_message"></span>

             <div class="form-group col-md-8" >
               <label style="font-size: 20px;" for="dob"> <br> Birthday </label>
               <div class="row">
                 <div class="col">
                   <select style="box-shadow: none;font-size:19px;" class="form-control" name='date'>


                     <option selected>Date</option>
                     <option value='1'>1</option>
                     <option value='2'>2</option>
                     <option value='3'>3</option>
                     <option value='4'>4</option>
                     <option value='5'>5</option>
                     <option value='6'>6</option>
                     <option value='7'>7</option>
                     <option value='8'>8</option>
                     <option value='9'>9</option>
                     <option value='10'>10</option>
                     <option value='11'>11</option>
                     <option value='12'>12</option>
                     <option value='13'>13</option>
                     <option value='14'>14</option>
                     <option value='15'>15</option>
                     <option value='16'>16</option>
                     <option value='17'>17</option>
                     <option value='18'>18</option>
                     <option value='19'>19</option>
                     <option value='20'>20</option>
                     <option value='21'>21</option>
                     <option value='22'>22</option>
                     <option value='23'>23</option>
                     <option value='24'>24</option>
                     <option value='25'>25</option>
                     <option value='26'>26</option>
                     <option value='27'>27</option>
                     <option value='28'>28</option>
                     <option value='29'>29</option>
                     <option value='30'>30</option>
                     <option value='31'>31</option>

                 </select>
               </div>
                 <div class="col">
                     <select style="box-shadow: none;font-size:19px;" class="form-control" name='month'>
                       <option selected>Month</option>


                       <option value='01'>Jan</option>
                       <option value='02'>Feb</option>
                       <option value='03'>Mar</option>
                       <option value='04'>Apr</option>
                       <option value='05'>May</option>
                       <option value='06'>Jun</option>
                       <option value='07'>Jul</option>
                       <option value='08'>Aug</option>
                       <option value='09'>Sep</option>
                       <option value='10'>Oct</option>
                       <option value='11'>Nov</option>
                       <option value='12'>Dec</option>

                     </select>
                 </div>
                 <div class="col">
                   <select style="box-shadow: none;font-size:19px;" class="form-control" name='year'>
                     <option selected>Year</option>
                     <option value='1980'>1980</option>
                     <option value='1981'>1981</option>
                     <option value='1982'>1982</option>
                     <option value='1983'>1983</option>
                     <option value='1984'>1984</option>
                     <option value='1985'>1985</option>
                     <option value='1986'>1986</option>
                     <option value='1987'>1987</option>
                     <option value='1988'>1988</option>
                     <option value='1989'>1989</option>
                     <option value='1990'>1990</option>
                     <option value='1991'>1991</option>
                     <option value='1992'>1992</option>
                     <option value='1993'>1993</option>
                     <option value='1994'>1994</option>
                     <option value='1995'>1995</option>
                     <option value='1996'>1996</option>
                     <option value='1997'>1997</option>
                     <option value='1998'>1998</option>
                     <option value='1999'>1999</option>
                     <option value='2000'>2000</option>
                     <option value='2001'>2001</option>
                     <option value='2002'>2002</option>
                     <option value='2003'>2003</option>
                     <option value='2004'>2004</option>
                     <option value='2005'>2005</option>
                     <option value='2006'>2006</option>
                     <option value='2007'>2007</option>
                     <option value='2008'>2008</option>
                     <option value='2009'>2009</option>
                     <option value='2010'>2010</option>
                     <option value='2011'>2011</option>
                     <option value='2012'>2012</option>


                     </select>
                 </div>

                   </div>

                 </div>
                 <div class="signupbutton">
                   <br><br>
                   <button style="padding: 15px;color: black;font-size: 25px; font-family:Bookman Old Style;padding-left: 45%; padding-right: 45%; " type="submit" class="btn btn-success btn-lg" name="signup" value="submit">Sign Up</button>

                 </div>

             </div>
             <script type="text/javascript">
      $(function() {

         
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#fname_error_message").hide();
         $("#lname_error_message").hide();
         $("#phn_error_message").hide();

         var error_email = false;
         var error_password = false;
         var error_phn = false;
         var error_fname = false;
         var error_lname = false;
         
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_fname").focusout(function() {
            check_fname();
         });
         $("#form_lname").focusout(function() {
            check_lname();
         });
         $("#form_phn").focusout(function() {
            check_phn();
         });

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

          function check_fname() {
            var fname_length = $("#form_fname").val().length;
            if (fname_length < 4) {
               $("#fname_error_message").html("Invalid First Name");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            } else {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            }
         }

         function check_lname() {
            var lname_length = $("#form_lname").val().length;
            if (lname_length < 4) {
               $("#lname_error_message").html("Invalid Last Name");
               $("#lname_error_message").show();
               $("#form_lname").css("border-bottom","2px solid #F90A0A");
               error_lname = true;
            } else {
               $("#lname_error_message").hide();
               $("#form_lname").css("border-bottom","2px solid #34F458");
            }
         }
         
         function check_phn() {
            var phn_length = $("#form_phn").val().length;
            if (phn_length < 10) {
               $("#phn_error_message").html("Invalid Phone Number");
               $("#phn_error_message").show();
               $("#form_phn").css("border-bottom","2px solid #F90A0A");
               error_phn = true;
            } 
            else 
            {
               $("#phn_error_message").hide();
               $("#form_phn").css("border-bottom","2px solid #34F458");
            }
         }

         

         $("#signup_form").submit(function() {
            error_email = false;
            error_password = false;
             error_phn = false;
             error_fname = false;
             error_lname = false;

            check_email();
            check_password();
            check_fname();
            check_lname();
            check_phn();

            if (error_email === false || error_password === false || error_fname === false || error_lname === false || error_phn ===  false) {
               alert("Login Successfull");
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
