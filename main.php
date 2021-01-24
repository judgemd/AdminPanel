<html>
   <!--Head Part-->
   
   <?php
    session_start();
    include("theme/main/mainphphead.php");
   ?>
   <!--Head Part-->
   
   <!--Header-->
   <?php include("theme/main/header.php")?>
   <!--Header
assets/logo.png
-->
   <section id = 'home'>
    <img src="<?php if($_SESSION["darkmode"] == "true") {
       echo "assets/logo.png";
    } else {
          echo "assets/logo2.png";
       }
    ?>" alt="DevMDeniz Logo"/>
    <div class="name">
    <h2 class = "linkwhite">Mehmet Deniz Kumcu</h2>
      <p class = "linkwhite">Full Stack Developer | Founder of F-Tech Studios</p>
      </div>
   <a href="#projects">My Projects</a>
   </section>
</html>