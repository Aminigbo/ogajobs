
<style>
    /* 
small screen
--------------------------------*/
@media only screen and (max-width: 690px) {
    .mobile-menu{
    position: fixed;
    height: 40%;
    width: 100%;
    left: 0px;
    top: 8%;
    background-color: #005B49;
    z-index: 200 ;
    display: none;
    padding: 40px 30px;
  }

  .times{
    position: absolute;
    /* width: 75px;
    height: 21px; */
  right: 6%;
  top: 17px;
  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 18px;
  line-height: 21px;
  color: #17282F;
  }
}

/* 
large screen
--------------------------------*/
@media only screen and (min-width: 690px) {
    .mobile-menu{
        display:none;
    }
}

</style>

<div class="mobile-menu">
    <span class="close-bar" style="position:absolute;bottom:0px;left:0px;width:100%;text-align:center;
    background-color:#6b6666;color:white">
      Close
    </span>

    <a href="" style="margin:10px;color:white;"><b> About Us </b> </a><br>
    <a href="select.php" style="margin:10px;color:white;"><b> Find Jobs </b> </a><br>
    <!-- <a href="" style="margin:10px;color:white;"><b> Hire </b> </a> <br> -->
    <a href="" style="margin:10px;color:white;"><b> Blog </b> </a><br>
    <a href="" style="margin:10px;color:white;"><b> Report </b> </a><br>
    <a href="" style="margin:10px;color:white;"><b> Terms </b> </a><br>
    <!-- <a href="" style="margin:10px;color:white;"><b> Create </b> </a><br> -->
  </div>

  
