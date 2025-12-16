<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "Schools_db";
 
  $connection = new mysqli($host, $username, $password, $database);
  mysqli_set_charset($connection,'utf8');
  if (!$connection) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
  }

  return $connection;
 
?>
