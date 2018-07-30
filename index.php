<!DOCTYPE html>
<html lang="en">
<?php 
include 'db/connection.php';
session_start();

?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>C.S E-learning</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

 <?php
 include 'sidenav.php';
 ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 style="color: #ee6e73" class="header center ">Computer Science <br>E-learning Portal</h1>
        <div class="row center">
          <h5 class="header col s12 light">Departmental E-learning Portal that provide Student with learning Materials</h5>
        </div>
        <div class="row center">
          <a href="#regDiv" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/wall.jpeg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="img/1051.png" alt="c++logo">
          <span class="card-title brown-text"><h2></h2></span>
        </div>
        <div class="card-content">
          <h5 class="center">A programming Language which was deried from C</h5>
          <p class="light">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="files/c++.html">Download</a>
        </div>
      </div>
    </div>

        <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="img/java.jpg" alt="java-logo">
          <span class="card-title brown-text">java</span>
        </div>
        <div class="card-content">
          <h5 class="center">A programming Language which was deried from C</h5>
          <p class="light">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="files/java.html">Download</a>
        </div>
      </div>
    </div>
        <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="img/python.jpg" alt="python-logo">
          <span class="card-title brown-text"></span>
        </div>
        <div class="card-content">
          <h5 class="ceter">Python Programming</h5>
          <p class="justify light">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="files/python.html">Download</a>
        </div>
      </div>
    </div>
      </div>
     
        </div>
        
    </div>
     <div class="row">
      <h4 class="header center">Video Section</h4>
      <hr>
        <div class="col s12 m6">
          <h3 class="center">Python</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HBxCHonP6Ro" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
      </div>
      <div class="col s12 m6">
        <h3 class="center">Data Structure</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/zWg7U0OEAoE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
    </iframe>
  </div>
      </div>
      <div class="row">
        <div class="col s12 m6">
          <h3 class="center">AI</h3>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/YT5KhoEh7ns" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>  

        <div class="col s12 m6">
          <h3 class="center">Internet of things</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/MgKn11XcVDE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col s12 m6">
          <h3 class="center">Big Data</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/THODdNXOjRw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
        </div>
        <div class="col s12 m6">
          <h3 class="center">Database Management</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/1057YmExS-I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        </div>

        
    

        

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div id="regDiv" class="container">
        <div class="row center">
          <a href="signup.php"><h5 class="header col s12 light"><button class="btn-large">Register on E-learning Now!</button></h5></a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/board.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div style="background: " class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem
           neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Computer Science electronic class</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <?php
  include 'footer.php';
  ?>