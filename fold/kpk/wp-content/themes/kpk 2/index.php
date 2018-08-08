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
<div id="PageID" class="index"></div>
<div class="pageBack firstScreenPreview">
            </div>
            <div class="pageContent owl-carousel">
            	<div class="firsSlide">
            		<div class="darkerDivIndex"></div>
            		<div class="firtJumboText">
            		<h3>КПК "Со-действие"</h3><br>
            		<p>Это союз коммерческих и некоммерческих организаций, информационных центров и независимых участников, который предлагает пайщикам выгодные условия для быстрого приумножения капитала. </p>
            	</div>
                <div class="bottomBar">
                	<div class="leftBarInform">
                		<div class="firstFact factCommon">
                			<span class="mainText">до 28%</span><br>
                			<span class="preText">годовых</span>
                		</div>
                		<div class="SeconFact factCommon">
                			<span class="mainText">3 года</span><br>
                			<span class="preText">максимальный срок вклада</span>
                		</div>
                		<div class="ThirdFact factCommon">
                			<span class="mainText">Абсолютная защита</span><br>
                			<span class="preText">вашего вклада</span>
                		</div>
                	</div>
                	
                		<a href="<?php echo get_home_url(); ?>/about">
                		<button class="barRedButton">Узнать больше</button>
                	</a>
                	
                </div>
            	</div>
            	<div class="secondSlide">
            		<div class="darkerDivIndex"></div>
            		<div class="firtJumboText">
            		<h3>Выгодный вклад</h3><br>
            		<p>Вклад в "Со-действие" это всегда абсолютная безопасность подтвержденная документами, прозрачность и своевременные выплаты. Высокие проценты вкупе с удобными способами выплаты процентов.</p>
            	</div>
                <div class="bottomBar">
                	<div class="leftBarInform">
                		<div class="firstFact factCommon">
                			<span class="mainText">до 26.5%</span><br>
                			<span class="preText">годовых</span>
                		</div>
                		<div class="SeconFact factCommon">
                			<span class="mainText">3 года</span><br>
                			<span class="preText">максимальный срок вклада</span>
                		</div>
                		<div class="ThirdFact factCommon">
                			<span class="mainText">Удобные выплаты</span><br>
                			<span class="preText">Наличными, на карту или капитализация</span>
                		</div>
                	</div>
                	
                		<a href="<?php echo get_home_url(); ?>/kpkvklad">
                		<button class="barRedButton">Узнать больше</button>
                	</a>
                	
                </div>
            	</div>
            	<div class="thirdSlide">
            		<div class="darkerDivIndex"></div>
            		<div class="firtJumboText">
            		<h3>Вклад с капитализацией</h3><br>
            		<p>Этот вклад для тех, кто хочет получить максимально высокий доход. Проценты возвращаются на вклад, тем самым увеличивая вашу прибыль.</p>
            	</div>
                <div class="bottomBar">
                	<div class="leftBarInform">
                		<div class="firstFact factCommon">
                			<span class="mainText">до 28%</span><br>
                			<span class="preText">годовых</span>
                		</div>
                		<div class="SeconFact factCommon">
                			<span class="mainText">3 года</span><br>
                			<span class="preText">максимальный срок вклада</span>
                		</div>
                		<div class="ThirdFact factCommon">
                			<span class="mainText">Максимальная выгода</span><br>
                			<span class="preText">с высоких процентов</span>
                		</div>
                	</div>
                	
                		<a href="<?php echo get_home_url(); ?>/vkladwithcap">
                		<button class="barRedButton">Узнать больше</button>
                	</a>
                	
                </div>
            	</div>
            	<div class="fourSlide">
            		<div class="darkerDivIndex"></div>
            		<div class="firtJumboText">
            		<h3>Валютный вклад</h3><br>
            		<p>Мы принимаем вклады не только в рублях, но и в иностранной валюте.</p>
            	</div>
                <div class="bottomBar">
                	<div class="leftBarInform">
                		<div class="firstFact factCommon">
                			<span class="mainText">до 17%</span><br>
                			<span class="preText">годовых</span>
                		</div>
                		<div class="SeconFact factCommon">
                			<span class="mainText">3 года</span><br>
                			<span class="preText">максимальный срок вклада</span>
                		</div>
                		<div class="ThirdFact factCommon">
                			<span class="mainText">Различные валюты</span><br>
                			<span class="preText">Доллары, евро и другие</span>
                		</div>
                	</div>
                	<div class="barRight">
                		<a href="<?php echo get_home_url(); ?>/inovklad">
                		<button class="barRedButton">Узнать больше</button>
                	</a>
                	</div>
                </div>
            	</div>
            </div>
        </div>
        
    </div>


<?php

get_footer();
