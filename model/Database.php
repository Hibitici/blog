<?php  
class Database{
	 private  $connection;
	 private $host;
	 private $username;
	 private $pasword;
	 private $database;
     public $error;

      public function __construct($host, $username, $pasword, $database ) {
           $this->host = $host;
           $this->username = $username;
           $this->pasword = $pasword;
           $this->database = $database;

           $this->connection = new mysqli($host, $username, $pasword);

     if ($this->connection->connect_error) {
        die("<p>error: " . $this->connection->connect_error . "</p>");
 }
             $exists = $this->connection->select_db($database);

//^^the query here is figuring out if it actualy works
    if(!$exists)  {
       $query = $this->connection->query("CREATE DATABASE $database");
                if ($query) {
       echo "<p>succesfully created database:" . $database . "</P>";
        }
    }
        
    else {
        echo "<p>database already exists.</P>";
      } 
     
   }
            
     
       

       //if the database doesnt exist it will output succesfully created datebase.
  

//these functions will look exactly like the ones in create-db.php
       
       public function openConnection() {
          $this->connection = new mysqli($this->host, $this->username, $this->pasword, $this->database);  
      //all open connection needs to do is make a mysqli object 
     if($this->connection->connect_error) {
        die("<p>error: " . $this->connection->connect_error . "</p>");
       }
    }
    //we are checking if we have a connection error
   //the code is here because we are using it to see if we are going to have an error
       public function closeConnection() {
           if(isset($this->connection)) {
           	   $this->connection->close();
           }
    }
//this is our close function it closes our connection^^^^^^ 
        public function query($string) {
         $this->openConnection();

         $query = $this->connection->query($string);

         if(!$query) {
              $this->error = $this->connection->error;
         }
    
         $this->closeConnection();

         return $query;
    
    }  
    //this will substitute our text and place it here ^^
}      //once we get a result it will be stored in the query




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