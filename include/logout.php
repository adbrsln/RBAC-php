<?php
include 'config.php';

   session_destroy();

 // Jump to login page
    $str = '../main.php?s=lot';
    redirect($str);
  ?>