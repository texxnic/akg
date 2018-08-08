<?php
/**
* Template Name: poglash
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

       <div class="pageJumbo" id="autoparkBG">
           <h2 class="whiteTxt animated zoomIn txtShadow"><?php the_title(); ?></h2>
       </div>
       <div class="container pageContent contetPaddings">


<style>
  .taxopark{
    border: 0.5px solid #efefef;
    border-radius: 20px;
    /* padding: 20px; */
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 32px 2px rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0px 0px 32px 2px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 0px 32px 2px rgba(0, 0, 0, 0.12);
    background-color: #fff;
    overflow: hidden;
    /* margin-bottom: 30px; */
    margin-top: 25px;
  }
  .autoparkDescription{
        color: #999;
    font-size: 18px;

  }
  .taxopark h3{
        text-align: center;
    background-color: #ffd100;
    margin-bottom: 15px;
  }
   .taxopark h3:before{
        vertical-align: 10%;
    content: url('<?php echo get_stylesheet_directory_uri(); ?>/img/shashkiButton.png');
  }
  .taxopark h3:after{
        vertical-align: 10%;
    content: url('<?php echo get_stylesheet_directory_uri(); ?>/img/shashkiButton.png');
  }
  .taxopark p{
    text-align: justify;
  }
 .taxoparkInfoBlock{
  text-align: center;
 }
 .taxoparkInfoBlock img{
  display: inline-block;
 }
</style>
   
<div class="taxopark clearfix"> 
    <h3> Такси N1 </h3>
    <div class="col-md-5 taxoparkInfoBlock">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/taxiLogos/n1taxi.png" alt="" >
    <p class="autoparkDescription">Осенью 2016 года компания taxТранс произвела свое первое поглощение, поглотив
    компанию такси № 1. Которая присутствовала на рынке пассажирских перевозок с
    2015 года, имея под собой автопарк в количестве 20 машин, 25 водителей,
    собственную диспетчерскую службу, с активной базой более 5000 клиентов.</p>
    </div>
    <div class="col-md-7">
      <table class="tableizer-table">
<tbody>
 <tr><td>Год основания такси/поглощения</td><td>2012/2016</td></tr>
 <tr><td>Рейтинг в городе</td><td>2</td></tr>
 <tr><td>Охват региона</td><td>Полный</td></tr>
 <tr><td>Телефоны</td><td>8(499)550-08-50 8(495)777-66-97</td></tr>
 <tr><td>Сайт</td><td>odincovotaxi.ru</td></tr>
 <tr><td>Интернет страницы</td><td>Вконтакте, Facebook, Instagram</td></tr>
 <tr><td>Заказ через приложение</td><td>Нет</td></tr>
 <tr><td>Время подачи автомобиля</td><td>10-15 минут</td></tr>
 <tr><td>Количество водителей</td><td>20</td></tr>
 <tr><td>Водители граждане РФ</td><td>Все</td></tr>
 <tr><td>Количество автомобилей</td><td>15</td></tr>
 <tr><td>Автопарк </td><td>Skoda, Volkswagen, Hyundai</td></tr>
 <tr><td>Вип автомобили</td><td>Да</td></tr>
 <tr><td>Микроавтобус</td><td>Нет</td></tr>
 <tr><td>Грузовые перевозки</td><td>Нет</td></tr>
 <tr><td>Дизайн автомобилей</td><td>Да</td></tr>
 <tr><td>Трансферы</td><td>Да</td></tr>
 <tr><td>Реклама</td><td>Да</td></tr>
 <tr><td>Работа с юр/физ лицами</td><td>Нет/Да</td></tr>
 <tr><td>Б/н расчёт, оплата картой</td><td>Да/Да</td></tr>
 <tr><td>Детское кресло</td><td>Да</td></tr>
 <tr><td>Перевозка детей без взрослых</td><td>Да</td></tr>
 <tr><td>Курьерская доставка</td><td>Да</td></tr>
</tbody></table>
    </div>
  </div>
  <div class="taxopark clearfix"> 
    <h3> Семейное </h3>
    <div class="col-md-5 taxoparkInfoBlock">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/taxiLogos/sem.png" alt="" >
    <p class="autoparkDescription">Летом 2017 года компания произвела своё второе поглощение. Во владение компании
taxТранс перешло известное такси в г.Одинцово - такси Семейное. Компания была
основана в 2012 году и 5 лет успешно просуществовала на рынке таксомоторных
перевозок. Имеющая на момент поглощения в своём автопарке более 30 машин, в
том числе универсалы и минивэны, с базой клиентов более 15 000.</p>
    </div>
    <div class="col-md-7">
      <table class="tableizer-table">
<tbody>
 <tr><td>Год основания такси/поглощения</td><td>2012/2017</td></tr>
 <tr><td>Рейтинг в городе</td><td>2</td></tr>
 <tr><td>Охват региона</td><td>Полный</td></tr>
 <tr><td>Телефоны</td><td>8(495)363-74-74</td></tr>
 <tr><td>Сайт</td><td>odincovo.taxi</td></tr>
 <tr><td>Интернет страницы</td><td>Вконтакте, Facebook</td></tr>
 <tr><td>Заказ через приложение</td><td>Нет</td></tr>
 <tr><td>Время подачи автомобиля</td><td>10-15 минут</td></tr>
 <tr><td>Количество водителей</td><td>20</td></tr>
 <tr><td>Водители граждане РФ</td><td>Все</td></tr>
 <tr><td>Количество автомобилей</td><td>30</td></tr>
 <tr><td>Автопарк </td><td>Ford, Kia</td></tr>
 <tr><td>Вип автомобили</td><td>Нет</td></tr>
 <tr><td>Микроавтобус</td><td>Да</td></tr>
 <tr><td>Грузовые перевозки</td><td>Нет</td></tr>
 <tr><td>Дизайн автомобилей</td><td>Да</td></tr>
 <tr><td>Трансферы</td><td>Нет</td></tr>
 <tr><td>Реклама</td><td>Да</td></tr>
 <tr><td>Работа с юр/физ лицами</td><td>Да/Да</td></tr>
 <tr><td>Б/н расчёт, оплата картой</td><td>Да/Да</td></tr>
 <tr><td>Детское кресло</td><td>Да</td></tr>
 <tr><td>Перевозка детей без взрослых</td><td>Да</td></tr>
 <tr><td>Курьерская доставка</td><td>Да</td></tr>
</tbody></table>
    </div>
  </div>
  <div class="taxopark clearfix"> 
    <h3> 24G, Ковчег, Стрит </h3>
    <div class="col-md-5 taxoparkInfoBlock">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/taxiLogos/3taxparks.png" alt="" style="max-width: 100%;">
    <p class="autoparkDescription">Осенью 2017 года в ходе одной сделки компания taxТранс поглотила три таксопарка –
24G , Ковчег, Стрит существовавшие на рынке таксомоторных компаний с 2011 года.
Имеющие на момент поглощения 10 машин, в том числе универсалы. Собственную
диспетчерскую. С обширной базой постоянных клиентов.</p>
    </div>
    <div class="col-md-7">
      <table class="tableizer-table">
<tbody>
 <tr><td>Название такси</td><td>24G</td><td>Ковчег</td><td>Стрит</td></tr>
 <tr><td>Год основания такси/поглощения</td><td>2011/2017</td><td>2011/2017</td><td>2011/2017</td></tr>
 <tr><td>Рейтинг в городе</td><td>3</td><td>4</td><td>3,5</td></tr>
 <tr><td>Охват региона</td><td>Не полный</td><td>Низкий</td><td>Средний</td></tr>
 <tr><td>Телефоны</td><td>8(495)647-80-64 8(985)647-80-64 8(800)200-64-49</td><td>8(495)599-0-999</td><td>8(495)664-64-94 8(925025-02-92 8(968)898-93-00 8(968)945-62-98</td></tr>
 <tr><td>Сайт</td><td>odin-taxi24g.ru</td><td>Нет</td><td>odintsovo-taksi.ru</td></tr>
 <tr><td>Интернет страницы</td><td>Вконтакте, Facebook</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Заказ через приложение</td><td>нет</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Время подачи автомобиля</td><td>10-15 минут</td><td>15 минут</td><td>10-15 минут</td></tr>
 <tr><td>Количество водителей</td><td>8</td><td>8</td><td>8</td></tr>
 <tr><td>Водители граждане РФ</td><td>4</td><td>4</td><td>4</td></tr>
 <tr><td>Количество автомобилей</td><td>10</td><td>10</td><td>10</td></tr>
 <tr><td>Автопарк </td><td>Ford, Chevrolet, Hyundai</td><td>Hyundai</td><td>Ford, Chevrolet, Hyundai</td></tr>
 <tr><td>Вип автомобили</td><td>нет</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Микроавтобус</td><td>Нет</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Грузовые перевозки</td><td>Нет</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Дизайн автомобилей</td><td>Да</td><td>Нет</td><td>Да</td></tr>
 <tr><td>Трансферы</td><td>Да</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Реклама</td><td>Нет</td><td>Нет</td><td>Нет</td></tr>
 <tr><td>Работа с юр/физ лицами</td><td>Нет/Да</td><td>Нет/Да</td><td>Нет/Да</td></tr>
 <tr><td>Б/н расчёт, оплата картой</td><td>Да/Нет</td><td>Нет/Нет</td><td>Да/Да</td></tr>
 <tr><td>Детское кресло</td><td>Да</td><td>Да</td><td>Да</td></tr>
 <tr><td>Перевозка детей без взрослых</td><td>Да</td><td>Да</td><td>Да</td></tr>
 <tr><td>Курьерская доставка</td><td>Да</td><td>Нет</td><td>Да</td></tr>
</tbody></table>
    </div>
  </div>

	</div><!-- #primary -->
 
  

<?php
get_sidebar();


get_footer();


