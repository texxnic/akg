<?php
/**
* Template Name: news
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
<div id="PageID" class="vkladCap"></div>
   <div class="pageBack vkladCapBack">
            </div>
            <div class="pageContent">
                <div class="darkerDiv">
                    <div class="container contentMargins">
                     <?php 
                     $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
  'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
  'paged'          => $current_page // текущая страница
);
query_posts( $args );
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post();
  ?>
  <h2><?php the_title() /* заголовок */ ?></h2>
  <p><?php the_content() /* содержимое поста */ ?></p>
  <?php
endwhile;
 
if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации
                      ?>
                   
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?
get_footer();