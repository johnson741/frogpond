<?php

require_once('library/base_functions.php'); // core functions (don't remove)
add_editor_style("library/css/editor-styles.css"); // editor styles for tinymce
// add_image_size( 'thumb-600', 600, 150, true );  // custom image size example

/************* SCRIPTS AND STYLES ***************/

function bf_base_theme_builder(){
	wp_enqueue_script(
	    'theme_scripts',
	    get_stylesheet_directory_uri() . '/library/js/scripts.js',
	    array( 'jquery' ),
	    '0.72',
	    true
	);
	wp_enqueue_script(
		'modernizr',
		get_stylesheet_directory_uri() .'/library/js/libs/modernizr-2.6.2.min.js',
		array(),
		'2.6.2',
		false
	);
	/*
	// Currently using a minified reset in master.css 
	// Uncomment this and remove the reset from 
	// master to use normalize
	wp_enqueue_style(
		'normalize',
		get_stylesheet_directory_uri() .'/library/css/normalize.css',
		array(),
		'2.1.1',
		'all'
	);
	*/
	wp_enqueue_style(
		'foundation4',
		get_stylesheet_directory_uri() .'/library/css/foundation.css',
		array(),
		'4.0',
		'all'
	);
	wp_enqueue_style(
		'css-master',
		get_stylesheet_directory_uri() .'/library/css/master.css',
		array(),
		'0.72',
		'all'
	);
}
add_action('wp_enqueue_scripts', 'bf_base_theme_builder');


/************* SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bf_register_sidebars() {

    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Sidebar 1',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
  } 



/******** MENUS, ROLES & CAPABILITIES *******************/
/* remove some menus from the dashboard we don't need (for all users) */
function remove_menus () {
global $menu;
	$restricted = array(__('Posts'), __('Links'), __('Comments'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
//add_action('admin_menu', 'remove_menus'); // uncomment to enable


/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bf_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="comment-block">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></a></time>
				<?php edit_comment_link(__('(Edit)'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="help">
          			<p><?php _e('Your comment is awaiting moderation.') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} 



/************* SEARCH FORM LAYOUT *****************/

// Search Form from Gravitate
function grav_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search the Site..." />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} 