<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package taxtrans
 */

?>
<footer>
        
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h5>Такси taxТРАНС</h5>
                <hr>
                <p>Комфорт, удобство, уютный чистый автомобиль - всё это Вы найдёте в компании taxТранс. Абсолютно новый автопарк 2017 г. Мы гарантируем быструю, своевременную и точную подачу по Вашему адресу.</p>

                
                <a href="tel:88002228800" style="color:white"><h5>8800-222-8800</h5></a>
                <p style="margin-top: -5px ;margin-bottom: 10px">Телефон</p>
                <a href="tel:88002228800" style="color:white"><h5>0110707@bk.ru</h5></a>
                <p style="margin-top: -5px ;margin-bottom: 10px">Почта</p>
                
            </div>
            
            <div class="col-sm-3">
                <ul>
                    <h5>Прайс-лист</h5>
                <hr>
                <a href="<?php echo get_home_url(); ?>/price">
                    <li>Стандарт</li>
                </a>
                <a href="<?php echo get_home_url(); ?>/vanprice">
                    <li>Минивэн</li>
                </a>
                <a href="<?php echo get_home_url(); ?>/sprice">
                    <li>S-class</li>
                </a>
                <a href="<?php echo get_home_url(); ?>/vprice">
                    <li>V-class</li>
                </a>
                <a href="<?php echo get_home_url(); ?>/gprice">
                    <li>G-class</li>
                </a>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <h5>Услуги</h5>
                    <hr>
                    <a href="<?php echo get_home_url(); ?>/meet">
                        <li>Встреча</li>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/driver">
                        <li>Трезвый водитель</li>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/womandrive">
                        <li>Женщина водитель</li>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/viptaxi">
                        <li>Бизнес такси</li>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/business">
                        <li>Бизнес клиентам</li>
                    </a>
                    <a href="">
                        <li>Оплата онлайн</li>
                    </a>
                </ul>
            </div>
            
        </div>
        </div>
    </footer>
    </div>
    </div>
    <!-- #content -->

    </div>
    
    <!-- #page -->
   

    

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mainFunctions.js?v=1.8"></script>

<?php wp_footer(); ?>

    </html>
    </body>

    </html>