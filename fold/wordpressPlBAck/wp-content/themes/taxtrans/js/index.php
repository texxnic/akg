<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kpk
 */

get_header(); ?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/saved.png" alt="Сбережения сохранены" class="savedLogo">
<div class="pageBack firstScreenPreview">
            </div>
            <div class="pageContent">
                <div class="firtJumboText">
                    <h1>Прибыльные вклады до 28% годовых</h1>
                    
                    <p>Мы не просто сберегаем ваши накопления, но и их преумножаем!</p>
                </div>
            </div>
        </div>
        
    </div>


<?php

get_footer();
