<?php
/**
* Template Name: autopark
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package taxtrans
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <!-- Use any element to open the sidenav -->
        <div id="main" class="priceListMain">
            <div class="simplePageGrad">
                <div id="jumboFirstImage" class="autoparkBG"></div>
                <span class="uslugiParralax"><?php the_title(); ?></span>
                
        <div id="jumboFirstText">

            <h6 id="pageJumbo" class="animated" style="opacity:0;"><?php the_title(); ?></h6><br>
            <p id="pageJumboDesc" class="animated"  style="opacity:0;">Новые, чистые, комфортные и безопасные авто - это основа taxТРАНС!</p>
        </div>
            <div id="pageContent">
                
<div class="row autoparkPaddings">
  <div class="col-sm-6 octaviaSlider">
<?php 
echo do_shortcode('[masterslider id="1"]');
?>
  </div>
  <div class="col-sm-6">
    <h3>Skoda Octavia</h3>
    <p>Подарит Вам надежность и безопасность, удобство и комфорт. Просторный интерьер, комфортная посадка с удобными сидениями с боковой поддержкой. Вместительный багажник. Но главное преимущество этой марки перед другими в её исключительной безопасности.</p>
  </div>
</div>
        <div class="row autoparkPaddings">
  <div class="col-sm-6 col-sm-push-6 i40Slider">
<?php 
echo do_shortcode('[masterslider id="2"]');
?>
  </div>
  <div class="col-sm-6 col-sm-pull-6">
    <h3>Hyundai i40</h3>
    <p>В этой машине Вы будете выглядеть солидно и респектабельно. Отлично подойдёт как для встреч важных гостей, деловых поездок, так и просто для  передвижения с повышенным комфортом.</p>
  </div>
</div>
   <div class="row autoparkPaddings">
  <div class="col-sm-6 jettaSlider">
<?php 
echo do_shortcode('[masterslider id="3"]');
?>
  </div>
  <div class="col-sm-6">
    <h3>Volkswagen Jetta</h3>
    <p>Немецкая надёжность, комфорт и безопасность как нельзя лучше сосредоточены в данном автомобиле. Благодаря модульному принципу стали доступны 20 инновационных  решений в сфере безопасности , ранее применявшихся только в моделях более высокого класса. Volkswagen Jetta это красота в функциональности предназначенной для Вас. </p>
  </div>
</div>
        <div class="row autoparkPaddings">
  <div class="col-sm-6 col-sm-push-6 camrySlider">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/camryAutopark.jpg" alt="" class="fullWidthImg">
  </div>
  <div class="col-sm-6 col-sm-pull-6">
    <h3>Toyota Camry</h3>
    <p>Поистине один из лучших в сегменте бизнес класса. Оборудован активной и пассивной системой безопасности. Повышенный комфорт в автомобиле для пассажиров заднего ряда обеспечивает климат – контроль с уникальной системой очистки воздуха. Солидный дизайн, элегантный салон – Toyota Camry подарит Вам мир комфорта и уюта.</p>
  </div>
</div>
 <div class="row autoparkPaddings">
  <div class="col-sm-6 poloSlider">
<?php 
echo do_shortcode('[masterslider id="4"]');
?>
  </div>
  <div class="col-sm-6">
    <h3>Volkswagen Polo</h3>
    <p>Данную марку оценил сам президент прокатившись и сказав: «мы прокатились сейчас на машине, машина хорошая». Volkswagen  –  машина оценённая самим президентом. С громкой немецкой фамилией, респектабельной внешностью, удобством и комфортом для Вас.</p>
  </div>
</div>
        <div class="row autoparkPaddings">
  <div class="col-sm-6 col-sm-push-6 rapidSlider">
<?php 
echo do_shortcode('[masterslider id="5"]');
?>
  </div>
  <div class="col-sm-6 col-sm-pull-6">
    <h3>Skoda Rapid</h3>
    <p>Данный автомобиль отличается строгостью и точностью, комфортным размещением как на переднем, так и на заднем сидении. Прошёл тест Euro NCAP, по его результатам является одним из самых безопасных как для перевозки самых маленьких пассажиров, так и взрослых. Вместительный и комфортный, отлично подходит для поездок на дальние расстояния.</p>
  </div>
</div>
 <div class="row autoparkPaddings">
  <div class="col-sm-6 solarisSlider">
<?php 
echo do_shortcode('[masterslider id="6"]');
?>
  </div>
  <div class="col-sm-6">
    <h3>Hyundai Solaris</h3>
    <p>Автомобиль специально разработанный для Российских дорог, в нём Вы не почувствуете их изъянов. Оснащён прекрасной защитой и шумоизоляцией. Произведён из качественных материалов с вниманием к каждой мелочи. Поездка на данном автомобиле станет для Вас крайне приятным и комфортным времяпровождением.</p>
  </div>
</div>
        <div class="row autoparkPaddings vipSection">
  <div class="col-sm-6 col-sm-push-6 sclassSlider">
<?php 
echo do_shortcode('[masterslider id="7"]');
?>
  </div>
  <div class="col-sm-6 col-sm-pull-6">
    <h3>Mercedes-Benz S-class</h3>
    <p>Название S класс происходит от немецкого
Sonderklasse - “особый класс”, и это действительно особенная машина,
из флагманской серии представительских автомобилей. Прекрасно
подходит как для деловых поездок, так и для путешествий в
атмосфере уюта экстра класса. Эксклюзивный интерьер, для отделки
использованы материалы высочайшего качества, оснащен
современными системами безопасности. Автомобиль неоднократно
получал такие звания как “ Лучший люксовый автомобиль” и
“Люксовый автомобиль года”. В нём Вас будет невозможно не
заметить, поездка на нём подарит Вам свою квинтэссенцию роскоши
и комфорта.</p>
  </div>
</div>
 <div class="row autoparkPaddings gclassSlider">
  <div class="col-sm-6">
<?php 
echo do_shortcode('[masterslider id="8"]');
?>
  </div>
  <div class="col-sm-6">
    <h3>Mercedes-Benz G-class</h3>
    <p>Является настоящей классикой среди
внедорожников. С неповторимым стилем, уникальным внешним видом,
автомобиль история которого длится уже 35 лет. Аналогов данной
машины не существует. Идеален во всём от внешнего вида до
роскоши салона в отделке которого используются только
благородные материалы. Оснащён мультиконтурными сидениями с
вентиляцией и подогревом. Рельеф и жесткость спинки плавно
настраиваются обеспечивая оптимальную боковую поддержку.
Идеален для длительных поездок, поездок по бездорожью или же
чтобы произвести неизгладимое впечатление. Данный автомобиль
подарит настоящую атмосферу исключительности.</p>
  </div>
</div>
        <div class="row autoparkPaddings">
  <div class="col-sm-6 col-sm-push-6 vclassSlider">
<?php 
echo do_shortcode('[masterslider id="9"]');
?>
  </div>
  <div class="col-sm-6 col-sm-pull-6">
    <h3>Mercedes-Benz V-class</h3>
    <p>Эксклюзивный дизайн, роскошная отделка
интерьера и новейшие технологии для комфорта и безопасности
делают его лидером в своём сегменте. Минивэн в котором с
комфортом могут разместиться 6 пассажиров. Кожаный салон с
сиденьями повышенной комфортности сделает поездку приятной и
удобной даже на длительных расстояниях. Оснащён каналом для
подачи тёплого воздуха в пассажирское отделение обеспечивая задних
пассажиров комфортной температурой в зависимости от времени
года. Если же потребуется много грузового пространства, то

благодаря системе направляющих в полу, с функцией быстрой
фиксации, его можно легко и быстро организовать.</p>
  </div>
</div>

            </div>
             <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/pageAnimations.js"></script>
            <!-- #primary -->
            <?php
get_sidebar();


get_footer();




