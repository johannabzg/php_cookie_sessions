<?php
// pour demarrer une sessions on fait session_start();
 session_start();
 $_SESSION['formulaire']['nom'] = $_POST['nom'];
 $_SESSION['formulaire']['prenom'] = $_POST['prenom'];
 $_SESSION['formulaire']['age'] = $_POST['age'];
 $_SESSION['formulaire']['pays'] = $_POST['pays'];
 // creation de variable pour nom prenom toussa toussa..
 $_SESSION['user_agent'] = "GROOT";
 $_SESSION['age'] = 122;
 $_SESSION['nom_serveur'] = $_SERVER['SERVER_NAME'];
 //recup adresse ip visiteur
 $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
 function get_ip() {
   // ip si internet partagé
   if (isset($_SERVER['HTTP_CLIENT_IP'])) {
     return $_SERVER['HTTP_CLIENT_IP'];
   }
   // ip proxy
   elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     return $_SERVER['HTTP_X_FORWARDED_FOR'];
   }
   // ip normale
   else {
     return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
   }
 }
get_ip();
 // creation mdp
 $log = "joy";
 $pwd = 0703;
 setcookie('log', $log, time()+86400, null, null, false, true);
 setcookie('pwd', $pwd, time()+86400, null, null, false, true);
 // 86400 = 1 jour
  ?>
  <?php
  // setcookie('pseudo', 'jojodu30', time()+86400);
  // setcookie('pays', 'france', time()+86400);
  ?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>php cookie/session</title>
     <link rel="stylesheet" href="cookie.css" media="screen">
  </head>
  <body>
    <main>

      votre adresse ip est : <?php echo $_SESSION['ip']; ?> <br />
      et votre serveur est : <?php echo $_SESSION['nom_serveur']; ?> <br />

      <form  name="formulaire" action="index.php" method="post">
         nom : <input type="text" name="nom" value=""/><br />
         prenom : <input type="text" name="prenom" value=""/><br />
         pseudo : <input type="text" name="log" value=""><br />
         mot de passe : <input type="text" name="pwd" value=""/><br />
         âge : <input type="text" name="age" value=""/><br />
         pays : <select class="" name="pays" value="">
                   <option>...</option>
                   <option>france</option>
                   <option>espagne</option>
                   <option>pôle nord</option>
                   <option>italie</option>
                   <option>japon</option>
                 </select> <br />
         êtes vous un humain de type : femelle<input type="checkbox" name="femme" value="">mâle<input type="checkbox" name="homme" value="">les deux<input type="checkbox" name="deux" value=""><br />
          <button type="submit" name="button">valider</button>
      </form>
     <a href="index2.php"><button type="button" name="button" > next > </button></a>

     </main>

  </body>
</html>
