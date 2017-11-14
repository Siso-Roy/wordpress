<!DOCTYPE html>
<html>
<head>
<title>Siso Solutions</title>
<meta name="description" content="Siso develop and deliver websites and mobile apps. Our focus on user experience ensures quality solutions that engage our customers clients. Based in Wellington, NZ"/>
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
<link href="<?php bloginfo('template_directory'); ?>/css/about.css" rel="stylesheet" type="text/css"/>
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

var checkVal = 0;

  $("#animated-ring").delay(1).fadeOut(100);
  		setSvgPos();
  		$(".navholder").delay( 10 ).fadeIn(100);
  		$(".footerInfo").delay( 10 ).fadeIn(100);
  		$("#main_content").delay( 10 ).fadeIn(100); 	


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
		var trophyBot = (($(window).width() * perc) / (1128/386)) * (51/386);
    	var magnifyBot  = (($(window).width() * perc) / (1128/386)) * (379/386);
    	var knightBot  = (($(window).width() * perc) / (1128/386)) * (437/386);
		var trophyHeight = $('#trophy_svg').height();
		var moneyHeight = $('#money_svg').height();
		var lightbulbHeight = $('#lightbulb_svg').height();
		var magnifyHeight = $('#magnify_svg').height();
		var pencilHeight = $('#pencil_svg').height();
		var cogHeight = $('#cog_svg').height();
    	var knightHeight = $('#knight_svg').height();
    	$('#trophy a').css({ height: trophyHeight }); 
    	$('#trophy a').css({ marginTop: -trophyHeight+10 }); 
    	$('#trophy').css({ bottom: trophyBot }); 
		$('#money a').css({ height: moneyHeight }); 
    	$('#money a').css({ marginTop: -moneyHeight+10 }); 
    	$('#money').css({ bottom: trophyBot }); 
		$('#lightbulb a').css({ height: lightbulbHeight }); 
    	$('#lightbulb a').css({ marginTop: -lightbulbHeight+10 }); 
    	$('#lightbulb').css({ bottom: trophyBot });
		$('#magnify a').css({ height: magnifyHeight }); 
    	$('#magnify a').css({ marginTop: -magnifyHeight+10 }); 
    	$('#magnify').css({ bottom: magnifyBot }); 
		$('#pencil a').css({ height: pencilHeight }); 
    	$('#pencil a').css({ marginTop: -pencilHeight+10 }); 
    	$('#pencil').css({ bottom: trophyBot });  
		$('#cog a').css({ height: cogHeight }); 
    	$('#cog a').css({ marginTop: -cogHeight+10 }); 
    	$('#cog').css({ bottom: trophyBot });  
		$('#knight a').css({ height: knightHeight }); 
    	$('#knight a').css({ marginTop: -knightHeight+10 }); 
    	$('#knight').css({ bottom: knightBot });  
	}
	else {
		//do nothing
	}
	checkVal++;
}

$(window).click(function (e) {
    if (svgMode === "trophy") {
    	if ($(e.target).attr("id") === "trophy_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#trophy_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "money") {
    	if ($(e.target).attr("id") === "money_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#money_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "cog") {
    	if ($(e.target).attr("id") === "cog_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#cog_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "pencil") {
    	if ($(e.target).attr("id") === "pencil_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#pencil_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "lightbulb") {
    	if ($(e.target).attr("id") === "lightbulb_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#lightbulb_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "magnify") {
    	if ($(e.target).attr("id") === "magnify_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#magnify_svg" ).toggleClass( "showSVG" );
    	}
    }
    else if (svgMode === "knight") {
    	if ($(e.target).attr("id") === "knight_svg") {
        	
    	}
    	else {
    		svgMode = "off";
    		$( "#knight_svg" ).toggleClass( "showSVG" );
    	}
    }
    else {
    	//do nothing as menu was clicked
    }
});
    
$('#trophy_pop').popover({ 
	placement: "left",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'SUCCESS <a href="#" class="close closeTrophy"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#trophy_popText").html();

    }

  });

$('#trophy_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "trophy";
		$( "#trophy_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 

$('#money_pop').popover({ 
	placement: "top",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'CLEAR PRICING <a href="#" class="close closeMoney"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#money_popText").html();

    }

  });

$('#money_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "money";
		$( "#money_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
 
$('#cog_pop').popover({ 
	placement: "top",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'TECH <a href="#" class="close pop_close"  aria-label="Close" data-dismiss="popover" id="closeCog">×</a>',
		content: function() {

      return $("#cog_popText").html();

    }

  }); 
  
$('#cog_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "cog";
		$( "#cog_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 

$('#pencil_pop').popover({ 
	placement: "top",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'UX DESIGN <a href="#" class="close closePencil"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#pencil_popText").html();

    }

  });
  
$('#pencil_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "pencil";
		$( "#pencil_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
  
$('#lightbulb_pop').popover({ 
	placement: "right",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'IDEAS <a href="#" class="close closeLightbulb"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#lightbulb_popText").html();

    }

  });

$('#lightbulb_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "lightbulb";
		$( "#lightbulb_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
 
$('#magnify_pop').popover({ 
	placement: "right",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'ANALYSIS <a href="#" class="close closeMagnify"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#magnify_popText").html();

    }

  });

$('#magnify_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "magnify";
		$( "#magnify_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 
 
 
$('#knight_pop').popover({ 
	placement: "bottom",
	container: "body",
    trigger: "focus",
    html : true,
		title : 'STRATEGY <a href="#" class="close closeKnight"  aria-label="Close" data-dismiss="popover" id="pop_close">×</a>',
		content: function() {

      return $("#knight_popText").html();

    }

  });
  
$('#knight_pop').click(function(){
	if (svgMode === "off") {
		event.stopPropagation();
		svgMode = "knight";
		$( "#knight_svg" ).toggleClass( "showSVG" );
	}
	else {
    	//do nothing
    }
 }); 

$('#knight_front').click(function(){
	$( "#knight_front" ).toggleClass( "flipped" );
	$( "#knight_back" ).toggleClass( "flipped" );
	expandKnight();
 });

function expandKnight() {
	$("#mobWhy_knight").css("z-index", "999");
	setTimeout((function() {
		$("#knight_whyText").fadeIn(1000);
		$("#mobWhy_knight").css("display", "inline");
        $("#mobWhy_knight").animate({
            height:'75vw',
            width:'75vw',
            left:'0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_knight').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newLeft = ($('#whyHolder').width() / 2) - ($(window).width() * 0.25) - 2;
 	$("#knight_whyText").fadeOut(500);
 	$("#mobWhy_knight").animate({
            height: newSize,
            width: newSize,
            left: newLeft,
            top:'0px'
        },'fast');
	setTimeout((function() {
		$("#mobWhy_knight").css("z-index", "31");
		$("#mobWhy_knight").css("display", "none");
		$( "#knight_front" ).toggleClass( "flipped" );
		$( "#knight_back" ).toggleClass( "flipped" );
	}), 700);
 });
	
$('#lightbulb_front').click(function(){
	$( "#lightbulb_front" ).toggleClass( "flipped" );
	$( "#lightbulb_back" ).toggleClass( "flipped" );
	expandLightbulb();
 });

function expandLightbulb() {
	$("#mobWhy_lightbulb").css("z-index", "999");
	setTimeout((function() {
		$("#lightbulb_whyText").fadeIn(1000);
		$("#mobWhy_lightbulb").css("display", "inline");
        $("#mobWhy_lightbulb").animate({
            height:'75vw',
            width:'75vw',
            left: '0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_lightbulb').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newLeft = ($('#whyHolder').width() / 2) + 2;
 	$("#lightbulb_whyText").fadeOut(500);
 	$("#mobWhy_lightbulb").animate({
            height: newSize,
            width: newSize,
            left: newLeft,
            top:'0px'
        },'fast');
	setTimeout((function() {
		$("#mobWhy_lightbulb").css("z-index", "31");
		$("#mobWhy_lightbulb").css("display", "none");
		$( "#lightbulb_front" ).toggleClass( "flipped" );
		$( "#lightbulb_back" ).toggleClass( "flipped" );
	}), 700);
 });
	
$('#pencil_front').click(function(){
	$( "#pencil_front" ).toggleClass( "flipped" );
	$( "#pencil_back" ).toggleClass( "flipped" );
	expandPencil();
 });

function expandPencil() {
	$("#mobWhy_pencil").css("z-index", "999");
	setTimeout((function() {
		$("#pencil_whyText").fadeIn(1000);
		$("#mobWhy_pencil").css("display", "inline");
        $("#mobWhy_pencil").animate({
            height:'75vw',
            width:'75vw',
            left:'0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_pencil').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newTop = ($("#whyHolder").height() * 0.5) - ((($(window).width() * 0.25) - 2) * 0.5);
 	$("#pencil_whyText").fadeOut(500);
 	$("#mobWhy_pencil").animate({
            height: newSize,
            width: newSize,
            top: newTop,
			left:'0px'
        },'fast');
	setTimeout((function() {
		$("#mobWhy_pencil").css("z-index", "31");
		$("#mobWhy_pencil").css("display", "none");
		$( "#pencil_front" ).toggleClass( "flipped" );
		$( "#pencil_back" ).toggleClass( "flipped" );
	}), 700);
 });

$('#magnify_front').click(function(){
	$( "#magnify_front" ).toggleClass( "flipped" );
	$( "#magnify_back" ).toggleClass( "flipped" );
	expandMagnify();
 });

function expandMagnify() {
	$("#mobWhy_magnify").css("z-index", "999");
	setTimeout((function() {
		$("#magnify_whyText").fadeIn(1000);
		$("#mobWhy_magnify").css("display", "inline");
        $("#mobWhy_magnify").animate({
            height:'75vw',
            width:'75vw',
            left:'0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_magnify').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newTop = ($("#whyHolder").height() * 0.5) - ((($(window).width() * 0.25) - 2) * 0.5);
 	$("#magnify_whyText").fadeOut(500);
 	$("#mobWhy_magnify").animate({
            height: newSize,
            width: newSize,
            top: newTop,
			left: newTop
        },'fast');
	setTimeout((function() {
		$("#mobWhy_magnify").css("z-index", "31");
		$("#mobWhy_magnify").css("display", "none");
		$( "#magnify_front" ).toggleClass( "flipped" );
		$( "#magnify_back" ).toggleClass( "flipped" );
	}), 700);
 });

$('#cog_front').click(function(){
	$( "#cog_front" ).toggleClass( "flipped" );
	$( "#cog_back" ).toggleClass( "flipped" );
	expandCog();
 });

function expandCog() {
	$("#mobWhy_cog").css("z-index", "999");
	setTimeout((function() {
		$("#cog_whyText").fadeIn(1000);
		$("#mobWhy_cog").css("display", "inline");
        $("#mobWhy_cog").animate({
            height:'75vw',
            width:'75vw',
            left:'0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_cog').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newTop =  ($("#whyHolder").height() * 0.5) - ((($(window).width() * 0.25) - 2) * 0.5);
 	var newLeft = $("#whyHolder").height() - ($(window).width() * 0.25) + 2;
 	$("#cog_whyText").fadeOut(500);
 	$("#mobWhy_cog").animate({
            height: newSize,
            width: newSize,
            top: newTop,
			left: newLeft
        },'fast');
	setTimeout((function() {
		$("#mobWhy_cog").css("z-index", "31");
		$("#mobWhy_cog").css("display", "none");
		$( "#cog_front" ).toggleClass( "flipped" );
		$( "#cog_back" ).toggleClass( "flipped" );
	}), 700);
 });	

$('#money_front').click(function(){
	$( "#money_front" ).toggleClass( "flipped" );
	$( "#money_back" ).toggleClass( "flipped" );
	expandMoney();
 });

function expandMoney() {
	$("#mobWhy_money").css("z-index", "999");
	setTimeout((function() {
		$("#money_whyText").fadeIn(1000);
		$("#mobWhy_money").css("display", "inline");
        $("#mobWhy_money").animate({
            height:'75vw',
            width:'75vw',
            left:'0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_money').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newTop = $("#whyHolder").height() - ($(window).width() * 0.25) + 2;
 	var newLeft = ($('#whyHolder').width() / 2) - ($(window).width() * 0.25) - 2;
 	$("#money_whyText").fadeOut(500);
 	$("#mobWhy_money").animate({
            height: newSize,
            width: newSize,
            top: newTop,
            left: newLeft
        },'fast');
	setTimeout((function() {
		$("#mobWhy_money").css("z-index", "31");
		$("#mobWhy_money").css("display", "none");
		$( "#money_front" ).toggleClass( "flipped" );
		$( "#money_back" ).toggleClass( "flipped" );
	}), 700);
 });	
	
$('#trophy_front').click(function(){
	$( "#trophy_front" ).toggleClass( "flipped" );
	$( "#trophy_back" ).toggleClass( "flipped" );
	expandTrophy();
 });

function expandTrophy() {
	$("#mobWhy_trophy").css("z-index", "999");
	setTimeout((function() {
		$("#trophy_whyText").fadeIn(1000);
		$("#mobWhy_trophy").css("display", "inline");
        $("#mobWhy_trophy").animate({
            height:'75vw',
            width:'75vw',
            left:'0px',
            top:'0px'
        },'fast');
    }), 700);
}
 
 $('#close_trophy').click(function(){
 	var newSize = ($(window).width() * 0.25) - 2;
 	var newTop = $("#whyHolder").height() - ($(window).width() * 0.25) + 2;
 	var newLeft = ($('#whyHolder').width() / 2) + 2;
 	$("#trophy_whyText").fadeOut(500);
 	$("#mobWhy_trophy").animate({
            height: newSize,
            width: newSize,
            top: newTop,
            left: newLeft
        },'fast');
	setTimeout((function() {
		$("#mobWhy_trophy").css("z-index", "31");
		$("#mobWhy_trophy").css("display", "none");
		$( "#trophy_front" ).toggleClass( "flipped" );
		$( "#trophy_back" ).toggleClass( "flipped" );
	}), 700);
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
		var trophyBot = (($(window).width() * perc) / (1128/386)) * (51/386);
    	var magnifyBot  = (($(window).width() * perc) / (1128/386)) * (379/386);
    	var knightBot  = (($(window).width() * perc) / (1128/386)) * (437/386);
		var trophyHeight = $('#trophy_svg').height();
		var moneyHeight = $('#money_svg').height();
		var lightbulbHeight = $('#lightbulb_svg').height();
		var magnifyHeight = $('#magnify_svg').height();
		var pencilHeight = $('#pencil_svg').height();
		var cogHeight = $('#cog_svg').height();
    	var knightHeight = $('#knight_svg').height();
    	$('#trophy a').css({ height: trophyHeight }); 
    	$('#trophy a').css({ marginTop: -trophyHeight+10 }); 
    	$('#trophy').css({ bottom: trophyBot }); 
		$('#money a').css({ height: moneyHeight }); 
    	$('#money a').css({ marginTop: -moneyHeight+10 }); 
    	$('#money').css({ bottom: trophyBot }); 
		$('#lightbulb a').css({ height: lightbulbHeight }); 
    	$('#lightbulb a').css({ marginTop: -lightbulbHeight+10 }); 
    	$('#lightbulb').css({ bottom: trophyBot });
		$('#magnify a').css({ height: magnifyHeight }); 
    	$('#magnify a').css({ marginTop: -magnifyHeight+10 }); 
    	$('#magnify').css({ bottom: magnifyBot }); 
		$('#pencil a').css({ height: pencilHeight }); 
    	$('#pencil a').css({ marginTop: -pencilHeight+10 }); 
    	$('#pencil').css({ bottom: trophyBot });  
		$('#cog a').css({ height: cogHeight }); 
    	$('#cog a').css({ marginTop: -cogHeight+10 }); 
    	$('#cog').css({ bottom: trophyBot });  
		$('#knight a').css({ height: knightHeight }); 
    	$('#knight a').css({ marginTop: -knightHeight+10 }); 
    	$('#knight').css({ bottom: knightBot }); 
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
        <li class="nav-item"><a class="nav-link active" href="<?php echo site_url(); ?>/about">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/services">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/work">WORK</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/news">NEWS</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/contact-us">CONTACT US</a></li>
    </ul>
  </div>
</nav>
</div>
</header>

	