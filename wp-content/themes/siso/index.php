<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Siso
 * @since 1.0
 * @version 1.0
 */

get_header('home'); ?>

	<div class = "fullDiv" id = "main_logo">
		<div class ="logoHolder" id ="animated-ring">
  			<div class ="logoBox" id="box_1">
    			<svg viewBox="0 0 100 100" width="100" height="100" class ="logoAnim" id="anim3"></svg>
  			</div>
  			<div class ="logoBox" id="box_2">
    			<svg viewBox="0 0 100 100" width="100" height="100" class ="logoAnim" id="anim1"></svg>
  			</div>
  			<div class ="logoBox" id="box_3">
    			<svg viewBox="0 0 100 100" width="100" height="100" class ="logoAnim" id="anim2"></svg>
  			</div>
  			<div class ="logoBox" id="box_4">
    			<svg viewBox="0 0 100 100" width="100" height="100" class ="logoAnim" id="anim4"></svg>
  			</div>
  			<div class ="logoBox" id="box_5">
    			<svg viewBox="0 0 100 100" width="100" height="100" class ="logoAnim" id="anim5"></svg>
  			</div>
  			<div class ="logoBox" id="box_6">
    			<svg viewBox="0 0 100 100" width="100" height="100" class ="logoAnim" id="anim6"></svg>
  			</div>
		</div>		
	</div>
	
	<div class = "fullDiv" id = "main_content">
		<div class="popover-text" id = "trophy_popText">
			<?php echo do_shortcode('[about-text name="SUCCESS" category="single"]'); ?>
      	</div>
      	<div class="popover-text" id = "money_popText">
			<?php echo do_shortcode('[about-text name="PRICING" category="single"]'); ?>
      	</div>
      	<div class="popover-text" id = "cog_popText">
			<?php echo do_shortcode('[about-text name="TECH" category="single"]'); ?>
      	</div>
      	<div class="popover-text" id = "lightbulb_popText">
			<?php echo do_shortcode('[about-text name="IDEAS" category="single"]'); ?>
      	</div>
      	<div class="popover-text" id = "knight_popText">
			<?php echo do_shortcode('[about-text name="STRATEGY" category="single"]'); ?>
      	</div>
      	<div class="popover-text" id = "pencil_popText">
			<?php echo do_shortcode('[about-text name="UX" category="single"]'); ?>
      	</div>
      	<div class="popover-text" id = "magnify_popText">
			<?php echo do_shortcode('[about-text name="ANALYSIS" category="single"]'); ?>
      	</div>
		<div id ="intro">
			<p>We provide our clients with user-centric web and mobile solutions. We can provide either a specific service to complete your project or full end-to-end design and build services.</p>
		</div>
		<div id="svg-container">
			<div id ="svg-holder">
			<img id="machinery" src="<?php bloginfo('template_directory'); ?>/images/machinery.svg" alt="machinery">
			<div id="trophy">
				<a id="trophy_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" id="trophy_svg" width="138px" height="164px" viewBox="0 0 138 164" preserveAspectRatio="xMidYMax">
<g>
	<g>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
			M43.703,50.881C34.51,42.293,31.22,33.729,32.65,19.225"/>
		<g>
			
				<rect x="15.232" y="152.729" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="107.545" height="9.264"/>
			
				<rect x="22.657" y="119.713" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="92.694" height="33.016"/>
			
				<rect x="29.223" y="128.428" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="79.563" height="18.953"/>
			
				<rect x="31.483" y="113.176" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="75.042" height="6.537"/>
			
				<rect x="47.114" y="103.08" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="43.781" height="10.096"/>
			<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
				M111.345,2.008c22.328,52.133-33.482,75.088-33.482,75.088v25.984H60.147V77.096c0,0-55.811-22.955-33.482-75.088H111.345z"/>
			<g>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M22.104,17.244l-11.711,0.121c-2.223,15.812,8.66,29.322,17.836,32.668"/>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M35.148,59.23C20.36,62.744-1.372,41.84,3.034,10.49H23.63"/>
			</g>
			<g>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M115.896,17.244l11.711,0.121c2.222,15.812-8.66,29.322-17.836,32.668"/>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M102.852,59.23c14.787,3.514,36.52-17.391,32.113-48.74h-20.596"/>
			</g>
		</g>
	</g>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="40.109" y1="132.379" x2="34.443" y2="132.379"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="34.443" y1="132.379" x2="34.443" y2="137.213"/>
</g>
</svg>
				</a>
				<p>SUCCESS</p>
			</div>
			<div id="lightbulb">
				<a id="lightbulb_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" id="lightbulb_svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax" width="50px" height="88px" viewBox="0 0 50 88">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M48.214,24.484c0-12.821-10.393-23.215-23.215-23.215c-12.82,0-23.213,10.394-23.213,23.215c0,3.165,0.369,9.608,1.781,12.231
		c5.592,10.382,12.719,13.122,14.107,25.316c0.16,1.406,0,5.663,0,5.663h14.65c0,0-0.002-4.418,0-5.891
		c0.008-11.094,9.918-15.735,13.783-24.351C47.435,34.499,48.216,27.936,48.214,24.484z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M6.319,25.391c-0.129-7.102,3.148-12.47,6.299-14.263"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="14.771" y1="9.848" x2="15.78" y2="9.368"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M22.954,67.299c0.082-2.014-0.191-4.109-0.191-6.144c0-2.269-0.002-4.537,0-6.806c0.004-3.763-0.703-7.455-1.027-11.192
		c-0.312-3.59-0.514-6.585-1.967-9.81c-0.902-2-2.008-5.801-4.295-6.521c-2.189-0.689-2.158,2.544-1.557,3.83
		c0.939,2.007,3.355,2.654,5.488,2.409c2.371-0.273,4.039-3.259,3.934-5.453c-0.049-0.993-0.502-1.539-1.367-0.719
		c-0.752,0.713-0.604,1.987-0.551,2.93c0.145,2.675,3.172,3.435,5.443,2.448c1.281-0.556,4.766-4.876,2.127-5.344
		c-1.715-0.305-1.668,3.268-1.055,4.406c1.441,2.67,4.914,2.95,7.201,1.052c0.908-0.755,2.35-4.386,0.094-4.027
		c-1.859,0.296-2.943,3.607-3.432,5.035c-1.834,5.359-3.314,10.936-4.125,16.551c-0.562,3.894-0.787,7.672-0.787,11.608
		c0,1.084-0.031,2.197,0.074,3.252c0.068,0.692-0.033,1.824,0.213,2.397"/>
	
		<rect x="17.694" y="67.695" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14.611" height="2.604"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,71.917c0,0.893,0.723,1.616,1.617,1.616h15.467c0.893,0,1.617-0.724,1.617-1.616l0,0c0-0.894-0.725-1.617-1.617-1.617
		H17.267C16.372,70.3,15.649,71.023,15.649,71.917L15.649,71.917z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,75.216c0,0.894,0.723,1.617,1.617,1.617h15.467c0.893,0,1.617-0.724,1.617-1.617l0,0c0-0.893-0.725-1.616-1.617-1.616
		H17.267C16.372,73.6,15.649,74.323,15.649,75.216L15.649,75.216z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,78.516c0,0.893,0.723,1.616,1.617,1.616h15.467c0.893,0,1.617-0.724,1.617-1.616l0,0c0-0.894-0.725-1.617-1.617-1.617
		H17.267C16.372,76.898,15.649,77.622,15.649,78.516L15.649,78.516z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,81.814c0,0.894,0.723,1.617,1.617,1.617h15.467c0.893,0,1.617-0.724,1.617-1.617l0,0c0-0.893-0.725-1.617-1.617-1.617
		H17.267C16.372,80.197,15.649,80.922,15.649,81.814L15.649,81.814z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M18.401,85.113c0,0.894,0.512,1.617,1.141,1.617h10.916c0.629,0,1.141-0.724,1.141-1.617l0,0c0-0.893-0.512-1.616-1.141-1.616
		H19.542C18.913,83.497,18.401,84.221,18.401,85.113L18.401,85.113z"/>
</g>
</svg>
				</a>
				<p>IDEAS</p>
			</div>
			<div id="knight">
				<a id="knight_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" version="1.1" id="knight_svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax" width="66px" height="82px" viewBox="0 0 66 82" >
<g>
	
		<rect x="8.7" y="75.733" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="55.674" height="5.267"/>
	
		<rect x="17.905" y="56.113" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="37.264" height="4.384"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M55.169,60.497H17.905c-6.08,3.946-5.918,15.236-5.918,15.236h49.101C61.088,75.733,61.088,63.785,55.169,60.497z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M20.588,55.895c0.003-11.613,2.521-19.943,9.755-28.273h-0.22c-5.919,0-6.028,6.354-11.946,7.23
		c-3.288,0.438-4.604,1.096-7.453,2.41c-2.41,1.097-4.604,1.315-6.576-0.657c-5.479-5.261-1.096-10.303,3.727-12.714
		c6.139-3.068,8.111-6.795,11.618-12.275c1.096-1.533,2.191-3.507,4.384-3.287"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M23.438,8.547c0.438-1.973-0.22-4.165,0.657-6.138c2.85,0,5.262,3.508,5.919,6.357"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M30.014,8.547c7.015,2.411,11.401,8.333,15.347,13.813c2.411,3.726,3.945,7.891,5.48,12.275c2.63,7.233,0.742,14.025,2.276,21.259"
		/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M30.233,8.108c2.85-0.219,3.287-1.315,6.137-0.219c3.288,0.877,5.919,2.849,8.33,5.041c3.727,3.288,5.699,7.453,7.015,12.275
		c2.849,9.207,1.841,16.879,1.402,26.304"/>
</g>
</svg>
				</a>
				<p>STRATEGY</p>
			</div>
			<div id="cog">
				<a id="cog_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" version="1.1" id="cog_svg" xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" viewBox="0 0 90 90" preserveAspectRatio="xMidYMax">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M87.67,50.44V39.56h-7.588c-0.395-2.564-1.07-5.035-1.984-7.389l6.576-3.796l-5.441-9.422l-6.58,3.799
		c-1.604-1.989-3.416-3.803-5.406-5.405l3.801-6.581l-9.424-5.439l-3.795,6.575c-2.354-0.912-4.824-1.59-7.389-1.984V2.33H39.561
		v7.588c-2.566,0.395-5.035,1.072-7.389,1.984l-3.797-6.575l-9.422,5.44l3.799,6.58c-1.99,1.603-3.803,3.416-5.406,5.405
		l-6.58-3.799l-5.439,9.422l6.576,3.796c-0.914,2.354-1.59,4.824-1.984,7.389H2.33v10.88h7.588c0.395,2.564,1.07,5.035,1.984,7.389
		l-6.576,3.796l5.439,9.422l6.58-3.799c1.604,1.989,3.416,3.803,5.406,5.405l-3.799,6.581l9.422,5.439l3.797-6.575
		c2.354,0.913,4.822,1.591,7.389,1.985v7.587h10.879v-7.587c2.564-0.395,5.035-1.072,7.389-1.985l3.795,6.575l9.424-5.439
		l-3.801-6.581c1.99-1.603,3.805-3.416,5.406-5.405l6.58,3.799l5.441-9.422l-6.576-3.796c0.912-2.354,1.59-4.824,1.984-7.389H87.67z
		 M45,69.619c-13.598,0-24.619-11.022-24.619-24.618c0-13.598,11.021-24.62,24.619-24.62c13.596,0,24.619,11.022,24.619,24.62
		C69.619,58.596,58.596,69.619,45,69.619z"/>
	<g>
		
			<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
			38.385,35.658 25.93,44.805 38.385,54.341 		"/>
		
			<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
			51.615,35.658 64.068,44.805 51.615,54.341 		"/>
		
			<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="41.887" y1="54.341" x2="48.113" y2="35.658"/>
	</g>
</g>
</svg>
				</a>
				<p>TECH</p>
			</div>
			<div id="pencil">
				<a id="pencil_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" version="1.1" id="pencil_svg" xmlns="http://www.w3.org/2000/svg" width="106px" height="60px" viewBox="0 0 106 60" preserveAspectRatio="xMidYMax">
<g>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1.719" y1="42.241" x2="75.992" y2="5.389"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8.371" y1="45.485" x2="26.334" y2="36.573"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11.049" y1="50.617" x2="20.467" y2="45.944"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="72.082" y1="13.874" x2="82.643" y2="8.633"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="52.318" y1="30.139" x2="85.32" y2="13.766"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.877" y1="58.043" x2="85.148" y2="21.193"/>
	
		<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1.719,42.241 8.371,45.485 11.049,50.617 10.877,58.043 	"/>
	
		<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		10.877,58.043 4.227,54.8 1.547,49.667 1.719,42.241 	"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M75.992,5.389c0,0,1.072,1.899,1.719,2.284c1.004,0.594,4.932,0.96,4.932,0.96s-0.99,2.786-0.609,3.53
		c0.389,0.756,3.287,1.603,3.287,1.603s-1.674,3.328-1.646,4.42c0.023,0.866,1.475,3.007,1.475,3.007"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="75.992" y1="5.389" x2="104.453" y2="1.957"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="104.453" y1="1.957" x2="85.148" y2="21.193"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M98.084,8.302c0,0-1.504-2.041-1.82-2.815c-0.236-0.579-0.508-2.481-0.508-2.481l8.697-1.049L98.084,8.302z"/>
</g>
</svg>
				</a>
				<p>UX DESIGN</p>
			</div>
			<div id="money">
				<a id="money_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" version="1.1" id="money_svg" xmlns="http://www.w3.org/2000/svg" width="108px" height="68px" viewBox="0 0 108 68" preserveAspectRatio="xMidYMax">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" d="M45.029,51.1c1.896,1.872,4.284,3.049,7.164,3.528v-19.08
		c-2.545-0.623-4.74-1.308-6.588-2.053c-1.848-0.743-3.384-1.631-4.607-2.664c-1.225-1.031-2.125-2.291-2.701-3.779
		c-0.575-1.487-0.863-3.287-0.863-5.4c0-2.16,0.384-4.14,1.152-5.939c0.768-1.801,1.811-3.359,3.132-4.68
		c1.319-1.32,2.88-2.364,4.68-3.133c1.8-0.768,3.731-1.224,5.796-1.367V1.78h3.961v4.823c3.887,0.48,6.983,1.921,9.287,4.319
		c2.305,2.401,3.936,5.713,4.896,9.937h-6.12c-0.961-4.752-3.648-7.535-8.063-8.352V30.22l4.319,1.152
		c0.96,0.24,2.088,0.66,3.384,1.26c1.297,0.601,2.544,1.429,3.744,2.484c1.199,1.056,2.22,2.375,3.061,3.959
		c0.839,1.584,1.26,3.48,1.26,5.688c0,2.353-0.396,4.44-1.188,6.264c-0.792,1.825-1.884,3.396-3.276,4.716
		c-1.393,1.321-3.049,2.365-4.967,3.133c-1.921,0.768-4.033,1.247-6.336,1.439v5.904h-3.961v-5.904
		c-4.801-0.48-8.616-2.147-11.447-5.004c-2.834-2.855-4.441-6.804-4.824-11.844h6.119C42.137,46.685,43.133,49.228,45.029,51.1z
		 M46.326,14.775c-1.609,1.417-2.412,3.492-2.412,6.228c0,1.25,0.203,2.316,0.611,3.205c0.407,0.889,0.983,1.632,1.729,2.231
		c0.743,0.601,1.619,1.116,2.627,1.548c1.009,0.432,2.112,0.816,3.312,1.152V12.292C49.89,12.532,47.934,13.36,46.326,14.775z
		 M59.861,53.907c1.127-0.383,2.111-0.947,2.952-1.691c0.839-0.744,1.487-1.68,1.944-2.809c0.455-1.127,0.684-2.459,0.684-3.996
		c0-1.391-0.24-2.556-0.72-3.492c-0.48-0.936-1.128-1.738-1.944-2.411c-0.816-0.672-1.8-1.235-2.951-1.692
		c-1.152-0.455-2.377-0.875-3.672-1.26v18.072C57.497,54.532,58.733,54.292,59.861,53.907z"/>
</g>
<g>
	<path fill="none" stroke="#000000" stroke-width="2" d="M84.818,54.093c1.075,1.572,2.592,2.723,4.548,3.451l2.598-13.391
		c-1.701-0.784-3.149-1.563-4.345-2.338c-1.195-0.773-2.152-1.605-2.871-2.497c-0.719-0.891-1.18-1.897-1.381-3.021
		c-0.201-1.122-0.158-2.425,0.129-3.908c0.294-1.516,0.833-2.854,1.617-4.012c0.783-1.158,1.729-2.111,2.836-2.857
		c1.105-0.748,2.343-1.268,3.711-1.562c1.367-0.293,2.785-0.35,4.254-0.17l0.646-3.336l2.78,0.539l-0.657,3.387
		c2.664,0.866,4.641,2.298,5.932,4.296c1.289,1.999,1.983,4.546,2.082,7.64l-4.295-0.832c-0.027-3.467-1.534-5.785-4.521-6.961
		l-2.412,12.432l2.875,1.396c0.641,0.301,1.375,0.748,2.203,1.346s1.592,1.35,2.29,2.254s1.234,1.969,1.608,3.195
		c0.373,1.227,0.41,2.614,0.109,4.164c-0.32,1.65-0.882,3.062-1.686,4.234c-0.805,1.174-1.785,2.127-2.941,2.864
		c-1.158,0.737-2.462,1.244-3.914,1.521c-1.451,0.277-3,0.327-4.643,0.147l-0.804,4.145l-2.78-0.539l0.805-4.145
		c-3.305-0.99-5.756-2.68-7.354-5.07c-1.6-2.389-2.19-5.38-1.773-8.97l4.295,0.833C83.389,50.601,83.742,52.521,84.818,54.093z
		 M90.674,28.774c-1.322,0.775-2.169,2.123-2.541,4.043c-0.17,0.877-0.173,1.653-0.008,2.332c0.166,0.68,0.469,1.279,0.91,1.802
		c0.439,0.523,0.984,1.004,1.633,1.444c0.649,0.44,1.371,0.861,2.168,1.26L95.13,27.83C93.48,27.686,91.994,28,90.674,28.774z
		 M94.846,58.083c0.844-0.115,1.611-0.377,2.303-0.785c0.689-0.408,1.272-0.977,1.746-1.706c0.475-0.729,0.815-1.634,1.024-2.712
		c0.189-0.977,0.179-1.826-0.03-2.549s-0.555-1.375-1.035-1.957c-0.482-0.584-1.096-1.113-1.842-1.59s-1.549-0.938-2.405-1.385
		l-2.46,12.684C93.102,58.199,94.002,58.2,94.846,58.083z"/>
</g>
<g>
	<path fill="none" stroke="#000000" stroke-width="2" d="M9.834,56.259c1.534,1.131,3.346,1.717,5.432,1.76l-1.963-13.5
		c-1.863-0.179-3.488-0.437-4.872-0.773c-1.384-0.336-2.562-0.807-3.534-1.411s-1.738-1.401-2.299-2.396S1.647,37.7,1.43,36.206
		c-0.222-1.529-0.154-2.969,0.205-4.321c0.357-1.353,0.936-2.562,1.734-3.634c0.798-1.068,1.794-1.968,2.988-2.697
		c1.195-0.728,2.515-1.249,3.96-1.564l-0.489-3.361l2.803-0.408l0.496,3.414c2.801-0.061,5.139,0.64,7.016,2.101
		c1.877,1.462,3.371,3.637,4.486,6.526l-4.33,0.629c-1.168-3.264-3.355-4.955-6.564-5.079l1.822,12.531l3.175,0.37
		c0.704,0.072,1.545,0.252,2.523,0.543c0.979,0.293,1.947,0.75,2.905,1.373c0.957,0.623,1.814,1.453,2.572,2.486
		c0.756,1.035,1.25,2.334,1.477,3.896c0.242,1.664,0.176,3.182-0.196,4.553c-0.372,1.373-0.984,2.597-1.833,3.674
		c-0.85,1.078-1.913,1.986-3.191,2.727c-1.28,0.74-2.726,1.299-4.336,1.671l0.608,4.177l-2.802,0.408l-0.607-4.178
		c-3.446,0.154-6.317-0.633-8.614-2.362c-2.299-1.728-3.842-4.356-4.632-7.884l4.329-0.629C7.334,53.433,8.3,55.13,9.834,56.259z
		 M7.014,30.426c-0.992,1.168-1.347,2.72-1.065,4.655c0.128,0.883,0.382,1.617,0.763,2.203c0.38,0.588,0.863,1.055,1.452,1.401
		c0.588,0.35,1.261,0.623,2.019,0.825c0.758,0.201,1.578,0.361,2.461,0.475l-1.732-11.92C9.305,28.473,8.006,29.259,7.014,30.426z
		 M20.617,56.72c0.758-0.387,1.396-0.887,1.914-1.501c0.518-0.612,0.88-1.341,1.088-2.187c0.205-0.844,0.229-1.811,0.072-2.898
		c-0.144-0.982-0.434-1.783-0.869-2.396c-0.437-0.612-0.977-1.114-1.624-1.507c-0.646-0.391-1.399-0.688-2.263-0.893
		c-0.861-0.204-1.771-0.375-2.727-0.514l1.859,12.785C19.008,57.405,19.858,57.108,20.617,56.72z"/>
</g>
</svg>
				</a>
				<p>CLEAR PRICING</p>
			</div>
			<div id="magnify">
				<a id="magnify_pop" tabindex="0" class="popover_wrapper" data-toggle="popover">
					<svg tabindex="0" version="1.1" id="magnify_svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax" width="60px" height="74px" viewBox="0 0 60 74">
<g>
	<g>
		
			<circle fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="36.571" cy="23.317" r="21.739"/>
		
			<circle fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="36.571" cy="23.317" r="15.274"/>
		
			<rect x="21.355" y="41.006" transform="matrix(-0.8336 -0.5523 0.5523 -0.8336 20.3405 91.0728)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5.061" height="2.935"/>
		
			<rect x="9.446" y="41.113" transform="matrix(-0.8337 -0.5522 0.5522 -0.8337 -4.7087 111.8976)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.092" height="31.09"/>
		
			<rect x="1.8" y="66.481" transform="matrix(-0.8338 -0.5521 0.5521 -0.8338 -25.1013 128.8465)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.094" height="3.442"/>
		
			<rect x="17.102" y="43.375" transform="matrix(-0.8337 -0.5522 0.5522 -0.8337 15.7143 94.925)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.092" height="3.443"/>
	</g>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="49.78" y1="15.647" x2="36.778" y2="17.945"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="51.774" y1="20.947" x2="32.378" y2="24.588"/>
</g>
</svg>
				</a>
				<p>ANALYSIS</p>
			</div>
	</div>
		</div>
		<div id="mob-holder">
			<div id="why_text">
				<h4 id="whyTitle">WHY CHOOSE US?</h4>
			</div>
			<div id="whyHolder">
				<div class="mobWhy" id="mobWhy_knight">
					<div class="mobWhy_text" id="knight_whyText">
						<?php echo do_shortcode('[about-text name="STRATEGY" category="mobile"]'); ?>
					</div>
					<div  id="close_knight">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_knight">
      				<figure class="card_front" id="knight_front">
      					<svg tabindex="0" version="1.1" id="knight_s_svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="66px" height="82px" viewBox="0 0 66 82" >
<g>
	
		<rect x="8.7" y="75.733" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="55.674" height="5.267"/>
	
		<rect x="17.905" y="56.113" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="37.264" height="4.384"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M55.169,60.497H17.905c-6.08,3.946-5.918,15.236-5.918,15.236h49.101C61.088,75.733,61.088,63.785,55.169,60.497z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M20.588,55.895c0.003-11.613,2.521-19.943,9.755-28.273h-0.22c-5.919,0-6.028,6.354-11.946,7.23
		c-3.288,0.438-4.604,1.096-7.453,2.41c-2.41,1.097-4.604,1.315-6.576-0.657c-5.479-5.261-1.096-10.303,3.727-12.714
		c6.139-3.068,8.111-6.795,11.618-12.275c1.096-1.533,2.191-3.507,4.384-3.287"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M23.438,8.547c0.438-1.973-0.22-4.165,0.657-6.138c2.85,0,5.262,3.508,5.919,6.357"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M30.014,8.547c7.015,2.411,11.401,8.333,15.347,13.813c2.411,3.726,3.945,7.891,5.48,12.275c2.63,7.233,0.742,14.025,2.276,21.259"
		/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M30.233,8.108c2.85-0.219,3.287-1.315,6.137-0.219c3.288,0.877,5.919,2.849,8.33,5.041c3.727,3.288,5.699,7.453,7.015,12.275
		c2.849,9.207,1.841,16.879,1.402,26.304"/>
</g>
</svg>
      				</figure>
      				<figure class="card_back" id="knight_back">
      					<div> </div>
      				</figure>
    			</div>
				<div class="mobWhy" id="mobWhy_lightbulb">
					<div class="mobWhy_text" id="lightbulb_whyText">
						<?php echo do_shortcode('[about-text name="IDEAS" category="mobile"]'); ?>
					</div>
					<div  id="close_lightbulb">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_lightbulb">
      				<figure class="card_front" id="lightbulb_front">
      					<svg tabindex="0" id="lightbulb_s_svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="50px" height="88px" viewBox="0 0 50 88">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M48.214,24.484c0-12.821-10.393-23.215-23.215-23.215c-12.82,0-23.213,10.394-23.213,23.215c0,3.165,0.369,9.608,1.781,12.231
		c5.592,10.382,12.719,13.122,14.107,25.316c0.16,1.406,0,5.663,0,5.663h14.65c0,0-0.002-4.418,0-5.891
		c0.008-11.094,9.918-15.735,13.783-24.351C47.435,34.499,48.216,27.936,48.214,24.484z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M6.319,25.391c-0.129-7.102,3.148-12.47,6.299-14.263"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="14.771" y1="9.848" x2="15.78" y2="9.368"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M22.954,67.299c0.082-2.014-0.191-4.109-0.191-6.144c0-2.269-0.002-4.537,0-6.806c0.004-3.763-0.703-7.455-1.027-11.192
		c-0.312-3.59-0.514-6.585-1.967-9.81c-0.902-2-2.008-5.801-4.295-6.521c-2.189-0.689-2.158,2.544-1.557,3.83
		c0.939,2.007,3.355,2.654,5.488,2.409c2.371-0.273,4.039-3.259,3.934-5.453c-0.049-0.993-0.502-1.539-1.367-0.719
		c-0.752,0.713-0.604,1.987-0.551,2.93c0.145,2.675,3.172,3.435,5.443,2.448c1.281-0.556,4.766-4.876,2.127-5.344
		c-1.715-0.305-1.668,3.268-1.055,4.406c1.441,2.67,4.914,2.95,7.201,1.052c0.908-0.755,2.35-4.386,0.094-4.027
		c-1.859,0.296-2.943,3.607-3.432,5.035c-1.834,5.359-3.314,10.936-4.125,16.551c-0.562,3.894-0.787,7.672-0.787,11.608
		c0,1.084-0.031,2.197,0.074,3.252c0.068,0.692-0.033,1.824,0.213,2.397"/>
	
		<rect x="17.694" y="67.695" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14.611" height="2.604"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,71.917c0,0.893,0.723,1.616,1.617,1.616h15.467c0.893,0,1.617-0.724,1.617-1.616l0,0c0-0.894-0.725-1.617-1.617-1.617
		H17.267C16.372,70.3,15.649,71.023,15.649,71.917L15.649,71.917z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,75.216c0,0.894,0.723,1.617,1.617,1.617h15.467c0.893,0,1.617-0.724,1.617-1.617l0,0c0-0.893-0.725-1.616-1.617-1.616
		H17.267C16.372,73.6,15.649,74.323,15.649,75.216L15.649,75.216z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,78.516c0,0.893,0.723,1.616,1.617,1.616h15.467c0.893,0,1.617-0.724,1.617-1.616l0,0c0-0.894-0.725-1.617-1.617-1.617
		H17.267C16.372,76.898,15.649,77.622,15.649,78.516L15.649,78.516z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M15.649,81.814c0,0.894,0.723,1.617,1.617,1.617h15.467c0.893,0,1.617-0.724,1.617-1.617l0,0c0-0.893-0.725-1.617-1.617-1.617
		H17.267C16.372,80.197,15.649,80.922,15.649,81.814L15.649,81.814z"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M18.401,85.113c0,0.894,0.512,1.617,1.141,1.617h10.916c0.629,0,1.141-0.724,1.141-1.617l0,0c0-0.893-0.512-1.616-1.141-1.616
		H19.542C18.913,83.497,18.401,84.221,18.401,85.113L18.401,85.113z"/>
</g>
</svg>
	      			</figure>
      				<figure class="card_back" id="lightbulb_back"></figure>
    			</div>
				<div class="mobWhy" id="mobWhy_pencil">
					<div class="mobWhy_text" id="pencil_whyText">
						<?php echo do_shortcode('[about-text name="UX" category="mobile"]'); ?>
					</div>
					<div  id="close_pencil">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_pencil">
      				<figure class="card_front" id="pencil_front">
      					<svg tabindex="0" version="1.1" id="pencil_s_svg" xmlns="http://www.w3.org/2000/svg" width="106px" height="60px" viewBox="0 0 106 60" preserveAspectRatio="xMidYMid">
<g>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1.719" y1="42.241" x2="75.992" y2="5.389"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8.371" y1="45.485" x2="26.334" y2="36.573"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11.049" y1="50.617" x2="20.467" y2="45.944"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="72.082" y1="13.874" x2="82.643" y2="8.633"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="52.318" y1="30.139" x2="85.32" y2="13.766"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.877" y1="58.043" x2="85.148" y2="21.193"/>
	
		<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		1.719,42.241 8.371,45.485 11.049,50.617 10.877,58.043 	"/>
	
		<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
		10.877,58.043 4.227,54.8 1.547,49.667 1.719,42.241 	"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M75.992,5.389c0,0,1.072,1.899,1.719,2.284c1.004,0.594,4.932,0.96,4.932,0.96s-0.99,2.786-0.609,3.53
		c0.389,0.756,3.287,1.603,3.287,1.603s-1.674,3.328-1.646,4.42c0.023,0.866,1.475,3.007,1.475,3.007"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="75.992" y1="5.389" x2="104.453" y2="1.957"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="104.453" y1="1.957" x2="85.148" y2="21.193"/>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M98.084,8.302c0,0-1.504-2.041-1.82-2.815c-0.236-0.579-0.508-2.481-0.508-2.481l8.697-1.049L98.084,8.302z"/>
</g>
</svg>
   		   		</figure>
      				<figure class="card_back" id="pencil_back"></figure>
    			</div>
    			<div class="mobWhy" id="mobWhy_magnify">
					<div class="mobWhy_text" id="magnify_whyText">
						<?php echo do_shortcode('[about-text name="ANALYSIS" category="mobile"]'); ?>
					</div>
					<div  id="close_magnify">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_magnify">
      				<figure class="card_front" id="magnify_front">
      					<svg tabindex="0" version="1.1" id="magnify_s_svg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="60px" height="74px" viewBox="0 0 60 74">
<g>
	<g>
		
			<circle fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="36.571" cy="23.317" r="21.739"/>
		
			<circle fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="36.571" cy="23.317" r="15.274"/>
		
			<rect x="21.355" y="41.006" transform="matrix(-0.8336 -0.5523 0.5523 -0.8336 20.3405 91.0728)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5.061" height="2.935"/>
		
			<rect x="9.446" y="41.113" transform="matrix(-0.8337 -0.5522 0.5522 -0.8337 -4.7087 111.8976)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.092" height="31.09"/>
		
			<rect x="1.8" y="66.481" transform="matrix(-0.8338 -0.5521 0.5521 -0.8338 -25.1013 128.8465)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.094" height="3.442"/>
		
			<rect x="17.102" y="43.375" transform="matrix(-0.8337 -0.5522 0.5522 -0.8337 15.7143 94.925)" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.092" height="3.443"/>
	</g>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="49.78" y1="15.647" x2="36.778" y2="17.945"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="51.774" y1="20.947" x2="32.378" y2="24.588"/>
</g>
</svg>
   		   		</figure>
      				<figure class="card_back" id="magnify_back"></figure>
    			</div>
    			<div class="mobWhy" id="mobWhy_cog">
					<div class="mobWhy_text" id="cog_whyText">
						<?php echo do_shortcode('[about-text name="TECH" category="mobile"]'); ?>
					</div>
					<div  id="close_cog">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_cog">
      				<figure class="card_front" id="cog_front">
      					<svg tabindex="0" version="1.1" id="cog_s_svg" xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" viewBox="0 0 90 90" preserveAspectRatio="xMidYMid">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
		M87.67,50.44V39.56h-7.588c-0.395-2.564-1.07-5.035-1.984-7.389l6.576-3.796l-5.441-9.422l-6.58,3.799
		c-1.604-1.989-3.416-3.803-5.406-5.405l3.801-6.581l-9.424-5.439l-3.795,6.575c-2.354-0.912-4.824-1.59-7.389-1.984V2.33H39.561
		v7.588c-2.566,0.395-5.035,1.072-7.389,1.984l-3.797-6.575l-9.422,5.44l3.799,6.58c-1.99,1.603-3.803,3.416-5.406,5.405
		l-6.58-3.799l-5.439,9.422l6.576,3.796c-0.914,2.354-1.59,4.824-1.984,7.389H2.33v10.88h7.588c0.395,2.564,1.07,5.035,1.984,7.389
		l-6.576,3.796l5.439,9.422l6.58-3.799c1.604,1.989,3.416,3.803,5.406,5.405l-3.799,6.581l9.422,5.439l3.797-6.575
		c2.354,0.913,4.822,1.591,7.389,1.985v7.587h10.879v-7.587c2.564-0.395,5.035-1.072,7.389-1.985l3.795,6.575l9.424-5.439
		l-3.801-6.581c1.99-1.603,3.805-3.416,5.406-5.405l6.58,3.799l5.441-9.422l-6.576-3.796c0.912-2.354,1.59-4.824,1.984-7.389H87.67z
		 M45,69.619c-13.598,0-24.619-11.022-24.619-24.618c0-13.598,11.021-24.62,24.619-24.62c13.596,0,24.619,11.022,24.619,24.62
		C69.619,58.596,58.596,69.619,45,69.619z"/>
	<g>
		
			<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
			38.385,35.658 25.93,44.805 38.385,54.341 		"/>
		
			<polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
			51.615,35.658 64.068,44.805 51.615,54.341 		"/>
		
			<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="41.887" y1="54.341" x2="48.113" y2="35.658"/>
	</g>
</g>
</svg>
   		   			</figure>
      				<figure class="card_back" id="cog_back"></figure>
    			</div>
    			<div class="mobWhy" id="mobWhy_money">
					<div class="mobWhy_text" id="money_whyText">
						<?php echo do_shortcode('[about-text name="PRICING" category="mobile"]'); ?>
					</div>
					<div  id="close_money">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_money">
      				<figure class="card_front" id="money_front">
      					<svg tabindex="0" version="1.1" id="money_s_svg" xmlns="http://www.w3.org/2000/svg" width="108px" height="68px" viewBox="0 0 108 68" preserveAspectRatio="xMidYMid">
<g>
	<path fill="none" stroke="#000000" stroke-width="2" d="M45.029,51.1c1.896,1.872,4.284,3.049,7.164,3.528v-19.08
		c-2.545-0.623-4.74-1.308-6.588-2.053c-1.848-0.743-3.384-1.631-4.607-2.664c-1.225-1.031-2.125-2.291-2.701-3.779
		c-0.575-1.487-0.863-3.287-0.863-5.4c0-2.16,0.384-4.14,1.152-5.939c0.768-1.801,1.811-3.359,3.132-4.68
		c1.319-1.32,2.88-2.364,4.68-3.133c1.8-0.768,3.731-1.224,5.796-1.367V1.78h3.961v4.823c3.887,0.48,6.983,1.921,9.287,4.319
		c2.305,2.401,3.936,5.713,4.896,9.937h-6.12c-0.961-4.752-3.648-7.535-8.063-8.352V30.22l4.319,1.152
		c0.96,0.24,2.088,0.66,3.384,1.26c1.297,0.601,2.544,1.429,3.744,2.484c1.199,1.056,2.22,2.375,3.061,3.959
		c0.839,1.584,1.26,3.48,1.26,5.688c0,2.353-0.396,4.44-1.188,6.264c-0.792,1.825-1.884,3.396-3.276,4.716
		c-1.393,1.321-3.049,2.365-4.967,3.133c-1.921,0.768-4.033,1.247-6.336,1.439v5.904h-3.961v-5.904
		c-4.801-0.48-8.616-2.147-11.447-5.004c-2.834-2.855-4.441-6.804-4.824-11.844h6.119C42.137,46.685,43.133,49.228,45.029,51.1z
		 M46.326,14.775c-1.609,1.417-2.412,3.492-2.412,6.228c0,1.25,0.203,2.316,0.611,3.205c0.407,0.889,0.983,1.632,1.729,2.231
		c0.743,0.601,1.619,1.116,2.627,1.548c1.009,0.432,2.112,0.816,3.312,1.152V12.292C49.89,12.532,47.934,13.36,46.326,14.775z
		 M59.861,53.907c1.127-0.383,2.111-0.947,2.952-1.691c0.839-0.744,1.487-1.68,1.944-2.809c0.455-1.127,0.684-2.459,0.684-3.996
		c0-1.391-0.24-2.556-0.72-3.492c-0.48-0.936-1.128-1.738-1.944-2.411c-0.816-0.672-1.8-1.235-2.951-1.692
		c-1.152-0.455-2.377-0.875-3.672-1.26v18.072C57.497,54.532,58.733,54.292,59.861,53.907z"/>
</g>
<g>
	<path fill="none" stroke="#000000" stroke-width="2" d="M84.818,54.093c1.075,1.572,2.592,2.723,4.548,3.451l2.598-13.391
		c-1.701-0.784-3.149-1.563-4.345-2.338c-1.195-0.773-2.152-1.605-2.871-2.497c-0.719-0.891-1.18-1.897-1.381-3.021
		c-0.201-1.122-0.158-2.425,0.129-3.908c0.294-1.516,0.833-2.854,1.617-4.012c0.783-1.158,1.729-2.111,2.836-2.857
		c1.105-0.748,2.343-1.268,3.711-1.562c1.367-0.293,2.785-0.35,4.254-0.17l0.646-3.336l2.78,0.539l-0.657,3.387
		c2.664,0.866,4.641,2.298,5.932,4.296c1.289,1.999,1.983,4.546,2.082,7.64l-4.295-0.832c-0.027-3.467-1.534-5.785-4.521-6.961
		l-2.412,12.432l2.875,1.396c0.641,0.301,1.375,0.748,2.203,1.346s1.592,1.35,2.29,2.254s1.234,1.969,1.608,3.195
		c0.373,1.227,0.41,2.614,0.109,4.164c-0.32,1.65-0.882,3.062-1.686,4.234c-0.805,1.174-1.785,2.127-2.941,2.864
		c-1.158,0.737-2.462,1.244-3.914,1.521c-1.451,0.277-3,0.327-4.643,0.147l-0.804,4.145l-2.78-0.539l0.805-4.145
		c-3.305-0.99-5.756-2.68-7.354-5.07c-1.6-2.389-2.19-5.38-1.773-8.97l4.295,0.833C83.389,50.601,83.742,52.521,84.818,54.093z
		 M90.674,28.774c-1.322,0.775-2.169,2.123-2.541,4.043c-0.17,0.877-0.173,1.653-0.008,2.332c0.166,0.68,0.469,1.279,0.91,1.802
		c0.439,0.523,0.984,1.004,1.633,1.444c0.649,0.44,1.371,0.861,2.168,1.26L95.13,27.83C93.48,27.686,91.994,28,90.674,28.774z
		 M94.846,58.083c0.844-0.115,1.611-0.377,2.303-0.785c0.689-0.408,1.272-0.977,1.746-1.706c0.475-0.729,0.815-1.634,1.024-2.712
		c0.189-0.977,0.179-1.826-0.03-2.549s-0.555-1.375-1.035-1.957c-0.482-0.584-1.096-1.113-1.842-1.59s-1.549-0.938-2.405-1.385
		l-2.46,12.684C93.102,58.199,94.002,58.2,94.846,58.083z"/>
</g>
<g>
	<path fill="none" stroke="#000000" stroke-width="2" d="M9.834,56.259c1.534,1.131,3.346,1.717,5.432,1.76l-1.963-13.5
		c-1.863-0.179-3.488-0.437-4.872-0.773c-1.384-0.336-2.562-0.807-3.534-1.411s-1.738-1.401-2.299-2.396S1.647,37.7,1.43,36.206
		c-0.222-1.529-0.154-2.969,0.205-4.321c0.357-1.353,0.936-2.562,1.734-3.634c0.798-1.068,1.794-1.968,2.988-2.697
		c1.195-0.728,2.515-1.249,3.96-1.564l-0.489-3.361l2.803-0.408l0.496,3.414c2.801-0.061,5.139,0.64,7.016,2.101
		c1.877,1.462,3.371,3.637,4.486,6.526l-4.33,0.629c-1.168-3.264-3.355-4.955-6.564-5.079l1.822,12.531l3.175,0.37
		c0.704,0.072,1.545,0.252,2.523,0.543c0.979,0.293,1.947,0.75,2.905,1.373c0.957,0.623,1.814,1.453,2.572,2.486
		c0.756,1.035,1.25,2.334,1.477,3.896c0.242,1.664,0.176,3.182-0.196,4.553c-0.372,1.373-0.984,2.597-1.833,3.674
		c-0.85,1.078-1.913,1.986-3.191,2.727c-1.28,0.74-2.726,1.299-4.336,1.671l0.608,4.177l-2.802,0.408l-0.607-4.178
		c-3.446,0.154-6.317-0.633-8.614-2.362c-2.299-1.728-3.842-4.356-4.632-7.884l4.329-0.629C7.334,53.433,8.3,55.13,9.834,56.259z
		 M7.014,30.426c-0.992,1.168-1.347,2.72-1.065,4.655c0.128,0.883,0.382,1.617,0.763,2.203c0.38,0.588,0.863,1.055,1.452,1.401
		c0.588,0.35,1.261,0.623,2.019,0.825c0.758,0.201,1.578,0.361,2.461,0.475l-1.732-11.92C9.305,28.473,8.006,29.259,7.014,30.426z
		 M20.617,56.72c0.758-0.387,1.396-0.887,1.914-1.501c0.518-0.612,0.88-1.341,1.088-2.187c0.205-0.844,0.229-1.811,0.072-2.898
		c-0.144-0.982-0.434-1.783-0.869-2.396c-0.437-0.612-0.977-1.114-1.624-1.507c-0.646-0.391-1.399-0.688-2.263-0.893
		c-0.861-0.204-1.771-0.375-2.727-0.514l1.859,12.785C19.008,57.405,19.858,57.108,20.617,56.72z"/>
</g>
</svg>
   		   			</figure>
      				<figure class="card_back" id="money_back"></figure>
    			</div>
				<div class="mobWhy" id="mobWhy_trophy">
					<div class="mobWhy_text" id="trophy_whyText">
						<?php echo do_shortcode('[about-text name="SUCCESS" category="mobile"]'); ?>
					</div>
					<div  id="close_trophy">
  						<div class="closeLink">
    					</div>
    				</div>
				</div>
				<div class="card_flip" id="card_trophy">
      				<figure class="card_front" id="trophy_front">
      					<svg tabindex="0" id="trophy_s_svg" width="69px" height="82px" viewBox="0 0 69 82" preserveAspectRatio="xMidYMid">
<g>
	<g>
		<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
			M21.851,25.44c-4.596-4.294-6.241-8.576-5.525-15.828"/>
		<g>
			
				<rect x="7.616" y="76.364" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="53.771" height="4.632"/>
			
				<rect x="11.328" y="59.856" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="46.347" height="16.508"/>
			
				<rect x="14.61" y="64.214" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="39.782" height="9.477"/>
			
				<rect x="15.741" y="56.588" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="37.521" height="3.269"/>
			
				<rect x="23.557" y="51.54" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="21.891" height="5.048"/>
			<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
				M55.672,1.004C66.836,27.07,38.931,38.548,38.931,38.548V51.54h-8.857V38.548c0,0-27.905-11.478-16.741-37.544H55.672z"/>
			<g>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M11.052,8.622L5.196,8.683c-1.111,7.906,4.33,14.661,8.918,16.334"/>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M17.573,29.615C10.18,31.372-0.687,20.92,1.517,5.245h10.298"/>
			</g>
			<g>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M57.948,8.622l5.855,0.061c1.11,7.906-4.33,14.661-8.918,16.334"/>
				
					<path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
					M51.425,29.615c7.395,1.757,18.26-8.695,16.057-24.37H57.185"/>
			</g>
		</g>
	</g>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="20.054" y1="66.189" x2="17.222" y2="66.189"/>
	
		<line fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17.222" y1="66.189" x2="17.222" y2="68.606"/>
</g>
</svg>
      				</figure>
      				<figure class="card_back" id="trophy_back"></figure>
    			</div>
    	  	</div>
		</div>
		<?php get_footer('rotate'); ?>
		<?php get_footer('expand'); ?>
		<?php get_footer('small'); ?>
	</div>
	
<?php get_footer(); ?>
