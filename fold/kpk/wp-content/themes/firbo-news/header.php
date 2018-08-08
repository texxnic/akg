<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firbo-news
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
   <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/styles__cacheBraker.css" rel="stylesheet">
   <link href="<?php echo get_template_directory_uri(); ?>/css/themify-icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:400,600|Roboto:300,900|Source+Sans+Pro:700&amp;subset=cyrillic" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
   <link href="<?php echo get_template_directory_uri(); ?>/css/animsition.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/plugins.min.css" rel="stylesheet">
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png">
   <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicons/site.webmanifest">
   <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon.ico">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/images/favicons/browserconfig.xml">
   <meta name="theme-color" content="#000000">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
	<?php wp_head();?>
</head>
<body>

         <header>
          <div class="topbar">
               <div class="container" id="headerCont">
                  <div class="logo-wrap">
                     <?php echo_heder_logo();?>
                  </div>
                  <div id="linksWrap">
                  <div class="menuItems" id="headerMenuLinks">
                     <ul class="header-categories">
                        <?php echo wp_list_categories('title_li=') ?>


                     </ul>
                  </div>
                  <div class="login-item">
                     <a href="tel:88002344411">
                        8 800 234-44-11
                     </a>
                     <a href="#" id="menu-hamburger">  |  <i class="fal fa-bars"></i></a>
                  </div>
                  </div>
               </div>
            </div>
         </header>

