<?php

session_start(); 

$dbservername = 'localhost';

$dbpassword = 'Emmanueld45@';
                
$dbusername = 'hthubcom_hthub';
                
$dbname = 'hthubcom_hthub';


// $dbservername = 'localhost';
 
// $dbusername = 'root';
 
// $dbpassword = '';
 
// $dbname = 'jobpadi';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);