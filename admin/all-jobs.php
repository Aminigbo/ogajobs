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
    <a href="./" class="about wow fadeInUp header-btns" style="z-index: 4200;">Home</a>
      <a href="" class="find wow fadeInUp header-btns" style="z-index: 4200;cursor:pointer">Messages</a>
      <a href="create.php" class="blog wow fadeInUp header-btns" style="z-index: 4200;">Create</a>
      <!-- <a href="create.php" class="filter wow fadeInUp header-btns" style="z-index: 4200;">Create</a>  -->
       

     <!-- <input type="text" name="" id="" class="search-form" placeholder="Search for Your Dream job"> -->
</div>

<br><br>
    <div class="jobHolders"> 
    
        <?php 
          $sql = "SELECT * FROM jobs ";   
         
         $result = mysqli_query($conn, $sql); 
         if (mysqli_num_rows($result)) { ?>

            <span name="" id="" class="search-form" style="box-shadow:none;">
               ALL JOBS
            </span>
    <?php
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
             $code = $row['code'];
              ?> 
              <div class="blog1">
                <a href="description.php?id=<?php echo $id; ?>">
                  <div style="text-align:center;">
                    <img src="../<?php echo $avatar; ?>" class="job-img" > 
                  </div>
                  <div class="blur">
                  <b style="color:#00B894;font-size:20px;position:absolute;top:0px;right:5px;">
                    <?php echo $code ?>
                  </b>
                    <div style="padding:10px;font-size:15px;">

                    <img src="../assets/vectors/1.png" class="" style="width:10%"><br>
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
                      if (strlen($description)>140) {
                          $string=substr($description, 0,140)."...";
                          }else{
                          $string=$description;
                          }
                          echo $string;

                          ?>
                    </span>
                    </div> <br>
                    <b style="font-size:14px;float:right;color:#00B894;">
                        <?php if ($status == '1') {
                            echo "Active";
                        }else{
                            echo "Not active";
                        } ?>
                    </b>

                     <br>
                      
                      <!-- <b style="float: ;font-size:20px;">View</b> -->
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

    
    
  </section>
  
    
  

  <!-- <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script> 
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
  <script src="../assets/vendor/wow/wow.min.js"></script> 
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/superfish/superfish.min.js"></script> 

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

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