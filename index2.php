<?php
// pour demarrer une sessions on fait session_start();
session_start();
 ?>
 <?php
 // exo 1
  // $cookie_UserAgent = 'joy';
  // $cookie_nom_serv = 'localhost';
  // // 86400 = 1 jour
  // setcookie('pseudo', 'jojodu30', time()+(86400 * 20), "/");
  // setcookie('pays', 'france', time()+86400);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php cookie/session</title>
    <link rel="stylesheet" href="cookie2.css" media="screen">
  </head>
  <body>
    <main>

     <p>je s'appelle <?php echo $_SESSION['user_agent']; ?><br />
       et j'ai <?php echo $_SESSION['age']; ?> ans :)
       et toi tu t'appelles <?php echo $_SESSION['formulaire']['nom'];?> <?php echo $_SESSION['formulaire']['prenom'];?>
       et tu as <?php echo $_SESSION['formulaire']['age']; ?> ans :) ... <br />
       j'espère qu'il fait beau en <?php echo $_SESSION['formulaire']['pays']; ?> !
     </p>
    <a href="index.php"><button type="button" name="button" >< back</button></a>

     </main>

  </body>
</html>
