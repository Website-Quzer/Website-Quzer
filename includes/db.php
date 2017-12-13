<?php
  
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $name = 'db_name';

  db["db_host"] = $host;
  db["db_user"] = $user;
  db["db_pass"] = $pass;
  db["db_name"] = $name;

  foreach ( $db as $key => $value){
    define(strtoupper($key),$value);
  }

  $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  if(!$connection){
      die('Unable to connect to Server/Database');
  }
  echo 'Connected to database Successfully';
  
?>
