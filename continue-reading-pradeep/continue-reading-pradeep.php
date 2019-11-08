<?php
/**
* Plugin Name: Continue Reading Plugin
* Plugin URI: https://mreservicesindia.com/
* Description: This is the plugin to add continue reading button.
* Version: 1.0
* Author: Pradeep Kumar Nirmal
* Author URI: https://www.linkedin.com/in/pradeepkumarnirmal/
**/

function dh_modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );