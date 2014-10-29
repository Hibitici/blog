<?php
      require_once ("../model/database.php");

  $connection = new mysqli('$host', '$username', '$pasword');

 if($connection->connect_error) {
      die("error: " . $connection->connect_error);
 }
  else {
       echo "success: " . $connection->host_info;

  }

  $connection->close();