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
<link href="<?php bloginfo('template_directory'); ?>/css/serv.css" rel="stylesheet" type="text/css"/>

<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=News+Cycle|Open+Sans+Condensed:300|Oswald:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>


<!-- javascript files -->    
<script type="text/javascript" src="https://d3js.org/d3.v4.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-git.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	
    
<script type='text/javascript'>//<![CDATA[
$(window).on("load", function () {
$(document).ready(function(){

var tau = 2 * Math.PI; // http://tauday.com/tau-manifesto
var arcSize = 250;

// An arc function with all values bound except the endAngle. So, to compute an
// SVG path string for a given angle, we pass an object with an endAngle
// property to the `arc` function, and it will return the corresponding string.
var arc1 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0 * tau);

var arc2 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0.25 * tau);
  
var arc3 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0.5 * tau);  
  
var arc4 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0.75 * tau); 

var arc5 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0.25 * tau); 
  
var arc6 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0.5 * tau); 
  
var arc7 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0.75 * tau); 
  
var arc8 = d3.arc()
  .innerRadius(0)
  .outerRadius(arcSize)
  .startAngle(0 * tau); 
  
// Get the SVG container, and apply a transform such that the origin is the
// center of the canvas. This way, we don’t need to position arcs individually.
var svg1 = d3.select("#servarc1"),
  width = +svg1.attr("width"),
  height = +svg1.attr("height"),
  g = svg1.append("g").attr("transform", "translate( 0," + height + ")");

var svg2 = d3.select("#servarc2"),
  width = +svg2.attr("width"),
  height = +svg2.attr("height"),
  h = svg2.append("g").attr("transform", "translate(0,0)");
  
var svg3 = d3.select("#servarc3"),
  width = +svg3.attr("width"),
  height = +svg3.attr("height"),
  i = svg3.append("g").attr("transform", "translate(" + width + ",0)");
  
var svg4 = d3.select("#servarc4"),
  width = +svg4.attr("width"),
  height = +svg4.attr("height"),
  j = svg4.append("g").attr("transform", "translate(" + width + "," + height + ")");

var svg5 = d3.select("#content1"),
  width = +svg5.attr("width"),
  height = +svg5.attr("height"),
  k = svg5.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var svg6 = d3.select("#content2"),
  width = +svg6.attr("width"),
  height = +svg6.attr("height"),
  l = svg6.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
  
  var svg7 = d3.select("#content3"),
  width = +svg7.attr("width"),
  height = +svg7.attr("height"),
  m = svg7.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
  
var svg8 = d3.select("#content4"),
  width = +svg8.attr("width"),
  height = +svg8.attr("height"),
  n = svg8.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
  
// Add the foreground arc in orange, currently showing 12.7%.
var foreground1 = g.append("path")
  .datum({
    endAngle: 0.25 * tau
  })
  .style("stroke", "#000000")
  .style("stroke-width", "2px")
  .style("fill", "#ffffff")
  .attr("d", arc1);

var foreground2 = h.append("path")
  .datum({
    endAngle: 0.5 * tau
  })
  .style("stroke", "#000000")
  .style("stroke-width", "2px")
  .style("fill", "#ffffff")
  .attr("d", arc2);
  
var foreground3 = i.append("path")
  .datum({
    endAngle: 0.75 * tau
  })
  .style("stroke", "#000000")
  .style("stroke-width", "2px")
  .style("fill", "#ffffff")
  .attr("d", arc3);

var foreground4 = j.append("path")
  .datum({
    endAngle: 1 * tau
  })
  .style("stroke", "#000000")
  .style("stroke-width", "2px")
  .style("fill", "#ffffff")
  .attr("d", arc4);

var foreground5 = k.append("path")
  .datum({
    endAngle: 0.25 * tau
  })
  .style("stroke", "transparent")
  .style("fill", "#EF4939")
  .attr("d", arc5);

var foreground6 = l.append("path")
  .datum({
    endAngle: 0.5 * tau
  })
  .style("stroke", "transparent")
  .style("fill", "#EF4939")
  .attr("d", arc6);
  
var foreground7 = m.append("path")
  .datum({
    endAngle: 0.75 * tau
  })
  .style("stroke", "transparent")
  .style("fill", "#EF4939")
  .attr("d", arc7);
  
var foreground8 = n.append("path")
  .datum({
    endAngle: 0 * tau
  })
  .style("stroke", "transparent")
  .style("fill", "#EF4939")
  .attr("d", arc8);
 
// Every so often, start a transition to a new random angle. The attrTween
// definition is encapsulated in a separate function (a closure) below.
function showContent1(){
	var t = d3.timer(function() {
  	$("#contArc1").css("z-index", "26");
    $("#serv2").css("z-index", "25");
	$("#serv3").css("z-index", "24");
    $("#serv4").css("z-index", "23");
		foreground5.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween5(1.25 * tau));
    $("#servDesc1").delay(400).fadeIn(500).queue(function(next) { 
  		t.stop(); 
  		$( this ).dequeue();
  	next(); 
   });
   });
}

function showContent2(){
	var t2 = d3.timer(function() {
  	$("#contArc1").css("z-index", "23");
    $("#contArc2").css("z-index", "26");
    $("#serv1").css("z-index", "26");
    $("#serv2").css("z-index", "28");
	$("#serv3").css("z-index", "25");
    $("#serv4").css("z-index", "24");
	foreground6.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween6(1.5 * tau));
    $("#servDesc2").delay(400).fadeIn(500).queue(function(next) { 
  		t2.stop(); 
  		$( this ).dequeue();
  	next(); 
   });
	});
}

function showContent3(){
	var t3 = d3.timer(function() {
	$("#contArc1").css("z-index", "21");
    $("#contArc2").css("z-index", "22");
    $("#contArc3").css("z-index", "26");
    $("#serv1").css("z-index", "23");
    $("#serv2").css("z-index", "25");
	$("#serv3").css("z-index", "28");
    $("#serv4").css("z-index", "24");
	foreground7.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween7(1.75 * tau));
    $("#servDesc3").delay(400).fadeIn(500).queue(function(next) { 
  		t3.stop(); 
  		$( this ).dequeue();
  	next(); 
   });
	});
}

function showContent4(){
	var t4 = d3.timer(function() {
	$("#contArc1").css("z-index", "20");
    $("#contArc2").css("z-index", "22");
    $("#contArc3").css("z-index", "21");
    $("#contArc4").css("z-index", "26");
    $("#serv1").css("z-index", "25");
    $("#serv2").css("z-index", "24");
	$("#serv3").css("z-index", "23");
    $("#serv4").css("z-index", "28");
	foreground8.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween8(1 * tau));
    $("#servDesc4").delay(400).fadeIn(500).queue(function(next) { 
  		t4.stop(); 
  		$( this ).dequeue();
  	next(); 
   });
	});
}

$('#serv1').click(function(){
        showContent1();
    }
);

$('#serv2').click(function(){
        showContent2();
    }
);

$('#serv3').click(function(){
        showContent3();
    }
);

$('#serv4').click(function(){
        showContent4();
    }
);

$('#close_1').click(function(){
	var t5 = d3.timer(function() {
		foreground5.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween5(0.25 * tau));
    $("#servDesc1").delay(100).fadeOut(300).queue(function(next) { 
  		setTimeout(restoreZs,1000)
  		//restoreZs();
  		t5.stop();
  		$( this ).dequeue();
  	next(); 
   });
   });
});

$('#close_2').click(function(){
	var t6 = d3.timer(function() {
		foreground6.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween6(0.5 * tau));
    $("#servDesc2").delay(100).fadeOut(300).queue(function(next) { 
  		setTimeout(restoreZs,1000)
  		//restoreZs();
  		t6.stop();
  		$( this ).dequeue();
  	next(); 
   });
   });
});

$('#close_3').click(function(){
	var t7 = d3.timer(function() {
		foreground7.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween7(0.75 * tau));
    $("#servDesc3").delay(100).fadeOut(300).queue(function(next) { 
  		setTimeout(restoreZs,1000)
  		//restoreZs();
  		t7.stop();
  		$( this ).dequeue();
  	next(); 
   });
   });
});

$('#close_4').click(function(){
	var t8 = d3.timer(function() {
		foreground8.transition()
    	.ease(d3.easeLinear)
    	.duration(500)
    	.attrTween("d", arcTween8(0 * tau));
    $("#servDesc4").delay(100).fadeOut(300).queue(function(next) { 
  		setTimeout(restoreZs,1000)
  		//restoreZs();
  		t8.stop();
  		$( this ).dequeue();
  	next(); 
   });
   });
});

// Returns a tween for a transition’s "d" attribute, transitioning any selected
// arcs from their current angle to the specified new angle.
function arcTween5(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
      d.endAngle = interpolate(t);
      return arc5(d);
    };
  };
}

function arcTween6(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
			d.endAngle = interpolate(t);
      return arc6(d);
    };
  };
}

function arcTween7(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
			d.endAngle = interpolate(t);
      return arc7(d);
    };
  };
}

function arcTween8(newAngle) {
  return function(d) {
    var interpolate = d3.interpolate(d.endAngle, newAngle);
    return function(t) {
			d.endAngle = interpolate(t);
      return arc8(d);
    };
  };
}

function restoreZs() {
	$("#contArc1").css("z-index", "23");
    $("#contArc2").css("z-index", "22");
    $("#contArc3").css("z-index", "21");
    $("#contArc4").css("z-index", "20");
    $("#serv1").css("z-index", "28");
    $("#serv2").css("z-index", "26");
	$("#serv3").css("z-index", "25");
    $("#serv4").css("z-index", "24");
    
}

function restoreArcs() {
	d3.timer(function() {
  	foreground5.transition()
    	.ease(d3.easeLinear)
    	.duration(400)
    	.attrTween("d", arcTween5(0.25 * tau));
  	foreground6.transition()
    	.ease(d3.easeLinear)
    	.duration(400)
    	.attrTween("d", arcTween6(0.5 * tau));
  	foreground7.transition()
    	.ease(d3.easeLinear)
    	.duration(400)
    	.attrTween("d", arcTween7(0.75 * tau));
	foreground8.transition()
    	.ease(d3.easeLinear)
    	.duration(400)
    	.attrTween("d", arcTween8(0 * tau));
	});
}

$('#mobServ1').click(function(){
        $( "#servCont1" ).toggleClass( "hideCont" );
    }
);

$('#mobServ2').click(function(){
        $( "#servCont2" ).toggleClass( "hideCont" );
    }
);

$('#mobServ3').click(function(){
        $( "#servCont3" ).toggleClass( "hideCont" );
    }
);

$('#mobServ4').click(function(){
        $( "#servCont4" ).toggleClass( "hideCont" );
    }
);

$('#close_serv1').click(function(){
        $( "#servCont1" ).toggleClass( "hideCont" );
    }
);

$('#close_serv2').click(function(){
        $( "#servCont2" ).toggleClass( "hideCont" );
    }
);

$('#close_serv3').click(function(){
        $( "#servCont3" ).toggleClass( "hideCont" );
    }
);

$('#close_serv4').click(function(){
        $( "#servCont4" ).toggleClass( "hideCont" );
    }
);

});
});//]]> 

$(window).resize(function(){

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
        <li class="nav-item"><a class="nav-link active" href="<?php echo site_url(); ?>/services">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/work">WORK</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/news">NEWS</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>/contact-us">CONTACT US</a></li>
    </ul>
  </div>
</nav>
</div>
</header>

	