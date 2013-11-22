<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mtportofolio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
		</div>

<!-- 		<div class="site-search">
			<aside id="search-2" class="widget widget_search">
			<form role="search" method="get" class="search-form" action="./index_files/index.html">
			<label>
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field" placeholder="Search …" value="" name="s">
			</label>
			<input type="submit" class="search-submit" value="Search">
			</form>
			</aside>
		</div> -->

		<div class="wbo-menu-bottom">
        <nav class="wbo-menu-pages">
			<ul class="menu">
            <li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-38"><a href="http://wo.mt8.biz/?page_id=12">About</a></li>
			</ul>
        </nav>
        
        <div class="site-search">
			<aside id="search-2" class="widget widget_search">
			<form role="search" method="get" class="search-form" action="./index_files/index.html">
			<label>
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field" placeholder="Search …" value="" name="s">
			</label>
			<input type="submit" class="search-submit" value="Search">
			</form>
			</aside>
		</div>

		<div class="wbo-menu-right">
        <nav class="wbo-menu-sns">
			<ul>
            <li><a href="#" class="sns1"></a></li>
            <li><a href="#" class="sns2"></a></li>
            <li><a href="#" class="sns3"></a></li>
            <li><a href="#" class="sns4"></a></li>
			</ul>
        </nav>

        
        </div>
	    	    
	</header><!-- #masthead -->

	<div class="nav_content">
