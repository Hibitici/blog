   <?php
         require_once(__DIR__ . "/../model/config.php");
       // we use the require_once to concatinate the actual path to the other
         // and we will want to require the config to get acces to other files and echo the correct path 
    ?>
   <nav>
        <ul>       <!--  the easyest way to do this part is the code below -->
       	   <li> <button><a href="<?php echo $path . "post.php"?>">blog post form </a></button>  </li>
       </ul>   
</nav>

  <nav>
        <ul>       <!-- this code makes a button -->
       	   <li> <button><a href="<?php echo $path . "register.php"?>">register form </a></button>   </li>
       </ul>   
</nav>
<!-- the only thing that shoudve changed is the code saying the path -->
<!--we use the echo to echo out our $path   -->
<!-- the root folder is the local host  -->
<!--make sure we are pointing to post .php -->

<!-- we need to go through everything and update them if we are going to end up sending them online -->