<?php 

    // правильный способ подключить стили и скрипты
    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    // add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
    function theme_name_scripts() {
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    }

    add_action('after_setup_theme', function(){
		register_nav_menus( array(
			'header_menu' => 'Header Menu'
		) );
    });
    

    function wpf_dev_disable_multipage_scroll() {
        ?>
        <script type="text/javascript">window.wpforms_pageScroll = false;</script>
        <?php
    }
    add_action( 'wpforms_wp_footer', 'wpf_dev_disable_multipage_scroll' );

    add_image_size( 'object', 900, 600, true );

    add_filter( 'image_size_names_choose', 'my_custom_sizes' );
    function my_custom_sizes( $sizes ) {
        return array_merge( $sizes, array(
            'object' => 'Объект',
        ) );
    }



?>