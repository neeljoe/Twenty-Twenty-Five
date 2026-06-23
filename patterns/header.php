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
<div class="wp-block-group alignfull site-header has-base-background-color has-background">
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

<!-- wp:navigation {"ref":4,"overlayMenu":"always","overlay":"navigation-overlay","metadata":{"blockVisibility":{"viewport":{"desktop":false}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:disney/search-panel /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
