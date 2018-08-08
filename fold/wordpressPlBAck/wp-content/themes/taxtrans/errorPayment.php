<?php
/**
* Template Name: errorPayment
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

       <div class="pageJumbo" style="height:100vh; flex-direction:column;">
           <h2 class="whiteTxt animated zoomIn">Что-то пошло не так 😕. Может поедем за наличные? Наши операторы получили заказ, и скоро вам позвонят.</h2>
           <a href="<?php echo get_home_url(); ?>" class="whiteTxt">На главную</a>
       </div>
    
      <?php 

if((isset($_POST['len'])&&$_POST['len']!="")){
            $subject = 'ОШИБКА ОПЛАТЫ'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Произошла ошибка онлайн оплаты у пользователя с номером, пожалуйста позвоните ему.
                        </p>
                           
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        }

      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();


get_footer();


