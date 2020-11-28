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
  <link href="assets/css/select.css" rel="stylesheet">



 <style type="text/css">
</style>


</head>

<body>


  <section id="section1" class="section1 header">
    
  <div class="heada">
    <a href="./" >
      <img src="assets/vectors/1.png" class="vector1 wow fadeInDown one" style="z-index:2000;">
      <img src="assets/vectors/11.png" class="vector1 one-one" style="z-index:2000;display: ;width: 41px; height: 27px;">

    </a>
    
    <img src="assets/vectors/bar2.png" class="menu header-btns bar" style="z-index:2000;">
      <a href="" class="about wow fadeInUp header-btns" style="z-index: 4200;">About Us</a>
      <a href="" class="find wow fadeInUp header-btns" style="z-index: 4200;">Find Job</a>
      <a href="" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Blog</a>

      <a href="" class="post-job wow fadeInUp header-btns" style="z-index: 4200;">Post a Job</a>
      <a href="" class="join-us wow fadeInUp header-btns" style="z-index: 4200;">Join Us</a>
       

    <div class="two_btnss">
      <a href="" class="type wow fadeInUp">Filter Jobs</a> 
    </div>
</div>
<br><br><br>
    <div class="job-holder">

        <?php for ($i=0; $i < 4; $i++) { 
            ?>
            <div class="jobs">
            <img src="assets/vectors/1.png" class="one-one" style="width:10%"><br>

            <b class="j-title">
                SoftWare Engineering
            </b> <br>

            <span style="font-size:13px;">
            Harvoxx engineering
            </span> <br>
            <span style="font-size:13px;">
            Port harcout
            </span> <br> <br>

            <div>
            <span style="font-size:13px;">
            ₦85,000 - ₦100,000 a month

            </span>
            </div>

            <b class="j-title">
            Urgently hiring
            </b>

            <div>
            <span style="font-size:14px;">
                Desktop Technician will provide day to day local\remote desktop support,
                receive inbound calls, answer questions, troubleshoot and document steps 
                ......
            </span>
            </div>
            <span style="font-size:14px;float:right;color:#00B894;">
                2days ago
            </span>

    </div>
    <?php
        } ?>
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

      <p class="wow fadeInDown footer-writeup-mobile" style="font-weight:none;font-size:12px;">
        Finding highly skilled employees can be time 
        consuming and costly. And trying to find 
        a new job can be a frustrating experience.
        
      </p>
    </div>
    </div>

    <div class="by">
      Built with  <i class="fa fa-heart" style="color:red;"></i> by
      <a href="https://hthub.com.ng/" class="by-a">
       HARVOXX TECH. HUB
      </a>
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
    
</script>

<!-- <script src="//code.tidio.co/4hx5f11qnh54qrylyuwlvjupscrxgh2u.js" async></script> -->

</body>

</html>