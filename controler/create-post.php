<?php 
 // this code is used to make it so people cannot hack the website 
        // we need to use this page to send my code to our form 
   // once we know what dirrectory we are in we can get out of it and require anohte file
    require_once(__DIR__ . "/../model/database.php");
//the reason we have our mysql is so we can have a connection 
     
     $connection = new mysqli($host, $username, $pasword, $database);
     
     $title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);
     $post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING) ;
//well echo this out to then see if we have filterd our code well
    
    //we need to make our query and use it to post our blog post on out post eres
   $query = $connection->query("INSERT INTO posts SET title =  '$title', post = '$post'");
    //this outputs our code to show us if we have done this correctly
     if ($query) {
     	echo "<p>succefully inserted post $title</P>";
     } 
     else{
     	echo "<p>$connection->error</p>";
     }



    $connection->close();
    
     //we neeed to make sure we close our $connection variable

       
     
     //this information will be sent to the database later 