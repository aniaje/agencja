
<?php


function loadjq()
{

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'loadjq');


function load_stylesheets()
{

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all');
    wp_enqueue_style('animate');


    wp_register_style('onepagecss', get_template_directory_uri() . '/one-page/onepage.css', array(), 1, 'all');
    wp_enqueue_style('onepagecss');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('colors', get_template_directory_uri() . '/css/colors.css', array(), 1, 'all');
    wp_enqueue_style('colors');


    wp_register_style('dark', get_template_directory_uri() . '/css/dark.css', array(), 1, 'all');
    wp_enqueue_style('dark');

    wp_register_style('font-icons', get_template_directory_uri() . '/css/font-icons.css', array(), 1, 'all');
    wp_enqueue_style('font-icons');

    wp_register_style('fonts', get_template_directory_uri() . '/css/fonts.css', array(), 1, 'all');
    wp_enqueue_style('fonts');

    wp_register_style('intro-fonts', get_template_directory_uri() . '/css/intro-fonts.css', array(), 1, 'all');
    wp_enqueue_style('intro-fonts');


    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1, 'all');
    wp_enqueue_style('magnific-popup');

    wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.css', array(), 1, 'all');
    wp_enqueue_style('swiper');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');





function addjs()
{



    wp_register_script('parallax', get_template_directory_uri() . '/js/plugins.parallax.js', array(), 1, 1, 1);
    wp_enqueue_script('parallax');


    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('pluginsb');

    wp_register_script('pluginsb', get_template_directory_uri() . '/js/plugins.bootstrap.js', array(), 1, 1, 1);
    wp_enqueue_script('pluginsb');


    wp_register_script('carousel', get_template_directory_uri() . '/js/plugins.carousel.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins');


    wp_register_script('plugins-min', get_template_directory_uri() . '/js/plugins.min.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins-min');

    wp_register_script('functions', get_template_directory_uri() . '/js/functions.js', array(), 1, 1, 1);
    wp_enqueue_script('functions');
}

add_action('wp_enqueue_scripts', 'addjs');


function removeplugins()
{
    wp_dequeue_script('ajaxportfolio', get_template_directory_uri() . '/js/plugins.ajaxportfolio.js', array(), 1, 1, 1);
}

add_action('wp_dequeue_scripts', 'removeplugins');


function addplugins()
{
    wp_enqueue_script('plugins-min', get_template_directory_uri() . '/js/plugins.min.js', array('jquery'));

    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'addplugins');


function wpb_add_google_fonts()
{

    wp_enqueue_style('wpb-google-fonts', "https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,800;1,400;1,500;1,600;1,700&display=swap", true);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');




add_image_size('large', 600, 600, true);
add_image_size('small', 400, 400, true);


function mytheme_custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);


add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');





// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end
        ';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


// register a new menu
register_nav_menu('main-menu', 'Main menu');


// add_filter('get_the_archive_title', function ($title) {

//     if (is_category()) {

//         $title = single_cat_title('', false);
//     }

//     return $title;
// });

add_filter('get_the_archive_title', function ($title) {

    if (is_category('wpisy')) {

        $title = 'wszystkie moje teksty';
    }
    return $title;
});
