<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?> - <?php foreach((get_the_category()) as $cat) { echo $cat->cat_name . ' '; } ?> <?php } ?> 
<?php wp_title(' - '); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-browser-ie.css" type="text/css" media="screen" />
<style type="text/css">
div#sitename h1 {
	_background: transparent none;
	_filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/background-sitename.png',sizingMethod='crop');
    _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/go.png',sizingMethod='crop');
}
</style>
<![endif]-->
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tabs.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retweet.js"></script>
<script type="text/javascript">
<!--
/* <![CDATA[ */
jQuery.noConflict();
jQuery(document).ready(function() {
	jQuery('div#box-tabs div.interior > ul').tabs();
	jQuery("input#s").focus(function() { jQuery(this).val(''); });
	jQuery("input#s").blur(function() { jQuery(this).val('Search'); });
	jQuery("input#subbox").focus(function() { jQuery(this).val(''); });
	jQuery("input#subbox").blur(function() { jQuery(this).val('Email address'); });
});
/* ]]> */
//-->
</script>
</head>


<body>
<div id="container">
	<div id="topside">
		<div id="topside-wrapper">
			<div id="googleads">
				<?php $ad_728 = get_option('magaling_ad_728'); echo stripslashes($ad_728); ?>
			</div>
			<div id="rsstwitter">
				<p>
					<a id="rss" href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed">RSS Feed</a> 
					<span class="nodisplay">|</span>
					<?php 
						$twitter_username = get_option('designora-theme_twitter_username');
						if (!empty($twitter_username)) : 
					?>
					<a id="twitter" href="http://twitter.com/<?php echo $twitter_username; ?>" title="Twitter">Follow us on Twitter</a>
					<?php 
						endif; 
					?>
				</p>
			</div>
		</div>
	</div>
	<div id="title">
		<div id="title-wrapper">
			<div id="sitename">

<?php if (is_home () || is_front_page () ) { ?>

	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="100%" height="100%" id="swf_header" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="allowFullScreen" value="false" />
		<param name="movie" value="http://www.institutotambor.com.br/wp-content/themes/tambor/header_tambor.swf"/><param name="quality" value="high" /><param name="scale" value="noscale" /><param name="bgcolor" value="#ffffff" /> <embed src="http://www.institutotambor.com.br/wp-content/themes/tambor/header_tambor.swf" quality="high" scale="noscale" bgcolor="#ffffff" width="100%" height="100%" name="swf_header" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>

<?php } else if (is_page () ) { ?>

<img class="alignnone size-full wp-image-334" title="it" src="http://www.institutotambor.com.br/wp-content/uploads/2011/05/it.png" alt="" width="941" height="254" />

<?php } ?>


<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</div>
	<div id="navmensearch">
		<div id="navmensearch-wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
		</div>
	</div>

	<div id="wrapper">
		<div id="wrapper-wrapper">
