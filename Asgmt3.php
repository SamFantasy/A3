<?php

/*
Samuel Bui

Assignment 3
Due: Wednesday @ 11:59pm

Create an array with your info.  $array  [] = ("Samuel", "Bui","11/16/1988")
Hint" create an array with key.
 
Populate a Person and Address object with your info from the array.

Print out the contents of the array.

Create two MySql tables with your info. (Set up for next assignment)

*/

$myInfo=array ("firstName" => "Samuel", "lastName" =>"Bui", "age" => "26", "street1" => "3805 Sibley St","street2"=> "Apt 203", "city"=> "Burnsville","state"=> "MN", "zipCode"=> "55337");



foreach($myInfo as $x =>$x_value){
     echo "Key=" . $x . ", Value=" . $x_value;    
     echo "<br>";
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
   $sql1 = "
CREATE TABLE Person  (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
age VARCHAR (3) NOT NULL,
)";
    
$sql2 = "
CREATE TABLE Address  (
street1 VARCHAR(30) NOT NULL,
street2 VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL, 
state VARCHAR(2) NOT NULL,
zipCode INT(10) NOT NULL,
)";


?> 

