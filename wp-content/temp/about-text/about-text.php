<?php
/*
Plugin Name: About text
Plugin URI: http://www.siso.co.nz
Description: About text for Popovers
Version: 1.0
Author: Siso Solutions
Author URI: http://www.siso.co.nz
*/

// Initialise - load in translations
function aboutText_loadtranslations () {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_textdomain( 'about-text', false, $plugin_dir );
}
add_action('plugins_loaded', 'aboutText_loadtranslations');

////////////////////////////
// Custom Post Type Setup
////////////////////////////
add_action( 'init', 'aboutText_post_type' );
function aboutText_post_type() {
	$labels = array(
		'name' => __('About text', 'about-text'),
		'singular_name' => __('About text', 'about-text'),
		'add_new' => __('Add New', 'about-text'),
		'add_new_item' => __('Add New About text', 'about-text'),
		'edit_item' => __('Edit About text', 'about-text'),
		'new_item' => __('New About text', 'about-text'),
		'view_item' => __('View About text', 'about-text'),
		'search_items' => __('Search About text', 'about-text'),
		'not_found' => __('No About text', 'about-text'),
		'not_found_in_trash' => __('No About text found in Trash', 'about-text'),
		'parent_item_colon' => '',
		'menu_name' => __('About', 'about-text')
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
		'supports' => array('title','excerpt','thumbnail', 'page-attributes')
	); 
	register_post_type('aboutText', $args);
}
// Create a taxonomy for the aboutText post type
function aboutText_taxonomies () {
	$args = array('hierarchical' => true);
	register_taxonomy( 'aboutText_category', 'aboutText', $args );
}
add_action( 'init', 'aboutText_taxonomies', 0 );


// Set up settings defaults
register_activation_hook(__FILE__, 'aboutText_set_options');
function aboutText_set_options (){
	$defaults = array(
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'category' => '',
		'name' => ''
	);
	add_option('aboutText_settings', $defaults);
}
// Clean up on uninstall
register_activation_hook(__FILE__, 'aboutText_deactivate');
function aboutText_deactivate(){
	delete_option('aboutText_settings');
}


///////////////////
// SETTINGS PAGE
///////////////////
class aboutText_settings_page {
	// Holds the values to be used in the fields callbacks
	private $options;
    	
	// Start up
	public function __construct() {
	    add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
	    add_action( 'admin_init', array( $this, 'page_init' ) );
	}
    	
	// Add settings page
	public function add_plugin_page() {
		add_submenu_page('edit.php?post_type=aboutText', __('Settings', 'about-text'), __('Settings', 'about-text'), 'manage_options', 'about-text', array($this,'create_admin_page'));
	}
    	
	// Options page callback
	public function create_admin_page() {
	    // Set class property
	    $this->options = get_option( 'aboutText_settings' );
		if(!$this->options){
			aboutText_set_options ();
			$this->options = get_option( 'aboutText_settings' );
		}
	    ?>
	    <div class="wrap">
			<?php screen_icon('edit');?> <h2>About text <?php _e('Settings', 'about-text'); ?></h2>
			<p><?php printf(__('You can set the default behaviour of the About text accordion. All of these settings can be overridden by using %s shortcode attributes %s.', 'about-text')); ?></p>
		         
	        <form method="post" action="options.php">
	        <?php
	            settings_fields( 'aboutText_settings' );   
	            do_settings_sections( 'about-text' );
	            submit_button(); 
	        ?>
	        </form>
	    </div>
	    <?php
	}
    	
	// Register and add settings
	public function page_init() {        
	    register_setting(
	        'aboutText_settings', // Option group
	        'aboutText_settings', // Option name
	        array( $this, 'sanitize' ) // Sanitize
	    );
    	
	    add_settings_section(
	        'aboutText_settings_options', // ID
	        '', // Title - nothing to say here.
	        array( $this, 'aboutText_settings_options_header' ), // Callback
	        'about-text' // Page
	    );      	
		
	    add_settings_field(
	        'orderby', // ID
	        __('Order Slides By', 'about-text'), // Title 
	        array( $this, 'orderby_callback' ), // Callback
	        'about-text', // Page
	        'aboutText_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'order', // ID
	        __('Ordering Direction', 'about-text'), // Title 
	        array( $this, 'order_callback' ), // Callback
	        'about-text', // Page
	        'aboutText_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'category', // ID
	        __('Restrict to Category', 'about-text'), // Title 
	        array( $this, 'category_callback' ), // Callback
	        'about-text', // Page
	        'aboutText_settings_options' // Section           
	    );
	    add_settings_field(
	        'name', // ID
	        __('Name to show', 'about-text'), // Title 
	        array( $this, 'name_callback' ), // Callback
	        'about-text', // Page
	        'aboutText_settings_options' // Section           
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
	public function aboutText_settings_options_header() {
	    // nothing to say here.
	}
    	
	
	public function orderby_callback() {
		$orderby_options = array (
			'menu_order' => __('Menu order, as set in About text post pages', 'about-text'),
			'date' => __('Date text was published', 'about-text'),
			'rand' => __('Random ordering', 'about-text'),
			'title' => __('About text title', 'about-text')			
		);
		print '<select id="orderby" name="aboutText_settings[orderby]">';
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
			$aboutText_showcontrols_a = '';
			$aboutText_showcontrols_d = ' selected="selected"';
		} else {
			$aboutText_showcontrols_a = ' selected="selected"';
			$aboutText_showcontrols_d = '';
		}
		print '<select id="order" name="aboutText_settings[order]">
			<option value="ASC"'.$aboutText_showcontrols_a.'>'.__('Ascending', 'about-text').'</option>
			<option value="DESC"'.$aboutText_showcontrols_d.'>'.__('Decending', 'about-text').'</option>
		</select>';
	}
	
	public function category_callback() {
		$cats = get_terms('aboutText_category');
		print '<select id="orderby" name="aboutText_settings[category]">
			<option value="">'.__('All Categories', 'about-text').'</option>';
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
	    printf('<input type="text" id="name" name="aboutText_settings[name]" value="%s" size="6" />',
	        isset( $this->options['name'] ) ? esc_attr( $this->options['name']) : '');
	}
}

if( is_admin() ){
    $aboutText_settings_page = new aboutText_settings_page();
}

// Add settings link on plugin page
function aboutText_settings_link ($links) { 
	$settings_link = '<a href="edit.php?post_type=aboutText&page=about-text">'.__('Settings', 'about-text').'</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}
$aboutText_plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$aboutText_plugin", 'aboutText_settings_link' );






///////////////////
// FRONT END
///////////////////

// Shortcode
function aboutText_shortcode($atts, $content = null) {
    // Set default shortcode attributes
	$options = get_option( 'aboutText_settings' );
	if(!$options){
		aboutText_set_options ();
		$options = get_option( 'aboutText_settings' );
	}

	// Parse incomming $atts into an array and merge it with $defaults
	$atts = shortcode_atts($options, $atts);

	return aboutText_frontend($atts);
}
add_shortcode('about-text', 'aboutText_shortcode');

// Display aboutText
function aboutText_frontend($atts){
	$id = $atts['name'];
	
	
	$args = array( 'post_type' => 'aboutText', 'posts_per_page' => 10, 'orderby' => $atts['orderby'], 'order' => $atts['order'] );
	$loop = new WP_Query( $args );
	?> 
    <?php
    		$j = 0;
			while ( $loop->have_posts() ) : $loop->the_post();
			$j = $j + 1;
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			if($id === $title){
				//echo("<script>console.log('PHP: ".$title.$j."');</script>");
				//echo("<script>console.log('PHP: ".$title.$excerpt."');</script>");
				?>
					<div id="aboutPop-<?php echo $id ?>">
						<?php echo $excerpt ?>
					</div>
				<?php
				
			}
			$excerpt = '';
			$title ='';
	?>
	
    
				
			<?php			
			endwhile;
			rewind_posts();
			// Restore original Post Data
	wp_reset_postdata();	
	
	return $output;
}

?>