<?php
/*
Template Name: allposts
*/
?>
<?php get_header('news'); ?>

<div id="mainContent" class="fullDiv">
	<div id="all_posts" class="fullDiv">
		<div id="news_holder">
		<h2>Latest from Siso</h2>
		<!-- LOOP START -->
		<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$the_query = new WP_Query('posts_per_page=3&paged='.$paged ); 
		?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="row" >
			<table>
				<tr>
				<td id="leftdetails"><div class="thumb_img"> <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('home-thumb');?></a></div></td>
				<td id="rightdetails"><p class="title_link" ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
    			<p class="news_date"><?php the_date(); ?></p></td>
 				</tr>
      			</table>
			</div>
			<div class="row ap_cont mob_ap" id="post-row">
				<p><?php $content = get_the_content();
      $content = strip_tags($content);
      echo substr($content, 0, 150);
?>…   <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">click for more...</a></p>
			</div>
			<div class="row ap_cont desk_ap" id="post-row">
				<p><?php $content = get_the_content();
      $content = strip_tags($content);
      echo substr($content, 0, 300);
?>…   <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">click for more...</a></p>
			</div>
			<hr/>
			<?php endwhile;?>
			<!-- LOOP FINNISH -->	
			
		</div>
	</div>
	<div id="pag_holder">
			<div class="row" id="pagination">
				<?php
if($the_query->max_num_pages>1){?>
    <p class="navrechts">
    <?php
    if($paged!=1){
    	$prevPage = $paged - 1;?>
        <a href="<?php echo '?paged=' . $prevPage; //previous link ?>"><</a>
    <?php } ?>
    <?php
    for($i=1;$i<=$the_query->max_num_pages;$i++){?>
        <a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a>
        <?php
    }
    if($paged!=$the_query->max_num_pages){
    	$nextPage = $paged + 1;?>
        <a href="<?php echo '?paged=' . $nextPage; //next link ?>">></a>
    <?php } ?>
    </p>
<?php } ?>
			</div>
		</div>	
	<?php get_footer('rotate'); ?>
	<?php get_footer('expand'); ?>
	<?php get_footer('small'); ?>	
	</div>
<?php get_footer(); ?>
	
