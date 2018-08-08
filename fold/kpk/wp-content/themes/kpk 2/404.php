<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kpk
 */

get_header(); ?>



   <div class="pageBack vkladBack">
            </div>
            <div class="pageContent">
                <div class="darkerDiv" style="padding:0">
                    
	

			<div class="cnter404">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoRed.svg?ver=1.1" alt="Логотип КПК" class="logo404">
				
				<h3>Извините, но запрашиваемая страница не найдена.</h3>
				<a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>

                  
                   
                </div>
            </div>
        </div>
<?php
get_footer();
