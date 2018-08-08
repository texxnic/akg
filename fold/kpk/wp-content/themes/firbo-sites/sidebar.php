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


<aside class="sidebar">

	<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>

<h6>Популярные тэги:</h6>
<ul class="tags">
<?php 	  					

	  										foreach(wp_tag_cloud( 'orderby=count&format=array&smallest=14&largest=14&unit=px&number=10' ) as $tag) {
	  										  echo '<li class="tag">' . $tag . '</li>'; 
	  										}

 ?>
</ul>

<?php endif; ?>
<div class="indexSlider">
                          <div class="indexSlider__textWrap owl-carousel">
                            <div class="indexSlider__slide indexSlider__slide_1">
                              <h2>Почему депозит в фирбо капитале надежен?</h2>
                              <a class="indexSlider__link" href="http://depozit-firbo.ru/"><button class="indexSlider__button">Узнать</button></a>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/vault.png" alt="" class="indexSlider__image">
                            </div>
                            <div class="indexSlider__slide indexSlider__slide_2">
                              <h2>Как заработать 23% годовых?</h2>
                              <a class="indexSlider__link" href="http://depozit-firbo.ru/"><button class="indexSlider__button">Узнать</button></a>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/percent.png" alt="" class="indexSlider__image">
                            </div>
                            <div class="indexSlider__slide indexSlider__slide_3">
                              <h2>Почему фирбо предлагает самый лучший процент?</h2>
                              <a class="indexSlider__link" href="http://depozit-firbo.ru/"><button class="indexSlider__button">Узнать</button></a>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/gPiggy.png" alt="" class="indexSlider__image">
                            </div>
                          </div>
                          
                        </div>


                        <div class="widget widget-serach">
                            <div class="row">
                                <div class="col-sm-12">
                                  

                                    <form role="search" class="search-form" action="<?php echo get_home_url(); ?>" method="get">
                                        <div class="input-group">
                                            <input type="search" class="form-control search-field" placeholder="Поиск" value="" name="s"> 
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default search-submit"><span class="ti-search"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/groups/firbocapital" class="social-btn social-facebook" title="Facebook"><i class="ti-facebook"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/FirboCapital" class="social-btn social-twitter" title="Twitter"><i class="ti-twitter"></i></a>
                                        </li>
                                        <li><a href="#" class="social-btn social-instagram" title="instagram"><i class="ti-instagram"></i></a>
                                        </li>
                                        <li><a href="https://vk.com/firbocapital" class="social-btn social-vk" title="vk"><i class="fab fa-vk"></i></a>
                                        </li>
                                        <li><a href="https://ok.ru/firbocapital" class="social-btn social-ok" title="ok"><i class="fab fa-odnoklassniki"></i></a>
                                        </li>
                                    </ul>
                                    <p class="small">Новости в соц. сетях</p>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- / widget search -->
                        
                        <!-- /widget -->
                        
                        <!-- /widget tabs -->
                    </aside>
                </div>
            </div>