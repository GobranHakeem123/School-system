<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "Schools_db";
 
  $connection = mysqli_connect($host, $username, $password, $database);
  mysqli_set_charset($connection,'utf8');
  if (!$connection) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
  }

  return $connection;
 
?>