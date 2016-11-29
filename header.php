<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="-HnmU17QdmX04lgrNDygU14dCJ7fjIZUaELw2HWsmQI" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if(is_front_page()){ ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/front.css" />
<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/ie7.css" />
<![endif]-->
<?php } else { ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/inner.css" />
<?php } ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
<!--<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.innerfade.js"></script>-->
<!--<script src="<?php bloginfo( 'template_directory' ); ?>/js/custom.js"></script>-->
<style>
/* Listen */


</style>

<link rel="apple-touch-icon" sizes="57x57" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/images/favicon.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?=get_template_directory_uri()?>/images/favicon.png">
<meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<?php $img_stuff = wp_get_attachment_image_src( 349, 'large'); ?>
            <div id="branding"><a href=" <?php bloginfo('url') ?>"><img src="<?php echo $img_stuff[0]; ?>"  /></a>
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					
				</<?php echo $heading_tag; ?>>
                <div class="header-service-form">
                	<a href="/service-form">Service Form</a>
                </div>
				<!--<div id="site-description"><?php //bloginfo( 'description' ); ?></div>-->
                <div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>

				<!--<div id="svcform"><a href="/service-form" rel="section">Service Form</a></div>-->
			</div><!-- #branding -->

			<!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
	
