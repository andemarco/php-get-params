<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 cßaratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $mex = '';
  if (empty($name) || empty($mail) || empty($age)) {
      $mex = 'errore è vuoto';
  } elseif (strlen($name) <= 3){
      $mex = 'errore, nome è minore di 3';
  } elseif (!strpos($mail, '@') || !strpos($mail, '.')){
      $mex = 'errore, la mail è formattata male';
  } elseif (!is_numeric($age)){
      $mex = 'errore, la tua età è strana';
  } else {
      $mex = 'benvenuto';
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    <h1><?php echo $mex ?></h1>
   </body>
 </html>
