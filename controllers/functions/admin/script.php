<?php include '../../../controllers/db/index.php';


if (isset($_POST['add'])) {
    // GENERATE A UNIQUE USERNAME FOR EVERY brand
    function checkKeys($conn, $randStr){
        $sql = "SELECT * FROM jobs"; 
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {

            while ($row=mysqli_fetch_assoc($result)) {
            if ($row['code']== $randStr) { 
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
        $keyLenght = 4;
        $str = "J5K4H55B6LE5L7K6";
        $randStr =substr(str_shuffle($str), 0, $keyLenght);

        $checkKey =checkKeys($conn, $randStr); 

        while ( $checkKey==true) {
          $randStr =substr(str_shuffle($str), 0, $keyLenght);
          $checkKey =checkKeys($conn, $randStr);
        }

        return $randStr;

    }
    $code=generateKey($conn);

    
    
    
    
    
    
    
    
    
    $class  = mysqli_real_escape_string($conn, $_POST['class']) ;
    $firm  = mysqli_real_escape_string($conn, $_POST['firm']) ;
    $location  = mysqli_real_escape_string($conn, $_POST['location']) ;
    $position  = mysqli_real_escape_string($conn, $_POST['position']) ;
    $salary  = mysqli_real_escape_string($conn, $_POST['salary']) ; 
    $requirement1  = mysqli_real_escape_string($conn, $_POST['requirement1']) ; 
    $requirement2  = mysqli_real_escape_string($conn, $_POST['requirement2']) ; 
    $requirement3  = mysqli_real_escape_string($conn, $_POST['requirement3']) ; 
    $requirement4  = mysqli_real_escape_string($conn, $_POST['requirement4']) ; 
    $requirement5  = mysqli_real_escape_string($conn, $_POST['requirement5']) ; 
    $requirement6  = mysqli_real_escape_string($conn, $_POST['requirement6']) ; 
    $requirement7  = mysqli_real_escape_string($conn, $_POST['requirement7']) ; 

    $surv_team_2_dp  = $_FILES['avatar']['name'];
    $filetmpname4 = $_FILES['avatar']['tmp_name'];
    $fileSize =$_FILES['avatar']['size'];
    $fileError =$_FILES['avatar']['error'];
    $fileType =$_FILES['avatar']['type'];
    $Move = "../../../job-avatars/".$surv_team_2_dp;
    $save_img = "job-avatars/".$surv_team_2_dp;
    $img_success=move_uploaded_file($filetmpname4, $Move); 
    $date = date("Y-m-d");
    if (empty($firm) || empty($location)|| empty($position)|| empty($salary) || empty($requirement1)|| empty($requirement2)|| empty($requirement3)
    || empty($requirement4)|| empty($requirement5)|| empty($requirement6)|| empty($requirement7)) {
        header("location:../../../admin.php?callback=empty-field");
    }else{
        $query = "INSERT INTO jobs (category,firm, `location`, position, salary, avatar,`date`,`status`,code,requirement1,requirement2,requirement3,requirement4,requirement5,requirement6,requirement7) 
      VALUES('$class','$firm','$location', '$position', '$salary','$save_img','$date','1','$code','$requirement1','$requirement2','$requirement3','$requirement4','$requirement5','$requirement6','$requirement7')";
      $success= mysqli_query($conn, $query);
      header("location:../../../admin/create.php?callback=success");
    }
}


