<?php
/*
Plugin Name: Hide WPMU DEV Ads
Plugin URI: https://github.com/rveitch/vdd-hide-wpmudev-ads
Description: Hides WPMU DEV plugin banner messages from displaying in the WordPress Admin Dashboard.
Author: Ryan Veitch | Veitch Digital Design
Version: 1.0
Author URI: http://veitchdigital.com/
*/

/*
* Hide WPMU DEV plugin banner messages from WP Admin Dashboard
*/
function hide_wpmudev_ads(){
       if ( is_admin() ) {
           echo '
               <style type="text/css">
                 div#message.wpmudev-message.wpdv-connect {
                     display:none;
                 }
               </style>
           ';
       }
}
add_action('admin_head', 'hide_wpmudev_ads');

?>
