<?php
/**
* Template Name: succesPayment
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
           <h2 class="whiteTxt animated zoomIn">
<?php if((isset($_POST['namePriceCalc'])&&$_POST['namePriceCalc']!="")){
  echo "Спасибо, ". $_POST['namePriceCalc'] ."! Ваш заказ успешно оплачен! Дождитесь звонка оператора.";
} else {
  echo "Спасибо! Ваш заказ №". $_POST['WMI_ORDER_ID'] ." успешно оплачен! Дождитесь звонка оператора.";
}  ?>
            </h2>
           <a href="<?php echo get_home_url(); ?>" class="whiteTxt">На главную</a>
       </div>
    
      

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();


get_footer();


