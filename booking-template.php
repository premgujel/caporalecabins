<?php
/*
Template Name: Room Booking 
*/
get_header();
?> 
<style>
body #footer {
	z-index: 99;
	height: 30px;
	right: 382px;
}
.right.carousel-control {
	background: transparent;
	bottom: -52px;
}
.left.carousel-control {
	background: transparent;
	right: 119px;
	left: unset;
	width: 30px;
	z-index: 999;
	bottom: -52px;
}
</style> 
	<section id="main"><div class="wrapper"><h2>Contact Us</h2>
	<?php dynamic_sidebar( 'booking' ); ?>
	</div></section>
	 <footer id="footer"><div class="right-side">© 2019 RoyalGold. All Rights Reserved.</div><div class="left-side"><a class="icon-social icon-twitter tooltip" href="#" target="_blank"></a> <a class="icon-social icon-facebook tooltip" href="#" target="_blank"></a> <a class="icon-social icon-googleplus tooltip" href="#" target="_blank"></a> <a class="icon-social icon-rss tooltip" href="#" target="_blank"></a> <a class="icon-social icon-email tooltip" href="#"></a></div><div class="clear"></div></footer>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active all">
        <img src="/wp-content/themes/caporalecabins/images/1.jpg" alt="Los Angeles">
      </div>

      <div class="item all">
        <img src="/wp-content/themes/caporalecabins/images/2.jpg" alt="Chicago">
      </div>

      <div class="item all">
        <img src="/wp-content/themes/caporalecabins/images/3.jpg" alt="Chicago">
      </div>

      <div class="item all">
        <img src="/wp-content/themes/caporalecabins/images/4.jpg" alt="Chicago">
      </div>
    </div>

    <!-- Left and right controls -->
	<div class="full-navigation">
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>
  </div>
 
<a class="supersized-fullscreen"><span></span></a>
  <script>
var w = screen.width;
var h = screen.height;   
var newh = h-125;
var neww = w-400;
$("#myCarousel").css({"width": neww+"px"});
$(".all img").css({"width": neww+"px", "height": newh+"px", "left": "0px", "top": "0px"});
</script>

<?php
get_footer();
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">