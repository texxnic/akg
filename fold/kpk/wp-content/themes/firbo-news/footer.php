<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firbo-news
 */

?>
<footer id="footer">

            <div class="btmFooter">
                <div class="container">
                    <div class="col-sm-12 bottomFooterLayout">
                        <div class="bottomLinks">
                            <a href="http://firbo.ru/">Firbo Capital</a>
                            <a href="https://firbo-uslugi.ru/">Наши услуги</a>
                            <a href="http://firbo-otzyvy.ru/">Отзывы</a>
                            <a href="">Политика конфидициальности</a>
                            <a href="https://firbo.ru/contacts.php">Контакты</a>
                        </div>
                    
                        <ul class="social">
                                        <li><a href="https://www.facebook.com/groups/176475799834481/" class="social-btn social-facebook" title="Фирбо новости в фейсбуке"><i class="ti-facebook"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/Firbo_News" class="social-btn social-twitter" title="Фирбо новости в твиттере"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/firbo_news/" class="social-btn social-instagram" title="Фирбо новости в инстаграме"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://vk.com/firbonews" class="social-btn social-vk" title="Фирбо новости во вконтакте"><i class="fab fa-vk"></i></a>
                                        </li>
                                        <li><a href="https://www.ok.ru/group/59004804923434" class="social-btn social-ok" title="Фирбо новости в однокласниках"><i class="fab fa-odnoklassniki"></i></a>
                                        </li>
                                        <li><a href="https://zen.yandex.ru/id/5b0e992c7800193a64d0b410" class="social-btn social-ok" title="Фирбо новости в Яндекс.Дзене"><i class="fab fa-yandex"></i></a>
                                        </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-12 footerSecondRow">
                        <div class="copyryght">
                            <span>© 1996-<?php echo date_i18n('Y'); ?>   ООО "Фирбо Капитал"</span>
                            <span>Использование материалов сайта на иных ресурсах разрешено только с письменного разрешения редакции Фирбо Капитал</span>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ghostLogo.jpg" alt="" class="ghostFooterLogo">
                    </div>
                </div>
            </div>
</footer>
    </div>
    <!-- /animitsion -->
    <!-- JS files -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/owl.carousel/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/js/my.js?v=2"></script>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.8/css/light.css" integrity="sha384-shmfBA2CRxp88gq8NcvWbEN8KExYU4uvQUBEG36BStGZ5k91nGKE4wDvvWvuimbu" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-VRONz34zTLl4P+DLYyJ8kP8C3tB1PGtqL5p8nBAvHuoc1u32bR3RHixrjffD8Fly" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-+5VkSw5C1wIu2iUZEfX77QSYRb5fhjmEsRn8u4r9Ma8mvu/GvTag4LDSEAw7RjXl" crossorigin="anonymous">
</body>

<?php wp_footer();?>

</body>
</html>
