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
  <link href="assets/css/admin.css" rel="stylesheet">



 <style type="text/css">
</style>


</head>

<body>


  <section id="section1" class="section1 header">
    
  <div class="heada">
    <a href="./" >
      <img src="assets/vectors/1.png" class="vector1 wow fadeInDown one" style="z-index:2000;">
 
    </a>
       <a href="" class="about wow fadeInUp header-btns" style="z-index: 4200;">About Us</a>
      <a href="" class="find wow fadeInUp header-btns" style="z-index: 4200;">Post Job</a>
      <a href="" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Blog</a>

      <b class="filter wow fadeInUp header-btns" style="z-index: 4200;">Filter</b>
      
      <img src="assets/vectors/search.png" class="search wow fadeInUp header-btns" style="z-index:2000;display:inline-block"> 
       

</div> 
    <div class="job-holder">

        <?php for ($i=0; $i < 1; $i++) { 
            ?>
        <div class="jobs"> 
            <div class="t-head">
            <img src="assets/vectors/1.png" class="" style="width:10%"><br>

                <b class="j-title">
                    SoftWare Engineering
                </b> <br>

                <span style="font-size:13px;">
                Harvoxx engineering
                </span> <br>
                <span style="font-size:13px;">
                Port harcout
                </span> <br><br><br>
                <br>
            </div>

            <div style="text-align:center;">
                <form action="controllers/functions/admin/script.php" method="POST" enctype='multipart/form-data'>
                    <input type="text" name="firm" id="" placeholder="Enter Firm">
                    <input type="text" name="location" id="" placeholder="Enter location">
                    <input type="text" name="position" id="" placeholder="Enter Position">
                    <input type="text" name="salary" id="" placeholder="Enter salary / month">

                    <textarea style="padding:10px;" name="desc" id="" cols="100" rows="5" placeholder="Enter job description"></textarea> <br>
                    <br>
                    <textarea style="padding:10px;" name="responsibility" id="" cols="100" rows="5" placeholder="Enter employee responsibility"></textarea> <br>

                    <input type="text" name="skills" id="" placeholder="Required skills">
                    <input type="text" name="language" id=""  placeholder="Language skills">
                    <input type="text" name="expirence" id=""  placeholder="Expirence">
                    <input type="text" name="age" id=""  placeholder="Required Age Range"> 
                    <br><br><br>
                    <label  style="width:20%;height:;background-color:#eee;
                    border-radius:10px;padding:30px 10px;text-align:center;color:grey;
                    cursor:pointer;">
                        <b>IMAGE</b>

                        <input accept="image/*" onchange="preview_images(event)" 
                        type="file" name="avatar" id="" style="display: none;">
                    </label>

                    <img id="output_image" class="fa fa-photo vote-box-img" id="training-prev-img"
                     style="height:  ;width: 100px;border:none;display: ;border-radius:5px;">
                    
                    <br><br><br> 

                    <button type="submit" name="add" id="" style="width:50%;height:;background-color:#eee;
                    border-radius:10px;padding:20px;text-align:center;color:white;
                    cursor:pointer;background-color:#005B49;font-size:30px;font-weight:bold;">
                        ADD JOB
                    </button>
                </form>

                <script type='text/javascript'>
                    function preview_images(event) 
                    {
                    var reader = new FileReader();
                    reader.onload = function()
                    {
                    var output = document.getElementById('output_image');
                    output.src = reader.result;
                    

                    }
                    reader.readAsDataURL(event.target.files[0]);


                    }
                </script>

            </div>
        </div>
    <?php
        } ?>
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

        if (windowpos > 900) {
          $(".heada").addClass("head"); 
          
        } else if(windowpos < 1) {
          $(".heada").removeClass("head"); 
        }

        if (windowpos > 605) {
          $(".search-form").addClass("search-form-fixed"); 
          
        } else if(windowpos < 200) {
          $(".search-form").removeClass("search-form-fixed"); 
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