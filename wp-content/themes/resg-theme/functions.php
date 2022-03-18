<?php

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('your-theme', TEMPLATEPATH . '/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);

// Get the page number
function get_page_number() {
    if (get_query_var('paged')) {
        print ' | ' . __('Page ', 'your-theme') . get_query_var('paged');
    }
}

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Articles right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// end get_page_number

function get_view($view) {
    include TEMPLATEPATH . '/views/' . $view . '.php';
}

function get_category_id($cat_name) {
    $term = get_term_by('name', $cat_name, 'category');
    return $term->term_id;
}

?>