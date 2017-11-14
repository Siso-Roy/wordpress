<?php
/*
Plugin Name: work text
Plugin URI: http://www.siso.co.nz
Description: work text for Popovers
Version: 1.0
Author: Siso Solutions
Author URI: http://www.siso.co.nz
*/

// Initialise - load in translations
function workText_loadtranslations () {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_textdomain( 'work-text', false, $plugin_dir );
}
add_action('plugins_loaded', 'workText_loadtranslations');

////////////////////////////
// Custom Post Type Setup
////////////////////////////
add_action( 'init', 'workText_post_type' );
function workText_post_type() {
	$labels = array(
		'name' => __('work text', 'work-text'),
		'singular_name' => __('work text', 'work-text'),
		'add_new' => __('Add New', 'work-text'),
		'add_new_item' => __('Add New work text', 'work-text'),
		'edit_item' => __('Edit work text', 'work-text'),
		'new_item' => __('New work text', 'work-text'),
		'view_item' => __('View work text', 'work-text'),
		'search_items' => __('Search work text', 'work-text'),
		'not_found' => __('No work text', 'work-text'),
		'not_found_in_trash' => __('No work text found in Trash', 'work-text'),
		'parent_item_colon' => '',
		'menu_name' => __('Work', 'work-text')
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'page',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 21,
		'supports' => array('title','editor','thumbnail', 'page-attributes')
	); 
	register_post_type('workText', $args);
}

// Create a taxonomy for the workText post type
function workText_taxonomies () {
	$args = array('hierarchical' => true);
	register_taxonomy( 'workText_category', 'workText', $args );
}
add_action( 'init', 'workText_taxonomies', 0 );

add_action( 'add_meta_boxes', 'workText_box' );

function workText_box() {
	add_meta_box(
		'workText_box',
		__( 'Client information', 'Siso' ),
		'work_box_content',
		'workText',
		'normal',
		'default'
	);
}

function work_box_content( $post ) {

	$client = get_post_meta( $post->ID, '_client_work', true );
	$caseStudy = get_post_meta( $post->ID, '_case_work', true );
	$clientLogo = get_post_meta( $post->ID, '_logo_work', true );

	wp_nonce_field( plugin_basename( __FILE__ ), 'work_box_content_nonce' );
	echo 'Extra information on clients';
	?>
	<p><label for="client_work">Clients name</label>
	</p>
	<p><input type="text" id="client_work" name="client_work" placeholder="Clients name" value="<?php echo esc_attr( $client ); ?>"/>
	</p>
	<p><label for="case_work">Case study ID</label>
	</p>
	<p><input type="text" id="case_work" name="case_work" placeholder="0" value="<?php echo esc_attr( $caseStudy ); ?>"/>
	</p>
	<p><label for="logo_work">Client logo as SVG</label>
	</p>
	<p><textarea id="logo_work" rows="8" cols="70" name="logo_work" placeholder="Paste logo SVG code" ><?php echo esc_attr( $clientLogo ); ?></textarea>
	</p>

	<?php

}

add_action( 'save_post', 'work_box_save' );

function work_box_save( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	if ( !wp_verify_nonce( $_POST[ 'work_box_content_nonce' ], plugin_basename( __FILE__ ) ) )
		return;

	if ( 'page' == $_POST[ 'post_type' ] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return;
	}
	$client = $_POST[ 'client_work' ];
	update_post_meta( $post_id, '_client_work', $client );
	$caseStudy = $_POST[ 'case_work' ];
	update_post_meta( $post_id, '_case_work', $caseStudy );
	$clientLogo = $_POST[ 'logo_work' ];
	update_post_meta( $post_id, '_logo_work', $clientLogo );
}

if ( class_exists( 'MultiPostThumbnails' ) ) {
	new MultiPostThumbnails(
		array(
			'label' => 'proj_img1',
			'id' => 'proj_img1',
			'post_type' => 'workText'
		)
	);
}





// Set up settings defaults
register_activation_hook( __FILE__, 'workText_set_options' );

function workText_set_options() {
	$defaults = array(
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'category' => '',
		'name' => ''
	);
	add_option( 'workText_settings', $defaults );
}
// Clean up on uninstall
register_activation_hook( __FILE__, 'workText_deactivate' );

function workText_deactivate() {
	delete_option( 'workText_settings' );
}


///////////////////
// SETTINGS PAGE
///////////////////
class workText_settings_page {
	// Holds the values to be used in the fields callbacks
	private $options;
    	
	// Start up
	public function __construct() {
	    add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
	    add_action( 'admin_init', array( $this, 'page_init' ) );
	}
    	
	// Add settings page
	public function add_plugin_page() {
		add_submenu_page('edit.php?post_type=workText', __('Settings', 'work-text'), __('Settings', 'work-text'), 'manage_options', 'work-text', array($this,'create_admin_page'));
	}
    	
	// Options page callback
	public function create_admin_page() {
	    // Set class property
	    $this->options = get_option( 'workText_settings' );
		if(!$this->options){
			workText_set_options ();
			$this->options = get_option( 'workText_settings' );
		}
	    ?>
	    <div class="wrap">
			<?php screen_icon('edit');?> <h2>work text <?php _e('Settings', 'work-text'); ?></h2>
			<p><?php printf(__('You can set the default behaviour of the work text accordion. All of these settings can be overridden by using %s shortcode attributes %s.', 'work-text')); ?></p>
		         
	        <form method="post" action="options.php">
	        <?php
	            settings_fields( 'workText_settings' );   
	            do_settings_sections( 'work-text' );
	            submit_button(); 
	        ?>
	        </form>
	    </div>
	    <?php
	}
    	
	// Register and add settings
	public function page_init() {        
	    register_setting(
	        'workText_settings', // Option group
	        'workText_settings', // Option name
	        array( $this, 'sanitize' ) // Sanitize
	    );
    	
	    add_settings_section(
	        'workText_settings_options', // ID
	        '', // Title - nothing to say here.
	        array( $this, 'workText_settings_options_header' ), // Callback
	        'work-text' // Page
	    );      	
		
	    add_settings_field(
	        'orderby', // ID
	        __('Order Slides By', 'work-text'), // Title 
	        array( $this, 'orderby_callback' ), // Callback
	        'work-text', // Page
	        'workText_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'order', // ID
	        __('Ordering Direction', 'work-text'), // Title 
	        array( $this, 'order_callback' ), // Callback
	        'work-text', // Page
	        'workText_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'category', // ID
	        __('Restrict to Category', 'work-text'), // Title 
	        array( $this, 'category_callback' ), // Callback
	        'work-text', // Page
	        'workText_settings_options' // Section           
	    );
	    add_settings_field(
	        'name', // ID
	        __('Name to show', 'work-text'), // Title 
	        array( $this, 'name_callback' ), // Callback
	        'work-text', // Page
	        'workText_settings_options' // Section           
	    );
		   
	}
    	
	// Sanitize each setting field as needed -  @param array $input Contains all settings fields as array keys
	public function sanitize( $input ) {
	    $new_input = array();
		foreach($input as $key => $var){
				$new_input[$key] = sanitize_text_field( $input[$key] );
		}
	    return $new_input;
	}
    	
	// Print the Section text
	public function workText_settings_options_header() {
	    // nothing to say here.
	}
    	
	
	public function orderby_callback() {
		$orderby_options = array (
			'menu_order' => __('Menu order, as set in work text post pages', 'work-text'),
			'date' => __('Date text was published', 'work-text'),
			'rand' => __('Random ordering', 'work-text'),
			'title' => __('work text title', 'work-text')			
		);
		print '<select id="orderby" name="workText_settings[orderby]">';
		foreach($orderby_options as $val => $option){
			print '<option value="'.$val.'"';
			if(isset( $this->options['orderby'] ) && $this->options['orderby'] == $val){
				print ' selected="selected"';
			}
			print ">$option</option>";
		}
		print '</select>';
	}
	
	public function order_callback() {
		if(isset( $this->options['order'] ) && $this->options['order'] == 'DESC'){
			$workText_showcontrols_a = '';
			$workText_showcontrols_d = ' selected="selected"';
		} else {
			$workText_showcontrols_a = ' selected="selected"';
			$workText_showcontrols_d = '';
		}
		print '<select id="order" name="workText_settings[order]">
			<option value="ASC"'.$workText_showcontrols_a.'>'.__('Ascending', 'work-text').'</option>
			<option value="DESC"'.$workText_showcontrols_d.'>'.__('Decending', 'work-text').'</option>
		</select>';
	}
	
	public function category_callback() {
		$cats = get_terms('workText_category');
		print '<select id="orderby" name="workText_settings[category]">
			<option value="">'.__('All Categories', 'work-text').'</option>';
		foreach($cats as $cat){
			print '<option value="'.$cat->term_id.'"';
			if(isset( $this->options['category'] ) && $this->options['category'] == $cat->term_id){
				print ' selected="selected"';
			}
			print ">".$cat->name."</option>";
		}
		print '</select>';
	}
    	
	public function name_callback() {
	    printf('<input type="text" id="name" name="workText_settings[name]" value="%s" size="6" />',
	        isset( $this->options['name'] ) ? esc_attr( $this->options['name']) : '');
	}
}

if( is_admin() ){
    $workText_settings_page = new workText_settings_page();
}

// Add settings link on plugin page
function workText_settings_link ($links) { 
	$settings_link = '<a href="edit.php?post_type=workText&page=work-text">'.__('Settings', 'work-text').'</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}
$workText_plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$workText_plugin", 'workText_settings_link' );






///////////////////
// FRONT END
///////////////////

// Shortcode
function workText_shortcode($atts, $content = null) {
    // Set default shortcode attributes
	$options = get_option( 'workText_settings' );
	if(!$options){
		workText_set_options ();
		$options = get_option( 'workText_settings' );
	}

	// Parse incomming $atts into an array and merge it with $defaults
	$atts = shortcode_atts($options, $atts);

	return workText_frontend($atts);
}
add_shortcode('work-text', 'workText_shortcode');

// Display workText
function workText_frontend($atts){
	$id = $atts['name'];
	$id2 = $atts['category'];
	
	$args = array( 'post_type' => 'workText', 'posts_per_page' => 10, 'orderby' => $atts['orderby'], 'order' => $atts['order'] );
	$loop = new WP_Query( $args );
	?> 
    <?php
    		$j = 0;
			if ($id2 === "single") {
				while ( $loop->have_posts() ) : $loop->the_post();
				$j = $j + 1;
				$title = get_the_title();
				$content = get_the_content();
				if($id === $title){
					//need to add in code to show case study link
					?>
					<div class="workDesc" id="workContent-<?php echo $id ?>">
						<?php echo $content ?>
					</div>
					<?php
				
				}
				$content = '';
				$title ='';
				?>	
				<?php			
				endwhile;
			}
			else if ($id2 === "logo") {
				while ( $loop->have_posts() ) : $loop->the_post();
				$j = $j + 1;
				$logo = get_post_meta( get_the_ID(), '_logo_work', true );
				if($id === $title){
					//echo("<script>console.log('PHP: ".$title.$j."');</script>");
					//echo("<script>console.log('PHP: ".$title.$excerpt."');</script>");
					?>
					<div class="workSVG" id="workSVG-<?php echo $id ?>">
						<?php echo $logo ?>
					</div>
					<?php
				
				}
				$excerpt = '';
				$title ='';
				?>	
				<?php			
				endwhile;
			}
			else if ($id2 === "mobile") {
				?>
				<div class="mobWorkHolder" id="work_holder_<?php echo $id2?>">
					<div id="carouselWork" class="carousel slide" data-ride="carousel" data-interval="false">
  					<div class="carousel-inner" role="listbox">
				<?php
			while ( $loop->have_posts() ) : $loop->the_post();
			$j = $j + 1;
			$client = get_post_meta( get_the_ID(), '_client_work', true );
			$logo = get_post_meta( get_the_ID(), '_logo_work', true );
			$caseStudy = get_post_meta( get_the_ID(), '_case_work', true );
			$content = get_the_content_with_formatting();
				//echo("<script>console.log('PHP: ".$id.$id2."');</script>");
				//echo("<script>console.log('PHP: ".$title.$excerpt."');</script>");
				if ($j === 1) {
				?>
					<div class="carousel-item active">
				<?php 
					}
					else {
				?>
					<div class="carousel-item">
				<?php
					}
				?>
      					<div class="mob_logo" id="mob_logo_<?php echo $id?>">
      						<?php echo $logo ?>
						</div>
						<div class="mob_workText" id="mob_text_<?php echo $id?>">
  					 		<h4><?php echo $client ?></h4>
  					 		<?php echo $content ?>
  					 	</div>
  					 	<?php
  					 	if (strcasecmp($caseStudy, "none") == 0) {
						}
						else {
							?>
							<div class="mob_case" id="mob_case_<?php echo $id?>">
								Case study available on desktop view
							</div>
						<?php
							}
						?>
   					 </div>
				<?php
				
			$content = '';
			$client ='';
			$logo ='';
			$caseStudy ='';
				
	?>	
			<?php			
			endwhile;
			?>
			</div>
			<a class="carousel-control-prev" href="#carouselWork" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselWork" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
 			 </a>
			</div>
			</div>
			<?php
			}
			rewind_posts();
			// Restore original Post Data
	wp_reset_postdata();	
	
	return $output;
}

?>