<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kpk
 */

?>
<!doctype html>
<html <?php langge_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css?ver=1.3">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css?ver=1.2">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/media.css?ver=1.2">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrapHD.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Russo+One&amp;subset=cyrillic" rel="stylesheet">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.maskMoney.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js?ver=1.4"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://use.fontawesome.com/8524106ee3.js"></script>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/manifest.json">
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/img/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46976454 = new Ya.Metrika({
                    id:46976454,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });
 
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
 
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46976454" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div class="pageWrapper">
        <div class="firstBackScreen">
            <i class="fa fa-bars fa-3x" aria-hidden="true" id="menuButton"></i>
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoRed.svg?ver=1.1" alt="Логотип КПК" class="logo">
                        <div class="logoMask"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoWord.svg" alt="Логотип КПК" class="wordLogo"></div></a>
            
            <div class="menuOver">
                <i class="fa fa-bars fa-3x" aria-hidden="true" id="menuButtonInMenu"></i>
                <div class="menuOverWrap">
                    <div class="menuLink menuLink1">
                  <span class="preText">КПК "СО-ДЕЙСТВИЕ"</span><br>
                                    <span class="mainText">О нас</span>
                                    
              </div>
              <div class="menuLink menuLink2">
                  <div class="menuLinkText"><span class="preText">Вклад</span><br>
                                    <span class="mainText">Выгодный</span>
                                    <span class="fogText">26%</span>
                                </div>
              </div>
              <div class="menuLink menuLink3">
                 <div class="menuLinkText"><span class="preText">Вклад</span><br>
                                    <span class="mainText">С капитализацией</span>
                                    <span class="fogText">28%</span></div>
              </div>
              <div class="menuLink menuLink4">
                 <div class="menuLinkText"><span class="preText">Вклад</span><br>
                                    <span class="mainText">Валютный</span>
                                    <span class="fogText">17%</span>
                                </div>
              </div>
              
             
              <div class="menuLink">
                  <span class="preText">Мы на связи</span><br>
                                    <span class="mainText">Контакты</span>
              </div>
              <div class="contactDivMenu">
                
                <div class="menuLinkText"><span class="preText">Звонок бесплатный</span><br>
                <a href="tel:88002344444">8(800)234-44-44</a>
                                </div>
            </div>
                </div>
            </div>