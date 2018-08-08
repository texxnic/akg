<?php
/**
* Template Name: formaccept
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
$testAdresses = array('dog933@mail.ru','insidelookst@gmail.com','web-332yv@mail-tester.com');
$finalAdresses = array('dog933@mail.ru','0110707@mail.ru','taxi-one@inbox.ru');
if((isset($_POST['WMI_MERCHANT_ID'])&&$_POST['WMI_MERCHANT_ID']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        
        if((isset($_POST['len'])&&$_POST['len']!="")){
            $subject = 'Заказ такси taxtrans'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Поступил новый заказ из <b>КАЛЬКУЛЯТОРА</b> раздела '.$_POST['taxiType'].'.<br>
                        Пользователь ввел адрес "ОТКУДА":'.$_POST['fromNorm'].', <b>КООРДИНАТЫ ТОЧКИ: '.$_POST['fromGeo'].'</b><br>
                        Пользователь ввел адрес "КУДА":'.$_POST['toNorm'].', <b>КООРДИНАТЫ ТОЧКИ: '.$_POST['toGeo'].'.</b><br>
                        Путь протяженностью <b>'.$_POST['len'].' км</b> и ценой <b>'.$_POST['WMI_PAYMENT_AMOUNT'].' руб</b>.<br>
                         Телефон: '.$_POST['priceTelCalc'].', '.$_POST['namePriceCalc'].'.<br>
                         Стоимость: '.$_POST['WMI_PAYMENT_AMOUNT'].'руб, тип оплаты: '.$_POST['paymentMethod'].',
                        </p>
                           
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        } else {
            $subject = 'Заказ такси taxtrans'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Поступил новый заказ из раздела '.$_POST['taxiType'].'.<br>
                        '.$_POST['adress1'].' '.$_POST['enteredAddress1'].'<br>
                        '.$_POST['adress2'].' '.$_POST['enteredAddress2'].'. <br>
                         Телефон: '.$_POST['priceTel'].', '.$_POST['customerName'].'.<br>
                         Стоимость: '.$_POST['WMI_PAYMENT_AMOUNT'].'руб, тип оплаты: '.$_POST['paymentMethod'].',
                        </p>
                           
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        };
        
       wp_mail( $finalAdresses, $subject, $message, "Content-type: text/html\r\n" ); //Отправка письма с помощью функции mail
};
if((isset($_POST['frompage'])&&$_POST['frompage']=="index")){
    $from=$_POST['from']; 
   $to=$_POST['to'];
   $phone=$_POST['indexPhone'];
   $date=$_POST['text-80'];
   $price=$_POST['myPrice'];
   $switch=$_POST['switch_2'];
   $date=$_POST['text-80']; 

      if($switch == 'yes'){
      $when = ', Когда:сейчас';
   }else{
    $when = ', Когда: ' . $date;
   };

if($price!=""){
  $message = 'Пользователь предложил поездку за '. $price .'руб. Откуда: ' .$from. ', Куда: ' .$to . $when . ', Телефон:' .$phone . '.';
  wp_mail( $finalAdresses, 'Предложение поездки за '. $price .'руб', $message );
} else {
    $message = 'Откуда: ' .$from. ', Куда: ' .$to . $when . ', Телефон:' .$phone . '.';
  wp_mail( $finalAdresses, 'Новый заказ с сайта taxTrans', $message );
};
};


?>

       </div>


<?php
get_sidebar();


get_footer();


