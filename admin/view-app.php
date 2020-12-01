<?php include '../controllers/db/index.php'; ?>
<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="theme-color" content=" #005B49" />
   <title>Oga Jobs</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 <!-- Favicons -->
 <link href="../assets/vectors/1.png" rel="icon">
 <link href="../assets/vectors/1.png" rel="apple-touch-icon">
 

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet"> 
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/desc.css" rel="stylesheet">



 <style type="text/css">
</style>


</head>

<body>


  <section id="section1" class="section1 header">
  <?php include '../controllers/includes/menu.php'; ?>
  <div class="heada">
    <a href="./" >
      <img src="../assets/vectors/1.png" class="vector1 wow fadeInDown one" style="z-index:2000;">
      <img src="../assets/vectors/11.png" class="vector1 one-one" style="z-index:2000;display: ;width: 41px; height: 27px;">

    </a>
    <img src="../assets/vectors/bar2.png" class="menu" style="z-index:2000;">
    <a href="./" class="about wow fadeInUp header-btns" style="z-index: 4200;">Home</a>
      <a  href="all-jobs.php" class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer">All Jobs</a>
      <a href="contact.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Messages</a>
      <a href="create.php" class="filter wow fadeInUp header-btns" style="z-index: 4200;">Create</a>
       

</div>

<br>
    <div class="job-holder" style="width:60%;margin-left:20%;">

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM applications WHERE id = '$id' ";  
        $result = mysqli_query($conn, $sql); 
        if (mysqli_num_rows($result)) {
            while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $user=$row['user'];
            $phone=$row['phone'];
            $email=$row['email'];
            $sex=$row['sex'];
            $cv=$row['cv'];
            $date=$row['date'];
            $status=$row['status']; 
            $job=$row['job'];

            $sqlXX = "SELECT * FROM jobs WHERE `status` = '1' AND code = '$job' ";
                $resultXX = mysqli_query($conn, $sqlXX); 
                if (mysqli_num_rows($resultXX)) { 
                    while ($row=mysqli_fetch_assoc($resultXX)) { 
                        $firm=$row['firm'];
                        $position=$row['position'];
            ?>
        <div class="jobs"> 
            <div class="t-head">
            <img src="../assets/vectors/1.png" class="" style="width:6%"><br>

            <img src="../vacancies/3.jpg" style="position:absolute;right:20px;top:50px;
                  height:150px;width:150px;border-radius:150px;" >

                <b class="j-title">
                <?php echo $position ?>
                </b> <br>

                <span style="font-size:13px;">
                @<?php echo $firm ?>
                </span> <br> 

                <b class="apply-pop" style="font-size:19px;float: ;background-color:#00B894;color:white;
                padding:3px 8px;border-radius:5px;cursor:pointer">
               View CV
                </b> 
                <br><br>
                <br>
            </div>

            <div>
            <b class="j-title">
                      <?php echo $user; ?>
                    </b> <br>

                    <span style="font-size:13px;">
                    <?php echo $phone; ?>
                    </span> <br>
                    <span style="font-size:13px;">
                    <?php echo $email; ?>
                    </span> <br>
                    <span style="font-size:13px;">
                    <?php echo $date; ?>
                    </span> <br> <br> 
            </div>

            <b class="j-title">
            Urgently hiring 
            </b>

            <div>
                <?php 
                
                $description = "We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful
                    In addition to job listing we provide you with additional resources such as career coaching, resume tailoring and helpful tips in our blog posts. 
                    We are remodeling our country’s hiring system.";
                     
                    echo $description;

                ?> 
            </div> 
        </div>
    <?php
        }
    }
}
       }
        ?>
    </div> 

    
    
  </section> 
  <!-- <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script> 
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
  <script src="../assets/vendor/wow/wow.min.js"></script> 
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/superfish/superfish.min.js"></script> 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    // alert("")
  })

  var formOK = false;

  function validatePDF(objFileControl){
  var file = objFileControl.value;
  var len = file.length;
  var ext = file.slice(len - 4, len);
  if(ext.toUpperCase() == ".PDF" || ext  == "docx"|| ext == "doc"){
    formOK = true;
    // alert("good")
    $(".apply").show()
    $(".lab").css({
      "background-color":"#3bc7ac",
      "color":"clack"
    }) 
  }
  else{
    formOK = false;
    alert("Only PDF and word files allowed.");
    $(".cv").val("");
    $(".apply").hide()
    $(".lab").css({
      "background-color":"crimson",
      "color":"white"
    }) 
  }
  }




  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    smartSpeed:250,
    autoplayTimeout:3000,
    slideTransition:`linear`,
    dots:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3,
            nav:true,
            loop:true,
        },
        1000:{
            items:5
        }
    }
})

$(document).ready(function() {
    var s = $(".preamble");
    var pos = s.position();                    
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();

        if (windowpos > 200) {
          $(".heada").addClass("head"); 
          
        } else if(windowpos < 1) {
          $(".heada").removeClass("head"); 
        } 

    });
});

// close reg pop
    $(".close-pop").click(function(){
        $(".reg-pop").fadeOut()
    })
    $(".apply-pop").click(function(){
        $(".reg-pop").fadeIn()
    })

// $( ".search" )
//   .mouseover(function() {
//     $( ".two_btnss" ).show();
//   })
//   .mouseout(function() {
//     $( ".two_btnss" ).hide();
//   });

$(".close-bar").click(function(){
    $(".close-bar").hide()
    $(".mobile-menu").slideUp();
    })

    $(".menu").click(function(){
    $(".close-bar").show()
    $(".mobile-menu").slideDown();
    }) 

$( ".search" ) .click(function() {
    $( ".search-form" ).focus();
  })


  $( ".filter" ) .click(function() {
  $('html,body').animate({
  scrollTop: $(".bottom").offset().top},
  2000);
})
    
</script>

<!-- <script src="//code.tidio.co/4hx5f11qnh54qrylyuwlvjupscrxgh2u.js" async></script> -->

</body>

</html>