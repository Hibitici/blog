<?php
      require_once (__DIR__ . "/../model/config.php");

  $connection = new mysqli($host, $username, $pasword);

 if($connection->connect_error) {
      die("<p>error: " . $connection->connect_error . "</p>");
 }
    $exists = $connection->select_db($database);
       //if the database doesnt exist it will output succesfully created datebase.
  
   

          $query = $connection->query("CREATE TABLE posts ("
          	      . "id int(11) NOT NULL AUTO_INCREMENT,"
          	      . "title varchar(255) NOT NULL," 
          	      . "post text NOT NULL,"
          	      . "PRIMARY KEY (id))");
          
        


//what ive done is created another query and created a table that will have post in it.

  $connection->close();