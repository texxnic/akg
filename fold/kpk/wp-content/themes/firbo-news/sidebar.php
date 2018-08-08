<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firbo-news
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<aside class="sidebar whiteWithShadow">


<div class="sidebar__news">
    <?php echo do_shortcode( '[wpb-random-posts]' ); ?>
    
</div>
    <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
<div class="sidebar__tags">

<ul class="tags">
<?php                       

                                            foreach(wp_tag_cloud( 'orderby=count&format=array&smallest=14&largest=14&unit=px&number=10' ) as $tag) {
                                              echo  $tag; 
                                            }

 ?>
</ul>
</div>
<div class="sidebar__links">
<div class="footer__social">
                                        <a href="https://www.facebook.com/groups/176475799834481/" class="social-btn social-facebook" title="Фирбо новости в фейсбуке"><i class="ti-facebook"></i></a>
                                        
                                        <a href="https://vk.com/firbonews" class="social-btn social-vk" title="Фирбо новости во вконтакте"><i class="fab fa-vk"></i></a>

                                        <a href="https://twitter.com/Firbo_News" class="social-btn social-twitter" title="Фирбо новости в твиттере"><i class="fab fa-twitter"></i></a>
                                        
                                        <a href="https://www.ok.ru/group/59004804923434" class="social-btn social-ok" title="Фирбо новости в однокласниках"><i class="fab fa-odnoklassniki"></i></a>

                                        <a href="https://www.instagram.com/firbo_news/" class="social-btn social-instagram" title="Фирбо новости в инстаграме"><i class="fab fa-instagram"></i></a>
                                        
                                        <a href="https://zen.yandex.ru/id/5b0e992c7800193a64d0b410" class="social-btn social-ok" title="Фирбо новости в Яндекс.Дзене"><i class="fab fa-yandex"></i></a>
                                        
                        </div>

</div>
<?php endif; ?>

                        <div class="widget widget-serach">
                            
                                
                                  

                                    <!-- <form role="search" class="search-form" action="<?php echo get_home_url(); ?>" method="get">
                                        <div class="input-group">
                                            <input type="search" class="form-control search-field" placeholder="Поиск" value="" name="s"> 
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default search-submit"><span class="ti-search"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form> -->
                                    
                                    <!-- <ul class="social sidebar__social">
                                        <li><a href="https://www.facebook.com/groups/176475799834481/" class="social-btn social-facebook" title="Фирбо новости в фейсбуке"><i class="ti-facebook"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/Firbo_News" class="social-btn social-twitter" title="Фирбо новости в твиттере"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/firbo_news/" class="social-btn social-instagram" title="Фирбо новости в инстаграме"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://vk.com/firbonews" class="social-btn social-vk" title="Фирбо новости во вконтакте"><i class="fab fa-vk"></i></a>
                                        </li>
                                        <li><a href="https://www.ok.ru/group/59004804923434" class="social-btn social-ok" title="Фирбо новости в однокласниках"><i class="fab fa-odnoklassniki"></i></a>
                                        </li>
                                        <li><a href="https://zen.yandex.ru/id/5b0e992c7800193a64d0b410" class="social-btn social-ok" title="Фирбо новости в Яндекс.Дзене"><i class="fab fa-yandex"></i></a>
                                        </li>
                                    </ul>
                                    <p class="small">Новости в соц. сетях</p> -->
                                
                            
                            <!-- /.row -->
                        </div>
                        <!-- / widget search -->
                        
                        <!-- /widget -->
                        
                        <!-- /widget tabs -->
                    </aside>
                </div>
            </div>