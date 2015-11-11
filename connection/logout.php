<?php

  $past = time() - 3600;

  foreach ( $_COOKIE as $key => $value )
  {
    setcookie( $key, $value, $past, '/' );
  }

  //session_destroy();
  //session_write_close();

  header("Location: ../"); // volta 1 diretorio
  exit;
?>
