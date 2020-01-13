<?php
/*
Plugin Name: Lawintech
Plugin URI:  http://lawintech.fr
Description: Wordpress-plugin pour installer votre abonnement Lawintech sur votre site Wordpress. Si vous désirez afficher votre CGV veuillez utiliser le shortcode [conditions_generales_ventes] dans votre page. Si vous désirez obtenir vos CGU et mentions légales utilisez le short code [mention_legale_cgu] dans votre page.
Version:     1.0.0
Author:      Midbird
Author URI:  http://midbird.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

function get_conditions_generales_ventes()
{
    return "<div id ='conditions_generales_ventes'></div>";
}

add_shortcode('conditions_generales_ventes', 'get_conditions_generales_ventes');
function get_mention_legale_cgu()
{
    return "<div id ='mention_legale_cgu'></div>";
}

add_shortcode('mention_legale_cgu', 'get_mention_legale_cgu');
function add_lawintech_script() {
    wp_enqueue_script( 'my_custom_script', 'https://lawintech.fr/embed/script.js' );
}
add_action('wp_enqueue_scripts', 'add_lawintech_script');
?>