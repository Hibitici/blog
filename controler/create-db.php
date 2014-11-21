<?php
      
require_once (__DIR__ . "/../model/config.php");

  
     
$query = $connection->query("CREATE TABLE posts ("
          	      . "id int(11) NOT NULL AUTO_INCREMENT,"
          	      . "title varchar(255) NOT NULL," 
          	      . "post text NOT NULL,"
          	      . "PRIMARY KEY (id))");
          
 

 if($query) {
           echo "<p>succesfully created post</p>";

 }
  else {
       echo "<p>$connection->error</p>";
}



//what ive done is created another query and created a table that will have post in it.

