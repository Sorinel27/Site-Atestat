<?php
  session_start();
  require 'conectare.php';
?>
<!DOCTYPE html>
<html lang="ro">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<title>CONTACT</title>
	<script src="librariep5.js"></script>
    <script src="p5.sound.js"></script>
    <script src="particles.js"></script>
    <script src="core.js"></script>
</head>
<body>
	<div id="upbox">
      <div id="inupbox" class="inupbox1">
        PRODUSE
      </div>
      <div id="inupbox" class="inupbox2">
        PROMOTII
      </div>
      <div id="inupbox" class="inupbox3">
        COMPONENTE
      </div>
      <a href="asistenta.php">
        <div id="inupbox" class="inupbox4">
          ASISTENTA
        </div>
      </a>
      <a href="contact.php">
        <div id="inupbox" class="inupbox5">
          CONTACT
        </div>
      </a>
    </div>
<div id="downcredits">
      <div id = "cc1">
        Copyright © 2020 BestPCs Corporation
      </div>
    </div>
<a href="autentificare.php" id="loginbox">Contul meu</a>
    <a href="index.php" id="maindirectory">
      <img src="sorinelLogos/pclogo.png" width="110" height="94">  
    </a>
    <a href="https://www.facebook.com/sorin.fratean/" id="faceblogo">
      <img src="sorinelLogos/fblogo.png" width="35" height="35">
    </a>
    <a href="https://www.instagram.com/sorinel_fr/" id="instagramlogo">
      <img src="sorinelLogos/instalogo.png" width="35" height="35">
    </a>
    <a href="https://github.com/Sorinel27" id="githublogo">
      <img src="sorinelLogos/github.jpg" width="35" height="35">
    </a>
</body>
</html>