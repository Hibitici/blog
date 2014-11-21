<?php
     require_once (__DIR__ . "/database.php");
     session_start();
     
     $path = "/blog/";
    //^sets the path for project
     $host = "localhost";
     $username = "root";  
     $pasword = "root";
     $database = "blog_db";
      
      if (!isset($_SESSION["connection"])) {
	     $connection = new Database($host, $username, $pasword, $database);
		 $_SESSION["connection"] = $connection;
    }
//using this allows us to use our session variable
//when we click trough the blog post file it wil make it exist and weve solved the problem

//the variable basicaly destroys itself

//anytme we want to use configurtio0n we use this file instead of database .php

// this is the path to all of our files 