<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="sidebar-block"><div class="widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    	'primary' => __( 'Primary Navigation', 'twentyten' ),
    ) );

    require_once    'lib/wpalchemy/MetaBox.php';
    require_once    'custom-post-types.php';
    require_once    'lib/wpalchemy/MediaAccess.php';
    include         'meta-boxes.php';


    $ma = new WPAlchemy_MediaAccess();
   

/* Editor CSS in header*/

    function custom_editor_css() {
        echo '<link rel="stylesheet" href="'.get_template_directory_uri() .'/stylesheets/editor.css"></style>';
    }

    add_action('admin_head', 'custom_editor_css');


/* Expose the Page Template */

    add_filter( 'template_include', 'var_template_include', 1000 );
    function var_template_include( $t ){
        $GLOBALS['current_theme_template'] = basename($t);
        return $t;
    }

    function get_current_template( $echo = false ) {
        if( !isset( $GLOBALS['current_theme_template'] ) )
            return false;
        if( $echo )
            echo str_replace('.php', '', $GLOBALS['current_theme_template']);
        else
            return $GLOBALS['current_theme_template'];
    }

    function show_post($path) {
        $post = get_page_by_path($path);
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
    }

    function test_single_meta($meta, $key) {
        
        $meta_array = get_post_meta(get_the_ID(), $meta, true);
       
        foreach($meta_array as $om){ 
            $value = $om[$key];
        }

        return (isset($value) && trim($value)!=='');
    }

    function single_meta($meta, $key, $autop) {
            
            $value = '';
            $meta_array = get_post_meta(get_the_ID(), $meta, true);
            
            foreach($meta_array as $om){ 
                $value = $om[$key];
            }

            if($autop) {
                return wpautop($value); 
            } else {
                return $value; 
            }
    }

    function show_img($img_name) {
        echo bloginfo('template_directory').'/images/'.$img_name.'.png';
    }

    function partner_type_display($partner_id, $size) {
        if (!$size) {
            $size = 'small';
        }

        $sizes = array(
            'small'     => '.4em', 
            'large'     => '.7em'
        );

        $css_slug   = partner_type($partner_id, false);
        $title      = partner_type($partner_id, true); 
        $size_txt   = $sizes[$size];

        return "<i style='font-size: ".$size_txt."; vertical-align: top;' class='icon-".$css_slug."' title='".$title."'></i>";
    }

    function partner_type($partner_id, $is_title) {
        $value = '';
        $meta_array = get_post_meta($partner_id, 'i_desc', true);
        
        foreach($meta_array as $om){ 
            $value = $om['partnership-type'];
        }

        if ($is_title) {
            return $value;
        }

        if ($value == "Full Gospel Partner") {
            return 'play-circle';
        } else {
            return 'cogs';
        }; 
        

    }
        
?>