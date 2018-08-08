<?php
/**
* Template Name: price
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

       <div class="pageJumbo">
           <h2 class="whiteTxt animated zoomIn"><?php the_title(); ?></h2>
       </div>
       <div class="container pageContent contetPaddings">
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
      <div class="oplataButton">

        <p class="whiteTxt">Оплатить <span class="place"></span>  <span class="tripPrice">20000</span>₽</p>

      </div>
       <!--  <table cellspacing=0>
          <tr>
            <td class="tdStyling"  style=min-width:50px>Город одинцово<br></td>
            <td class="tdStyling"  style=min-width:50px><br></td>
            
            
            
            
          </tr>
          <tr>
            <td class="tdStyling"  style="min-width:50px">Баковская улица, Верхнее-Отрадное, Верхне-Пролетарская улица, Вокзальная улица, 1-я Вокзальная улица, Внуковская улица, Восточная улица, Глазынинская улица, Железнодорожная улица, Зеленая улица, Западная улица, Говорова улица, Интернациональная улица, Интернациональный проезд, Коммунальный проезд, Коммунистическая улица, Комсомольская улица, Красногорское шоссе, Красногорский проезд, Бульвар Любы Новоселовой, Маковского улица, Маршала Бирюзова улица, Маршала Крылова улица, Маршала Толубко улица, Маршала Жукова улица, Можайское шоссе, Молодежная улица, Неделина улица, Нижнепролетарская улица, Поселок БЗРИ, Пионерская улица, Новое Яскино улица, Ново-Спортивная улица, Привокзальная площадь, Садовая улица, Свободы улица, Северная улица, Советская улица, Союзная улица, Сосновая улица, Солнечная улица, Старое Яскино улица, Транспортная улица, Транспортный проезд, Чикина улица, Школьный проезд, Школьная улица, Южная улица, Яскино улица, 2-й Завод, Трасса им.Л.Лазутиной.<br></td>
            <td class="tdStyling" title="Another Employee Name"  style=min-width:50px>200<br></td>
            <td class="tdStyling"  style=min-width:50px>600<br></td>
            <td class="tdStyling"  style=min-width:50px>600<br></td>
            <td class="tdStyling"  style=min-width:50px>800<br></td>
            <td class="tdStyling"  style=min-width:50px>1000<br></td>
          </tr>
          <tr>
            <td class="tdStyling"  style=min-width:50px>Старая Трехгорка: Вишневая, Колхозная, Можайское ш, Полевая, Чистяковой до 38д, платформа Трехгорка, д.Мамоново( со стороны можайского ш), Буденовское ш, Баковка -4, ул.Вокзальная, Вокзальный тупик, Колхозная, Лесная, Овражный тупик, Луч, Лохино: 1-я Советская, 2-я Советская, Садовая, ЖК Сколковский ( ул. Сколковская), Акулово: Довиль, Акуловская, Железнодорожная, Полевая, Д/О Озера, Новая, Школьная, Гуссарская Баллада: Бородинская, Дениса Давыдова, Гвардейская, Михаила Кутузова, Триумфальная, пос Вниссок: Рябиновая, Дружбы, Березовая, Кленовая, Селекционная, Липовая, с Дубки, ст. Пионерская ( до переезда), д.Губкино, д.Глазынино, 9-й микр.: ул.Белорусская, Одинцово 1, ул.Ракетчиков, АКОС.<br></td>
            <td class="tdStyling"  style=min-width:50px>250<br></td>
            <td class="tdStyling"  style=min-width:50px>650<br></td>
            <td class="tdStyling"  style=min-width:50px>750<br></td>
            <td class="tdStyling"  style=min-width:50px>1000<br></td>
            <td class="tdStyling"  style=min-width:50px>1200<br></td>
          </tr>
          <tr>
            <td class="tdStyling"  style=min-width:50px>Пригород Одинцово<br></td>
            
            
            
            
            
          </tr>
          <tr>
            <td class="tdStyling"  style=min-width:50px>Баковка ( Минское ш): 1 Мая, Буденовское ш, Лесная, Полевая, Нагорная, пер.Рыбалко, Сетуньский тупик, Луначарского, Трудовая, Хутор Одинцовский, ДПК Луч ( на минском ш), Мамоново ( на минском ш), ст. Пионерская ( после переезда), Никонорово, Лохино-ВИЛС, Новая Трехгорка: Кутузовская, Чистяковой (с д 40), Озерная 115 ( конфитюр), рублевский проезд.<br></td>
            <td class="tdStyling"  style=min-width:50px>300<br></td>
            <td class="tdStyling"  style=min-width:50px>700<br></td>
            <td class="tdStyling"  style=min-width:50px>900<br></td>
            <td class="tdStyling"  style=min-width:50px>1200<br></td>
            <td class="tdStyling"  style=min-width:50px>1500<br></td>
          </tr>
        </table> -->
         <div class="carsImagesPrice"> 
              <div class="carClassDesc">Класс авто</div>
              <div class="priceImages"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/toyota.jpg" alt=""></div>
              <div class="priceImages"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/vw.jpg" alt=""></div>
              <div class="priceImages"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/sclass.jpg" alt=""></div>
              <div class="priceImages"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/vclass.jpg" alt=""></div>
              <div class="priceImages"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/gclass.jpg" alt=""></div>
         </div>
        <table cellspacing=0 id="oblast">
              <tr>
                <td class="tdStyling"  style=min-width:50px>А<br></td>
                <td class="tdStyling"  style=min-width:50px>Из<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>В<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>Туда<br>и обратно</td>
                
                <td class="tdStyling"  style=min-width:50px>Из<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>В<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>Туда<br>и обратно</td>
                
                <td class="tdStyling"  style=min-width:50px>Из<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>В<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>Туда<br>и обратно</td>
                
                <td class="tdStyling"  style=min-width:50px>Из<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>В<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>Туда<br>и обратно</td>
                
                <td class="tdStyling"  style=min-width:50px>Из<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>В<br>Одинцово</td>
                <td class="tdStyling"  style=min-width:50px>Туда<br>и обратно</td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling firstWidth"  style=min-width:50px>Абабурово<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Акиньшино<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3135<br></td>
                <td class="tdStyling"  style=min-width:50px>4275<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4180<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>4750<br></td>
                <td class="tdStyling"  style=min-width:50px>5225<br></td>
                <td class="tdStyling"  style=min-width:50px>7125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Аксиньино<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Алабино<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Анино (Красногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Анино(Волоколамский)<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Аносино<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>3795<br></td>
                <td class="tdStyling"  style=min-width:50px>5175<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>5060<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>5750<br></td>
                <td class="tdStyling"  style=min-width:50px>6325<br></td>
                <td class="tdStyling"  style=min-width:50px>8625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Апрелевка<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Архангельское<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Астафьево(Волоколамский)<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6450<br></td>
                <td class="tdStyling"  style=min-width:50px>7100<br></td>
                <td class="tdStyling"  style=min-width:50px>9700<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>15840<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Астафьево(Можайский)<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7900<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>16000<br></td>
                <td class="tdStyling"  style=min-width:50px>17600<br></td>
                <td class="tdStyling"  style=min-width:50px>24000<br></td>
                <td class="tdStyling"  style=min-width:50px>20000<br></td>
                <td class="tdStyling"  style=min-width:50px>22000<br></td>
                <td class="tdStyling"  style=min-width:50px>30000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Б<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Балабаново<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>10560<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Балашиха(до поста ГАИ)<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Балашиха(после поста ГАИ)<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>4150<br></td>
                <td class="tdStyling"  style=min-width:50px>4550<br></td>
                <td class="tdStyling"  style=min-width:50px>6200<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>7590<br></td>
                <td class="tdStyling"  style=min-width:50px>10350<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10120<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>11500<br></td>
                <td class="tdStyling"  style=min-width:50px>12650<br></td>
                <td class="tdStyling"  style=min-width:50px>17250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бараново(Можайский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5300<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6950<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
                <td class="tdStyling"  style=min-width:50px>14000<br></td>
                <td class="tdStyling"  style=min-width:50px>15400<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
                <td class="tdStyling"  style=min-width:50px>17500<br></td>
                <td class="tdStyling"  style=min-width:50px>19250<br></td>
                <td class="tdStyling"  style=min-width:50px>26250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бараново(Рузский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>3550<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>6700<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7755<br></td>
                <td class="tdStyling"  style=min-width:50px>10575<br></td>
                <td class="tdStyling"  style=min-width:50px>9400<br></td>
                <td class="tdStyling"  style=min-width:50px>10340<br></td>
                <td class="tdStyling"  style=min-width:50px>14100<br></td>
                <td class="tdStyling"  style=min-width:50px>11750<br></td>
                <td class="tdStyling"  style=min-width:50px>12925<br></td>
                <td class="tdStyling"  style=min-width:50px>17625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бекасово<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Белая Дача<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Белозерово<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Битца<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Большое Покровское<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1560<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Борки<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Борки(Истринский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>6250<br></td>
                <td class="tdStyling"  style=min-width:50px>6875<br></td>
                <td class="tdStyling"  style=min-width:50px>9375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бородино(Мытищинский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4650<br></td>
                <td class="tdStyling"  style=min-width:50px>5115<br></td>
                <td class="tdStyling"  style=min-width:50px>6975<br></td>
                <td class="tdStyling"  style=min-width:50px>6200<br></td>
                <td class="tdStyling"  style=min-width:50px>6820<br></td>
                <td class="tdStyling"  style=min-width:50px>9300<br></td>
                <td class="tdStyling"  style=min-width:50px>7750<br></td>
                <td class="tdStyling"  style=min-width:50px>8525<br></td>
                <td class="tdStyling"  style=min-width:50px>11625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бородино (Можайский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бородино (Подольский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бородино(Дмитровский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бородки<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Брехово<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>6250<br></td>
                <td class="tdStyling"  style=min-width:50px>6875<br></td>
                <td class="tdStyling"  style=min-width:50px>9375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бронницы<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5150<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>9405<br></td>
                <td class="tdStyling"  style=min-width:50px>12825<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>12540<br></td>
                <td class="tdStyling"  style=min-width:50px>17100<br></td>
                <td class="tdStyling"  style=min-width:50px>14250<br></td>
                <td class="tdStyling"  style=min-width:50px>15675<br></td>
                <td class="tdStyling"  style=min-width:50px>21375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бузаево<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бурцево<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3135<br></td>
                <td class="tdStyling"  style=min-width:50px>4275<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4180<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>4750<br></td>
                <td class="tdStyling"  style=min-width:50px>5225<br></td>
                <td class="tdStyling"  style=min-width:50px>7125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бутово северное<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бутово южная<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бутынь<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Брехово(Крекшино)<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бирюлево (Восточное)<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Бирюлево(Западное)<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>п.Барвиха<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>д.Барвиха<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Барвиха(на Рублевке)<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>В<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Валуево<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ватутинки<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Введенское<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Велотрек(Крылаткое)<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Верея(Наро-Фоминский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4100<br></td>
                <td class="tdStyling"  style=min-width:50px>4850<br></td>
                <td class="tdStyling"  style=min-width:50px>5350<br></td>
                <td class="tdStyling"  style=min-width:50px>7275<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>8910<br></td>
                <td class="tdStyling"  style=min-width:50px>12150<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Верея(Раменский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6270<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8360<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>10450<br></td>
                <td class="tdStyling"  style=min-width:50px>14250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Верея (Орехово-Зуевский)<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>7550<br></td>
                <td class="tdStyling"  style=min-width:50px>8300<br></td>
                <td class="tdStyling"  style=min-width:50px>11300<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>13860<br></td>
                <td class="tdStyling"  style=min-width:50px>18900<br></td>
                <td class="tdStyling"  style=min-width:50px>16800<br></td>
                <td class="tdStyling"  style=min-width:50px>18480<br></td>
                <td class="tdStyling"  style=min-width:50px>25200<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
                <td class="tdStyling"  style=min-width:50px>23100<br></td>
                <td class="tdStyling"  style=min-width:50px>31500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Видное,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Вешняки<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2585<br></td>
                <td class="tdStyling"  style=min-width:50px>3550<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Вырубово<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Владимир,город<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>12900<br></td>
                <td class="tdStyling"  style=min-width:50px>17550<br></td>
                <td class="tdStyling"  style=min-width:50px>19500<br></td>
                <td class="tdStyling"  style=min-width:50px>21450<br></td>
                <td class="tdStyling"  style=min-width:50px>29250<br></td>
                <td class="tdStyling"  style=min-width:50px>26000<br></td>
                <td class="tdStyling"  style=min-width:50px>28600<br></td>
                <td class="tdStyling"  style=min-width:50px>39000<br></td>
                <td class="tdStyling"  style=min-width:50px>32500<br></td>
                <td class="tdStyling"  style=min-width:50px>35750<br></td>
                <td class="tdStyling"  style=min-width:50px>48750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Власово (Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>32100<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Власово(Раменский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Власово(Можайский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>9570<br></td>
                <td class="tdStyling"  style=min-width:50px>13050<br></td>
                <td class="tdStyling"  style=min-width:50px>11600<br></td>
                <td class="tdStyling"  style=min-width:50px>12760<br></td>
                <td class="tdStyling"  style=min-width:50px>17400<br></td>
                <td class="tdStyling"  style=min-width:50px>14500<br></td>
                <td class="tdStyling"  style=min-width:50px>15950<br></td>
                <td class="tdStyling"  style=min-width:50px>21750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Волоколамск,город<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3650<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Воронки(Красногорский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Воскресенск,город<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6850<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>10300<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>12540<br></td>
                <td class="tdStyling"  style=min-width:50px>17100<br></td>
                <td class="tdStyling"  style=min-width:50px>15200<br></td>
                <td class="tdStyling"  style=min-width:50px>16720<br></td>
                <td class="tdStyling"  style=min-width:50px>22800<br></td>
                <td class="tdStyling"  style=min-width:50px>19000<br></td>
                <td class="tdStyling"  style=min-width:50px>20900<br></td>
                <td class="tdStyling"  style=min-width:50px>28500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Воскресенское(Ногинский)<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>5050<br></td>
                <td class="tdStyling"  style=min-width:50px>5550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>11200<br></td>
                <td class="tdStyling"  style=min-width:50px>12320<br></td>
                <td class="tdStyling"  style=min-width:50px>16800<br></td>
                <td class="tdStyling"  style=min-width:50px>14000<br></td>
                <td class="tdStyling"  style=min-width:50px>15400<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Воскресенское(Ленинский)<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Воскресенское(Раменский)<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3550<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4700<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7755<br></td>
                <td class="tdStyling"  style=min-width:50px>10575<br></td>
                <td class="tdStyling"  style=min-width:50px>9400<br></td>
                <td class="tdStyling"  style=min-width:50px>10340<br></td>
                <td class="tdStyling"  style=min-width:50px>14100<br></td>
                <td class="tdStyling"  style=min-width:50px>11750<br></td>
                <td class="tdStyling"  style=min-width:50px>12925<br></td>
                <td class="tdStyling"  style=min-width:50px>17625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Восточный поселок(Москва)<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Востряково(Домодедово)<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Высоковск<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>15840<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Власиха(Лайково)<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>715<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Власиха( Перхушково)<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>715<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Вязёмы Большие<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Вязёмы Малые<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>ст.Внуково<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Г<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Гагарин город<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>7100<br></td>
                <td class="tdStyling"  style=min-width:50px>8650<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>13000<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>15840<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>19200<br></td>
                <td class="tdStyling"  style=min-width:50px>21120<br></td>
                <td class="tdStyling"  style=min-width:50px>28800<br></td>
                <td class="tdStyling"  style=min-width:50px>24000<br></td>
                <td class="tdStyling"  style=min-width:50px>26400<br></td>
                <td class="tdStyling"  style=min-width:50px>36000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Газопровод поселок<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Гарь-Покровское<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Гигирево(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Гигирево(Солнечногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>6525<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>10560<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Глаголево<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Глухово(Красногорский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Глухово(Рузский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>5900<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>9680<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>12100<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Голицыно(Керамика)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Голицыно(Минское ш.)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Голицыно(станция)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Гольяново<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4700<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки-2<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки-6<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки-8<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки-9<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки-10<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки-15<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горки Ленинские<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5445<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>9075<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Городок-17<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Горышкино<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Грибаново(Красногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Грибово<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Грязь(Звенигород)<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2325<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2805<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3740<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4675<br></td>
                <td class="tdStyling"  style=min-width:50px>6375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Д<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Давыдково(Наро-Фоминский)<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Давыдково(Клинский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>9570<br></td>
                <td class="tdStyling"  style=min-width:50px>13050<br></td>
                <td class="tdStyling"  style=min-width:50px>11600<br></td>
                <td class="tdStyling"  style=min-width:50px>12760<br></td>
                <td class="tdStyling"  style=min-width:50px>17400<br></td>
                <td class="tdStyling"  style=min-width:50px>14500<br></td>
                <td class="tdStyling"  style=min-width:50px>15950<br></td>
                <td class="tdStyling"  style=min-width:50px>21750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Давыдково(Истринский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4850<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7350<br></td>
                <td class="tdStyling"  style=min-width:50px>8085<br></td>
                <td class="tdStyling"  style=min-width:50px>11025<br></td>
                <td class="tdStyling"  style=min-width:50px>9800<br></td>
                <td class="tdStyling"  style=min-width:50px>10780<br></td>
                <td class="tdStyling"  style=min-width:50px>14700<br></td>
                <td class="tdStyling"  style=min-width:50px>12250<br></td>
                <td class="tdStyling"  style=min-width:50px>13475<br></td>
                <td class="tdStyling"  style=min-width:50px>18375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Давыдково(Дмитровский)<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6545<br></td>
                <td class="tdStyling"  style=min-width:50px>8950<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дарьино<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дачное<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дегунино<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>6250<br></td>
                <td class="tdStyling"  style=min-width:50px>6875<br></td>
                <td class="tdStyling"  style=min-width:50px>9375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дедовск,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дзержинский,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дмитров,город<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5050<br></td>
                <td class="tdStyling"  style=min-width:50px>5550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>11200<br></td>
                <td class="tdStyling"  style=min-width:50px>12320<br></td>
                <td class="tdStyling"  style=min-width:50px>16800<br></td>
                <td class="tdStyling"  style=min-width:50px>14000<br></td>
                <td class="tdStyling"  style=min-width:50px>15400<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дмитровское(Красногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Долгопрудный,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Домодедово,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дорохово<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>520<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6270<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8360<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>10450<br></td>
                <td class="tdStyling"  style=min-width:50px>14250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дубки(Кубинка)<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5445<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>9075<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дубна<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4850<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>12150<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
                <td class="tdStyling"  style=min-width:50px>33750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дудкино(Ленинский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дудкино(Солнечногорский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6930<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Дудкино(Наро-Фоминский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Е<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Егорьевск,город<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>12150<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
                <td class="tdStyling"  style=min-width:50px>33750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ершово<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ж<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жаворонки(Можайское ш.)<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жаворонки(Минское ш.)<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жедочи<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Железнодорожный,город<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4150<br></td>
                <td class="tdStyling"  style=min-width:50px>4565<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>7590<br></td>
                <td class="tdStyling"  style=min-width:50px>10350<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10120<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>11500<br></td>
                <td class="tdStyling"  style=min-width:50px>12650<br></td>
                <td class="tdStyling"  style=min-width:50px>17250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жуковка<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жуковка(корт)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жуковка-2<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жуковский,город<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>4150<br></td>
                <td class="tdStyling"  style=min-width:50px>4550<br></td>
                <td class="tdStyling"  style=min-width:50px>6200<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>7590<br></td>
                <td class="tdStyling"  style=min-width:50px>10350<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10120<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>11500<br></td>
                <td class="tdStyling"  style=min-width:50px>12650<br></td>
                <td class="tdStyling"  style=min-width:50px>17250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Жулебино<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>З<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Загорск(Сергиев-Посадю,Загорские)<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>6150<br></td>
                <td class="tdStyling"  style=min-width:50px>6800<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10200<br></td>
                <td class="tdStyling"  style=min-width:50px>11220<br></td>
                <td class="tdStyling"  style=min-width:50px>15300<br></td>
                <td class="tdStyling"  style=min-width:50px>13600<br></td>
                <td class="tdStyling"  style=min-width:50px>14960<br></td>
                <td class="tdStyling"  style=min-width:50px>20400<br></td>
                <td class="tdStyling"  style=min-width:50px>17000<br></td>
                <td class="tdStyling"  style=min-width:50px>18700<br></td>
                <td class="tdStyling"  style=min-width:50px>25500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Загорье(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Загорье(Солнечногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4850<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7350<br></td>
                <td class="tdStyling"  style=min-width:50px>8085<br></td>
                <td class="tdStyling"  style=min-width:50px>11025<br></td>
                <td class="tdStyling"  style=min-width:50px>9800<br></td>
                <td class="tdStyling"  style=min-width:50px>10780<br></td>
                <td class="tdStyling"  style=min-width:50px>14700<br></td>
                <td class="tdStyling"  style=min-width:50px>12250<br></td>
                <td class="tdStyling"  style=min-width:50px>13475<br></td>
                <td class="tdStyling"  style=min-width:50px>18375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Загорье(Истринский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4450<br></td>
                <td class="tdStyling"  style=min-width:50px>6100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
                <td class="tdStyling"  style=min-width:50px>16875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Здравница(Можайское ш)<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Здравница(Минское ш)<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Зайцево<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Заречье<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Захарково(Красногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Захарково(Чеховский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4700<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8580<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>10400<br></td>
                <td class="tdStyling"  style=min-width:50px>11440<br></td>
                <td class="tdStyling"  style=min-width:50px>15600<br></td>
                <td class="tdStyling"  style=min-width:50px>13000<br></td>
                <td class="tdStyling"  style=min-width:50px>14300<br></td>
                <td class="tdStyling"  style=min-width:50px>19500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Захарово(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Звенигород,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Зеленая Роща<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Зеленоград,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4650<br></td>
                <td class="tdStyling"  style=min-width:50px>5115<br></td>
                <td class="tdStyling"  style=min-width:50px>6975<br></td>
                <td class="tdStyling"  style=min-width:50px>6200<br></td>
                <td class="tdStyling"  style=min-width:50px>6820<br></td>
                <td class="tdStyling"  style=min-width:50px>9300<br></td>
                <td class="tdStyling"  style=min-width:50px>7750<br></td>
                <td class="tdStyling"  style=min-width:50px>8525<br></td>
                <td class="tdStyling"  style=min-width:50px>11625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Знаменское<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Зональный поселок<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>И<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ивановка(Звенигород)<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2805<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3740<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4675<br></td>
                <td class="tdStyling"  style=min-width:50px>6375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ивановское(Красногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ивановское(Истринский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2585<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ивантеевка<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3350<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>5025<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Иглово<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Изварьино<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Измалково<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Икша<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5800<br></td>
                <td class="tdStyling"  style=min-width:50px>6450<br></td>
                <td class="tdStyling"  style=min-width:50px>7095<br></td>
                <td class="tdStyling"  style=min-width:50px>9675<br></td>
                <td class="tdStyling"  style=min-width:50px>8600<br></td>
                <td class="tdStyling"  style=min-width:50px>9460<br></td>
                <td class="tdStyling"  style=min-width:50px>12900<br></td>
                <td class="tdStyling"  style=min-width:50px>10750<br></td>
                <td class="tdStyling"  style=min-width:50px>11825<br></td>
                <td class="tdStyling"  style=min-width:50px>16125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ильинское<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Иславское<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Истра,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5445<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>9075<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Истра,поселок(Красногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>К<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Калининец<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Калуга,город<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>5450<br></td>
                <td class="tdStyling"  style=min-width:50px>7650<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10150<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>15300<br></td>
                <td class="tdStyling"  style=min-width:50px>16830<br></td>
                <td class="tdStyling"  style=min-width:50px>22950<br></td>
                <td class="tdStyling"  style=min-width:50px>20400<br></td>
                <td class="tdStyling"  style=min-width:50px>22440<br></td>
                <td class="tdStyling"  style=min-width:50px>30600<br></td>
                <td class="tdStyling"  style=min-width:50px>25500<br></td>
                <td class="tdStyling"  style=min-width:50px>28050<br></td>
                <td class="tdStyling"  style=min-width:50px>38250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Капань<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3350<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>5050<br></td>
                <td class="tdStyling"  style=min-width:50px>5550<br></td>
                <td class="tdStyling"  style=min-width:50px>6105<br></td>
                <td class="tdStyling"  style=min-width:50px>8325<br></td>
                <td class="tdStyling"  style=min-width:50px>7400<br></td>
                <td class="tdStyling"  style=min-width:50px>8140<br></td>
                <td class="tdStyling"  style=min-width:50px>11100<br></td>
                <td class="tdStyling"  style=min-width:50px>9250<br></td>
                <td class="tdStyling"  style=min-width:50px>10175<br></td>
                <td class="tdStyling"  style=min-width:50px>13875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Капотня<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Каринское<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4785<br></td>
                <td class="tdStyling"  style=min-width:50px>6525<br></td>
                <td class="tdStyling"  style=min-width:50px>5800<br></td>
                <td class="tdStyling"  style=min-width:50px>6380<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>7250<br></td>
                <td class="tdStyling"  style=min-width:50px>7975<br></td>
                <td class="tdStyling"  style=min-width:50px>10875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Картамазово<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3135<br></td>
                <td class="tdStyling"  style=min-width:50px>4275<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4180<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>4750<br></td>
                <td class="tdStyling"  style=min-width:50px>5225<br></td>
                <td class="tdStyling"  style=min-width:50px>7125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кашира<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>12150<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
                <td class="tdStyling"  style=min-width:50px>33750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Киевский поселок<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4785<br></td>
                <td class="tdStyling"  style=min-width:50px>6525<br></td>
                <td class="tdStyling"  style=min-width:50px>5800<br></td>
                <td class="tdStyling"  style=min-width:50px>6380<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>7250<br></td>
                <td class="tdStyling"  style=min-width:50px>7975<br></td>
                <td class="tdStyling"  style=min-width:50px>10875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кимры<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>7650<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10100<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>15300<br></td>
                <td class="tdStyling"  style=min-width:50px>16830<br></td>
                <td class="tdStyling"  style=min-width:50px>22950<br></td>
                <td class="tdStyling"  style=min-width:50px>20400<br></td>
                <td class="tdStyling"  style=min-width:50px>22440<br></td>
                <td class="tdStyling"  style=min-width:50px>30600<br></td>
                <td class="tdStyling"  style=min-width:50px>25500<br></td>
                <td class="tdStyling"  style=min-width:50px>28050<br></td>
                <td class="tdStyling"  style=min-width:50px>38250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Киржач<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7900<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>16000<br></td>
                <td class="tdStyling"  style=min-width:50px>17600<br></td>
                <td class="tdStyling"  style=min-width:50px>24000<br></td>
                <td class="tdStyling"  style=min-width:50px>20000<br></td>
                <td class="tdStyling"  style=min-width:50px>22000<br></td>
                <td class="tdStyling"  style=min-width:50px>30000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Климовск,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Клин<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кобяково(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кобяково(Наро-Фоминский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3650<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Козино(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Козино(Красногорский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кокошкино<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Коломна,город<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>7550<br></td>
                <td class="tdStyling"  style=min-width:50px>8300<br></td>
                <td class="tdStyling"  style=min-width:50px>11300<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>13860<br></td>
                <td class="tdStyling"  style=min-width:50px>18900<br></td>
                <td class="tdStyling"  style=min-width:50px>16800<br></td>
                <td class="tdStyling"  style=min-width:50px>18480<br></td>
                <td class="tdStyling"  style=min-width:50px>25200<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
                <td class="tdStyling"  style=min-width:50px>23100<br></td>
                <td class="tdStyling"  style=min-width:50px>31500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Калчуга<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Колюбакино<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Комунарка<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2805<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3740<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4675<br></td>
                <td class="tdStyling"  style=min-width:50px>6375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Коптево<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Королев,город<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>5550<br></td>
                <td class="tdStyling"  style=min-width:50px>6105<br></td>
                <td class="tdStyling"  style=min-width:50px>8325<br></td>
                <td class="tdStyling"  style=min-width:50px>7400<br></td>
                <td class="tdStyling"  style=min-width:50px>8140<br></td>
                <td class="tdStyling"  style=min-width:50px>11100<br></td>
                <td class="tdStyling"  style=min-width:50px>9250<br></td>
                <td class="tdStyling"  style=min-width:50px>10175<br></td>
                <td class="tdStyling"  style=min-width:50px>13875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Косино<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Красково<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Красная Пахра<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Красногорск<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2805<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3740<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4675<br></td>
                <td class="tdStyling"  style=min-width:50px>6375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Краснознаменск<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Крекшино<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Крюково<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>825<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Крюково(Зеленоград)<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кубинка<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кубинка(Новый Городок)<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кубинка(Старый Городок)<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кубинка санаторий им.Герцена<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Кунцево(тех.центр)<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Купавна Новая<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2950<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>6435<br></td>
                <td class="tdStyling"  style=min-width:50px>8775<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8580<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
                <td class="tdStyling"  style=min-width:50px>10725<br></td>
                <td class="tdStyling"  style=min-width:50px>14625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Купавна Старая<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6930<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Куркино<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Л<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лапино<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лапино Учитель<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лапино-Град<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лапино СНТ<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лапшинка<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ларюшино<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лесной Городок станция<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лесной Городок <br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>975<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лесные Дали<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лесные Просторы(Успенка)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Летний Отдых<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лефортово<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лешково<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лианозово<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ликино<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ликова<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Липки<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лихоборы<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лобня<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5445<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>9075<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Локотня<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лотошино<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>7550<br></td>
                <td class="tdStyling"  style=min-width:50px>8305<br></td>
                <td class="tdStyling"  style=min-width:50px>11300<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>13860<br></td>
                <td class="tdStyling"  style=min-width:50px>18900<br></td>
                <td class="tdStyling"  style=min-width:50px>16800<br></td>
                <td class="tdStyling"  style=min-width:50px>18480<br></td>
                <td class="tdStyling"  style=min-width:50px>25200<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
                <td class="tdStyling"  style=min-width:50px>23100<br></td>
                <td class="tdStyling"  style=min-width:50px>31500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лызлово<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лыткарино<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>3050<br></td>
                <td class="tdStyling"  style=min-width:50px>3350<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>5610<br></td>
                <td class="tdStyling"  style=min-width:50px>7650<br></td>
                <td class="tdStyling"  style=min-width:50px>6800<br></td>
                <td class="tdStyling"  style=min-width:50px>7480<br></td>
                <td class="tdStyling"  style=min-width:50px>10200<br></td>
                <td class="tdStyling"  style=min-width:50px>8500<br></td>
                <td class="tdStyling"  style=min-width:50px>9350<br></td>
                <td class="tdStyling"  style=min-width:50px>12750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Люберцы<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4785<br></td>
                <td class="tdStyling"  style=min-width:50px>6525<br></td>
                <td class="tdStyling"  style=min-width:50px>5800<br></td>
                <td class="tdStyling"  style=min-width:50px>6380<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>7250<br></td>
                <td class="tdStyling"  style=min-width:50px>7975<br></td>
                <td class="tdStyling"  style=min-width:50px>10875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лайково<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Лайково( кладбище)<br></td>
                <td class="tdStyling"  style=min-width:50px>250<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>825<br></td>
                <td class="tdStyling"  style=min-width:50px>1125<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1375<br></td>
                <td class="tdStyling"  style=min-width:50px>1875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>М<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Малаховка<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Малоярославец<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Малышево<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4850<br></td>
                <td class="tdStyling"  style=min-width:50px>5350<br></td>
                <td class="tdStyling"  style=min-width:50px>7300<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>8910<br></td>
                <td class="tdStyling"  style=min-width:50px>12150<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Мамыри<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Мартьяново<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Марушкино<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Марфино(Дмитровка)<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Марфино(Ашан)<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Марфино поселок<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Маслово(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1875<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Маслово(Солнечногорский)<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4150<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>62560<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>7590<br></td>
                <td class="tdStyling"  style=min-width:50px>10350<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10120<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>11500<br></td>
                <td class="tdStyling"  style=min-width:50px>12650<br></td>
                <td class="tdStyling"  style=min-width:50px>17250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Маслово(Каширский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10150<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>15300<br></td>
                <td class="tdStyling"  style=min-width:50px>16830<br></td>
                <td class="tdStyling"  style=min-width:50px>22950<br></td>
                <td class="tdStyling"  style=min-width:50px>20400<br></td>
                <td class="tdStyling"  style=min-width:50px>22440<br></td>
                <td class="tdStyling"  style=min-width:50px>30600<br></td>
                <td class="tdStyling"  style=min-width:50px>25500<br></td>
                <td class="tdStyling"  style=min-width:50px>28050<br></td>
                <td class="tdStyling"  style=min-width:50px>38250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Матвейково(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Матвейково(Дмитровский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>2950<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5300<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7950<br></td>
                <td class="tdStyling"  style=min-width:50px>8745<br></td>
                <td class="tdStyling"  style=min-width:50px>11925<br></td>
                <td class="tdStyling"  style=min-width:50px>10600<br></td>
                <td class="tdStyling"  style=min-width:50px>11660<br></td>
                <td class="tdStyling"  style=min-width:50px>15900<br></td>
                <td class="tdStyling"  style=min-width:50px>13250<br></td>
                <td class="tdStyling"  style=min-width:50px>14575<br></td>
                <td class="tdStyling"  style=min-width:50px>19875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Матвейково(Истринский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4450<br></td>
                <td class="tdStyling"  style=min-width:50px>6100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
                <td class="tdStyling"  style=min-width:50px>16875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Матвеевское<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Матвеевское(Подольский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2950<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>6435<br></td>
                <td class="tdStyling"  style=min-width:50px>8775<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8580<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
                <td class="tdStyling"  style=min-width:50px>10725<br></td>
                <td class="tdStyling"  style=min-width:50px>14625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Минск(кинотеатр)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Митино<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Митькино<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Митькино(Дмитровский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Михайловское(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>3050<br></td>
                <td class="tdStyling"  style=min-width:50px>34000<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>5610<br></td>
                <td class="tdStyling"  style=min-width:50px>7650<br></td>
                <td class="tdStyling"  style=min-width:50px>6800<br></td>
                <td class="tdStyling"  style=min-width:50px>7480<br></td>
                <td class="tdStyling"  style=min-width:50px>10200<br></td>
                <td class="tdStyling"  style=min-width:50px>8500<br></td>
                <td class="tdStyling"  style=min-width:50px>9350<br></td>
                <td class="tdStyling"  style=min-width:50px>12750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Михайловское(Подольский)<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Михайловское(Рузский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5750<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>9570<br></td>
                <td class="tdStyling"  style=min-width:50px>13050<br></td>
                <td class="tdStyling"  style=min-width:50px>11600<br></td>
                <td class="tdStyling"  style=min-width:50px>12760<br></td>
                <td class="tdStyling"  style=min-width:50px>17400<br></td>
                <td class="tdStyling"  style=min-width:50px>14500<br></td>
                <td class="tdStyling"  style=min-width:50px>15950<br></td>
                <td class="tdStyling"  style=min-width:50px>21750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Мичуринский проспект<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Можайск<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4700<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8580<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>10400<br></td>
                <td class="tdStyling"  style=min-width:50px>11440<br></td>
                <td class="tdStyling"  style=min-width:50px>15600<br></td>
                <td class="tdStyling"  style=min-width:50px>13000<br></td>
                <td class="tdStyling"  style=min-width:50px>14300<br></td>
                <td class="tdStyling"  style=min-width:50px>19500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Молоденово<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Монино<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>9680<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>12100<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Московский поселок<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Мострентген<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2805<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3740<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4675<br></td>
                <td class="tdStyling"  style=min-width:50px>6375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Мотель Можайский<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Мытищи<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Н<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Назарьево<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Наро-Осаново<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Наро-Фоминск<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4900<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7920<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Нахабино<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Немчиновка через Техцентр<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Немчиново<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Николина Гора<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Никонорово<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Николино(2-Успенка)<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Николино Поле<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Николо-Урюпино<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Никольское(Дмитровский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6930<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Никольское(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Никольское(Солнечногорск)<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3350<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>5050<br></td>
                <td class="tdStyling"  style=min-width:50px>5550<br></td>
                <td class="tdStyling"  style=min-width:50px>6105<br></td>
                <td class="tdStyling"  style=min-width:50px>8325<br></td>
                <td class="tdStyling"  style=min-width:50px>7400<br></td>
                <td class="tdStyling"  style=min-width:50px>8140<br></td>
                <td class="tdStyling"  style=min-width:50px>11100<br></td>
                <td class="tdStyling"  style=min-width:50px>9250<br></td>
                <td class="tdStyling"  style=min-width:50px>10175<br></td>
                <td class="tdStyling"  style=min-width:50px>13875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Никольское(Истринский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6270<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8360<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>10450<br></td>
                <td class="tdStyling"  style=min-width:50px>14250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Новогорск<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Новое Гришино(Дмитровский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>12500<br></td>
                <td class="tdStyling"  style=min-width:50px>13750<br></td>
                <td class="tdStyling"  style=min-width:50px>18750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ново-Дарьино<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Новокосино<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Новоивановское <br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1125<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ново-Переделкино<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Новошихово 40км<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2365<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ногинск<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4850<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>7300<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>8910<br></td>
                <td class="tdStyling"  style=min-width:50px>12150<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>О<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Обнинск<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4150<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5450<br></td>
                <td class="tdStyling"  style=min-width:50px>7400<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>9075<br></td>
                <td class="tdStyling"  style=min-width:50px>12375<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>12100<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>13750<br></td>
                <td class="tdStyling"  style=min-width:50px>15125<br></td>
                <td class="tdStyling"  style=min-width:50px>20625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Огарево<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Опалиха<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2090<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3465<br></td>
                <td class="tdStyling"  style=min-width:50px>4725<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>5775<br></td>
                <td class="tdStyling"  style=min-width:50px>7875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Орехово-Борисово<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Орехово-Зуево<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7900<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>16000<br></td>
                <td class="tdStyling"  style=min-width:50px>17600<br></td>
                <td class="tdStyling"  style=min-width:50px>24000<br></td>
                <td class="tdStyling"  style=min-width:50px>20000<br></td>
                <td class="tdStyling"  style=min-width:50px>22000<br></td>
                <td class="tdStyling"  style=min-width:50px>30000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Осоргино<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Остафьево<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Очаково<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>П<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Павловская Слобода<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Павловский Посад<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
                <td class="tdStyling"  style=min-width:50px>14000<br></td>
                <td class="tdStyling"  style=min-width:50px>15400<br></td>
                <td class="tdStyling"  style=min-width:50px>21000<br></td>
                <td class="tdStyling"  style=min-width:50px>17500<br></td>
                <td class="tdStyling"  style=min-width:50px>19250<br></td>
                <td class="tdStyling"  style=min-width:50px>26250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Павшино(Красногорский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Палицы ( Одинцовский р-он)<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2805<br></td>
                <td class="tdStyling"  style=min-width:50px>3825<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3740<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4675<br></td>
                <td class="tdStyling"  style=min-width:50px>6375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Первомайское(Наро-Фоминский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Переделки<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ново- Переделкино<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Переделкино(станция)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Переславль Залесский,город<br></td>
                <td class="tdStyling"  style=min-width:50px>5100<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10150<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>15300<br></td>
                <td class="tdStyling"  style=min-width:50px>16830<br></td>
                <td class="tdStyling"  style=min-width:50px>22950<br></td>
                <td class="tdStyling"  style=min-width:50px>20400<br></td>
                <td class="tdStyling"  style=min-width:50px>22440<br></td>
                <td class="tdStyling"  style=min-width:50px>30600<br></td>
                <td class="tdStyling"  style=min-width:50px>25500<br></td>
                <td class="tdStyling"  style=min-width:50px>28050<br></td>
                <td class="tdStyling"  style=min-width:50px>38250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Перово<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>ст. Перхушково ( до переезда)<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>ст. Перхушково ( после переезда)<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>д.Перхушково<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Перхушково больница<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Перхушково реабилитационный центр<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Пестово<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>200<br></td>
                <td class="tdStyling"  style=min-width:50px>250<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Пестово(Мытищинский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>9680<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>12100<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Петелино<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Петрово-Дальнее<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Подлипки<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Подольск<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Подушкино<br></td>
                <td class="tdStyling"  style=min-width:50px>250<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>825<br></td>
                <td class="tdStyling"  style=min-width:50px>1125<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1375<br></td>
                <td class="tdStyling"  style=min-width:50px>1875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Поздняково(Красногорский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Поздняково(Дмитровский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3650<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8950<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Поздняково(Можайский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3650<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8950<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Покровское<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Полушкино(Одинцовский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Полушкино(Раменский р-н)<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3550<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7755<br></td>
                <td class="tdStyling"  style=min-width:50px>10575<br></td>
                <td class="tdStyling"  style=min-width:50px>9400<br></td>
                <td class="tdStyling"  style=min-width:50px>10340<br></td>
                <td class="tdStyling"  style=min-width:50px>14100<br></td>
                <td class="tdStyling"  style=min-width:50px>11750<br></td>
                <td class="tdStyling"  style=min-width:50px>12925<br></td>
                <td class="tdStyling"  style=min-width:50px>17625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Поречье(под Тучково)<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3350<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>5050<br></td>
                <td class="tdStyling"  style=min-width:50px>5550<br></td>
                <td class="tdStyling"  style=min-width:50px>6105<br></td>
                <td class="tdStyling"  style=min-width:50px>8325<br></td>
                <td class="tdStyling"  style=min-width:50px>7400<br></td>
                <td class="tdStyling"  style=min-width:50px>8140<br></td>
                <td class="tdStyling"  style=min-width:50px>11100<br></td>
                <td class="tdStyling"  style=min-width:50px>9250<br></td>
                <td class="tdStyling"  style=min-width:50px>10175<br></td>
                <td class="tdStyling"  style=min-width:50px>13875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Постниково<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Путилково<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Пушкино<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6930<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Пущино(Серпухов)<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4300<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>12870<br></td>
                <td class="tdStyling"  style=min-width:50px>17550<br></td>
                <td class="tdStyling"  style=min-width:50px>15600<br></td>
                <td class="tdStyling"  style=min-width:50px>17160<br></td>
                <td class="tdStyling"  style=min-width:50px>23400<br></td>
                <td class="tdStyling"  style=min-width:50px>19500<br></td>
                <td class="tdStyling"  style=min-width:50px>21450<br></td>
                <td class="tdStyling"  style=min-width:50px>29250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Пыхтино<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Р<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Рабочий поселок <br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Раздоры<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ракитки(поселок)<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Раменское<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>4150<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>6225<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>7590<br></td>
                <td class="tdStyling"  style=min-width:50px>10350<br></td>
                <td class="tdStyling"  style=min-width:50px>9200<br></td>
                <td class="tdStyling"  style=min-width:50px>10120<br></td>
                <td class="tdStyling"  style=min-width:50px>13800<br></td>
                <td class="tdStyling"  style=min-width:50px>11500<br></td>
                <td class="tdStyling"  style=min-width:50px>12650<br></td>
                <td class="tdStyling"  style=min-width:50px>17250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Рассказовка<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Рассудово<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>3225<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Реабилитац.Уентр Рублево<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Реутов<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1850<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Рождественно<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ростов Великий,город<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7900<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>13000<br></td>
                <td class="tdStyling"  style=min-width:50px>14300<br></td>
                <td class="tdStyling"  style=min-width:50px>19500<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>23760<br></td>
                <td class="tdStyling"  style=min-width:50px>32400<br></td>
                <td class="tdStyling"  style=min-width:50px>28800<br></td>
                <td class="tdStyling"  style=min-width:50px>31680<br></td>
                <td class="tdStyling"  style=min-width:50px>43200<br></td>
                <td class="tdStyling"  style=min-width:50px>36000<br></td>
                <td class="tdStyling"  style=min-width:50px>39600<br></td>
                <td class="tdStyling"  style=min-width:50px>54000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ромашково<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>ст. Ромашково<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Рублево<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Руза<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>5050<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>7650<br></td>
                <td class="tdStyling"  style=min-width:50px>8415<br></td>
                <td class="tdStyling"  style=min-width:50px>11475<br></td>
                <td class="tdStyling"  style=min-width:50px>10200<br></td>
                <td class="tdStyling"  style=min-width:50px>11220<br></td>
                <td class="tdStyling"  style=min-width:50px>15300<br></td>
                <td class="tdStyling"  style=min-width:50px>12750<br></td>
                <td class="tdStyling"  style=min-width:50px>14025<br></td>
                <td class="tdStyling"  style=min-width:50px>19125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Румянцево<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1375<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2310<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>3850<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Рюмочки(МВТ)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>ЖК Рублевский<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                
                
                
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>С<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Саввинская Слобода<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>3225<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сареево Большое<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сареево Малое<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сельская Новь<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Селятино<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3465<br></td>
                <td class="tdStyling"  style=min-width:50px>4725<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>5775<br></td>
                <td class="tdStyling"  style=min-width:50px>7875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Семенково (Одинцовский район)<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сергеев Посад<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8900<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Серпухов<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>15840<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сетунь<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Синьково (Одинцовский район)<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сколково<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>сколково ( инновационный центр на можайском ш)<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Скоротово<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Снегири<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Совхоз Ульяновский<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Солманово поле<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Солнечногорск<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>4300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>12500<br></td>
                <td class="tdStyling"  style=min-width:50px>13750<br></td>
                <td class="tdStyling"  style=min-width:50px>18750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Солнцево<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Солослово<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>880<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1485<br></td>
                <td class="tdStyling"  style=min-width:50px>2025<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сосны<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сосенки<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сосновый Бор (Видное)<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2150<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Столбовая (Чехов)<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>7260<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>9680<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>12100<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Стольное (Переделки)<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>825<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ступино<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6450<br></td>
                <td class="tdStyling"  style=min-width:50px>7100<br></td>
                <td class="tdStyling"  style=min-width:50px>9700<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>15840<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Супонево<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сушкинская<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Сходня<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Т<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Таганьково<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Тарасовка<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>4725<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>5775<br></td>
                <td class="tdStyling"  style=min-width:50px>7875<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>8750<br></td>
                <td class="tdStyling"  style=min-width:50px>9625<br></td>
                <td class="tdStyling"  style=min-width:50px>13125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Татарки<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1700<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3135<br></td>
                <td class="tdStyling"  style=min-width:50px>4275<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4180<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>4750<br></td>
                <td class="tdStyling"  style=min-width:50px>5225<br></td>
                <td class="tdStyling"  style=min-width:50px>7125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Тверь<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>9700<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>14550<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>17820<br></td>
                <td class="tdStyling"  style=min-width:50px>24300<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>23760<br></td>
                <td class="tdStyling"  style=min-width:50px>32400<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
                <td class="tdStyling"  style=min-width:50px>29700<br></td>
                <td class="tdStyling"  style=min-width:50px>40500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Толстопальцево<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1210<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Томилино<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4650<br></td>
                <td class="tdStyling"  style=min-width:50px>5115<br></td>
                <td class="tdStyling"  style=min-width:50px>6975<br></td>
                <td class="tdStyling"  style=min-width:50px>6200<br></td>
                <td class="tdStyling"  style=min-width:50px>6820<br></td>
                <td class="tdStyling"  style=min-width:50px>9300<br></td>
                <td class="tdStyling"  style=min-width:50px>7750<br></td>
                <td class="tdStyling"  style=min-width:50px>8525<br></td>
                <td class="tdStyling"  style=min-width:50px>11625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Торжок<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>13500<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>20250<br></td>
                <td class="tdStyling"  style=min-width:50px>22500<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
                <td class="tdStyling"  style=min-width:50px>33750<br></td>
                <td class="tdStyling"  style=min-width:50px>30000<br></td>
                <td class="tdStyling"  style=min-width:50px>33000<br></td>
                <td class="tdStyling"  style=min-width:50px>45000<br></td>
                <td class="tdStyling"  style=min-width:50px>37500<br></td>
                <td class="tdStyling"  style=min-width:50px>41250<br></td>
                <td class="tdStyling"  style=min-width:50px>56250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Троицк<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2695<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Троицкое (Звенигород)<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2800<br></td>
                <td class="tdStyling"  style=min-width:50px>3080<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4650<br></td>
                <td class="tdStyling"  style=min-width:50px>5115<br></td>
                <td class="tdStyling"  style=min-width:50px>6975<br></td>
                <td class="tdStyling"  style=min-width:50px>6200<br></td>
                <td class="tdStyling"  style=min-width:50px>6820<br></td>
                <td class="tdStyling"  style=min-width:50px>9300<br></td>
                <td class="tdStyling"  style=min-width:50px>7750<br></td>
                <td class="tdStyling"  style=min-width:50px>8525<br></td>
                <td class="tdStyling"  style=min-width:50px>11625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Трубачеевка<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>8500<br></td>
                <td class="tdStyling"  style=min-width:50px>1125<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Тула<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6350<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>10300<br></td>
                <td class="tdStyling"  style=min-width:50px>11330<br></td>
                <td class="tdStyling"  style=min-width:50px>15450<br></td>
                <td class="tdStyling"  style=min-width:50px>17100<br></td>
                <td class="tdStyling"  style=min-width:50px>18810<br></td>
                <td class="tdStyling"  style=min-width:50px>25650<br></td>
                <td class="tdStyling"  style=min-width:50px>22800<br></td>
                <td class="tdStyling"  style=min-width:50px>25080<br></td>
                <td class="tdStyling"  style=min-width:50px>34200<br></td>
                <td class="tdStyling"  style=min-width:50px>28500<br></td>
                <td class="tdStyling"  style=min-width:50px>31350<br></td>
                <td class="tdStyling"  style=min-width:50px>42750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Тучково<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2550<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3500<br></td>
                <td class="tdStyling"  style=min-width:50px>4750<br></td>
                <td class="tdStyling"  style=min-width:50px>5250<br></td>
                <td class="tdStyling"  style=min-width:50px>5775<br></td>
                <td class="tdStyling"  style=min-width:50px>7875<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>8750<br></td>
                <td class="tdStyling"  style=min-width:50px>9625<br></td>
                <td class="tdStyling"  style=min-width:50px>13125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Техгорка 5<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                
                
                
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>У<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Уборы<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>3375<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Уваровка<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3950<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
                <td class="tdStyling"  style=min-width:50px>10800<br></td>
                <td class="tdStyling"  style=min-width:50px>11880<br></td>
                <td class="tdStyling"  style=min-width:50px>16200<br></td>
                <td class="tdStyling"  style=min-width:50px>14400<br></td>
                <td class="tdStyling"  style=min-width:50px>15840<br></td>
                <td class="tdStyling"  style=min-width:50px>21600<br></td>
                <td class="tdStyling"  style=min-width:50px>18000<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>27000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Усово<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Усово-Тупик<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>450<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1125<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1760<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Успенское Дача№2<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Успенское село<br></td>
                <td class="tdStyling"  style=min-width:50px>550<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>850<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>1815<br></td>
                <td class="tdStyling"  style=min-width:50px>2475<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2420<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3025<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ф<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Филимонки<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Фирсановка<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6400<br></td>
                <td class="tdStyling"  style=min-width:50px>7040<br></td>
                <td class="tdStyling"  style=min-width:50px>9600<br></td>
                <td class="tdStyling"  style=min-width:50px>8000<br></td>
                <td class="tdStyling"  style=min-width:50px>8800<br></td>
                <td class="tdStyling"  style=min-width:50px>12000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Фрязино<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>6930<br></td>
                <td class="tdStyling"  style=min-width:50px>9450<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>9240<br></td>
                <td class="tdStyling"  style=min-width:50px>12600<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
                <td class="tdStyling"  style=min-width:50px>11550<br></td>
                <td class="tdStyling"  style=min-width:50px>15750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Фуньково<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3550<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4290<br></td>
                <td class="tdStyling"  style=min-width:50px>5850<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5720<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>6500<br></td>
                <td class="tdStyling"  style=min-width:50px>7150<br></td>
                <td class="tdStyling"  style=min-width:50px>9750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Х<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Химки<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Химки Старые<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1980<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Хлюпино<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2640<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3200<br></td>
                <td class="tdStyling"  style=min-width:50px>3520<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ховрино<br></td>
                <td class="tdStyling"  style=min-width:50px>1100<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3630<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>4400<br></td>
                <td class="tdStyling"  style=min-width:50px>4840<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>6050<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ч<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Челобитьево<br></td>
                <td class="tdStyling"  style=min-width:50px>1450<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2900<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4350<br></td>
                <td class="tdStyling"  style=min-width:50px>4785<br></td>
                <td class="tdStyling"  style=min-width:50px>6525<br></td>
                <td class="tdStyling"  style=min-width:50px>5800<br></td>
                <td class="tdStyling"  style=min-width:50px>6380<br></td>
                <td class="tdStyling"  style=min-width:50px>8700<br></td>
                <td class="tdStyling"  style=min-width:50px>7250<br></td>
                <td class="tdStyling"  style=min-width:50px>7975<br></td>
                <td class="tdStyling"  style=min-width:50px>10875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Чапаевка<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Часцы<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Черная Грязь<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>2050<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3700<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4455<br></td>
                <td class="tdStyling"  style=min-width:50px>6075<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>5940<br></td>
                <td class="tdStyling"  style=min-width:50px>8100<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7425<br></td>
                <td class="tdStyling"  style=min-width:50px>10125<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Чехов<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>12500<br></td>
                <td class="tdStyling"  style=min-width:50px>13750<br></td>
                <td class="tdStyling"  style=min-width:50px>18750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Чигасово<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1600<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2400<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>2970<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Чупряково<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1550<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4200<br></td>
                <td class="tdStyling"  style=min-width:50px>4620<br></td>
                <td class="tdStyling"  style=min-width:50px>6300<br></td>
                <td class="tdStyling"  style=min-width:50px>5600<br></td>
                <td class="tdStyling"  style=min-width:50px>6160<br></td>
                <td class="tdStyling"  style=min-width:50px>8400<br></td>
                <td class="tdStyling"  style=min-width:50px>7000<br></td>
                <td class="tdStyling"  style=min-width:50px>7700<br></td>
                <td class="tdStyling"  style=min-width:50px>10500<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ш<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Шараповка<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>950<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1300<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1950<br></td>
                <td class="tdStyling"  style=min-width:50px>2145<br></td>
                <td class="tdStyling"  style=min-width:50px>2925<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2860<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>3250<br></td>
                <td class="tdStyling"  style=min-width:50px>3575<br></td>
                <td class="tdStyling"  style=min-width:50px>4875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Шарапово (Чеховский район)<br></td>
                <td class="tdStyling"  style=min-width:50px>2350<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>3550<br></td>
                <td class="tdStyling"  style=min-width:50px>4250<br></td>
                <td class="tdStyling"  style=min-width:50px>4700<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7755<br></td>
                <td class="tdStyling"  style=min-width:50px>10575<br></td>
                <td class="tdStyling"  style=min-width:50px>9400<br></td>
                <td class="tdStyling"  style=min-width:50px>10340<br></td>
                <td class="tdStyling"  style=min-width:50px>14100<br></td>
                <td class="tdStyling"  style=min-width:50px>11750<br></td>
                <td class="tdStyling"  style=min-width:50px>12925<br></td>
                <td class="tdStyling"  style=min-width:50px>17625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Шарапово (Одинцовский район)<br></td>
                <td class="tdStyling"  style=min-width:50px>1250<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>3400<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4125<br></td>
                <td class="tdStyling"  style=min-width:50px>5625<br></td>
                <td class="tdStyling"  style=min-width:50px>5000<br></td>
                <td class="tdStyling"  style=min-width:50px>5500<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>6250<br></td>
                <td class="tdStyling"  style=min-width:50px>6875<br></td>
                <td class="tdStyling"  style=min-width:50px>9375<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Шихово<br></td>
                <td class="tdStyling"  style=min-width:50px>1150<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>3150<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>3795<br></td>
                <td class="tdStyling"  style=min-width:50px>5175<br></td>
                <td class="tdStyling"  style=min-width:50px>4600<br></td>
                <td class="tdStyling"  style=min-width:50px>5060<br></td>
                <td class="tdStyling"  style=min-width:50px>6900<br></td>
                <td class="tdStyling"  style=min-width:50px>5750<br></td>
                <td class="tdStyling"  style=min-width:50px>6325<br></td>
                <td class="tdStyling"  style=min-width:50px>8625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Шишкин Лес<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2700<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>4050<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Шульгино (Одинцовский район)<br></td>
                <td class="tdStyling"  style=min-width:50px>350<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>650<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1050<br></td>
                <td class="tdStyling"  style=min-width:50px>1155<br></td>
                <td class="tdStyling"  style=min-width:50px>1575<br></td>
                <td class="tdStyling"  style=min-width:50px>1400<br></td>
                <td class="tdStyling"  style=min-width:50px>1540<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>1750<br></td>
                <td class="tdStyling"  style=min-width:50px>1925<br></td>
                <td class="tdStyling"  style=min-width:50px>2625<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Щ<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Щедрино<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>800<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Щелково<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2300<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6270<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8360<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>10450<br></td>
                <td class="tdStyling"  style=min-width:50px>14250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Щербинка<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>2450<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3600<br></td>
                <td class="tdStyling"  style=min-width:50px>3960<br></td>
                <td class="tdStyling"  style=min-width:50px>5400<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5280<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>6000<br></td>
                <td class="tdStyling"  style=min-width:50px>6600<br></td>
                <td class="tdStyling"  style=min-width:50px>9000<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Э<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Электрогорск<br></td>
                <td class="tdStyling"  style=min-width:50px>3300<br></td>
                <td class="tdStyling"  style=min-width:50px>3650<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>5950<br></td>
                <td class="tdStyling"  style=min-width:50px>6550<br></td>
                <td class="tdStyling"  style=min-width:50px>8950<br></td>
                <td class="tdStyling"  style=min-width:50px>9900<br></td>
                <td class="tdStyling"  style=min-width:50px>10890<br></td>
                <td class="tdStyling"  style=min-width:50px>14850<br></td>
                <td class="tdStyling"  style=min-width:50px>13200<br></td>
                <td class="tdStyling"  style=min-width:50px>14520<br></td>
                <td class="tdStyling"  style=min-width:50px>19800<br></td>
                <td class="tdStyling"  style=min-width:50px>16500<br></td>
                <td class="tdStyling"  style=min-width:50px>18150<br></td>
                <td class="tdStyling"  style=min-width:50px>24750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Электросталь<br></td>
                <td class="tdStyling"  style=min-width:50px>2650<br></td>
                <td class="tdStyling"  style=min-width:50px>3100<br></td>
                <td class="tdStyling"  style=min-width:50px>4000<br></td>
                <td class="tdStyling"  style=min-width:50px>4800<br></td>
                <td class="tdStyling"  style=min-width:50px>5300<br></td>
                <td class="tdStyling"  style=min-width:50px>7200<br></td>
                <td class="tdStyling"  style=min-width:50px>7950<br></td>
                <td class="tdStyling"  style=min-width:50px>8745<br></td>
                <td class="tdStyling"  style=min-width:50px>11925<br></td>
                <td class="tdStyling"  style=min-width:50px>10600<br></td>
                <td class="tdStyling"  style=min-width:50px>11660<br></td>
                <td class="tdStyling"  style=min-width:50px>15900<br></td>
                <td class="tdStyling"  style=min-width:50px>13250<br></td>
                <td class="tdStyling"  style=min-width:50px>14575<br></td>
                <td class="tdStyling"  style=min-width:50px>19875<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Электроугли<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
                <td class="tdStyling"  style=min-width:50px>4500<br></td>
                <td class="tdStyling"  style=min-width:50px>4950<br></td>
                <td class="tdStyling"  style=min-width:50px>6750<br></td>
                <td class="tdStyling"  style=min-width:50px>7500<br></td>
                <td class="tdStyling"  style=min-width:50px>8250<br></td>
                <td class="tdStyling"  style=min-width:50px>11250<br></td>
                <td class="tdStyling"  style=min-width:50px>10000<br></td>
                <td class="tdStyling"  style=min-width:50px>11000<br></td>
                <td class="tdStyling"  style=min-width:50px>15000<br></td>
                <td class="tdStyling"  style=min-width:50px>12500<br></td>
                <td class="tdStyling"  style=min-width:50px>13750<br></td>
                <td class="tdStyling"  style=min-width:50px>18750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ю<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Юбилейный<br></td>
                <td class="tdStyling"  style=min-width:50px>1900<br></td>
                <td class="tdStyling"  style=min-width:50px>2100<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3450<br></td>
                <td class="tdStyling"  style=min-width:50px>3800<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>5700<br></td>
                <td class="tdStyling"  style=min-width:50px>6270<br></td>
                <td class="tdStyling"  style=min-width:50px>8550<br></td>
                <td class="tdStyling"  style=min-width:50px>7600<br></td>
                <td class="tdStyling"  style=min-width:50px>8360<br></td>
                <td class="tdStyling"  style=min-width:50px>11400<br></td>
                <td class="tdStyling"  style=min-width:50px>9500<br></td>
                <td class="tdStyling"  style=min-width:50px>10450<br></td>
                <td class="tdStyling"  style=min-width:50px>14250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Юдино<br></td>
                <td class="tdStyling"  style=min-width:50px>300<br></td>
                <td class="tdStyling"  style=min-width:50px>400<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>700<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>990<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1200<br></td>
                <td class="tdStyling"  style=min-width:50px>1320<br></td>
                <td class="tdStyling"  style=min-width:50px>1800<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Я<br></td>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Ямищево<br></td>
                <td class="tdStyling"  style=min-width:50px>500<br></td>
                <td class="tdStyling"  style=min-width:50px>600<br></td>
                <td class="tdStyling"  style=min-width:50px>750<br></td>
                <td class="tdStyling"  style=min-width:50px>900<br></td>
                <td class="tdStyling"  style=min-width:50px>1000<br></td>
                <td class="tdStyling"  style=min-width:50px>1350<br></td>
                <td class="tdStyling"  style=min-width:50px>1500<br></td>
                <td class="tdStyling"  style=min-width:50px>1650<br></td>
                <td class="tdStyling"  style=min-width:50px>2250<br></td>
                <td class="tdStyling"  style=min-width:50px>2000<br></td>
                <td class="tdStyling"  style=min-width:50px>2200<br></td>
                <td class="tdStyling"  style=min-width:50px>3000<br></td>
                <td class="tdStyling"  style=min-width:50px>2500<br></td>
                <td class="tdStyling"  style=min-width:50px>2750<br></td>
                <td class="tdStyling"  style=min-width:50px>3750<br></td>
              </tr>
              <tr>
                <td class="tdStyling"  style=min-width:50px>Яхрома<br></td>
                <td class="tdStyling"  style=min-width:50px>2600<br></td>
                <td class="tdStyling"  style=min-width:50px>2850<br></td>
                <td class="tdStyling"  style=min-width:50px>3900<br></td>
                <td class="tdStyling"  style=min-width:50px>4700<br></td>
                <td class="tdStyling"  style=min-width:50px>5200<br></td>
                <td class="tdStyling"  style=min-width:50px>7050<br></td>
                <td class="tdStyling"  style=min-width:50px>7800<br></td>
                <td class="tdStyling"  style=min-width:50px>8580<br></td>
                <td class="tdStyling"  style=min-width:50px>11700<br></td>
                <td class="tdStyling"  style=min-width:50px>10400<br></td>
                <td class="tdStyling"  style=min-width:50px>11440<br></td>
                <td class="tdStyling"  style=min-width:50px>15600<br></td>
                <td class="tdStyling"  style=min-width:50px>13000<br></td>
                <td class="tdStyling"  style=min-width:50px>14300<br></td>
                <td class="tdStyling"  style=min-width:50px>19500<br></td>
              </tr>
            </table>
		<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("oblast");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
	</div><!-- #primary -->

<?php
get_sidebar();


get_footer();


