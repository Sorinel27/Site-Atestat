<?php
  session_start();
  require 'conectare.php';
?>
<!DOCTYPE html>
<html lang="ro">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <title>Best PCs! Largest IT Retailer Online </title>
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
      <div id="inupbox" class="inupbox4">
        ASISTENTA
      </div>
      <div id="inupbox" class="inupbox5">
        CONTACT
      </div>
    </div>
  	<div id="authbox">
  		<div class="authbigwhitebox" id="authboxopa">
  			Autentificare
  		</div>
      <div id="contnou"><br>
        <div class="new">
          Cont nou
        </div>
          <form action="signup.bpcs.php" method="POST">
            <br>
            <input class="inputexistent" type="text" name="nume" placeholder="Nume"><br><br>
            <input class="inputexistent" type="text" name="prenume" placeholder="Prenume"><br><br>
            <input class="inputexistent" type="text" name="username" placeholder="Username"><br><br>
            <input class="inputexistent" type="password" name="parola" placeholder="Parola"><br><br>
            <input class="inputexistent" type="text" name="email" placeholder="Email"><br><br>
            <input class="inputexistent" type="text" name="telefon" placeholder="Telefon"><br><br>
            <input class="inputexistent" id="cursorsubmit" type="submit" name="creeazacont" value="Creeaza cont"><br><br>
          </form>
          <?php
              if(isset($_GET['info']) && $_GET['info'] == 'ok')
              {
                echo '<p id="info" style="color: green;";>Contul a fost creat cu succes.</p>';
              }
              else if(isset($_GET['info']) && $_GET['info'] == 'error')
              {
                echo '<p id="info" style="color: red;">Contul nu a fost creat cu succes.</p>';
              }
              else if(isset($_GET['info']) && $_GET['info'] == 'userExista')
              {
                echo '<p id="info" style="color: red;">Acest username exista deja.</p>';
              }
              else if(isset($_GET['info']) && $_GET['info'] == 'eroaremail')
              {
                echo '<p id="info" style="color: red;">Acest email este folosit deja.</p>';
              }
          ?>
          <br><br><br><br><br> 
        <div class="old">
          Cont existent
        </div>
        <br>
          <form action="login.bpcs.php" method="POST">
            <input class="inputexistent" type="text" name="username" placeholder="Username"><br><br><br>
            <input class="inputexistent" type="password" name="password" placeholder="Parola"><br><br><br>
            <input class="inputexistent" id="cursorsubmit" type="submit" name="login" value="Intra in cont">
          </form>
          <br><br>
          <?php
                if(isset($_GET['info']) && $_GET['info'] == 'passwrong')
              {
                echo '<p id="info" style="color: red;">Numele contului sau parola introduse sunt gresite.</p>';
              }

          ?>     
      </div>
  	</div>
    <div id="downcredits">
      <div id = "cc1">
        Copyright © 2020 BestPCs Corporation
      </div>
    </div>
    <div class='console-container'><span id='text'>
    </span><div class='console-underscore' id='console'>&#95;</div></div>
    <script src="supertext.js"></script>
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