<?php
/*
	Plugin Name: Custom Author Link
	Plugin URI: http://wpshed.com/custom-author-link/
	Description: This plugin will change your author link to a custom URL once you've set your website in your profile page. If you want your author link to point at your "posts by author" default page just remove your website from your profile page.
	Version: 1.1
	Author: WPshed
	Author URI: http://wpshed.com/
	License: GPLv2 or later
*/


/**
 * Add custom author link
 */
function wpshed_custom_author_link( $link, $author_id, $author_nicename ) {
    
    if ( get_the_author_meta( 'url' ) ) {
        $link = get_the_author_meta( 'url' );
    }
    return $link;

}
add_filter( 'author_link', 'wpshed_custom_author_link', 10, 3 );