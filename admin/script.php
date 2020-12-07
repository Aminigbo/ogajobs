<?php
include '../controllers/db/index.php';
if (isset($_POST['access'])) {  
            $accessPin = mysqli_real_escape_string($conn, $_POST['accessPin']) ; 
                
            $query = "SELECT * FROM padiadmin WHERE access='$accessPin' ";
            $results = mysqli_query($conn, $query);
                
            if (mysqli_num_rows($results)) { // user found
                $logged_in_user = mysqli_fetch_assoc($results);
                $_SESSION['access'] = $logged_in_user; 
                
                header("location:./");
            }
        }