
<?php 

         // this code is used to make it so people cannot hack the website 
        // we need to use this page to send my code to our form 
       // once we know what dirrectory we are in we can get out of it and require anohte file
   
    require_once(__DIR__ . "/../model/config.php");
   
    //the reason we have our mysql is so we can have a connection 

     $title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);
     $post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING) ;
     $date = new DateTime('today');
     $time = new DateTime('America/Los_Angeles');
 //well echo this out to then see if we have filterd our code well
//we need to make our query and use it to post our blog post on out post eres
   
   $query = $_SESSION["connection"]->query("INSERT INTO posts SET title =  '$title', post = '$post'");
   
    //this outputs our code to show us if we have done this correctly
    
     if ($query) {
     	echo "<p></P>";
        echo "Posted on:" . $date->format("M/D" . " " . "d/Y") . " at " . $time->format("h:i");
     } 
     else{
     	echo "<p>" . $_SESSION["connection"]->error . "</p>";
     }



  
    
      