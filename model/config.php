<?php
    $path = "/blog/";
    //^sets the path for project
    $host = "localhost";
    $username = "root";  
    $pasword = "root";
    $database = "blog_db";
      

    $connection new Database($host, $username, $pasword, $database);


//anytme we want to use configurtio0n we use this file instead of database .php

// this is the path to all of our files 