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
  <link href="assets/css/select.css" rel="stylesheet">



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
      <a href="./" class="about wow fadeInUp header-btns" style="z-index: 4200;">Home</a>
      <a onclick="alert('Coming soon')" class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer;">Applications</a>
      <a href="contact.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Contact</a>

      <b class="filter wow fadeInUp header-btns" style="z-index: 4200;">Filter</b>
      
      <img src="assets/vectors/search.png" class="search wow fadeInUp header-btns" style="z-index:2000;display:inline-block"> 
       

     <input type="text" name="" id="" class="search-form" placeholder="Search for Your Dream job">
</div>

<br><br>
    <div class="jobHolders"> 
    
        <?php
        if (isset($_GET['class'])) {
          $class = $_GET['class'];
          $sql = "SELECT * FROM jobs WHERE `status` = '1' AND category = '$class' "; 
        }elseif (isset($_GET['code'])) {
            $code = $_GET['code'];
            $sql = "SELECT * FROM jobs WHERE `status` = '1' AND code = '$code' ";
          }
          else{
          $sql = "SELECT * FROM jobs WHERE `status` = '1' "; 
        }
         
         $result = mysqli_query($conn, $sql); 
         if (mysqli_num_rows($result)) { ?>

            <div class="" style="text-align:center;">
                    <b>Your Filter Result</b>
            </div>
                <?php
           while ($row=mysqli_fetch_assoc($result)) {
             $id=$row['id'];
             $firm=$row['firm'];
             $location=$row['location'];
             $position=$row['position'];
             $salary=$row['salary'];
             $requirement1=$row['requirement1'];
            //  $language=$row['language'];
            //  $expirence=$row['expirence'];
            //  $age=$row['age'];
            //  $skills=$row['skills'];
             $avatar=$row['avatar'];
             $date=$row['date'];
             $status=$row['status']; 
             $code = $row['code'];
             $currentDate=date("Y-m-d");

             $requirement2=$row['requirement2'];
             $endTime=strtotime($currentDate);
        $strtTime=strtotime($date);
        $dif= abs($endTime-$strtTime);
        $daysCount= $dif/86400;
        $daysCount= intval($daysCount);
        if ($daysCount==0) {
          $daysCount="posted today";
        }elseif ($daysCount==1) {
          $daysCount="Yesterday";
        }elseif ($daysCount>1 && $daysCount<14) {
          $daysCount=$daysCount."days ago";
        }else{
          $daysCount=$date;
        }
              ?> 
              <div class="blog1">
                <a href="description.php?id=<?php echo $id; ?>">
                  <div style="text-align:center;">
                    <img src="<?php echo $avatar; ?>" class="job-img" > 
                  </div>
                  <div class="blur">
                  <b style="color:#00B894;font-size:20px;position:absolute;top:0px;right:5px;">
                    <?php echo $code ?>
                  </b>
                    <div style="padding:10px;font-size:15px;">

                    <img src="assets/vectors/1.png" class="" style="width:10%"><br>
                    <br>
                    <b class="j-title">
                      <?php echo $position; ?>
                    </b> <br>

                    <span style="font-size:13px;">
                    <?php echo $firm; ?>
                    </span> <br>
                    <span style="font-size:13px;">
                    <?php echo $location; ?>
                    </span> <br> <br>

                    <div>
                    <span style="font-size:13px;">
                    <b><?php echo $salary; ?> / Month</b>

                    </span>
                    </div>
                    <br>
                    <b class="j-title" style="font-size:21px;color:#00B894;"> 
                    Urgently hiring
                    </b>

                    <div> 
                    <span style="font-size:14px;">
                    <?php 
                      if (strlen($requirement1)>75) {
                          $string=substr($requirement1, 0,75)."...";
                          }else{
                          $string=$requirement1;
                          }
                          echo $string;

                          ?>
                    </span>

                    <br> <br>

                    <span style="font-size:14px;">
                    <?php 
                      if (strlen($requirement2)>75) {
                          $string=substr($requirement2, 0,75)."...";
                          }else{
                          $string=$requirement2;
                          }
                          echo $string;

                        ?>
                    </span>
                    </div> <br>
                    <span style="font-size:14px;float:right;color:#00B894;">
                    <?php echo $daysCount; ?>
                    </span>

                     <br>
                      
                      <b style="float: ;font-size:20px;">View</b>
                    </div>
                  </div>
                </a>
                
              </div>  
          <?php
        } 
      }else{ ?>
        <div style="text-align:center;padding:50px 20px;color:crimson">
          Filter matches no job.
          <br><br>
          <a href="select.php" style="color:#005B49;">
              <b>See Other Jobs</b>
          </a>
        </div>
      <?php }
      ?>
    </div>
    
    <div class="two_btnss">

    <?php
      
      $sqlBX = "SELECT * FROM dpt"; 
      $resultBX = mysqli_query($conn, $sqlBX);
      $days_shared=mysqli_num_rows($resultBX);
      if (mysqli_num_rows($resultBX)) {
        while ($row=mysqli_fetch_assoc($resultBX)) {
          $id=$row['id'];
          $vector=$row['vector'];
          $class=$row['class']; ?>
          <a href="select.php?class=<?php echo $id ?>" class="type wow fadeInUp">
          <?php echo $class ?>
          </a> 
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