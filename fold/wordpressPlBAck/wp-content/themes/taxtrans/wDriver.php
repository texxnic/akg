<?php
/**
* Template Name: wDriver
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
                <div id="jumboFirstImage" class="girlDriverBG"></div>
                <span class="uslugiParralax"><?php the_title(); ?></span>
                
        <div id="jumboFirstText">

            <h6 id="pageJumbo" class="animated" style="opacity:0;">Услуга "<?php the_title(); ?>"</h6><br>
            <p id="pageJumboDesc" class="animated"  style="opacity:0;">Считается что водитель - мужская профессия, мы доказываем обратное!</p>
        </div>
            <div id="pageContent">
                
           <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_type() );

   

    endwhile; // End of the loop.
    ?>


            </div>
             <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/pageAnimations.js"></script>
            <!-- #primary -->
            <?php
get_sidebar();


get_footer();