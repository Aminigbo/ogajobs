<?php include '../../../controllers/db/index.php';

if (isset($_POST['apply'])) {

    $name  = mysqli_real_escape_string($conn, $_POST['fullname']) ;
    $phone  = mysqli_real_escape_string($conn, $_POST['phone']) ;
    $email  = mysqli_real_escape_string($conn, $_POST['email']) ;
    $sex  = mysqli_real_escape_string($conn, $_POST['sex']) ;
    $job  = mysqli_real_escape_string($conn, $_POST['job']) ;

    $surv_team_2_dp  = $_FILES['cv']['name'];
    $filetmpname4 = $_FILES['cv']['tmp_name'];
    $fileSize =$_FILES['cv']['size'];
    $fileError =$_FILES['cv']['error'];
    $fileType =$_FILES['cv']['type'];
    $Move = "../../../job-cvs/".$surv_team_2_dp;
    $save_cv = "job-cvs/".$surv_team_2_dp;
    $img_success=move_uploaded_file($filetmpname4, $Move);

    $date = date("Y-m-d"); 
    $query = "INSERT INTO applications (user,phone, `email`, sex, cv,`date`,`status`,job) 
    VALUES('$name','$phone','$email', '$sex', '$save_cv', '$date', 'submitted','$job')";
    $success= mysqli_query($conn, $query);
    ?>

    <script>
        alert("You application was submitted successfully");
        window.location="../../../";
    </script>

    <?php 
}