<?php
/*
Template Name: Contact
*/
?>
<?php get_header('cont'); ?>

	<div class="fullDiv" id="contactText">
	<div id="maincontact" class="row">
		
		<div class="col-12 col-sm-7" id="contdetails">
			<?php echo do_shortcode('[contact-siso name="siso" category="single"]'); ?>	
		</div>
		<div class="col-12 col-sm-5" id="socialmedia">
			<div class="twitter">
				<h2>LATEST</h2>
				<?php echo do_shortcode('[wolf_tweet username="sisosolutions" count="3"]'); ?>
			</div>
		</div>
	</div>
		<?php get_footer('rotate'); ?>
		<?php get_footer('expand'); ?>
		<?php get_footer('small'); ?>
	</div>	


<?php get_footer(); ?>