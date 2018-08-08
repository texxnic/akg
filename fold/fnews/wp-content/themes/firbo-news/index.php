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
 * @package firbo-news
 */

get_header();
?>

<?php
global $wp;

$lastUsd = $wpdb->get_var("SELECT usd FROM wp_cur ORDER BY ID DESC LIMIT 1");
$prevUsd = $wpdb->get_var("SELECT usd FROM wp_cur ORDER BY ID DESC LIMIT 1 OFFSET 1");
$diffUsd = $lastUsd - round($prevUsd, 2);
$lastEur = $wpdb->get_var("SELECT eur FROM wp_cur ORDER BY ID DESC LIMIT 1");
$prevEur = $wpdb->get_var("SELECT eur FROM wp_cur ORDER BY ID DESC LIMIT 1 OFFSET 1");
$diffEur = $lastEur - round($prevEur, 2);

function fuuunct($curType = null) {

	global $lastUsd;
	global $diffUsd;
	global $prevUsd;
	global $diffEur;
	global $prevEur;
	global $lastEur;
	$delta = array(round($diffUsd, 2), round($diffEur, 2));
	$htmldelta = array();
	foreach ($delta as $i => $value) {
		if ($delta[$i] != 0) {
			if ($delta[$i] > 0) {
				$delta[$i] = '<sup class="price-up">+' . $delta[$i] . '</sup></h5>';
			} elseif ($delta[$i] < 0) {
				$delta[$i] = '<sup class="price-down">' . $delta[$i] . '</sup></h5>';
			}

		} else {
			$delta[$i] = '';
		}
		;
	}
	;

	echo "<h5 title=\"Курс доллара по данным ЦБ\">{$lastUsd}<sup class=\"price-down\">{$delta[$diffUsd]}</sup></h5>
  <h5 title=\"Курс евро по данным ЦБ\">{$lastEur}<sup class=\"price-down\">{$delta[$diffEur]}</sup></h5>";
}
?>


         <section id="page" class="container">

            <div class="row">
               <div class="main-content first__width clearfix">
                  <div class="inner-wrap">
                    <div class="wrap-row first-row">
                      <div class="first-column">
                        <div class="news-square time-date">
                          <div class="text-add-wrap">
                            <h5><?php
echo date_i18n('l');
?></h5>

                            <h3><?php
echo date_i18n('M');
?><br></h3>
                          </div>
                          <span class="ghost__date">
                            <?php echo date_i18n('d'); ?>
                          </span>
                        </div>
                        <a href="https://firbo-uslugi.ru/">
                          <div class="news-square add-1">
                          <img src="<?php
echo get_template_directory_uri();
?>/images/outline.svg" alt="">
                          <div class="text-add-wrap">
                            <h3>Услуги</h3><h5> Firbo Capital</h5>
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="second-column">

                          <?php
                            $args = array(
                            	'numberposts' => '1',
                            );
                            $recent_posts = wp_get_recent_posts($args);
                            $img = get_the_post_thumbnail_url($recent["ID"]);
                            $categories = get_the_category($recent["ID"]);
                            foreach ($recent_posts as $recent) {
                            	echo '<div class="first-news post-image has_overlay" style="background-image: url(\' ' . $img . '\');"> <a href="' . get_permalink($recent["ID"]) . '"><div class="first-news-cat"><h5>' . $categories->name . '</h5></div>' . '<h3>' . $recent["post_title"] . '</h3>' . '</a> </div>';
                            }
                            wp_reset_query();
                          ?>

                        <div class="post-header-bar">
                          <div class="search">

                            <div class="stockItems">
                              <div class="stockBlock">
                              <span class="stockBlock__name">Apple</span>
                              <div class="stockBlock__data priceWithDelta">
                                <span class="priceWithDelta__delta">+33</span>
                                <br>
                                <span class="priceWithDelta__price">178</span>
                              </div>
                              <span class="stockBlock__ghostIndex">APPL</span>
                              <canvas id="chartJSContainer" class="chartJSContainer"></canvas>
                            </div>
                            <div class="stockBlock">
                              <span class="stockBlock__name">Alphabet</span>
                              <div class="stockBlock__data priceWithDelta">
                                <span class="priceWithDelta__delta">+33</span>
                                <br>
                                <span class="priceWithDelta__price">178</span>
                              </div>
                              <span class="stockBlock__ghostIndex">GOOG</span>
                               <canvas class="chartJSContainer"></canvas>
                            </div>
                            <div class="stockBlock">
                              <span class="stockBlock__name">Facebook</span>
                              <div class="stockBlock__data priceWithDelta">
                                <span class="priceWithDelta__delta">+33</span>
                                <br>
                                <span class="priceWithDelta__price">178</span>
                              </div>
                              <span class="stockBlock__ghostIndex">FB</span>
                               <canvas class="chartJSContainer"></canvas>
                            </div>
                            <div class="stockBlock">
                              <span class="stockBlock__name">Amazon</span>
                              <div class="stockBlock__data priceWithDelta">
                                <span class="priceWithDelta__delta">+33</span>
                                <br>
                                <span class="priceWithDelta__price">178</span>
                              </div>
                              <span class="stockBlock__ghostIndex">AMZN</span>
                               <canvas class="chartJSContainer"></canvas>
                            </div>
                            <div class="stockBlock">
                              <span class="stockBlock__name">Netflix</span>
                              <div class="stockBlock__data priceWithDelta">
                                <span class="priceWithDelta__delta">+33</span>
                                <br>
                                <span class="priceWithDelta__price">178</span>
                              </div>
                              <span class="stockBlock__ghostIndex">NFLX</span>
                               <canvas class="chartJSContainer"></canvas>
                            </div>
                            <div class="stockBlock">
                              <span class="stockBlock__name">Tesla</span>
                              <div class="stockBlock__data priceWithDelta">
                                <span class="priceWithDelta__delta">+33</span>
                                <br>
                                <span class="priceWithDelta__price">178</span>
                              </div>
                              <span class="stockBlock__ghostIndex">TSLA</span>
                               <canvas class="chartJSContainer"></canvas>
                            </div>
                            </div>

                            <form role="search" method="get" id="searchform" class="searchform indexPageSearch" action="<?php echo esc_url(home_url('/')); ?>">


                                <button class="indexPageSearch__button" type="submit" id="searchsubmit">
                                  <i class="fal fa-search"></i>
                                </button>
                                <input class="indexPageSearch__input" id="searchinput" type="text" placeholder="Поиск по новостям" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                <i class="fal fa-times" id="closeSearch"></i>

                            </form>
                          </div>
                          <div class="currency">
                            <?php fuuunct('usd');?>

                          </div>
                                                    <?php
$args2 = array(
	'numberposts' => '1',
	'offset' => '1',
);
$recent_posts2 = wp_get_recent_posts($args2);

foreach ($recent_posts2 as $recent) {
	echo '<div class="second-news post-image has_overlay" style="background-image: url(\' ' . get_the_post_thumbnail_url($recent["ID"]) . '\');"> <a href="' . get_permalink($recent["ID"]) . '">' . '<h4>' . $recent["post_title"] . '</h4>' . '</a>   </div>';
}

?>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="wrap-row custom-baner"></div> -->

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
                        <div class="wrap-row">
                           <?php
echo do_shortcode(' [ajax_load_more post_type="post" posts_per_page="10" offset="2"] ');
?>





                     </div>

                    </div>

                </div>

        </section>
        <!--  Start Bottom post sarousel -->


<?php

get_footer();
?>