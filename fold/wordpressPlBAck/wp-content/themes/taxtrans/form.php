<?php
/**
* Template Name: form
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
		<main id="main" class="site-main">

    <!-- Use any element to open the sidenav -->

    <div id="main">

        <div class="pageJumbo" style="height:100vh; flex-direction:column; text-align:center;">
         
       <?php

if(count($_POST) != 0)
{ 
$from=$_POST['from']; 
   $to=$_POST['to'];
   $phone=$_POST['tel-134'];
   $date=$_POST['text-80'];
   $price=$_POST['myPrice'];
   $switch=$_POST['switch_2'];
   $date=$_POST['text-80']; 

   if($switch == 'yes'){
      $when = ', сейчас';
   }else{
    $when = ', Когда: ' . $date;
   };

  $message = 'Откуда: ' .$from. ', Куда: ' .$to . $when . ', Телефон:' .$phone . ', хочу поехать за:' .$price;
  $homeUrl = get_home_url();
   // wp_mail( 'dog933@mail.ru', 'The subject', $message );
  if( wp_mail( 'dog933@mail.ru', 'Новый заказ с сайта taxTrans', $message )){
    echo     '<h2 class="whiteTxt animated zoomIn">Спасибо! Ваш заказ отправлен, дождитесь звонка оператора.</h2>  <a href="'.$homeUrl.'" class="whiteTxt">Вернуться на главную</a>';
  } else {
    echo     '<h2 class="whiteTxt animated zoomIn">Извините, произошла ошибка. Для заказа такси позвоните на номер: <a href="tel:88002228800">8800-222-8800</a></h2>';
  }
}

?>

       </div>


<?php
get_sidebar();


get_footer();


