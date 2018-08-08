<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firbouslugi
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="yandex-verification" content="d29318bee8b6016e" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" type="text/css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?ver=1.4" type="text/css"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.8/css/light.css" integrity="sha384-shmfBA2CRxp88gq8NcvWbEN8KExYU4uvQUBEG36BStGZ5k91nGKE4wDvvWvuimbu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-+5VkSw5C1wIu2iUZEfX77QSYRb5fhjmEsRn8u4r9Ma8mvu/GvTag4LDSEAw7RjXl" crossorigin="anonymous">


	<?php wp_head();?>
</head>

<body class="inks-hover-effect" data-spy="scroll" data-target=".navigation">
    <div class="page-wrapper loading-done has-loading-screen" id="page-top">
        <header id="page-header">
            <nav class="navigation background-is-dark">
                <div class="container">
                    <div class="wrapper">
                        <div class="left">
                            <a href="https://firbo.ru/" class="brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoWhite.png" alt=""></a>
                        </div>
                        <!--end left-->
                        <div class="right">
                            <ul class="nav navigation-links animate">
                                <li><a href="https://firbo.ru/" class="scroll">Главная</a></li>
                                <li><a href="#page-top" class="scroll">Услуги</a></li>
                                <li><a href="https://firbonews.ru/" class="scroll">Новости</a></li>
                                <li><a href="" class="scroll">Отзывы</a></li>
                                <li><a href="https://firbo.ru/contacts.html" class="scroll">Контакты</a></li>
                                <li>
                                    <a href="tel:88002344411" class="scroll"><i class="fal fa-phone-square"></i> 8 800 234-44-11<br></a>
                                </li>
                            </ul>
                            <div class="nav-btn">
                                <figure></figure>
                                <figure></figure>
                                <figure></figure>
                            </div>
                        </div>
                        <!--end right-->
                    </div>
                </div>
                <!--end container-->
            </nav>
            <!--end navigation-->
            <div class="hero-section background-is-dark">
                <div class="wrapper">
                    <div class="hero-title">
                        <div class="container">
                            <h1 class="animate">Услуги</h1>
                            <h2 class="animate">Firbo Capital</h2>
                            <!--end form-hero-->
                        </div>
                        <!--end container-->
                    </div>
                    <!--end hero-title-->
                </div>
                <!--end wrapper-->
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero1.jpg" alt=""></div>
                </div>
                <!--end owl-carousel-->
            </div>
            <!--end hero-section-->
        </header>