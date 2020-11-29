<?php

session_start(); 
/*
$dbservername = 'localhost';
 
 $dbusername = 'u0818697_tik8ng';
 
 $dbpassword = 'thisistik8ng';
 
 $dbname = 'u0818697_Tik8'; 
*/ 

$dbservername = 'localhost';
 
$dbusername = 'root';
 
$dbpassword = '';
 
$dbname = 'jobpadi';

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);