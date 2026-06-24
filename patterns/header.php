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

<div class="mobile-menu" data-wp-bind--hidden="!state.mobileMenuOpen" hidden>
	<div class="mobile-menu-inner">
		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "about" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.aboutOpen">
				<span>About</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<ul class="mobile-submenu" data-wp-bind--hidden="!state.aboutOpen" hidden>
				<li><a href="/about/">Our Story</a></li>
				<li><a href="/employee-experience/">Our People</a></li>
				<li><a href="/about/leadership/">Leadership</a></li>
				<li><a href="/awards/">Awards</a></li>
			</ul>
		</div>

		<a href="/news/" class="mobile-nav-link">News</a>
		<a href="/press-room/" class="mobile-nav-link">Press Room</a>

		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "experiences" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.experiencesOpen">
				<span>Our Experiences</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<ul class="mobile-submenu" data-wp-bind--hidden="!state.experiencesOpen" hidden>
				<li><a href="/parks/">Parks</a></li>
				<li><a href="/cruise-line/">Cruise Line</a></li>
				<li><a href="/products/">Consumer Products</a></li>
				<li><a href="/experiences/">Signature Experiences</a></li>
				<li><a href="/expansions/">Expansions</a></li>
			</ul>
		</div>

		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "impact" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.impactOpen">
				<span>Our Impact</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<ul class="mobile-submenu" data-wp-bind--hidden="!state.impactOpen" hidden>
				<li><a href="/about/community-impact/">Community Impact</a></li>
				<li><a href="/economic-impact/">Economic Impact</a></li>
			</ul>
		</div>

		<div class="gradient-stripe"></div>

		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "sites" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.sitesOpen">
				<span>Sites</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<div class="sites-grid" data-wp-bind--hidden="!state.sitesOpen" hidden>
				<div class="sites-column">
					<h4 class="sites-heading">Explore More</h4>
					<ul class="sites-links">
						<li><a href="https://www.thewaltdisneycompany.com/">The Walt Disney Company</a></li>
						<li><a href="https://disneyparks.disney.go.com/blog/">Disney Parks Blog</a></li>
						<li><a href="https://disneyimagining.com/">Walt Disney Imagineering</a></li>
						<li><a href="https://disneyland.disney.go.com/about/">About Disneyland</a></li>
						<li><a href="https://disneyworld.disney.go.com/about/">About Disney in Florida</a></li>
					</ul>
				</div>
				<div class="sites-column">
					<h4 class="sites-heading">Consumers</h4>
					<ul class="sites-links">
						<li><a href="https://disneyland.disney.go.com/">Disneyland Resort</a></li>
						<li><a href="https://disneyworld.disney.go.com/">Walt Disney World Resort</a></li>
						<li><a href="https://disneycruise.disney.go.com/">Disney Cruise Line</a></li>
						<li><a href="https://www.disneystore.com/">Disney Store</a></li>
					</ul>
				</div>
			</div>
		</div>

		<button class="mobile-close-btn" data-wp-on--click="actions.closeMobileMenu">Close</button>
	</div>
</div></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
