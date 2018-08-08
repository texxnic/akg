<?php
/**
 * The template for displaying all pages
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
           <h2 class="whiteTxt animated zoomIn">Упс... Такой страницы у нас нет</h2>
           <a href="<?php echo get_home_url(); ?>" class="whiteTxt">На главную</a>
       </div>
    
      

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
