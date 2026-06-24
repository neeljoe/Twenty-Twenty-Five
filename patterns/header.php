<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","className":"site-header","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull site-header has-base-background-color has-background" data-wp-interactive="disney">
<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(14,152,231) 0%,rgb(155,81,224) 100%)"},"dimensions":{"minHeight":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(135deg,rgb(14,152,231) 0%,rgb(155,81,224) 100%);min-height:8px"></div>
<!-- /wp:group -->
    <!-- wp:group {"className":"header-content-wrapper","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group header-content-wrapper"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:disney/sites-dropdown {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":51,"metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

<!-- wp:navigation {"ref":50,"overlayBackgroundColor":"base","overlayTextColor":"contrast","metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:disney/search-toggle /-->

<button class="navbar-toggler" data-wp-on--click="actions.toggleMobileMenu" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon">
		<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M29.225 10.3122C30.625 10.3122 31.71 9.22722 31.71 7.82722C31.71 6.46222 30.625 5.34222 29.225 5.34222H5.845C4.445 5.34222 3.36 6.46222 3.36 7.82722C3.36 9.22722 4.445 10.3122 5.845 10.3122H29.225ZM29.225 20.0422C30.625 20.0422 31.71 18.9222 31.71 17.5572C31.71 16.1922 30.625 15.0722 29.225 15.0722H5.845C4.445 15.0722 3.36 16.1922 3.36 17.5572C3.36 18.9222 4.445 20.0422 5.845 20.0422H29.225ZM29.225 29.7372C30.625 29.7372 31.71 28.6522 31.71 27.2522C31.71 25.8872 30.625 24.7672 29.225 24.7672H5.845C4.445 24.7672 3.36 25.8872 3.36 27.2522C3.36 28.6522 4.445 29.7372 5.845 29.7372H29.225Z" fill="#000"/>
		</svg>
	</span>
</button></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:disney/search-panel /--></div>

<!-- wp:disney/mobile-menu /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
