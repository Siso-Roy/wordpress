<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Siso
 */
?><!DOCTYPE html>
<html>
<head>

<?php wp_head(); ?>

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

var svgMode = "off";
var tau = 2 * Math.PI; // http://tauday.com/tau-manifesto
var checkVal = 0;
var easeparam = "bounce";

// An arc function with all values bound except the endAngle. So, to compute an
// SVG path string for a given angle, we pass an object with an endAngle
// property to the `arc` function, and it will return the corresponding string.
var arc1 = d3.arc()
  .innerRadius(22.5)
  .outerRadius(45)
  .startAngle(0.75 * tau);

var arc2 = d3.arc()
  .innerRadius(22.5)
  .outerRadius(45)
  .startAngle(0.25 * tau);

var arc3 = d3.arc()
  .innerRadius(22.5)
  .outerRadius(45)
  .startAngle(-0.5 * tau);

var arc4 = d3.arc()
  .innerRadius(22.5)
  .outerRadius(45)
  .startAngle(0 * tau);

var arc5 = d3.arc()
  .innerRadius(22.5)
  .outerRadius(50)
  .startAngle(0.5 * tau);

var arc6 = d3.arc()
  .innerRadius(22.5)
  .outerRadius(50)
  .startAngle(0 * tau);

// Get the SVG container, and apply a transform such that the origin is the
// center of the canvas. This way, we don’t need to position arcs individually.
var svg1 = d3.select("#anim1"),
  width = +svg1.attr("width"),
  height = +svg1.attr("height"),
  g = svg1.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var svg2 = d3.select("#anim2"),
  width = +svg2.attr("width"),
  height = +svg2.attr("height"),
  h = svg2.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var svg3 = d3.select("#anim3"),
  width = +svg3.attr("width"),
  height = +svg3.attr("height"),
  i = svg3.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var svg4 = d3.select("#anim4"),
  width = +svg4.attr("width"),
  height = +svg4.attr("height"),
  j = svg4.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var svg5 = d3.select("#anim5"),
  width = +svg5.attr("width"),
  height = +svg5.attr("height"),
  k = svg5.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
  
var svg6 = d3.select("#anim6"),
  width = +svg6.attr("width"),
  height = +svg6.attr("height"),
  l = svg6.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

// Add the background arc, from 0 to 100% (tau).
var background1 = g.append("path")
  .datum({
    endAngle: tau
  })
  .style("fill", "transparent")
  .attr("d", arc1);

var background2 = h.append("path")
  .datum({
    endAngle: tau
  })
  .style("fill", "transparent")
  .attr("d", arc2);

var background3 = i.append("path")
  .datum({
    endAngle: tau
  })
  .style("fill", "transparent")
  .attr("d", arc3);

var background4 = j.append("path")
  .datum({
    endAngle: tau
  })
  .style("fill", "transparent")
  .attr("d", arc4);

var background5 = k.append("path")
  .datum({
    endAngle: tau
  })
  .style("fill", "transparent")
  .attr("d", arc5);
  
var background6 = l.append("path")
  .datum({
    endAngle: tau
  })
  .style("fill", "transparent")
  .attr("d", arc6);

// Add the foreground arc in orange, currently showing 12.7%.
var foreground1 = g.append("path")
  .datum({
    endAngle: 0.75 * tau
  })
  .style("fill", "#EF4939")
  .attr("d", arc1);

var foreground2 = h.append("path")
  .datum({
    endAngle: 0.25 * tau
  })
  .style("fill", "#EF4939")
  .attr("d", arc2);

var foreground3 = i.append("path")
  .datum({
    endAngle: -0.5 * tau
  })
  .style("fill", "#EF4939")
  .attr("d", arc3);

var foreground4 = j.append("path")
  .datum({
    endAngle: 0 * tau
  })
  .style("fill", "#EF4939")
  .attr("d", arc4);

var foreground5 = k.append("path")
  .datum({
    endAngle: 0.75 * tau
  })
  .style("fill", "#fff")
  .attr("d", arc5);
  
var foreground6 = l.append("path")
  .datum({
    endAngle: 0.25 * tau
  })
  .style("fill", "#fff")
  .attr("d", arc6); 

// Every so often, start a transition to a new random angle. The attrTween
// definition is encapsulated in a separate function (a closure) below.
var t1 = d3.timer(function() {
  foreground1.transition()
    .ease(d3.easeLinear)
    .duration(400)
    .attrTween("d", arcTween(0 * tau));
  foreground2.transition()
    .ease(d3.easeLinear)
    .duration(400)
    .attrTween("d", arcTween2(-0.5 * tau));
  foreground3.transition()
    .ease(d3.easeLinear)
    .delay(400)
    .duration(400)
    .attrTween("d", arcTween3(0.4 * tau));
  foreground4.transition()
    .ease(d3.easeLinear)
    .delay(400)
    .duration(400)
    .attrTween("d", arcTween4(0.9 * tau));
  $("#animated-ring").delay(1600).fadeOut(500).queue(function(next) { 
  		setSvgPos();
  		$(".navholder").delay( 200 ).fadeIn(500);
  		$(".footerInfo").delay( 200 ).fadeIn(500);
  		$("#main_content").delay( 200 ).fadeIn(500, function () {
  			
  		});
  		t1.stop(); 
  		$( this ).dequeue();
  	next(); 
   });  	
}); 

// Returns a tween for a transition’s "d" attribute, transitioning any selected
// arcs from their current angle to the specified new angle.
function arcTween(newAngle) {

  // The function passed to attrTween is invoked for each selected element when
  // the transition starts, and for each element returns the interpolator to use
  // over the course of transition. This function is thus responsible for
  // determining the starting angle of the transition (which is pulled from the
  // element’s bound datum, d.endAngle), and the ending angle (simply the
  // newAngle argument to the enclosing function).
  return function(d) {

    // To interpolate between the two angles, we use the default d3.interpolate.
    // (Internally, this maps to d3.interpolateNumber, since both of the
    // arguments to d3.interpolate are numbers.) The returned function takes a
    // single argument t and returns a number between the starting angle and the
    // ending angle. When t = 0, it returns d.endAngle; when t = 1, it returns
    // newAngle; and for 0 < t < 1 it returns an angle in-between.
    var interpolate = d3.interpolate(d.endAngle, newAngle);

    // The return value of the attrTween is also a function: the function that
    // we want to run for each tick of the transition. Because we used
    // attrTween("d"), the return value of this last function will be set to the
    // "d" attribute at every tick. (It’s also possible to use transition.tween
    // to run arbitrary code for every tick, say if you want to set multiple
    // attributes from a single function.) The argument t ranges from 0, at the
    // start of the transition, to 1, at the end.
    return function(t) {

      // Calculate the current arc angle based on the transition time, t. Since
      // the t for the transition and the t for the interpolate both range from
      // 0 to 1, we can pass t directly to the interpolator.
      //
      // Note that the interpolated angle is written into the element’s bound
      // data object! This is important: it means that if the transition were
      // interrupted, the data bound to the element would still be consistent
      // with its appearance. Whenever we start a new arc transition, the
      // correct starting angle can be inferred from the data.
      d.endAngle = interpolate(t);

      // Lastly, compute the arc path given the updated data! In effect, this
      // transition uses data-space interpolation: the data is interpolated
      // (that is, the end angle) rather than the path string itself.
      // Interpolating the angles in polar coordinates, rather than the raw path
      // string, produces valid intermediate arcs during the transition.
      return arc1(d);
    };
  };
}

// Returns a tween for a transition’s "d" attribute, transitioning any selected
// arcs from their current angle to the specified new angle.
function arcTween2(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
      d.endAngle = interpolate(t);
      return arc2(d);
    };
  };
}

function arcTween3(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
      d.endAngle = interpolate(t);
      return arc3(d);
    };
  };
}

function arcTween4(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
      d.endAngle = interpolate(t);
      return arc4(d);
    };
  };
}

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
        <li class="nav-item"><a class="nav-link active" href="<?php echo site_url(); ?>">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/services">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/work">WORK</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/news">NEWS</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/contact-us">CONTACT US</a></li>
    </ul>
  </div>
</nav>
</div>
</header>

	