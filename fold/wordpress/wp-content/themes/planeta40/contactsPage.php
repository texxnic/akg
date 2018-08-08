<?php
/**
 * 
Template Name: contacts
 * 
 */

get_header(); the_post(); ?>

<div class="contWrapper">
		<div id="contacts">
			<div class="dimm">
				<div class="container">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>

		<!-- YA MAPS -->
		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Cxa7XI3PutUd70lMYpU3FapBudf41hqo&width=100%&height=250&lang=ru_RU&sourceType=constructor"></script>


		<div class="container pageContent">
			<div class="contactFormText"><hr size="5" align="left" color="black" style="display:inline-block;width:10%;margin:20px;" class="hidden-xs"><h1 style="display:inline;">Напимите нам!</h1><hr id = "line" size="10" align="left" width="30%" color="black" style="display:inline-block;width:10%;margin:20px;" class="hidden-xs">
    
						<h5>Если у вас есть какие-нибудь вопросы, или вы хотите оставить заявку воспользуйтесь формой.</h5></div>

            <?php the_content(); ?> <!-- Page Content -->

		<div class="col-md-4 contItems">
			<i class="fa fa-map-marker fa-2x"></i><h3>Адрес</h3>

			<p> Малоярославец ул. Московская, д.16 офис 212 </p>
		</div>
		<div class="col-md-4 contItems">
			<i class="fa fa-phone fa-2x"></i><h3>Телефоны</h3>
			<nobr><p>8(48431)5-22-77</p></nobr>
  <nobr><p>8(953)327-69-76 Элеонора</p></nobr>
  <nobr><p>8(910)523-51-34 Тамара</p></nobr><br>
		</div>

		<div class="col-md-4 contItems">
			<i class="fa fa-globe fa-2x"></i><h3>Интернет</h3><br>
			<i class="fa fa-envelope"></i><p >isaeva_73@mail.ru</p>
			<p>mel81@inbox.ru</p>
		</div>
		</div>
	</div>
	
	<?php get_footer(); ?>