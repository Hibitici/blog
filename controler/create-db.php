<?php
      require_once (__DIR__ . "/../model/config.php");

  $connection = new mysqli($host, $username, $pasword);

 if($connection->connect_error) {
      die("<p>error: " . $connection->connect_error . "</p>");
 }
    $exists = $connection->select_db($database);
       //if the database doesnt exist it will output succesfully created datebase.
  
   if(!$exists)  {
          $query = $connection->query("CREATE DATABASE $database");
              if ($query) {
         	 echo "<p>succesfully created database:" . $database . "</P>";
         }
     }
        
        else {
         	 echo "<p>database already exists.</P>";
         }  

          $query = $connection->query("CREATE TABLE posts ("
          	      . "id int(11) NOT NULL AUTO_INCREMENT,"
          	      . "title varchar(255) NOT NULL," 
          	      . "post text NOT NULL,"
          	      . "PRIMARY KEY (id))");
          if($query) {
          	  echo "<p>succesfully created table: post</P>";
          }//whenever we echo something put it in paragraph tagss
         else{
          	  echo "<p>$connection->error</P>";
          }


//what ive done is created another query and created a table that will have post in it.

  $connection->close();