<?php
/*
Plugin Name: Contact Siso
Plugin URI: http://www.siso.co.nz
Description: Siso contact info
Version: 1.0
Author: Siso Solutions
Author URI: http://www.siso.co.nz
*/

// Initialise - load in translations
function contactUs_loadtranslations () {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_textdomain( 'contact-siso', false, $plugin_dir );
}
add_action('plugins_loaded', 'contactUs_loadtranslations');

////////////////////////////
// Custom Post Type Setup
////////////////////////////
add_action( 'init', 'contactUs_post_type' );
function contactUs_post_type() {
	$labels = array(
		'name' => __('contact siso', 'contact-siso'),
		'singular_name' => __('contact siso', 'contact-siso'),
		'add_new' => __('Add New', 'contact-siso'),
		'add_new_item' => __('Add New contact siso', 'contact-siso'),
		'edit_item' => __('Edit contact siso', 'contact-siso'),
		'new_item' => __('New contact siso', 'contact-siso'),
		'view_item' => __('View contact siso', 'contact-siso'),
		'search_items' => __('Search contact siso', 'contact-siso'),
		'not_found' => __('No contact siso', 'contact-siso'),
		'not_found_in_trash' => __('No contact siso found in Trash', 'contact-siso'),
		'parent_item_colon' => '',
		'menu_name' => __('Contact us', 'contact-siso')
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
	register_post_type('contactUs', $args);
}

// Create a taxonomy for the contactUs post type
function contactUs_taxonomies () {
	$args = array('hierarchical' => true);
	register_taxonomy( 'contactUs_category', 'contactUs', $args );
}
add_action( 'init', 'contactUs_taxonomies', 0 );

add_action( 'add_meta_boxes', 'contactUs_box' );

function contactUs_box() {
	add_meta_box(
		'contactUs_box',
		__( 'Client information', 'Siso' ),
		'contact_box_content',
		'contactUs',
		'normal',
		'default'
	);
}

function contact_box_content( $post ) {

	$emailUser = get_post_meta( $post->ID, '_emailUser_contact', true );
	$emailDom = get_post_meta( $post->ID, '_emailDom_contact', true );
	$phone = get_post_meta( $post->ID, '_phone_contact', true );
	$facebook = get_post_meta( $post->ID, '_fb_contact', true );
	$twitter = get_post_meta( $post->ID, '_twitter_contact', true );
	$linkedin = get_post_meta( $post->ID, '_linkedin_contact', true );

	wp_nonce_field( plugin_basename( __FILE__ ), 'contact_box_content_nonce' );
	echo 'Contact us information';
	?>
	<p><label for="emailUser_contact">Email username</label>
	</p>
	<p><input type="text" id="emailUser_contact" name="emailUser_contact" placeholder="Enter the username part of your email" value="<?php echo esc_attr( $emailUser ); ?>"/>
	</p>
	<p><label for="emailDom_contact">Email domain</label>
	</p>
	<p><input type="text" id="emailDom_contact" name="emailDom_contact" placeholder="Enter the domain part of your email" value="<?php echo esc_attr( $emailDom ); ?>"/>
	</p>
	<p><label for="phone_contact">Phone number</label>
	</p>
	<p><input type="text" id="phone_contact" name="phone_contact" placeholder="Enter phone number" value="<?php echo esc_attr( $phone ); ?>"/>
	</p>
	<p><label for="fb_contact">Facebook URL</label>
	</p>
	<p><input type="text" id="fb_contact" name="fb_contact" placeholder="Enter facebook URL" value="<?php echo esc_attr( $facebook ); ?>"/>
	</p>
	<p><label for="twitter_contact">Twitter URL</label>
	</p>
	<p><input type="text" id="twitter_contact" name="twitter_contact" placeholder="Enter twitter URL" value="<?php echo esc_attr( $twitter ); ?>"/>
	</p>
	<p><label for="linkedin_contact">LinkedIn URL</label>
	</p>
	<p><input type="text" id="linkedin_contact" name="linkedin_contact" placeholder="Enter LinkedIn URL" value="<?php echo esc_attr( $linkedin ); ?>"/>
	</p>
	<?php

}

add_action( 'save_post', 'contact_box_save' );

function contact_box_save( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	if ( !wp_verify_nonce( $_POST[ 'contact_box_content_nonce' ], plugin_basename( __FILE__ ) ) )
		return;

	if ( 'page' == $_POST[ 'post_type' ] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return;
	}
	$emailUser = $_POST[ 'emailUser_contact' ];
	update_post_meta( $post_id, '_emailUser_contact', $emailUser );
	$emailDom = $_POST[ 'emailDom_contact' ];
	update_post_meta( $post_id, '_emailDom_contact', $emailDom);
	$phone = $_POST[ 'phone_contact' ];
	update_post_meta( $post_id, '_phone_contact', $phone );
	$facebook = $_POST[ 'fb_contact' ];
	update_post_meta( $post_id, '_fb_contact', $facebook );
	$twitter = $_POST[ 'twitter_contact' ];
	update_post_meta( $post_id, '_twitter_contact', $twitter );
	$linkedin = $_POST[ 'linkedin_contact' ];
	update_post_meta( $post_id, '_linkedin_contact', $linkedin );
}

if ( class_exists( 'MultiPostThumbnails' ) ) {
	new MultiPostThumbnails(
		array(
			'label' => 'proj_img1',
			'id' => 'proj_img1',
			'post_type' => 'contactUs'
		)
	);
}





// Set up settings defaults
register_activation_hook( __FILE__, 'contactUs_set_options' );

function contactUs_set_options() {
	$defaults = array(
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'category' => '',
		'name' => ''
	);
	add_option( 'contactUs_settings', $defaults );
}
// Clean up on uninstall
register_activation_hook( __FILE__, 'contactUs_deactivate' );

function contactUs_deactivate() {
	delete_option( 'contactUs_settings' );
}


///////////////////
// SETTINGS PAGE
///////////////////
class contactUs_settings_page {
	// Holds the values to be used in the fields callbacks
	private $options;
    	
	// Start up
	public function __construct() {
	    add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
	    add_action( 'admin_init', array( $this, 'page_init' ) );
	}
    	
	// Add settings page
	public function add_plugin_page() {
		add_submenu_page('edit.php?post_type=contactUs', __('Settings', 'contact-siso'), __('Settings', 'contact-siso'), 'manage_options', 'contact-siso', array($this,'create_admin_page'));
	}
    	
	// Options page callback
	public function create_admin_page() {
	    // Set class property
	    $this->options = get_option( 'contactUs_settings' );
		if(!$this->options){
			contactUs_set_options ();
			$this->options = get_option( 'contactUs_settings' );
		}
	    ?>
	    <div class="wrap">
			<?php screen_icon('edit');?> <h2>contact siso <?php _e('Settings', 'contact-siso'); ?></h2>
			<p><?php printf(__('You can set the default behaviour of the contact siso accordion. All of these settings can be overridden by using %s shortcode attributes %s.', 'contact-siso')); ?></p>
		         
	        <form method="post" action="options.php">
	        <?php
	            settings_fields( 'contactUs_settings' );   
	            do_settings_sections( 'contact-siso' );
	            submit_button(); 
	        ?>
	        </form>
	    </div>
	    <?php
	}
    	
	// Register and add settings
	public function page_init() {        
	    register_setting(
	        'contactUs_settings', // Option group
	        'contactUs_settings', // Option name
	        array( $this, 'sanitize' ) // Sanitize
	    );
    	
	    add_settings_section(
	        'contactUs_settings_options', // ID
	        '', // Title - nothing to say here.
	        array( $this, 'contactUs_settings_options_header' ), // Callback
	        'contact-siso' // Page
	    );      	
		
	    add_settings_field(
	        'orderby', // ID
	        __('Order Slides By', 'contact-siso'), // Title 
	        array( $this, 'orderby_callback' ), // Callback
	        'contact-siso', // Page
	        'contactUs_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'order', // ID
	        __('Ordering Direction', 'contact-siso'), // Title 
	        array( $this, 'order_callback' ), // Callback
	        'contact-siso', // Page
	        'contactUs_settings_options' // Section           
	    );
		
	    add_settings_field(
	        'category', // ID
	        __('Restrict to Category', 'contact-siso'), // Title 
	        array( $this, 'category_callback' ), // Callback
	        'contact-siso', // Page
	        'contactUs_settings_options' // Section           
	    );
	    add_settings_field(
	        'name', // ID
	        __('Name to show', 'contact-siso'), // Title 
	        array( $this, 'name_callback' ), // Callback
	        'contact-siso', // Page
	        'contactUs_settings_options' // Section           
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
	public function contactUs_settings_options_header() {
	    // nothing to say here.
	}
    	
	
	public function orderby_callback() {
		$orderby_options = array (
			'menu_order' => __('Menu order, as set in contact siso post pages', 'contact-siso'),
			'date' => __('Date text was published', 'contact-siso'),
			'rand' => __('Random ordering', 'contact-siso'),
			'title' => __('contact siso title', 'contact-siso')			
		);
		print '<select id="orderby" name="contactUs_settings[orderby]">';
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
			$contactUs_showcontrols_a = '';
			$contactUs_showcontrols_d = ' selected="selected"';
		} else {
			$contactUs_showcontrols_a = ' selected="selected"';
			$contactUs_showcontrols_d = '';
		}
		print '<select id="order" name="contactUs_settings[order]">
			<option value="ASC"'.$contactUs_showcontrols_a.'>'.__('Ascending', 'contact-siso').'</option>
			<option value="DESC"'.$contactUs_showcontrols_d.'>'.__('Decending', 'contact-siso').'</option>
		</select>';
	}
	
	public function category_callback() {
		$cats = get_terms('contactUs_category');
		print '<select id="orderby" name="contactUs_settings[category]">
			<option value="">'.__('All Categories', 'contact-siso').'</option>';
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
	    printf('<input type="text" id="name" name="contactUs_settings[name]" value="%s" size="6" />',
	        isset( $this->options['name'] ) ? esc_attr( $this->options['name']) : '');
	}
}

if( is_admin() ){
    $contactUs_settings_page = new contactUs_settings_page();
}

// Add settings link on plugin page
function contactUs_settings_link ($links) { 
	$settings_link = '<a href="edit.php?post_type=contactUs&page=contact-siso">'.__('Settings', 'contact-siso').'</a>'; 
	array_unshift($links, $settings_link); 
	return $links; 
}
$contactUs_plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$contactUs_plugin", 'contactUs_settings_link' );






///////////////////
// FRONT END
///////////////////

// Shortcode
function contactUs_shortcode($atts, $content = null) {
    // Set default shortcode attributes
	$options = get_option( 'contactUs_settings' );
	if(!$options){
		contactUs_set_options ();
		$options = get_option( 'contactUs_settings' );
	}

	// Parse incomming $atts into an array and merge it with $defaults
	$atts = shortcode_atts($options, $atts);

	return contactUs_frontend($atts);
}
add_shortcode('contact-siso', 'contactUs_shortcode');

// Display contactUs
function contactUs_frontend($atts){
	$id = $atts['name'];
	$id2 = $atts['category'];
	
	$args = array( 'post_type' => 'contactUs', 'posts_per_page' => 10, 'orderby' => $atts['orderby'], 'order' => $atts['order'] );
	$loop = new WP_Query( $args );
	?> 
    <?php
    		$j = 0;
			if ($id2 === "single") {
				while ( $loop->have_posts() ) : $loop->the_post();
				$j = $j + 1;
			$title = get_the_title();
			$content = get_the_content_with_formatting();
			$emailUser = get_post_meta( get_the_ID(), '_emailUser_contact', true );
			$emailDom = get_post_meta( get_the_ID(), '_emailDom_contact', true );
			$phone = get_post_meta( get_the_ID(), '_phone_contact', true );
			$facebook = get_post_meta( get_the_ID(), '_fb_contact', true );
			$twitter = get_post_meta( get_the_ID(), '_twitter_contact', true );
			$linkedin = get_post_meta( get_the_ID(), '_linkedin_contact', true );
			if($id === $title){
				?>
					<div id="contact_address">
						<h2>ADDRESS</h2>
						<?php echo $content ?>
					</div>
					<!-- phone number -->
					<div id="contact_phone">
						<h2>PHONE NUMBER</h2>
						<?php echo $phone ?>
					</div>
					<div id="contact_email">
						<h2>EMAIL</h2>
						<script language="JavaScript">
							var username = "<?php echo $emailUser ?>";
							var hostname = "<?php echo $emailDom ?>";
							var linktext = username + "@" + hostname ;
							document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linktext + "</a>");
						</script>
					</div>
					<div id="contact_social">
						<h2>SOCIAL</h2>
				<?php
					if (empty($facebook)){ 
					
					}
					else {
						?>
						<div id="contact_facebook">
							<a href="<?php echo $facebook ?>">
								<svg version="1.1" class="contact_svg" id="facebook_svg" x="0px" y="0px" width="96px" height="80px" viewBox="0 0 96 80" preserveAspectRatio="xMidYMid">
<path fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M38.702,27.603h-9.299v12.396h9.299v37.193h15.496
	V39.999h11.291l1.107-12.396H54.198v-5.164c0-2.96,0.594-4.135,3.457-4.135h8.941V2.808H54.792c-11.141,0-16.09,4.909-16.09,14.304
	V27.603z"/>
</svg>
							</a>
						</div>
						<?php
					}
					if (empty($twitter)){ 
					
					}
					else {
						?>
						<div id="contact_twitter">
							<a href="<?php echo $twitter?>">
								<svg version="1.1" class="contact_svg" id="twitter_svg" x="0px" y="0px"
	 width="96px" height="80px" viewBox="0 0 96 80" preserveAspectRatio="xMidYMid">
<path fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M92.391,12.776c-3.23,1.435-6.701,2.4-10.344,2.835
	c3.721-2.229,6.578-5.758,7.918-9.964c-3.479,2.063-7.332,3.564-11.438,4.371c-3.281-3.5-7.965-5.687-13.143-5.687
	c-11.627,0-20.172,10.848-17.549,22.11c-14.959-0.751-28.232-7.919-37.115-18.816c-4.719,8.093-2.445,18.684,5.568,24.046
	c-2.943-0.095-5.725-0.901-8.15-2.251c-0.197,8.344,5.783,16.145,14.445,17.884c-2.537,0.689-5.312,0.847-8.137,0.307
	c2.293,7.154,8.939,12.358,16.826,12.506c-7.568,5.937-17.113,8.586-26.664,7.46c7.973,5.111,17.438,8.091,27.607,8.091
	c33.436,0,52.33-28.239,51.186-53.569C86.922,19.559,89.975,16.388,92.391,12.776z"/>
</svg>
							</a>
						</div>
						<?php
					}
					if (empty($linkedin)){ 
					
					}
					else {
						?>
						<div id="contact_linkedin">
							<a href="<?php echo $linkedin?>">
								<svg version="1.1" class="contact_svg" id="linkedin_svg" x="0px" y="0px"
	 width="96px" height="80px" viewBox="0 0 96 80" preserveAspectRatio="xMidYMid">
<path fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M25.727,11.442c0,4.382-3.523,7.933-7.87,7.933
	c-4.348,0-7.871-3.551-7.871-7.933c0-4.378,3.523-7.933,7.871-7.933C22.203,3.51,25.727,7.064,25.727,11.442z M25.789,25.721H9.924
	v50.769h15.865V25.721z M51.117,25.721H35.352v50.769h15.766V49.841c0-14.817,19.131-16.032,19.131,0v26.648h15.828V44.344
	c0-25.003-28.31-24.095-34.959-11.784V25.721z"/>
</svg>
							</a>
						</div>
						<?php
					}
				?>
				</div>
				<?php 
			}
			$content = '';
			$title ='';
			$emailUser ='';
			$emailDom ='';
			$phone ='';
			$facebook ='';
			$linkedin ='';
		
			endwhile;
			}
			else if ($id2 === "logo") {
				
			}
			else if ($id2 === "mobile") {
				
			}
			else if ($id2 === "small") {
				while ( $loop->have_posts() ) : $loop->the_post();
				$j = $j + 1;
				$title = get_the_title();
				$emailUser = get_post_meta( get_the_ID(), '_emailUser_contact', true );
				$emailDom = get_post_meta( get_the_ID(), '_emailDom_contact', true );
				if($id === $title){
				?>
					<div id="small_help">
						<p>Small screens we can help</p>
						<script language="JavaScript">
							var username = "<?php echo $emailUser ?>";
							var hostname = "<?php echo $emailDom ?>";
							var linktext = username + "@" + hostname ;
							document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linktext + "</a>");
						</script>
					</div>
				<?php 
				}
				$title ='';
				$emailUser ='';
				$emailDom ='';
		
			endwhile;
			}
			rewind_posts();
			// Restore original Post Data
	wp_reset_postdata();	
	
	return $output;
}

?>