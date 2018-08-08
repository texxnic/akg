<?php
/**
* Template Name: business
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
                <div id="jumboFirstImage" class="businessBG"></div>
                <span class="uslugiParralax"><?php the_title(); ?></span>
                
        <div id="jumboFirstText">

            <h6 id="pageJumbo" class="animated" style="opacity:0;">Услуга "<?php the_title(); ?>"</h6><br>
            <p id="pageJumboDesc" class="animated"  style="opacity:0;">Корпоративное такси - лучший способ избавиться от опоздания персонала, снизить логистические расходы и подарить комфортное передвижение своим сотрудникам!</p>
        </div>
            <div id="pageContent" class="clearfix">
                
      <div class="row m50 mb25">
  <div class="col-sm-3">
    <div class="row"><div class="col-sm-4 mt25 col-xs-4 col-sm-offset-4 col-xs-offset-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/operator.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Удобный, быстрый и круглосуточный заказ</span></div>
  </div>
  <div class="col-sm-3">
    <div class="row"><div class="col-sm-4 mt25 col-xs-4 col-sm-offset-4 col-xs-offset-4"><img style="width: 87px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/money.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Доступные цены и удобные методы оплаты</span></div>
  </div>
  <div class="col-sm-3">
    <div class="row"><div class="col-sm-4 mt25 col-xs-4 col-sm-offset-4 col-xs-offset-4"><img style="width: 114px;margin-left: -16px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/place.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Индивидуальная оптимизация машрутов</span></div>
  </div>
  <div class="col-sm-3">
   <div class="row"><div class="col-sm-4 mt25 col-xs-4 col-sm-offset-4 col-xs-offset-4"><img style="width: 77px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/report.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Отчеты о поездках ваших сотрудников</span></div>
  </div>
</div>
<hr>
  <h5 class="m25">Бизнес-такси от taxТРАНС - это просто и удобно! Стать копративным клиентом taxТРАНС очень просто! Всего 3 шага: </h5>
  <div class="row m50">
    <div class="col-sm-4">
      <div class="row"><div class="col-sm-4 mt25 col-xs-4 col-sm-offset-4 col-xs-offset-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/contr.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Заключите контракт с taxТРАНС</span></div>
    </div>
    <div class="col-sm-4">
      <div class="row"><div class="col-sm-4 mt25 col-xs-4 col-sm-offset-4 col-xs-offset-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/peopleBusin.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Укажите сотрудников которые будут пользоваться корпоративным такси</span></div>
    </div>
    <div class="col-sm-4">
      <div class="row"><div class="col-sm-5 mt25 col-xs-4 col-sm-offset-3 col-xs-offset-4"><img style="width: 140px;margin-top: -20px;margin-bottom: -16px"src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/taxiBusin.svg" alt="" class="icoBusin"></div></div>
    <div class="col-sm-12"><span class="smallText">Готово! Вы и ваши сотрудники могут пользоваться такси на выгодных условиях</span></div>
    </div>
  </div> <div class="col-sm-12 m25 mb100 formBusin"><h5 class="m25">Оставить заявку:</h5>
  
    <form id="BusinForm">
      <div class="row">
        <div class="col-sm-6"><input name="comp" class="w100 m25 inputTextBusin" type="text" placeholder="Компания"></div>
        <div class="col-sm-6"><input name="email" class="w100 m25 inputTextBusin" type="email" placeholder="E-mail*" required></div>
      </div>
      <div class="row mb25">
        <div class="col-sm-6"><input name="phone" class="w100 m25 inputTextBusin" type="text" placeholder="Телефон"></div>
        <div class="col-sm-6"><input type="submit" class="w100 m25 submitBusin" value="Отправить заявку"></div>

      </div>
    </form>
  </div>


            </div>
             <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/pageAnimations.js"></script>
               <script>
jQuery(document).ready(function($) {
  var busForm = $("#BusinForm");

      busForm.submit(function(e){
   e.preventDefault();
     var form_data = busForm.serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "https://taxtrans.ru/formbusin", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваша заявка отпрвлена!");
                   busForm.trigger('reset');
            }});
       
  });});
 </script>   
            <!-- #primary -->
            <?php
get_sidebar();


get_footer();

