<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package test
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="outer-wrap">
<div id="inner-wrap">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	
	<header id="top" role="banner">
        <div class="block">
            <h1 class="block-title">Book Title</h1>
            <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
        </div>
    </header>

    <nav id="nav" role="navigation">
        <div class="block">
            <h2 class="block-title">Chapters</h2>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
        </div>
    </nav>
	
	<div id="content" class="site-content">
