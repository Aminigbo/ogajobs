<?php

session_start(); 

// $dbservername = 'localhost';

// $dbpassword = 'jobpadiUser1';
                
// $dbusername = 'jobpadi';
                
// $dbname = 'jobpadi';


$dbservername = 'localhost';
 
$dbusername = 'root';
 
$dbpassword = '';
 
$dbname = 'jobpadi';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);