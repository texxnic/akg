<?php
/**
* Template Name: meet
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
                <div id="jumboFirstImage" class="meetBG"></div>
                <span class="uslugiParralax"><?php the_title(); ?></span>
                
        <div id="jumboFirstText">

            <h6 id="pageJumbo" class="animated" style="opacity:0;">Услуга "<?php the_title(); ?>"</h6><br>
            <p id="pageJumboDesc" class="animated"  style="opacity:0;">Вовремя встретим вас в аэропорту и ж/д вокзале, даже если вы прибудете раньше.</p>
        </div>
            <div id="pageContent">
                
           <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_type() );

   

    endwhile; // End of the loop.
    ?>
    <div class="meetTablo">
 
        <h3> Онлайн табло аэропортов </h3>
        <div class="switch-field switchTablo">
                                <input type="radio" id="select_vnuk" name="switch_2" value="yes" checked/>
                                <label  for="select_vnuk">Внуково</label>
                                <input type="radio" id="select_sherem" name="switch_2" value="no" />
                                <label  for="select_sherem">Шереметьево</label>
                                <input type="radio" id="select_domoted" name="switch_2" value="no" />
                                <label for="select_domoted">Домодедово</label>
                            </div>
        <div class="vnukovo airTablo"><iframe frameborder="0" style="-moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); overflow: hidden; border: 0; width: 100%; height: 302px;" src="https://rasp.yandex.ru/informers/station/9600215/?type=tablo"></iframe></div>
        <div class="sherem airTablo" style="display: none">
            <iframe frameborder="0" style="-moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); overflow: hidden; border: 0; width: 100%; height: 302px;" src="https://rasp.yandex.ru/informers/station/9600213/?size=5&amp;color=1&amp;type=tablo"></iframe>
        </div>
        <div class="domod airTablo" style="display: none">
            <iframe frameborder="0" style="-moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); overflow: hidden; border: 0; width: 100%; height: 302px;" src="https://rasp.yandex.ru/informers/station/9600216/?size=5&amp;color=1&amp;type=tablo"></iframe>
        </div>
    </div>

            </div>
             <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/pageAnimations.js"></script>
            <!-- #primary -->
            <?php
get_sidebar();


get_footer();
