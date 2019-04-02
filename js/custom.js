jQuery(document).ready(function($){
	$("#myPano").pano({
		img: "https://caporalecabins.spiritweb.com.au/wp-content/themes/caporalecabins/images/gulf-hotel-panorama-example1.jpg"
	});
});

$(document).ready(function(){
  $(".menu-toggle").click(function(){
     if($( "#header" ).hasClass( "hide-menu" )){
	 $("#header").removeClass("hide-menu");
 }
 else{
	$("#header").addClass("hide-menu");
 }
  });

var w = screen.width;
var h = screen.height;  
var newh = h-10;
var neww = w-400;
$(".activeslide img").css({"width": neww+"px", "height": newh+"px", "left": "0px", "top": "0px"});
$(".supersized-fullscreen").click(function(){
    if($("body").hasClass( "expand-supersized" )){
	$("body").removeClass("expand-supersized");
	$('#main').show();
	$('#footer').show();
	$(".activeslide img").css({"width": neww+"px", "height": newh+"px", "left": "0px", "top": "0px"});
 }
 else{
	$("body").addClass("expand-supersized");
	$('#main').hide();
	$('#footer').hide();
	$(".activeslide img").css({"width": w+"px", "height": h+"px", "left": "0px", "top": "0px"});
	
 }
  });
});
