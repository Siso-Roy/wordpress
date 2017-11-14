<?php
/*
Plugin Name: serv text
Plugin URI: http://www.siso.co.nz
Description: serv text for animation
Version: 1.0
Author: Siso Solutions
Author URI: http://www.siso.co.nz
*/

// Initialise - load in translations
function servText_loadtranslations () {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_textdomain( 'serv-text', false, $plugin_dir );
}
add_action('plugins_loaded', 'servText_loadtranslations');

////////////////////////////
// Custom Post Type Setup
////////////////////////////
add_action( 'init', 'servText_post_type' );
function servText_post_type() {
	$labels = array(
		'name' => __('Services text', 'serv-text'),
		'singular_name' => __('Services text', 'serv-text'),
		'add_new' => __('Add New', 'serv-text'),
		'add_new_item' => __('Add New serv text', 'serv-text'),
		'edit_item' => __('Edit serv text', 'serv-text'),
		'new_item' => __('New serv text', 'serv-text'),
		'view_item' => __('View serv text', 'serv-text'),
		'search_items' => __('Search serv text', 'serv-text'),
		'not_found' => __('No serv text', 'serv-text'),
		'not_found_in_trash' => __('No serv text found in Trash', 'serv-text'),
		'parent_item_colon' => '',
		'menu_name' => __('Services', 'serv-text')
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
		'supports' => array('title','editor','excerpt','thumbnail', 'page-attributes')
	); 
	register_post_type('servText', $args);
}
// Create a taxonomy for the servText post type
function servText_taxonomies () {
	$args = array('hierarchical' => true);
	register_taxonomy( 'servText_category', 'servText', $args );
}
add_action( 'init', 'servText_taxonomies', 0 );


// Set up settings defaults
register_activation_hook(__FILE__, 'servText_set_options');
function servText_set_options (){
	$defaults = array(
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'category' => '',
		'name' => ''
	);
	add_option('servText_settings', $defaults);
}
// Clean up on uninstall
register_activation_hook(__FILE__, 'servText_deactivate');
function servText_deactivate(){
	delete_option('servText_settings');
}


///////////////////
// SETTINGS PAGE
///////////////////
class servText_settings_page {
	// Holds the values to be used in the fields callbacks
	private $options;
    	
	// Start up
	public function __construct() {
	    add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
	    add_action( 'admin_init', array( $this, 'page_init' ) );
	}
    	
	// Add settings page
	public function add_plugin_page() {
		add_submenu_page('edit.php?post_type=servText', __('Settings', 'serv-text'), __('Settings', 'serv-text'), 'manage_options', 'serv-text', array($this,'create_admin_page'));
	}
    	
	// Options page callback
	public function create_admin_page() {
	    // Set class property
	    $this->options = get_option( 'servText_settings' );
		if(!$this->options){
			servText_set_options ();
			$this->options = get_option( 'servText_settings' );
		}
	    ?>
	    <div class="wrap">
			<?php screen_icon('edit');?> <h2>serv text <?php _e('Settings', 'serv-text'); ?></h2>
			<p><?php printf(__('You can set the default behaviour of the serv text accordion. All of these settings can be overridden by using %s shortcode attributes %s.', 'serv-text')); ?></p>
		         
	        <form method="post" action="options.php">
	        <?php
	            settings_fields( 'servText_settings' );   
	            do_settings_sections( 'serv-text' );
	            submit_button(); 
	        ?>
	        </form>
	    </div>
	    <?php
	}
    	
	// Register and add settings
	public function page_init() {        
	    register_setting(
	        'servText_settings', // Option group
	        'servText_settings', // Option name
	        array( $this, 'sanitize' ) // Sanitize
	    );
    	
	    add_settings_section(
	        'servText_settings_options', // ID
	        '', // Title - nothing to say here.
	        array( $this, 'servText_settings_options_header' ), // Callback
	        'serv-text' // Page
	    );      	
		
	    add_settings_field(
	        'orderby', // ID
	        __('Order Slides By', 'serv-text'), // Title 
	        array( $this, 'orderby_callback' ), // Callback
	        'serv-text', // Page
	        'servText_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'order', // ID
	        __('Ordering Direction', 'serv-text'), // Title 
	        array( $this, 'order_callback' ), // Callback
	        'serv-text', // Page
	        'servText_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'category', // ID
	        __('Restrict to Category', 'serv-text'), // Title 
	        array( $this, 'category_callback' ), // Callback
	        'serv-text', // Page
	        'servText_settings_options' // Section           
	    );
	    add_settings_field(
	        'name', // ID
	        __('Name to show', 'serv-text'), // Title 
	        array( $this, 'name_callback' ), // Callback
	        'serv-text', // Page
	        'servText_settings_options' // Section           
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
	public function servText_settings_options_header() {
	    // nothing to say here.
	}
    	
	
	public function orderby_callback() {
		$orderby_options = array (
			'menu_order' => __('Menu order, as set in serv text post pages', 'serv-text'),
			'date' => __('Date text was published', 'serv-text'),
			'rand' => __('Random ordering', 'serv-text'),
			'title' => __('serv text title', 'serv-text')			
		);
		print '<select id="orderby" name="servText_settings[orderby]">';
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
			$servText_showcontrols_a = '';
			$servText_showcontrols_d = ' selected="selected"';
		} else {
			$servText_showcontrols_a = ' selected="selected"';
			$servText_showcontrols_d = '';
		}
		print '<select id="order" name="servText_settings[order]">
			<option value="ASC"'.$servText_showcontrols_a.'>'.__('Ascending', 'serv-text').'</option>
			<option value="DESC"'.$servText_showcontrols_d.'>'.__('Decending', 'serv-text').'</option>
		</select>';
	}
	
	public function category_callback() {
		$cats = get_terms('servText_category');
		print '<select id="orderby" name="servText_settings[category]">
			<option value="">'.__('All Categories', 'serv-text').'</option>';
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
	    printf('<input type="text" id="name" name="servText_settings[name]" value="%s" size="6" />',
	        isset( $this->options['name'] ) ? esc_attr( $this->options['name']) : '');
	}
}

if( is_admin() ){
    $servText_settings_page = new servText_settings_page();
}

// Add settings link on plugin page
function servText_settings_link ($links) { 
	$settings_link = '<a href="edit.php?post_type=servText&page=serv-text">'.__('Settings', 'serv-text').'</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}
$servText_plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$servText_plugin", 'servText_settings_link' );






///////////////////
// FRONT END
///////////////////

// Shortcode
function servText_shortcode($atts, $content = null) {
    // Set default shortcode attributes
	$options = get_option( 'servText_settings' );
	if(!$options){
		servText_set_options ();
		$options = get_option( 'servText_settings' );
	}

	// Parse incomming $atts into an array and merge it with $defaults
	$atts = shortcode_atts($options, $atts);

	return servText_frontend($atts);
}
add_shortcode('serv-text', 'servText_shortcode');

// Display servText
function servText_frontend($atts){
	$id = $atts['name'];
	$id2 = $atts['category'];
	
	$args = array( 'post_type' => 'servText', 'posts_per_page' => 10, 'orderby' => $atts['orderby'], 'order' => $atts['order'] );
	$loop = new WP_Query( $args );
	?> 
    <?php
    		$j = 0;
			if ($id2 === "single") {
			while ( $loop->have_posts() ) : $loop->the_post();
			$j = $j + 1;
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$content = get_the_content();
			if($id === $title){
				//echo("<script>console.log('PHP: ".$id.$id2."');</script>");
				//echo("<script>console.log('PHP: ".$title.$excerpt."');</script>");
				?>
					<div id="servText-<?php echo $id ?>">
						<?php echo $content ?>
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
			while ( $loop->have_posts() ) : $loop->the_post();
			$j = $j + 1;
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$content = get_the_content();
			if($id === $title){
				//echo("<script>console.log('PHP: ".$id.$id2."');</script>");
				//echo("<script>console.log('PHP: ".$title.$excerpt."');</script>");
				?>
					<div class="mobServText" id="servText-<?php echo $id ?>">
						<h4><?php echo $excerpt ?></h4>
						<p><?php echo $content ?></p>
					</div>
				<?php
				
			}
			$excerpt = '';
			$title ='';
	?>
	
    
				
			<?php			
			endwhile;
			}
			
			rewind_posts();
			// Restore original Post Data
	wp_reset_postdata();	
	
	return $output;
}

?>