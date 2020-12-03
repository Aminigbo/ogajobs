<?php include 'controllers/db/index.php'; ?>
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
</style>


</head>

<body>


  <section id="section1" class="section1 header">
  <?php include 'controllers/includes/menu.php'; ?>
  <div class="heada">
    <a href="./" >
      <img src="assets/vectors/1.png" class="vector1 wow fadeInDown one" style="z-index:2000;">
      <img src="assets/vectors/11.png" class="vector1 one-one" style="z-index:2000;display: ;width: 41px; height: 27px;">

    </a>
    <img src="assets/vectors/bar2.png" class="menu" style="z-index:2000;">
      <a href="about.php" class="about wow fadeInUp header-btns" style="z-index: 4200;">About Us</a>
      <a onclick="alert('Coming soon')" class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer;">Applications</a>
      <a href="contact.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Contact</a>

      <b class="filter wow fadeInUp header-btns" style="z-index: 4200;">Apply</b>
      
      <!-- <img src="assets/vectors/search.png" class="search wow fadeInUp header-btns" style="z-index:2000;display:inline-block">  -->
       

</div>

<br>
    <div class="job-holder">

        <?php
        $get =  mysqli_real_escape_string($conn, $_GET['id']) ;
        $sql = "SELECT * FROM jobs WHERE `status` = '1' AND id = '$get' "; 
        $result = mysqli_query($conn, $sql); 
        if (mysqli_num_rows($result)) {
          while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $firm=$row['firm'];
            $location=$row['location'];
            $position=$row['position'];
            $salary=$row['salary'];  
            $avatar=$row['avatar'];
            $date=$row['date'];
            $status=$row['status'];

            $requirement1=$row['requirement1'];
            $requirement2=$row['requirement2'];
            $requirement3=$row['requirement3'];
            $requirement4=$row['requirement4'];
            $requirement5=$row['requirement5'];
            $requirement6=$row['requirement6'];
            $requirement7=$row['requirement7'];
            
            ?>
        <div class="jobs"> 
            <div class="t-head">
            <img src="assets/vectors/1.png" class="" style="width:6%"><br>

                <b class="j-title">
                <?php echo $position ?>
                </b> <br>

                <span style="font-size:13px;">
                @<?php echo $firm ?>
                </span> <br>
                <span style="font-size:13px;">
                <?php echo $location ?>
                </span> <br> <br>
                <b class="apply-pop" style="font-size:19px;float: ;background-color:#00B894;color:white;
                padding:3px 8px;border-radius:5px;cursor:pointer">
                APPLY
                </b> <br><br>
                <br>
            </div>

            <div>
            <span style="font-size:13px;">
            <?php echo $salary ?> / Month

            </span> 
            </div> 

            <div> <br>
            <b>REQUIREMENTS</b> <br><br>

            <?php
            if (!empty($requirement1)) { ?>
            
            1) <br> <?php echo $requirement1 ;

            }

            if (!empty($requirement2)) { ?>
            
            <br><br>
            2)  <br> <?php echo $requirement2 ;

            }

            if (!empty($requirement3)) { ?>
           <br> <br>
            3)  <br> <?php echo $requirement3 ;

            }

            if (!empty($requirement4)) { ?>
              <br><br> 3) <br> 
               <?php echo $requirement4 ;
   
               }
            if (!empty($requirement5)) { ?>
                <br><br> 
                3)  <br> <?php echo $requirement5 ;
     
                 }
            if (!empty($requirement6)) { ?>
                  <br><br> 
                  3)  <br> <?php echo $requirement6 ;
       
                   }

           
           if (!empty($requirement7)) { ?>
            
            <br><br> 
            <br> 4)  <br> <?php echo $requirement7 ; }
           ?>
           
           
            </div>
            <b class="apply-pop bottom" style="font-size:19px;float:right;background-color:#00B894;color:white;
                padding:3px 8px;border-radius:5px;cursor:pointer">
                APPLY
            </b> 
        </div>
    <?php
        }
       }
        ?>
    </div>
    

    <div class="footer">
    <img src="assets/vectors/footer.png" class="footer-vector wow fadeInDown">

    <br><br>
    
    <div class="who-we-are wow fadeInDown">
      <b>Who We Are</b> 

      <b class="social">
      <img src="assets/vectors/ig.png" class="social-icons wow fadeInDown">
      <img src="assets/vectors/fb.png" class="social-icons wow fadeInDown">
      <img src="assets/vectors/twitter.png" class="social-icons wow fadeInDown">
      </b>
      
      <br><br>
      <p class="wow fadeInDown footer-writeup-desk">
      We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful
      In addition to job listing we provide you with additional resources such as career coaching, resume tailoring and helpful tips in our blog posts. 
      We are remodeling our country’s hiring system.
      </p>

      <p class="wow fadeInDown footer-writeup-mobile" style="font-weight:none;font-size:15px;margin-bottom:10px;">
      We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful
      In addition to job listing we provide you with additional resources such as career coaching, resume tailoring and helpful tips in our blog posts. 
      We are remodeling our country’s hiring system.
        <br><br>
      </p>
    </div><div class="by">
      Built with  <i class="fa fa-heart" style="color:red;"></i> by
      <a href="https://hthub.com.ng/" class="by-a">
       HARVOXX TECH. HUB
      </a>
      <div style="color:grey;font-size:13px;">powered by Kedosic Innovation</div>
    </div>
    </div>

    
    
  </section>
  
    
  <div class="reg-pop">
      <div class="form-holders">
          <span style="position:absolute;right:-15px;top:-15px;font-size:33px;color:red;" 
          class="fa fa-times close-pop"></span>
          <br>
          <div style="text-align:center;">Fill out the forms to apply. </div><br>
          <form method="POST"  action="controllers/functions/client/script.php"
           onsubmit="return formOK;" enctype='multipart/form-data'>

           <input type="text" name="job" value="<?php echo $_GET['id'] ?>" style="display:none;">
            <input type="text" required name="fullname" id="" placeholder="Your fullname"> <br><br>
            <input type="text" required name="phone" id="" placeholder="Your phone number"> <br><br>
            <input type="text" required name="email" id="" placeholder="Your email address"> <br><br>
            <select name="sex" id="">
              <option> -- SELECT GENDER --</option>
              <option>MALE</option>
              <option>FEMALE</option>
            </select> <br><br>

            <label class="lab" style="padding:45px 20px;text-align:center;background-color:#eee;
            cursor:pointer;">
              Upload your cv
              <input type="file" style="display:none;" class="cv" name="cv" onchange="validatePDF(this)">
            </label> <br><br>
            <!-- <textarea class="lab" style="padding:45px 20px;text-align:center;background-color:;
            cursor:pointer;"></textarea> <br><br> -->

            <input type="submit" name="apply" id="" class="apply" value="APPLY"
            style="background-color:#005B49;border:none;color:white;font-weight:bold;
            font-size:20px;display:none;"
            >
          </form>

      </div>

  </div>

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