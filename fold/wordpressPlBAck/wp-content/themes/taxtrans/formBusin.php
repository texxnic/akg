<?php
/**
* Template Name: formBusin
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
$finalAdresses = array('dog933@mail.ru','0110707@mail.ru','taxi-one@inbox.ru');
if((isset($_POST['email'])&&$_POST['email']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        
        $subject = 'Заявка на бизнес такси'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Компания: '.$_POST['comp'].'</p><br>
                        <p>Email: '.$_POST['email'].'</p><br>                        
                        <p>Телефон: '.$_POST['phone'].'</p><br>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        
       wp_mail( $finalAdresses, $subject, $message, 'Content-Type: text/html;'); //Отправка письма с помощью функции mail
};
?>

       </div>


<?php
get_sidebar();


get_footer();


