<?php
 require_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'head.php'; ?>
  </head>
  <body>

<!--  početak izbornik   -->
<?php require_once 'izbornik.php'; ?>
<!--   kraj izbornik  -->

<!--   početak tijelo  -->
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="Korisničko ime">
  <label for="floatingInput"></label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Lozinka">
  <label for="floatingPassword"></label>
</div>


<ul class="vertical menu">
  <li><a href="prijavise.php">Prijavi se</a></li>



<!--   kraj tijelo  -->

<!--  početak podnožje   -->
<?php require_once 'podnozje.php'; ?>
<!--   kraj podnožje  -->
    

    <?php require_once 'skripte.php' ; ?>
  </body>
</html>