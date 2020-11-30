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
  <link href="assets/css/style.css" rel="stylesheet">



 <style type="text/css">
</style>


</head>

<body>


  <section id="section1" class="section1 header">

  <?php include 'controllers/includes/menu.php'; ?>
    
  <div class="heada">
    <a href="./" >
      <img src="assets/vectors/11.png" class="vector1  one" style="z-index:2000;">
      <img src="assets/vectors/1.png" class="vector1 one-one" style="z-index:2000;display: ;width: 41px; height: 27px;">

    </a>
    
    <img src="assets/vectors/bar2.png" class="menu header-btns bar" style="z-index:2000;">
      <a href="about.php" class="about wow fadeInUp header-btns" style="z-index: 4200;">About Us</a>
      <a  class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer">Find Job</a>
      <!-- <a href="" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Blog</a> -->
      <a href="contact.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Contact</a>


      <a class="post-job wow fadeInUp" style="z-index: 4200;cursor:pointer;" onclick="alert('Coming soon')">Applications</a>
      <a class="join-us wow fadeInUp" style="z-index: 4200;cursor:pointer">Get Started</a>
    </div>

    <div class="dream-jobs wow fadeInLeft">Dream <span class="color">Jobs</span>. Top <span class="color">Talent</span>. 
    All in <span class="color">One</span> <span class="color">Place</span>.</div>
    

    <div class="preamble wow fadeInUp">
    Ready to post a job? Get started with Indeed, where you can post an open role in
     minutes. Jobs you pay to post on Indeed will also appear on Glassdoor.
    </div>

    <div class="vector2-holder">
    <img src="assets/vectors/2.png" class="vector2 wow fadeInDown">
    </div>

    <div class="two_btnss">
      <a href="select.php" class="next_job wow fadeInUp">Find Your Next Job</a>

      <a class="hire_talent wow fadeInUp" onclick="alert('Coming soon')" style="color:white;cursor:pointer;">Hire Talent</a>
    </div>
    
    
  </section>
  
    <div class="search_title wow fadeInUp">
      Search for Your Dream job
    </div>

      <input type="text" name="" id="" class="search-form wow fadeInUp"
      placeholder="Enter job code!" maxlength="4" style="padding:0px 40px;
      font-weight:bold;font-size:20px;text-transform: uppercase;text-align:center;">

    <div class="dpt-header wow fadeInUp">
    Choose Department
    </div>
    
    <h class="dpt-header-title wow fadeInUp">
    Just slide through, we’ve got you covered
    </h>


    <div class="dpt-slider wow fadeInUp">

    <div class="owl-carousel owl-theme">
      <?php
      
      $sqlBX = "SELECT * FROM dpt"; 
      $resultBX = mysqli_query($conn, $sqlBX);
      $days_shared=mysqli_num_rows($resultBX);
      if (mysqli_num_rows($resultBX)) {
        while ($row=mysqli_fetch_assoc($resultBX)) {
          $id=$row['id'];
          $vector=$row['vector'];
          $class=$row['class']; ?>
            <div class="item">
              <a href="filter.php?class=<?php echo $id ?>">
                <img src="<?php echo $vector ?>" class="item-img wow fadeInDown" > <br>
                <div style="text-align:center">
                  <?php echo $class ?>
                    
                </div>
              </a>
            </div>
          <?php
        }
      }

      ?>
       
    

    </div>
    


    </div>

    <div class="more wow fadeInUp">
      Available Jobs
    </div>

    <div class="jobHolders">
      <?php 
        
        $sql = "SELECT * FROM jobs WHERE `status` = '1' "; 
        $result = mysqli_query($conn, $sql); 
        if (mysqli_num_rows($result)) {
          while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $firm=$row['firm'];
            $location=$row['location'];
            $position=$row['position'];
            $salary=$row['salary'];
            $description=$row['description'];
            $language=$row['language'];
            $expirence=$row['expirence'];
            $age=$row['age'];
            $skills=$row['skills'];
            $avatar=$row['avatar'];
            $date=$row['date'];
            $status=$row['status'];
            $code=$row['code'];
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
                      <?php echo $avatar; ?>
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
                      if (strlen($description)>140) {
                          $string=substr($description, 0,140)."...";
                          }else{
                          $string=$description;
                          }
                          echo $string;

                          ?>
                    </span>
                    </div> <br>
                    <span style="font-size:14px;float:right;color:#00B894;">
                        2days ago
                    </span>

                     <br>
                      
                      <b style="float: ;font-size:20px;">View</b>
                    </div>
                  </div>
                </a>
                
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
        Finding highly skilled employees can be time consuming and costly. And trying to find 
        a new job can be a frustrating experience. Find out how we can help you with your hiring 
        and job search needs.Finding highly skilled employees can be time consuming and costly.
        And trying to find a new job can be a frustrating experience. Find out how we can help
        you with your hiring and job search needs.Finding highly skilled employees can be time
        consuming and costly. And trying to find a new job can be a frustrating experience. 
        Find out how we can help you with your hiring and job search needs.Finding highly
        skilled employees can be time consuming and costly. And trying to find a new job can
        be a frustrating experience. Find out how we can help you with your hiring and job
        search needs.
      </p>

      <p class="wow fadeInDown footer-writeup-mobile" style="font-weight:none;font-size:15px;">
        Finding highly skilled employees can be time 
        consuming and costly. And trying to find 
        a new job can be a frustrating experience.
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

    <div class="mobileSearchRes"></div>

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
            items:3
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


$('.search-form').keyup(function(){
  input = $('.search-form').val();
  // $('.mobileSearchRes').html(input)

  if (input.length == 4) {
    $.ajax({
    url:"controllers/functions/client/ajax.php",
    method:"POST",
    async:true,
    data:{ 
      "input":input,
      "search":1,
    },
    success:function(data){
      // alert(input)
      $('.mobileSearchRes').html(data)
                        
    },
  })
  }
});


$( ".find" ) .click(function() {
  $('html,body').animate({
  scrollTop: $(".jobHolders").offset().top},
  2000);
})

$( ".join-us" ) .click(function() {
  $('html,body').animate({
  scrollTop: $(".dpt-header").offset().top},
  2000);
})

</script>

<!-- <script src="//code.tidio.co/4hx5f11qnh54qrylyuwlvjupscrxgh2u.js" async></script> -->

</body>

</html>