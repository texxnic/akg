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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css?ver=1.9">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css?ver=1.9">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/media.css?ver=1.9">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.maskMoney.min.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js?ver=1.9" defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" defer></script>
    <script src="https://use.fontawesome.com/8524106ee3.js" defer></script>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/manifest.json">
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/img/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!-- Yandex.Metrika counter -->
 <script type="text/javascript">
var yaParams = {ip_adress: "<? echo $_SERVER['REMOTE_ADDR'];?>"};
//объявляем параметр ip_adress и записываем в него IP посетителя
</script> 
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter46976454 = new Ya.Metrika({id:46976454, params:window.yaParams,
//передаем этот параметр свойством params
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
      <div class="overflowPatch headerOvPatch"></div>
      <div class="overflowPatch bottomOvPatch"></div>
        <div class="firstBackScreen clearfix">
            <i class="fa fa-bars fa-3x" aria-hidden="true" id="menuButton"></i>
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoRed.svg?ver=1.1" alt="Логотип КПК" class="logo">
                        <div class="logoMask"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoWord.svg" alt="Логотип КПК" class="wordLogo"></div></a>
                        <a href="tel:88002344444" class="logoPhone">8 800 234-44-44</a>
            
            <div class="menuOver">
                <i class="fa fa-bars fa-3x" aria-hidden="true" id="menuButtonInMenu"></i>
                <div class="menuOverWrap"><a href="<?php echo get_home_url(); ?>/about" class="menuLinks">
                    <div class="menuLink menuLink1">
                  <span class="preText">КПК "СО-ДЕЙСТВИЕ"</span><br>
                                    <span class="mainText">О нас</span>
                                    <svg class="fogSVG" xmlns="http://www.w3.org/2000/svg" width="434.2" height="225.6" viewBox="-742 428.4 434.2 225.6">
  <path class="logoMenuMain" fill="#fff" d="M-735.2 540.6l114.5-112.2h312.9l-112.3 112.2L-307.8 654h-89l-113.4-112.8 54.4-52.7-137.1-1.7-53.3 54.4L-532.8 654h-88.5z"/>
  <path class="logoMenuShadow" d="M-689.6 585.3l43.4-44.1 17.9 17.8zm223.7-.1l45.8-44.6 17.8 18zm-127-98.4h-87.3l69.8 17.8zm137.1 1.7h87.9l-104.2 15.8z" fill="#fafafa"/>
</svg>
                                    
              </div></a><a href="<?php echo get_home_url(); ?>/kpkvklad" class="menuLinks">
              <div class="menuLink menuLink2">
                  <div class="menuLinkText"><span class="preText">Вклад</span><br>
                                    <span class="mainText">Выгодный</span>
                                    <span class="fogText">18%</span>
                                </div>
              </div></a><a href="<?php echo get_home_url(); ?>/vkladwithcap" class="menuLinks">
              <div class="menuLink menuLink3">
                 <div class="menuLinkText"><span class="preText">Вклад</span><br>
                                    <span class="mainText">С капитализацией</span>
                                    <span class="fogText">18%</span></div>
              </div></a><a href="<?php echo get_home_url(); ?>/inovklad" class="menuLinks">
              <div class="menuLink menuLink4">
                 <div class="menuLinkText"><span class="preText">Вклад</span><br>
                                    <span class="mainText">Валютный</span>
                                    <span class="fogText">8.5%</span>
                                </div>
              </div></a>
              <a href="<?php echo get_home_url(); ?>/news" class="menuLinksContact">
              <div class="menuLink menuLink5">
                  <span class="preText">Экономические</span><br>
                                    <span class="mainText">Новости</span>
                                    <i class="fa fa-newspaper-o fogFawesome" aria-hidden="true"></i>
              </div></a>
             <a href="<?php echo get_home_url(); ?>/contacts" class="menuLinksContact">
              <div class="menuLink menuLink6">
                  <span class="preText">Мы на связи</span><br>
                                    <span class="mainText">Контакты</span>
                                    <i class="fa fa-phone fogFawesome" aria-hidden="true"></i>
              </div></a>
              <div class="ManuInfo">
                  Кредитный потребительский кооператив "Cо-действие". ОГРН 5177746236685, ИНН 7728387437
              </div>
              <div class="contactDivMenu">
                
                <div class="menuLinkText"><span class="preText">Звонок бесплатный</span><br>
                <a href="tel:88002344444">8 800 234-44-44</a>
                                </div>
            </div>
                </div>
            </div>