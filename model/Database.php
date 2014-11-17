<?php  
class Database{
	 private  $connection;
	 private $host;
	 private $username;
	 private $pasword;
	 private $database;
     
      public function __construct($host, $username, $pasword, $database ) {
           $this->host = $host;
           $this->username = $username;
           $this->pasword = $pasword;
           $this->database = $database;
      }
//these functions will look exactly like the ones in create-db
       public function openConnection() {

       }
    public function closeConnection() {

    }

    public function query($string) {

    }
}

//waht weve done is create a function to open a connection

//our queryy wil lbe very simular to waht we have done before 
//so we assing the information to the global information 

//we wnt to store our local information into our global info







//what we want to do is make variables and clases in the variables 

//  we use clases because using only functions in your code sooner or later leads to spaghetti-code that is hard to maintain and extend. It's harder to fix bugs 

// classes are a way to view your code in a more intuitive, real-world way. (You package the data and all possible operations on that data together) 


// within the personal object we will be able to store all our information  in our variable

// and the reason we refactorf our code and improve the way it looks and make it easyer to maintain

//we erased our old database because we dont need it anymore we have stored all of our files in cinfig.php so we dont need our database 