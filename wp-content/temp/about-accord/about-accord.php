<?php
/*
Plugin Name: About accordion
Plugin URI: http://www.siso.co.nz
Description: About accord for Accordion
Version: 1.0
Author: Siso Solutions
Author URI: http://www.siso.co.nz
*/

// Initialise - load in translations
function aboutAccord_loadtranslations () {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_accorddomain( 'about-accord', false, $plugin_dir );
}
add_action('plugins_loaded', 'aboutAccord_loadtranslations');

///////////////////
// SETTINGS PAGE
///////////////////
class aboutAccord_settings_page {
	// Holds the values to be used in the fields callbacks
	private $options;
    	
	// Start up
	public function __construct() {
	    add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
	    add_action( 'admin_init', array( $this, 'page_init' ) );
	}
    	
	// Add settings page
	public function add_plugin_page() {
		add_submenu_page('edit.php?post_type=aboutAccord', __('Settings', 'about-accord'), __('Settings', 'about-accord'), 'manage_options', 'about-accord', array($this,'create_admin_page'));
	}
    	
	// Options page callback
	public function create_admin_page() {
	    // Set class property
	    $this->options = get_option( 'aboutAccord_settings' );
		if(!$this->options){
			aboutAccord_set_options ();
			$this->options = get_option( 'aboutAccord_settings' );
		}
	    ?>
	    <div class="wrap">
			<?php screen_icon('edit');?> <h2>About accord <?php _e('Settings', 'about-accord'); ?></h2>
			<p><?php printf(__('You can set the default behaviour of the About accord accordion. All of these settings can be overridden by using %s shortcode attributes %s.', 'about-accord')); ?></p>
		         
	        <form method="post" action="options.php">
	        <?php
	            settings_fields( 'aboutAccord_settings' );   
	            do_settings_sections( 'about-accord' );
	            submit_button(); 
	        ?>
	        </form>
	    </div>
	    <?php
	}
    	
	// Register and add settings
	public function page_init() {        
	    register_setting(
	        'aboutAccord_settings', // Option group
	        'aboutAccord_settings', // Option name
	        array( $this, 'sanitize' ) // Sanitize
	    );
    	
	    add_settings_section(
	        'aboutAccord_settings_options', // ID
	        '', // Title - nothing to say here.
	        array( $this, 'aboutAccord_settings_options_header' ), // Callback
	        'about-accord' // Page
	    );      	
		
	    add_settings_field(
	        'orderby', // ID
	        __('Order Slides By', 'about-accord'), // Title 
	        array( $this, 'orderby_callback' ), // Callback
	        'about-accord', // Page
	        'aboutAccord_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'order', // ID
	        __('Ordering Direction', 'about-accord'), // Title 
	        array( $this, 'order_callback' ), // Callback
	        'about-accord', // Page
	        'aboutAccord_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'category', // ID
	        __('Restrict to Category', 'about-accord'), // Title 
	        array( $this, 'category_callback' ), // Callback
	        'about-accord', // Page
	        'aboutAccord_settings_options' // Section           
	    );
	    add_settings_field(
	        'name', // ID
	        __('Name to show', 'about-accord'), // Title 
	        array( $this, 'name_callback' ), // Callback
	        'about-accord', // Page
	        'aboutAccord_settings_options' // Section           
	    );
		   
	}
    	
	// Sanitize each setting field as needed -  @param array $input Contains all settings fields as array keys
	public function sanitize( $input ) {
	    $new_input = array();
		foreach($input as $key => $var){
				$new_input[$key] = sanitize_accord_field( $input[$key] );
		}
	    return $new_input;
	}
    	
	// Print the Section accord
	public function aboutAccord_settings_options_header() {
	    // nothing to say here.
	}
    	
	
	public function orderby_callback() {
		$orderby_options = array (
			'menu_order' => __('Menu order, as set in About accord post pages', 'about-accord'),
			'date' => __('Date accord was published', 'about-accord'),
			'rand' => __('Random ordering', 'about-accord'),
			'title' => __('About accord title', 'about-accord')			
		);
		print '<select id="orderby" name="aboutAccord_settings[orderby]">';
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
			$aboutAccord_showcontrols_a = '';
			$aboutAccord_showcontrols_d = ' selected="selected"';
		} else {
			$aboutAccord_showcontrols_a = ' selected="selected"';
			$aboutAccord_showcontrols_d = '';
		}
		print '<select id="order" name="aboutAccord_settings[order]">
			<option value="ASC"'.$aboutAccord_showcontrols_a.'>'.__('Ascending', 'about-accord').'</option>
			<option value="DESC"'.$aboutAccord_showcontrols_d.'>'.__('Decending', 'about-accord').'</option>
		</select>';
	}
	
	public function category_callback() {
		$cats = get_terms('aboutAccord_category');
		print '<select id="orderby" name="aboutAccord_settings[category]">
			<option value="">'.__('All Categories', 'about-accord').'</option>';
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
	    printf('<input type="accord" id="name" name="aboutAccord_settings[name]" value="%s" size="6" />',
	        isset( $this->options['name'] ) ? esc_attr( $this->options['name']) : '');
	}
}

if( is_admin() ){
    $aboutAccord_settings_page = new aboutAccord_settings_page();
}

// Add settings link on plugin page
function aboutAccord_settings_link ($links) { 
	$settings_link = '<a href="edit.php?post_type=aboutAccord&page=about-accord">'.__('Settings', 'about-accord').'</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}
$aboutAccord_plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$aboutAccord_plugin", 'aboutAccord_settings_link' );


///////////////////
// FRONT END
///////////////////

// Shortcode
function aboutAccord_shortcode($atts, $content = null) {
    // Set default shortcode attributes
	$options = get_option( 'aboutAccord_settings' );
	if(!$options){
		aboutAccord_set_options ();
		$options = get_option( 'aboutAccord_settings' );
	}

	// Parse incomming $atts into an array and merge it with $defaults
	$atts = shortcode_atts($options, $atts);

	return aboutAccord_frontend($atts);
}
add_shortcode('about-accord', 'aboutAccord_shortcode');

// Display about accordion
function aboutAccord_frontend($atts){
	$id = $atts['name'];
	//$id = 'home';
	//rand(0, 999); // use a random ID so that the CSS IDs work with multiple on one page
	
	
	$args = array( 'post_type' => 'aboutAccord', 'posts_per_page' => 10, 'orderby' => $atts['orderby'], 'order' => $atts['order'] );
	$loop = new WP_Query( $args );
	?> 
            <div class="panel-group" id="accordion">
    <?php
    	$j = 0;
			while ( $loop->have_posts() ) : $loop->the_post();
			$j = $j + 1;
	if($j == 1) {
  		$coll = "in";
  		$coll2 = "";
	}
	else {
		$coll = "";
		$coll2 = "collapsed";
	}
	?>
				<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle <?php echo $coll2 ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID(); ?>">
          <?php the_title(); ?>
        </a>
      </h4>
    </div>
    <div id="collapse<?php the_ID(); ?>" class="panel-collapse collapse <?php echo $coll ?> no-transition">
      <div class="panel-body">
        <?php the_excerpt(); ?>
        </div>
    </div>
  </div>
				
			<?php			
			endwhile;
	?>
	</div>
        <?php
	
	
	// Restore original Post Data
	wp_reset_postdata();	
	
	return $output;
}

?>