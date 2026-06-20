<?php
/**
 * Title: Mobile Navigation Overlay
 * Slug: twentytwentyfive/navigation-overlay
 * Categories: uncategorized
 * Keywords: navigation, overlay, mobile
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"metadata":{"name":"Navigation Overlay"},"className":"nav-overlay-wrapper","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"color":{"background":"#eeeeee"}},"textColor":"black","layout":{"type":"default"}} -->
<div class="wp-block-group nav-overlay-wrapper has-black-color has-text-color has-background has-link-color" style="background-color:#eeeeee;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"overlay-close-wrapper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group alignwide overlay-close-wrapper"><!-- wp:navigation-overlay-close {"className":"overlay-close-btn"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mobile-nav-wrapper","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide mobile-nav-wrapper"><!-- wp:navigation {"ref":4,"submenuVisibility":"click","overlayMenu":"never","className":"mobile-nav","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->