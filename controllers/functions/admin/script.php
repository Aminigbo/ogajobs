<?php include '../../../controllers/db/index.php';


if (isset($_POST['add'])) {
    // GENERATE A UNIQUE USERNAME FOR EVERY brand
    function checkKeys($conn, $randStr){
        $sql = "SELECT * FROM events"; 
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {

            while ($row=mysqli_fetch_assoc($result)) {
            if ($row['ticket_id']== $randStr) { 
                $keyExist = true;
                break;

            }else{  
                $keyExist = false; 
            }
            }
        }
        return $keyExist; 
    }

    function generateKey($conn){
        $keyLenght = 8;
        $str = "J5K4H55B6LE5L7K6";
        $randStr =substr(str_shuffle($str), 0, $keyLenght);

        $checkKey =checkKeys($conn, $randStr); 

        while ( $checkKey==true) {
          $randStr =substr(str_shuffle($str), 0, $keyLenght);
          $checkKey =checkKeys($conn, $randStr);
        }

        return $randStr;

    }

    
    
    
    
    
    
    
    
    
    
    $firm  = mysqli_real_escape_string($conn, $_POST['firm']) ;
    $location  = mysqli_real_escape_string($conn, $_POST['location']) ;
    $position  = mysqli_real_escape_string($conn, $_POST['position']) ;
    $salary  = mysqli_real_escape_string($conn, $_POST['salary']) ;
    $desc  = mysqli_real_escape_string($conn, $_POST['desc']) ;
    $responsibility  = mysqli_real_escape_string($conn, $_POST['responsibility']) ;
    $language  = mysqli_real_escape_string($conn, $_POST['language']) ;
    $expirence  = mysqli_real_escape_string($conn, $_POST['expirence']) ;
    $age  = mysqli_real_escape_string($conn, $_POST['age']) ;
    $skills  = mysqli_real_escape_string($conn, $_POST['skills']) ;

    $surv_team_2_dp  = $_FILES['avatar']['name'];
    $filetmpname4 = $_FILES['avatar']['tmp_name'];
    $fileSize =$_FILES['avatar']['size'];
    $fileError =$_FILES['avatar']['error'];
    $fileType =$_FILES['avatar']['type'];
    $surv_team_2_dp = "job-avatars/".$surv_team_2_dp;
    $img_success=move_uploaded_file($filetmpname4, $surv_team_2_dp);
    $date = date("Y-m-d");
    if (empty($firm) || empty($location)|| empty($position)|| empty($skills)|| empty($salary)
    || empty($desc)|| empty($responsibility)|| empty($language)|| empty($expirence)|| empty($age)) {
        header("location:../../../admin.php?callback=empty-field");
    }else{
        $query = "INSERT INTO jobs (firm, `location`, position, salary,`description`,responsibility,`language`,expirence,age,skills,avatar,`date`,`status`) 
      VALUES('$firm','$location', '$position', '$salary', '$desc', '$responsibility', '$language','$expirence', '$age', '$skills', '$surv_team_2_dp','$date','0')";
      $success= mysqli_query($conn, $query);
      header("location:../../../admin.php?callback=success");
    }
}