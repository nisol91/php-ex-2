<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .red {
        color: red;
      }
      .green {
        color: green;
      }
    </style>
  </head>
  <body>

    <?php

    $psw = $_GET['password'];
    $chiave = 'Boolean';
    ?>

    <?php /*
    if ($psw === $chiave && !empty($psw)) { ?>
      <h1 style= 'color:green'><?php echo 'corretto' ?></h1>
    <?php } else { ?>
      <h1 style= 'color:red'><?php echo 'errato' ?></h1>
    <?php } */ ?>



  <?php
  //operatore ternario
  $pswValid = ($psw === $chiave && !empty($psw));
  $message = ($pswValid) ? 'Corretto' : 'errato';
  $class = ($pswValid) ? 'green' : 'red';

  ?>
  <h1 class = <?php echo $class ?>><?php echo $message  ?></h1>
  </body>
</html>
