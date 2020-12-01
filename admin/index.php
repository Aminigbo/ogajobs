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
  <link href="../assets/css/select.css" rel="stylesheet">



 <style type="text/css">
</style>


</head>

<body>


  <section id="section1" class="section1 header"> 
  <div class="heada">
    <a href="./" >
      <img src="../assets/vectors/1.png" class="vector1 wow fadeInDown one" style="z-index:2000;">
      <img src="../assets/vectors/11.png" class="vector1 one-one" style="z-index:2000;display: ;width: 41px; height: 27px;">

    </a>
    <img src="../assets/vectors/bar2.png" class="menu" style="z-index:2000;">
      <a href="create.php" class="about wow fadeInUp header-btns" style="z-index: 4200;">Create</a>
      <a href="all-jobs.php" class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer">All Jobs</a>
      <a href="contact.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Messages</a>

      <!-- <b class="filter wow fadeInUp header-btns" style="z-index: 4200;">Filter</b> -->
      
      <!-- <img src="../assets/vectors/search.png" class="search wow fadeInUp header-btns" style="z-index:2000;display:inline-block">  -->
       

     <span name="" id="" class="search-form" style="box-shadow:none;">
         Recent applications
    </span>
</div> 
    <div class="jobHolders"> 
    
        <?php
        
          $sql = "SELECT * FROM applications ";  
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
              <div class="blog1">
                <a href="view-app.php?id=<?php echo $id; ?>">
                  <div style="text-align:center;">
                    <img src="../vacancies/3.jpg" class="job-img" > 
                  </div>
                  <div class="blur">

                  <img src="../vacancies/3.jpg" style="position:absolute;right:20px;top:50px;
                  height:70px;width:70px;border-radius:70px;" >

                  <b style="color:#00B894;font-size:14px;position:absolute;top:0px;right:5px;">
                    <?php echo $date ?>
                  </b>
                    <div style="padding:10px;font-size:15px;">

                    <img src="../assets/vectors/1.png" class="" style="width:10%"><br>
                    <br>
                    <b class="j-title">
                      <?php echo $position; ?>
                    </b> <br>

                    <span style="font-size:13px;">
                    @<?php echo $firm; ?>
                    </span> <br> 

                    <br>
                    <b class="j-title">
                      <?php echo $user; ?>
                    </b> <br>

                    <span style="font-size:13px;">
                    <?php echo $phone; ?>
                    </span> <br>
                    <span style="font-size:13px;">
                    <?php echo $email; ?>
                    </span> <br> <br> 

                    
                    <b class="j-title" style="font-size:21px;color:#00B894;"> 
                    Why i want to apply
                    </b>

                    <div> 
                    <span style="font-size:14px;">
                    <?php 
                    $description = "We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful
                    In addition to job listing we provide you with additional resources such as career coaching, resume tailoring and helpful tips in our blog posts. 
                    We are remodeling our country’s hiring system.";
                      if (strlen($description)>140) {
                          $string=substr($description, 0,140)."...";
                          }else{
                          $string=$description;
                          }
                          echo $string;

                          ?>
                    </span>
                    </div> <br>
                    <b style="font-size:21px;float:right;color:#00B894;">
                        View
                    </b> 
                    </div>
                  </div>
                </a>
                
              </div>  
          <?php 
        }
    }
    }
      }else{ ?>
        <div style="text-align:center;padding:50px 20px;color:crimson">
          No recent applications
          <br><br> 
        </div>
      <?php }
      ?>
    </div>
    
    <div class="two_btnss">

   
</div>

    <div class="footer">
    <img src="../assets/vectors/footer.png" class="footer-vector wow fadeInDown">

    <br><br>
    
    <div class="who-we-are wow fadeInDown">
      <b>Who We Are</b> 

      <b class="social">
      <img src="../assets/vectors/ig.png" class="social-icons wow fadeInDown">
      <img src="../assets/vectors/fb.png" class="social-icons wow fadeInDown">
      <img src="../assets/vectors/twitter.png" class="social-icons wow fadeInDown">
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

        if (windowpos > 500) {
          $(".heada").addClass("head"); 
          
        } else if(windowpos < 1) {
          $(".heada").removeClass("head"); 
        }

        if (windowpos > 605) {
          $(".search-form").addClass("search-form-fixed"); 
          
        } else if(windowpos < 1) {
          $(".search-form").removeClass("search-form-fixed"); 
        }

    });
});

$(".close-bar").click(function(){
    $(".close-bar").hide()
    $(".mobile-menu").slideUp();
    })

    $(".menu").click(function(){
    $(".close-bar").show()
    $(".mobile-menu").slideDown();
    })

// $( ".search" )
//   .mouseover(function() {
//     $( ".two_btnss" ).show();
//   })
//   .mouseout(function() {
//     $( ".two_btnss" ).hide();
//   });


    $( ".filter" ) .click(function() {
        $('html,body').animate({
        scrollTop: $(".two_btnss").offset().top},
        2000);
    })

$( ".search" ) .click(function() {
    $( ".search-form" ).focus();
  })
    
</script>

<!-- <script src="//code.tidio.co/4hx5f11qnh54qrylyuwlvjupscrxgh2u.js" async></script> -->

</body>

</html>