<?php get_header('news'); ?>
<div id="mainContent" class="fullDiv">
		<div id="content" class="fullDiv">
			<?php get_template_part( 'content', get_post_format() ); ?>
				
			<?php while ( have_posts() ) : the_post(); 
				$content = get_the_content_with_formatting();
			?>
			<div id="article">
				<div class="post_nav">
 					<div class="leftnav">
    					<h6>PREVIOUS</h6>
						<h7><span class="nav-previous"><<?php previous_post_link( '%link', '<span class="meta-nav"></span> %title' ); ?></span></h7>
  					</div>
  					<div class="rightnav">
    					<h6>NEXT</h6>
						<h7><span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav"></span>' ); ?>></span></h7>
  					</div>
				</div>
				<div id="post_details">
				<div id="post_title">
					<h2><?php the_title(); ?></h2>
					<p><?php the_date(); ?></p>
				</div>
				<div id="post_image">
					<?php the_post_thumbnail('full');?>
				</div>
				<div id="post_text">
					<?php echo $content; ?>
				</div>
				
				</div>
			<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- #content -->
	<?php get_footer('rotate'); ?>
		<?php get_footer('expand'); ?>
		<?php get_footer('small'); ?>
		</div>
<?php get_footer(); ?>