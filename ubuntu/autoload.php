<?php
  session_start();

  require('import/import.php');

  $app_files    = new import('import/');

  $app_files->get_app_files();

  $files        = array(
    'header'    => 'import/files/header',
    'navbar'    => 'import/files/navbar',
    'footer'    => 'import/files/footer',
  );

  $app_files->inc($files['header']);
  $app_files->inc($files['navbar']);
