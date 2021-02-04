<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PopcornFlix</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
    	body{
        background-color: black;
      }
      h3.questions{
    font-size: 40px;
    color: white;
    margin-left: 31%;
    position:relative;
    position: absolute;
  }
  .accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 23px;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
  width: 52%;
  margin-left: 24%;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  background-color: #e6e6e6;
  max-height: 0;
  width: 52%;
  position: relative;
  margin-left: 24%;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  margin-bottom: 3%;
  font-size: 20px;
}
    </style>
  </head>
  <body>
    <header>
      <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0,0,0,0.2)),url(images/popcorn.jpg);
  height: 130vh;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;" class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand">
            <span style="font-size: 30px;color: pink;font-family: Century Schoolbook;color: #ffcc66" class="navbar-text">PopcornFlix</span></a>

            <ul class="navbar-nav">
              <li class="nav-item"> <a style="color: white; " href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item"> <a style="color: white; " href="user-login.php" class="nav-link"> SignIn</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div style="opacity: 0.7" class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime... </h1> <br>
            <a href="test.php" style="padding: 15px;color: black;font-size: 25px; font-family:Bookman Old Style " type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section style="background-color: black; border-bottom: 2px solid white;" class="features">
        <a href="#" name="A"></a>
        <h2 style="color: white;font-family: Century Schoolbook">Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p style="color: white" class="arrange"><img style="width: 40%; height: 40%;margin-left: 35%;
  margin-bottom: 10%;" src="images/new1.png"> <br> Enjoy from the web on your laptop or phone,tablet anytime.<br>
          For more you can even do screen-sharing with your friends and have unlimited fun.
              </p>
            </div><div class="col-md-4">
              <p style="color:white" class="arrange"><img style="width: 40%; height: 40%;margin-left: 35%;
  margin-bottom: 10%;" src="images/new2.png" alt=""> <br> Your free Registration includes ad-free movies,Tv-series and Podcasts along with unlimited free, fast delivery on eligible items, exclusive access to deals & more.

Get started
              </p>
            </div>
              <div class="col-md-4">

                <p style="color: white" class="arrange"><img style="width: 70%; height: 70%;margin-left: 20%;margin-bottom: 10%;" src="images/new3.png">
                   <br>   With easy to use Parental Controls and a dedicated kids page, enjoy secure, ad-free kids entertainment. Kids can enjoy popular movies and shows like Tom and Jerry, Lion King, and Angry Birds.
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <div>
    	<section style="background-color: black; border-bottom: 2px solid white;" class="features1">
            <h3 style="margin-top: 2%;border-bottom: 2px solid orange;" class="questions">Frequently Asked Questions</h3>

            <button style="margin-top: 10%;" class="accordion">What is PopcornFlix</button>
<div style="position: relative;top: 0;" class="panel">
  <p style="margin-top: 0; position: relative;">PopcornFlix is a streaming service that offers a wide variety of TV shows, movies, documentaries and more – on thousands of internet-connected devices.

You can watch as much as you want, whenever you want, without a single ad – all for one low monthly price.</p>
</div>



<button class="accordion">Where can I watch</button>
<div style="margin-bottom: 5%;" class="panel">
  <p style="margin-top: 0; position: relative;" >Watch anywhere, anytime, on an unlimited number of devices. Sign in with your PopcornFlix account to watch instantly on the web at PopcornFlix.com from your personal computer or on any internet-connected device.</p>

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</div>
</section>
    <footer class="page-footer font-small blue">

      <div style="font-weight: bold;margin-top: 2%;" class="footer-copyright text-center py-3">Copyrights © 2020,All Rights Reserved
    </div>

    </footer>
  </body>
</html>
