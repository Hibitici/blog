<?php 
 //this code is used to make it so people cannot hack the website 
     $title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);
     $post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING) ;
//well echo this out to then see if we have filterd our code well
     echo "<p>title: $title</p>";
     echo " <p>post: $post</P>";
     //this information will be sent to the database later 