<?php include '../../../controllers/db/index.php';


if (isset($_POST['search'])) {
    $input  = mysqli_real_escape_string($conn, $_POST['input']) ; 
    // echo $input;
    ?>

    <script>
        let input = "<?php echo $input ?>"
        // alert(input)
        window.location="filter.php?code="+input
    </script>

    <?php
}