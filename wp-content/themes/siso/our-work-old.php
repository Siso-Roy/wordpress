<?php
/*
Template Name: Our work
*/
?>
<?php get_header('work'); ?>

<div class = "fullDiv" id = "main_content">
	<div id="svg-container">
		<div id ="svg-holder">
			test 1
		</div>
	</div>
	<div class="mobile-work">
		<h2 id="workTitle">OUR WORK</h2>
		<?php echo do_shortcode('[work-text name="all" category="mobile"]'); ?>				
	</div>
</div>

<?php get_footer(); ?>