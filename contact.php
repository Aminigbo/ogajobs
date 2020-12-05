<?php include 'controllers/db/index.php'; ?>
<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="theme-color" content=" #005B49" />
   <title>Job Padi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 <!-- Favicons -->
 <link href="assets/vectors/1.png" rel="icon">
 <link href="assets/vectors/1.png" rel="apple-touch-icon">
 

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> 
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/desc.css" rel="stylesheet">



 <style type="text/css">

    /*  LARGE screen */
    @media only screen and (min-width: 690px) {
        .formHlder{
            width:60%;
            margin-left:20%;
        }
        .formHlder input, textarea{
            width:100%;
        }
    }

    /* SMALL SCREEN */
    @media only screen and (max-width: 690px) {
        .formHlder{
            width:100%;
        }
        .formHlder input, textarea{
            width:100%;
        }
    }
</style>


</head>

<body>


  <section id="section1" class="section1 header" style="height:100px;">
  <?php include 'controllers/includes/menu.php'; ?>
  <div class="heada">
    <a href="./" >
      <img src="assets/vectors/1.png" class="vector1 wow fadeInDown one" style="z-index:2000;">
      <img src="assets/vectors/11.png" class="vector1 one-one" style="z-index:2000;display: ;width: 41px; height: 27px;">

    </a>
    <img src="assets/vectors/bar2.png" class="menu" style="z-index:2000;">
      <a href="./" class="about wow fadeInUp header-btns" style="z-index: 4200;">Home</a>
      <a onclick="alert('Coming soon')" class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer;">Applications</a>
      <a href="about.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">About</a>

      <!-- <b class="filter wow fadeInUp header-btns" style="z-index: 4200;">Apply</b> -->
      
      <!-- <img src="assets/vectors/search.png" class="search wow fadeInUp header-btns" style="z-index:2000;display:inline-block">  -->
       

</div>

<br>
    <div class="job-holder"> 
        <div class="jobs"> 
            <div class="t-head">
            <img src="assets/vectors/1.png" class="" style="width:6%"><br>

                <b class="j-title">
                    JOBPADI
                </b> <br>

                <span style="font-size:13px;">
                powered by Kedosic Innovation
                </span> <br> <br>
            </div> 

            

            <div>
            <div class="formHlder">
                
            <b class="j-title">
                Contact Us
            </b>
                <form method="POST">
                    <input type="text" required name="contact_name" placeholder="Your name" id=""> <br><br>
                    <input type="text" required name="contact_email" placeholder="Your email" id=""> <br><br>
                    <input type="text" required name="contact_phone" placeholder="Your phone" id=""> <br><br> <br>
                    <textarea required maxlength="240" name="contact_message" id="" cols="26" rows="10" placeholder="Enter your  message here"></textarea>
                    <br><br>
                    <input type="submit" value="Message Us" name="messageUs" 
                    style="width:120px;background-color:#005B49;color:white;border:none;border-radius:7px;padding:8px;">
                </form>
            </div>

            <?php 
                if (isset($_POST['messageUs'])) {
                    $contact_name  = mysqli_real_escape_string($conn, $_POST['contact_name']) ;
                    $contact_email  = mysqli_real_escape_string($conn, $_POST['contact_email']) ;
                    $contact_phone  = mysqli_real_escape_string($conn, $_POST['contact_phone']) ;
                    $contact_message  = mysqli_real_escape_string($conn, $_POST['contact_message']) ;
                    $date  = qdate("Y-m-d") ;

                    if (empty($contact_name) || empty($contact_email)|| empty($contact_phone)|| empty($contact_message) ) {
                        ?>

                        <script>
                            alert("You missed a field")
                        </script>
                        <?php
                    }else{
                        $query = "INSERT INTO padicontacts (`name`,phone, `email`, `message`, `date`,`status`) 
                        VALUES('$contact_name','$contact_email','$contact_phone', '$contact_message', '$date','0')";
                        $success= mysqli_query($conn, $query);

                    }

                    
                }
            ?>
 
        </div> 
    </div> 
    
    <div class="by">
      Built with  <i class="fa fa-heart" style="color:red;"></i> by
      <a href="https://hthub.com.ng/" class="by-a">
       HARVOXX TECH. HUB
      </a>
      <div style="color:grey;font-size:13px;">powered by Kedosic Innovation</div>
    </div> 

    
    
  </section> 

  <!-- <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script> 
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
  <script src="assets/vendor/wow/wow.min.js"></script> 
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script> 

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