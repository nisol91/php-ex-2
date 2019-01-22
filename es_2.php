<?php

  $psw = $_GET['password'];
  $chiave = 'Boolean';
  if ($psw === $chiave) { ?>
    <h1 style= 'color:green'><?php echo 'corretto' ?></h1>
  <?php } else { ?>
    <h1 style= 'color:red'><?php echo 'errato' ?></h1>
  <?php }
