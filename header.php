<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Decode
 * @since Decode 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable = no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Icons -->
<link rel="icon" href="http://beyondtheco.de/wp-content/themes/Decode/images/icon.png">

<link rel="apple-touch-icon-precomposed" href="http://beyondtheco.de/wp-content/themes/Decode/images/homescreen.png">

<meta name="msapplication-TileColor" content="#E3E5E7">

<meta name="msapplication-TileImage" content="http://beyondtheco.de/wp-content/themes/Decode/images/icon.png">

<meta property="og:site_name" content="Beyond The Code" />

<!-- Typekit -->
<script type="text/javascript" src="//use.typekit.net/hjf6cdg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- Modernizr -->
<script type="text/javascript" src="http://beyondtheco.de/wp-content/themes/Decode/js/modernizr.js"></script>

<script type="text/javascript" src="http://beyondtheco.de/wp-content/themes/Decode/js/respond.js"></script>

<script>
// When ready...
window.addEventListener("load",function() {
  // Set a timeout...
  setTimeout(function(){
    // Hide the address bar!
    window.scrollTo(0, 1);
  }, 0);
});
</script>

<script src="http://code.jquery.com/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.replytrigger').click(function(){
			$(this).closest('reply').addClass('triggered').setTimeout(1).removeClass('triggered');
		});
	});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description">by <a href="http://scotthsmith.com">Scott Smith</a></h2>
		</hgroup>
		<div class="sociallinks">
			<ul> 
				<a class="sociallink TwitterLink" href="http://twitter.com/BeyondTheCode">
					<img src="http://beyondtheco.de/wp-content/themes/Decode/images/Twitter.svg"/>
				</a>
				<a class="sociallink mobile AppNetLink" href="http://beyondtheco.de/ADN/">
					<img src="http://beyondtheco.de/wp-content/themes/Decode/images/AppNet.svg"/>
				</a>
				<a class="sociallink desktop AppNetLink" href="https://alpha.app.net/scottsmith">
					<img src="http://beyondtheco.de/wp-content/themes/Decode/images/AppNet.svg"/>
				</a>
				<a class="sociallink FacebookLink" href="https://www.facebook.com/BeyondTheCode">
					<img src="http://beyondtheco.de/wp-content/themes/Decode/images/Facebook.svg"/>
				</a>
					<a href="https://plus.google.com/111019875270643537691?rel=author" style="display: none;">Google</a>
			</ul>
		</div>

		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'decode' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'decode' ); ?>"><?php _e( 'Skip to content', 'decode' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
