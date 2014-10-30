<?php
      require_once (__DIR__ . "/../model/database.php");

  $connection = new mysqli($host, $username, $pasword);

 if($connection->connect_error) {
      die("error: " . $connection->connect_error);
 }
    $exists = $connection->select_db($database);
       
   if(!$exists)  {
          $query = $connection->query("CREATE DATABASE $database");
     }
       if ($query) {
       	   echo "successfully created database" . $database;
       }
  

  $connection->close();