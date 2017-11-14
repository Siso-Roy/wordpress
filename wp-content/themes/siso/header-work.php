<!DOCTYPE html>
<html>
<head>
<title>Siso Solutions</title>
<meta name="description" content="Siso develop and deliver websites and mobile apps. Our focus on user experience ensures quality solutions that engage our customers clients."/>
<meta name="keywords" content="Web,mobile,mobile apps,software development,app,development,design,ios,iphone,ipad,apple,android,windows,mobile,nz,new,zealand,wellington,responsive design,wellington web design,web design nz,siso">
<link rel="canonical" href="http://www.siso.co.nz/" />
<meta property="og:locale" content="en_NZ" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Mobile & web development, business analyst and interaction design services" />
<meta property="og:description" content="Siso develop and deliver websites and mobile apps. Our focus on user experience ensures quality solutions that engage our customers clients." />
<meta property="og:url" content="http://www.siso.co.nz/" />
<meta property="og:site_name" content="Siso Solutions" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

<!-- css -->
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<link href="<?php bloginfo('template_directory'); ?>/css/work.css" rel="stylesheet" type="text/css"/>
<link href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=News+Cycle|Open+Sans+Condensed:300|Oswald:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


<!-- javascript files -->    
<script type="text/javascript" src="https://d3js.org/d3.v4.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-git.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	
    
<script type='text/javascript'>//<![CDATA[
$(window).on("load", function () {
$(document).ready(function(){

$(function () {
    $('[data-toggle="popover"]').popover()
})

var svgMode = "off";
var checkVal = 0;

setSvgPos();
	
function setSvgPos() {
	if (checkVal == 0) {
		var testHeight = $("#svg-holder").height();
		//$( "#svg-holder" ).css("margin-top", -testHeight);
		var w = screen.width;
        var h = screen.height;
        var ratio = w / h;
        var perc = 0.8;
        if (ratio <= (970 / 500)) {
        	if( h <= 500) {
        		perc = 0.7;
        	}
        }
		var nztaBot = (($(window).width() * perc) / (1084/236)) * (186/236);
		var msdBot = (($(window).width() * perc) / (1084/236)) * (283/236);
		var masBot = (($(window).width() * perc) / (1084/236)) * (375/236);
		var wetaBot = (($(window).width() * perc) / (1084/236)) * (398/236);
		var nzteBot = (($(window).width() * perc) / (1084/236)) * (362/236);
		var internalBot = (($(window).width() * perc) / (1084/236)) * (272/236);
		var insynchBot = (($(window).width() * perc) / (1084/236)) * (192/236);
		var nztaHeight = $('#nzta_svg').height();
		var msdHeight = $('#msd_svg').height();
		var masHeight = $('#mas_svg').height();
		var wetaHeight = $('#weta_svg').height();
		var nzteHeight = $('#nzte_svg').height();
		var internalHeight = $('#internal_svg').height();
    	var insynchHeight = $('#insynch_svg').height();
    	
		$('#nzta a').css({ height: nztaHeight }); 
    	$('#nzta a').css({ marginTop: -nztaHeight+10 }); 
    	$('#nzta').css({ bottom: nztaBot }); 
		$('#msd a').css({ height: msdHeight }); 
    	$('#msd a').css({ marginTop: -msdHeight+10 }); 
    	$('#msd').css({ bottom: msdBot }); 
		$('#mas a').css({ height: masHeight }); 
    	$('#mas a').css({ marginTop: -masHeight+10 }); 
    	$('#mas').css({ bottom: masBot });
		$('#weta a').css({ height: wetaHeight }); 
    	$('#weta a').css({ marginTop: -wetaHeight+10 }); 
    	$('#weta').css({ bottom: wetaBot }); 
		$('#nzte a').css({ height: nzteHeight }); 
    	$('#nzte a').css({ marginTop: -nzteHeight+10 }); 
    	$('#nzte').css({ bottom: nzteBot });  
		$('#internal a').css({ height: internalHeight }); 
    	$('#internal a').css({ marginTop: -internalHeight+10 }); 
    	$('#internal').css({ bottom: internalBot });  
		$('#insynch a').css({ height: insynchHeight }); 
    	$('#insynch a').css({ marginTop: -insynchHeight+10 }); 
    	$('#insynch').css({ bottom: insynchBot });  
	}
	else {
		//do nothing
	}
	checkVal++;
}

$(window).click(function (e) {
    if (svgMode === "nzta") {
    	if ($(e.target).attr("id") === "nzta_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#nzta_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "msd") {
    	if ($(e.target).attr("id") === "msd_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#msd_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "mas") {
    	if ($(e.target).attr("id") === "mas_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#mas_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "weta") {
    	if ($(e.target).attr("id") === "weta_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#weta_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "nzte") {
    	if ($(e.target).attr("id") === "nzte_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#nzte_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "internal") {
    	if ($(e.target).attr("id") === "internal_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#internal_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "insynch") {
    	if ($(e.target).attr("id") === "insynch_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#insynch_svg" ).toggleClass( "showSVG" );
    	}
    }
    else {
    	//do nothing as menu was clicked
    }
});
    
$('#nzta_pop').popover({ 
	placement: "right",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'NEW ZEALAND TRANSPORT AGENCY <a href="#" class="close closeNzta"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#nzta_popText").html();

    }

  });

$('#nzta_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "nzta";
		$( "#nzta_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 

$('#msd_pop').popover({ 
	placement: "right",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'MINISTRY OF SOCIAL DEVELOPMENT <a href="#" class="close closeMsd"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#msd_popText").html();

    }

  });

$('#msd_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "msd";
		$( "#msd_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
 
$('#mas_pop').popover({ 
	placement: "bottom",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'MEDICAL ASSURANCE SOCIETY <a href="#" class="close closeMas"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#mas_popText").html();

    }

  }); 
  
$('#mas_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "mas";
		$( "#mas_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 

$('#weta_pop').popover({ 
	placement: "bottom",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'WETA DIGITAL <a href="#" class="close closeWeta"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#weta_popText").html();

    }

  });
  
$('#weta_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "weta";
		$( "#weta_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
  
$('#nzte_pop').popover({ 
	placement: "bottom",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'NZTE <a href="#" class="close closeNzte"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#nzte_popText").html();

    }

  });

$('#nzte_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "nzte";
		$( "#nzte_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
 
$('#internal_pop').popover({ 
	placement: "left",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'INETRNAL PROJECTS <a href="#" class="close closeInternal"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#internal_popText").html();

    }

  });

$('#internal_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "internal";
		$( "#internal_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
 
 
$('#insynch_pop').popover({ 
	placement: "left",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'INSYNCH GLOBAL <a href="#" class="close closeInsynch"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#insynch_popText").html();

    }

  });
  
$('#insynch_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "insynch";
		$( "#insynch_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
	
});
});//]]> 

$(window).resize(function(){

	var w = screen.width;
        var h = screen.height;
        var ratio = w / h;
        var perc = 0.8;
        if (ratio <= (970 / 500)) {
        	if( h <= 500) {
        		perc = 0.7;
        	}
        }
		var nztaBot = (($(window).width() * perc) / (1084/236)) * (186/236);
		var msdBot = (($(window).width() * perc) / (1084/236)) * (283/236);
		var masBot = (($(window).width() * perc) / (1084/236)) * (375/236);
		var wetaBot = (($(window).width() * perc) / (1084/236)) * (398/236);
		var nzteBot = (($(window).width() * perc) / (1084/236)) * (362/236);
		var internalBot = (($(window).width() * perc) / (1084/236)) * (272/236);
		var insynchBot = (($(window).width() * perc) / (1084/236)) * (192/236);
		var nztaHeight = $('#nzta_svg').height();
		var msdHeight = $('#msd_svg').height();
		var masHeight = $('#mas_svg').height();
		var wetaHeight = $('#weta_svg').height();
		var nzteHeight = $('#nzte_svg').height();
		var internalHeight = $('#internal_svg').height();
    	var insynchHeight = $('#insynch_svg').height();
    	
		$('#nzta a').css({ height: nztaHeight }); 
    	$('#nzta a').css({ marginTop: -nztaHeight+10 }); 
    	$('#nzta').css({ bottom: nztaBot }); 
		$('#msd a').css({ height: msdHeight }); 
    	$('#msd a').css({ marginTop: -msdHeight+10 }); 
    	$('#msd').css({ bottom: msdBot }); 
		$('#mas a').css({ height: masHeight }); 
    	$('#mas a').css({ marginTop: -masHeight+10 }); 
    	$('#mas').css({ bottom: masBot });
		$('#weta a').css({ height: wetaHeight }); 
    	$('#weta a').css({ marginTop: -wetaHeight+10 }); 
    	$('#weta').css({ bottom: wetaBot }); 
		$('#nzte a').css({ height: nzteHeight }); 
    	$('#nzte a').css({ marginTop: -nzteHeight+10 }); 
    	$('#nzte').css({ bottom: nzteBot });  
		$('#internal a').css({ height: internalHeight }); 
    	$('#internal a').css({ marginTop: -internalHeight+10 }); 
    	$('#internal').css({ bottom: internalBot });  
		$('#insynch a').css({ height: insynchHeight }); 
    	$('#insynch a').css({ marginTop: -insynchHeight+10 }); 
    	$('#insynch').css({ bottom: insynchBot });  
	
});

</script>

  
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div id="container">

<header id="header">
<div class="navholder">
<nav class="navbar navbar-toggleable-sm navbar-light">
  <button class="navbar-toggler navbar-toggler-right hidden-md-up" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <ul class="nav navbar-nav float-sm-right float-xs-right">
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/about">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/services">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link active" href="<?php echo site_url(); ?>/work">WORK</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/news">NEWS</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/contact-us">CONTACT US</a></li>
    </ul>
  </div>
</nav>
</div>
</header>

	