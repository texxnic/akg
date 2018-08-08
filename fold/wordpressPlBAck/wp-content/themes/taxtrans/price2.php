<?php
/**
* Template Name: price2
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

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <img class="fullWidthImg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/scls.jpg" alt="">
    </div>
</div>
<div class="row odincovoPricesRow">
    <div class="col-sm-6">
        <div class="priceOdincovo priceOdincovo1">
          <h3>Одинцово и пригород</h3>
          <input type="text" id="odincovoTableSeach" onkeyup="myFunction('odincovoTableSeach','odincovoOblastTable')" placeholder="Введите улицу">
          <table id="odincovoOblastTable">
          <tr>
            <td class="tdStyling" style=min-width:50px>Баковская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Верхнее-Отрадное</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Верхне-Пролетарская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вокзальная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>1-я Вокзальная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Внуковская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Восточная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Глазынинская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Железнодорожная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зеленая улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Западная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Говорова улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Интернациональная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Интернациональный проезд</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коммунальный проезд</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коммунистическая улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Комсомольская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красногорское шоссе</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красногорский проезд</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бульвар Любы Новоселовой</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маковского улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маршала Бирюзова улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маршала Крылова улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маршала Толубко улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маршала Жукова улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Можайское шоссе</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Молодежная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Неделина улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нижнепролетарская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поселок БЗРИ</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пионерская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новое Яскино улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ново-Спортивная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Привокзальная площадь</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Садовая улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Свободы улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Северная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Советская улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Союзная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сосновая улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Солнечная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Старое Яскино улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Транспортная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Транспортный проезд</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чикина улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Школьный проезд</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Школьная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Южная улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Яскино улица</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>2-й Завод</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Трасса им.Л.Лазутиной</td>
            <td class="tdStyling" style=min-width:50px>600<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Старая Трехгорка:</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вишневая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Колхозная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Можайское ш</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полевая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чистяковой до 38д</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>платформа Трехгорка</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>д.Мамоново( со стороны можайского ш)</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Буденовское ш</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Баковка -4</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ул.Вокзальная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вокзальный тупик</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Колхозная </td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Овражный тупик</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Луч</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лохино:</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>1-я Советская</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>2-я Советская</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Садовая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ЖК Сколковский ( ул. Сколковская)</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Акулово: </td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Довиль</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Акуловская</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Железнодорожная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полевая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Д/О Озера</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Школьная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гуссарская Баллада:</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бородинская</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дениса Давыдова</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гвардейская</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Михаила Кутузова</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Триумфальная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>пос Вниссок:</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рябиновая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дружбы</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Березовая </td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кленовая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Селекционная</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Липовая</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>с Дубки</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ст. Пионерская ( до переезда)</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>д.Губкино</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>д.Глазынино</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>9-й микр.:</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ул.Белорусская</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Одинцово 1</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ул.Ракетчиков</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>АКОС</td>
            <td class="tdStyling" style=min-width:50px>750<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Баковка ( Минское ш):</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>1 Мая</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Буденовское ш</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесная</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полевая</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нагорная</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>пер.Рыбалко</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сетуньский тупик</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Луначарского</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Трудовая</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Хутор Одинцовский</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ДПК Луч ( на минском ш)</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мамоново ( на минском ш)</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ст. Пионерская ( после переезда)</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Никонорово</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лохино-ВИЛС</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новая Трехгорка:</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кутузовская</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чистяковой (с д 40)</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Озерная 115 ( конфитюр)</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>рублевский проезд</td>
            <td class="tdStyling" style=min-width:50px>900<br></td>
          </tr>
        </table>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="priceOdincovo priceOdincovo2">
          <h3>Область и другое</h3>
          <form action="">
  <input type="radio" name="driveType" value="from" checked>Из Одинцово
  <input type="radio" name="driveType"" value="to">В Одинцово
  <input type="radio" name="driveType"" value="fromTo">Туда-обратно
</form>
<input type="text" id="allTableSearch" onkeyup="myFunction('allTableSearch','odincovoAllTable')" placeholder="Введите город, станцию метро, рынок">
         <table id="odincovoAllTable">
         
          <tr>
            <td class="tdStyling" style=min-width:50px>А</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Абабурово</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Акиньшино</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Аксиньино</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Алабино</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Анино (Красногорский)</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Анино(Волоколамский)</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Аносино</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Апрелевка</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Архангельское</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Астафьево(Волоколамский)</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
            <td class="tdStyling" style=min-width:50px>11880</td>
            <td class="tdStyling" style=min-width:50px>16200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Астафьево(Можайский)</td>
            <td class="tdStyling" style=min-width:50px>12000</td>
            <td class="tdStyling" style=min-width:50px>13200</td>
            <td class="tdStyling" style=min-width:50px>18000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Б</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Балабаново</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
            <td class="tdStyling" style=min-width:50px>7920</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Балашиха(до поста ГАИ)</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Балашиха(после поста ГАИ)</td>
            <td class="tdStyling" style=min-width:50px>6900</td>
            <td class="tdStyling" style=min-width:50px>7590</td>
            <td class="tdStyling" style=min-width:50px>10350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бараново(Можайский р-н)</td>
            <td class="tdStyling" style=min-width:50px>10500</td>
            <td class="tdStyling" style=min-width:50px>11550</td>
            <td class="tdStyling" style=min-width:50px>15750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бараново(Рузский р-н)</td>
            <td class="tdStyling" style=min-width:50px>7050</td>
            <td class="tdStyling" style=min-width:50px>7755</td>
            <td class="tdStyling" style=min-width:50px>10575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бекасово</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Белая Дача</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Белозерово</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Битца</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Большое Покровское</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Борки</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Борки(Истринский р-н)</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бородино(Мытищинский р-н)</td>
            <td class="tdStyling" style=min-width:50px>4650</td>
            <td class="tdStyling" style=min-width:50px>5115</td>
            <td class="tdStyling" style=min-width:50px>6975</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бородино (Можайский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бородино (Подольский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бородино(Дмитровский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бородки</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Брехово</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бронницы</td>
            <td class="tdStyling" style=min-width:50px>8550</td>
            <td class="tdStyling" style=min-width:50px>9405</td>
            <td class="tdStyling" style=min-width:50px>12825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бузаево</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бурцево</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бутово северное</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бутово южная</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бутынь</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Брехово(Крекшино)</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бирюлево (Восточное)</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бирюлево(Западное)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>п.Барвиха</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>д.Барвиха</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Барвиха(на Рублевке)</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>В</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Валуево</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ватутинки</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Введенское</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Велотрек(Крылаткое)</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Верея(Наро-Фоминский р-н)</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
            <td class="tdStyling" style=min-width:50px>8910</td>
            <td class="tdStyling" style=min-width:50px>12150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Верея(Раменский р-н)</td>
            <td class="tdStyling" style=min-width:50px>5700</td>
            <td class="tdStyling" style=min-width:50px>6270</td>
            <td class="tdStyling" style=min-width:50px>8550</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Верея (Орехово-Зуевский)</td>
            <td class="tdStyling" style=min-width:50px>12600</td>
            <td class="tdStyling" style=min-width:50px>13860</td>
            <td class="tdStyling" style=min-width:50px>18900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Видное,город</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вешняки</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вырубово</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Владимир,город</td>
            <td class="tdStyling" style=min-width:50px>19500</td>
            <td class="tdStyling" style=min-width:50px>21450</td>
            <td class="tdStyling" style=min-width:50px>29250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Власово (Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Власово(Раменский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Власово(Можайский р-н)</td>
            <td class="tdStyling" style=min-width:50px>8700</td>
            <td class="tdStyling" style=min-width:50px>9570</td>
            <td class="tdStyling" style=min-width:50px>13050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Волоколамск,город</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Воронки(Красногорский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Воскресенск,город</td>
            <td class="tdStyling" style=min-width:50px>11400</td>
            <td class="tdStyling" style=min-width:50px>12540</td>
            <td class="tdStyling" style=min-width:50px>17100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Воскресенское(Ногинский)</td>
            <td class="tdStyling" style=min-width:50px>8400</td>
            <td class="tdStyling" style=min-width:50px>9240</td>
            <td class="tdStyling" style=min-width:50px>12600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Воскресенское(Ленинский)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Воскресенское(Раменский)</td>
            <td class="tdStyling" style=min-width:50px>7050</td>
            <td class="tdStyling" style=min-width:50px>7755</td>
            <td class="tdStyling" style=min-width:50px>10575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Восточный поселок(Москва)</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Востряково(Домодедово)</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Высоковск</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
            <td class="tdStyling" style=min-width:50px>11880</td>
            <td class="tdStyling" style=min-width:50px>16200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Власиха(Лайково)</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Власиха( Перхушково)</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вязёмы Большие</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Вязёмы Малые</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ст.Внуково</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Г</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гагарин город</td>
            <td class="tdStyling" style=min-width:50px>14400</td>
            <td class="tdStyling" style=min-width:50px>15840</td>
            <td class="tdStyling" style=min-width:50px>21600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Газопровод поселок</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гарь-Покровское</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гигирево(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гигирево(Солнечногорский)</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
            <td class="tdStyling" style=min-width:50px>7920</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Глаголево</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Глухово(Красногорский р-н)</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Глухово(Рузский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>7260</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Голицыно(Керамика)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Голицыно(Минское ш.)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Голицыно(станция)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гольяново</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки-2</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки-6</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки-8</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки-9</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки-10</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки-15</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горки Ленинские</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>5445</td>
            <td class="tdStyling" style=min-width:50px>7425</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Городок-17</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горышкино</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Грибаново(Красногорский)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Грибово</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Грязь(Звенигород)</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Д</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Давыдково(Наро-Фоминский)</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Давыдково(Клинский р-н)</td>
            <td class="tdStyling" style=min-width:50px>8700</td>
            <td class="tdStyling" style=min-width:50px>9570</td>
            <td class="tdStyling" style=min-width:50px>13050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Давыдково(Истринский р-н)</td>
            <td class="tdStyling" style=min-width:50px>7350</td>
            <td class="tdStyling" style=min-width:50px>8085</td>
            <td class="tdStyling" style=min-width:50px>11025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Давыдково(Дмитровский)</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дарьино</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дачное</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дегунино</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дедовск,город</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дзержинский,город</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дмитров,город</td>
            <td class="tdStyling" style=min-width:50px>8400</td>
            <td class="tdStyling" style=min-width:50px>9240</td>
            <td class="tdStyling" style=min-width:50px>12600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дмитровское(Красногорский)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Долгопрудный,город</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Домодедово,город</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дорохово</td>
            <td class="tdStyling" style=min-width:50px>5700</td>
            <td class="tdStyling" style=min-width:50px>6270</td>
            <td class="tdStyling" style=min-width:50px>8550</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дубки(Кубинка)</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>5445</td>
            <td class="tdStyling" style=min-width:50px>7425</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дубна</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
            <td class="tdStyling" style=min-width:50px>20250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дудкино(Ленинский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дудкино(Солнечногорский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
            <td class="tdStyling" style=min-width:50px>6930</td>
            <td class="tdStyling" style=min-width:50px>9450</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дудкино(Наро-Фоминский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Е</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Егорьевск,город</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
            <td class="tdStyling" style=min-width:50px>20250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ершово</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ж</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жаворонки(Можайское ш.)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жаворонки(Минское ш.)</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жедочи</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Железнодорожный,город</td>
            <td class="tdStyling" style=min-width:50px>6900</td>
            <td class="tdStyling" style=min-width:50px>7590</td>
            <td class="tdStyling" style=min-width:50px>10350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жуковка</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жуковка(корт)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жуковка-2</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жуковский,город</td>
            <td class="tdStyling" style=min-width:50px>6900</td>
            <td class="tdStyling" style=min-width:50px>7590</td>
            <td class="tdStyling" style=min-width:50px>10350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жулебино</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>З</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Загорск(Сергиев-Посадю,Загорские)</td>
            <td class="tdStyling" style=min-width:50px>10200</td>
            <td class="tdStyling" style=min-width:50px>11220</td>
            <td class="tdStyling" style=min-width:50px>15300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Загорье(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Загорье(Солнечногорский)</td>
            <td class="tdStyling" style=min-width:50px>7350</td>
            <td class="tdStyling" style=min-width:50px>8085</td>
            <td class="tdStyling" style=min-width:50px>11025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Загорье(Истринский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
            <td class="tdStyling" style=min-width:50px>7425</td>
            <td class="tdStyling" style=min-width:50px>10125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Здравница(Можайское ш)</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Здравница(Минское ш)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зайцево</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Заречье</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Захарково(Красногорский)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Захарково(Чеховский р-н)</td>
            <td class="tdStyling" style=min-width:50px>7800</td>
            <td class="tdStyling" style=min-width:50px>8580</td>
            <td class="tdStyling" style=min-width:50px>11700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Захарово(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Звенигород,город</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зеленая Роща</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зеленоград,город</td>
            <td class="tdStyling" style=min-width:50px>4650</td>
            <td class="tdStyling" style=min-width:50px>5115</td>
            <td class="tdStyling" style=min-width:50px>6975</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Знаменское</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зональный поселок</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>И</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ивановка(Звенигород)</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ивановское(Красногорский)</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ивановское(Истринский р-н)</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ивантеевка</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Иглово</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Изварьино</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Измалково</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Икша</td>
            <td class="tdStyling" style=min-width:50px>6450</td>
            <td class="tdStyling" style=min-width:50px>7095</td>
            <td class="tdStyling" style=min-width:50px>9675</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ильинское</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Иславское</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Истра,город</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>5445</td>
            <td class="tdStyling" style=min-width:50px>7425</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Истра,поселок(Красногорский)</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>К</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Калининец</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Калуга,город</td>
            <td class="tdStyling" style=min-width:50px>15300</td>
            <td class="tdStyling" style=min-width:50px>16830</td>
            <td class="tdStyling" style=min-width:50px>22950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Капань</td>
            <td class="tdStyling" style=min-width:50px>5550</td>
            <td class="tdStyling" style=min-width:50px>6105</td>
            <td class="tdStyling" style=min-width:50px>8325</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Капотня</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Каринское</td>
            <td class="tdStyling" style=min-width:50px>4350</td>
            <td class="tdStyling" style=min-width:50px>4785</td>
            <td class="tdStyling" style=min-width:50px>6525</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Картамазово</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кашира</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
            <td class="tdStyling" style=min-width:50px>20250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Киевский поселок</td>
            <td class="tdStyling" style=min-width:50px>4350</td>
            <td class="tdStyling" style=min-width:50px>4785</td>
            <td class="tdStyling" style=min-width:50px>6525</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кимры</td>
            <td class="tdStyling" style=min-width:50px>15300</td>
            <td class="tdStyling" style=min-width:50px>16830</td>
            <td class="tdStyling" style=min-width:50px>22950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Киржач</td>
            <td class="tdStyling" style=min-width:50px>12000</td>
            <td class="tdStyling" style=min-width:50px>13200</td>
            <td class="tdStyling" style=min-width:50px>18000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Климовск,город</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Клин</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кобяково(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кобяково(Наро-Фоминский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Козино(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Козино(Красногорский р-н)</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кокошкино</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коломна,город</td>
            <td class="tdStyling" style=min-width:50px>12600</td>
            <td class="tdStyling" style=min-width:50px>13860</td>
            <td class="tdStyling" style=min-width:50px>18900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Калчуга</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Колюбакино</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Комунарка</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коптево</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Королев,город</td>
            <td class="tdStyling" style=min-width:50px>5550</td>
            <td class="tdStyling" style=min-width:50px>6105</td>
            <td class="tdStyling" style=min-width:50px>8325</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Косино</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красково</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красная Пахра</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красногорск</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Краснознаменск</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крекшино</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крюково</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крюково(Зеленоград)</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кубинка</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кубинка(Новый Городок)</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кубинка(Старый Городок)</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кубинка санаторий им.Герцена</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кунцево(тех.центр)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Купавна Новая</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
            <td class="tdStyling" style=min-width:50px>6435</td>
            <td class="tdStyling" style=min-width:50px>8775</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Купавна Старая</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
            <td class="tdStyling" style=min-width:50px>6930</td>
            <td class="tdStyling" style=min-width:50px>9450</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Куркино</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Л</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лапино</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лапино Учитель</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лапино-Град</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лапино СНТ</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лапшинка</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ларюшино</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесной Городок станция</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесной Городок </td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесные Дали</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесные Просторы(Успенка)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Летний Отдых</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лефортово</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лешково</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лианозово</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ликино</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ликова</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Липки</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лихоборы</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лобня</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>5445</td>
            <td class="tdStyling" style=min-width:50px>7425</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Локотня</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лотошино</td>
            <td class="tdStyling" style=min-width:50px>12600</td>
            <td class="tdStyling" style=min-width:50px>13860</td>
            <td class="tdStyling" style=min-width:50px>18900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лызлово</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лыткарино</td>
            <td class="tdStyling" style=min-width:50px>5100</td>
            <td class="tdStyling" style=min-width:50px>5610</td>
            <td class="tdStyling" style=min-width:50px>7650</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Люберцы</td>
            <td class="tdStyling" style=min-width:50px>4350</td>
            <td class="tdStyling" style=min-width:50px>4785</td>
            <td class="tdStyling" style=min-width:50px>6525</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лайково</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лайково( кладбище)</td>
            <td class="tdStyling" style=min-width:50px>750</td>
            <td class="tdStyling" style=min-width:50px>825</td>
            <td class="tdStyling" style=min-width:50px>1125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>М</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Малаховка</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Малоярославец</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Малышево</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
            <td class="tdStyling" style=min-width:50px>8910</td>
            <td class="tdStyling" style=min-width:50px>12150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мамыри</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мартьяново</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марушкино</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марфино(Дмитровка)</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марфино(Ашан)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марфино поселок</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маслово(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маслово(Солнечногорский)</td>
            <td class="tdStyling" style=min-width:50px>6900</td>
            <td class="tdStyling" style=min-width:50px>7590</td>
            <td class="tdStyling" style=min-width:50px>10350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маслово(Каширский р-н)</td>
            <td class="tdStyling" style=min-width:50px>15300</td>
            <td class="tdStyling" style=min-width:50px>16830</td>
            <td class="tdStyling" style=min-width:50px>22950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Матвейково(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Матвейково(Дмитровский р-н)</td>
            <td class="tdStyling" style=min-width:50px>7950</td>
            <td class="tdStyling" style=min-width:50px>8745</td>
            <td class="tdStyling" style=min-width:50px>11925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Матвейково(Истринский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
            <td class="tdStyling" style=min-width:50px>7425</td>
            <td class="tdStyling" style=min-width:50px>10125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Матвеевское</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Матвеевское(Подольский р-н)</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
            <td class="tdStyling" style=min-width:50px>6435</td>
            <td class="tdStyling" style=min-width:50px>8775</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Минск(кинотеатр)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Митино</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Митькино</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Митькино(Дмитровский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>13500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Михайловское(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>5100</td>
            <td class="tdStyling" style=min-width:50px>5610</td>
            <td class="tdStyling" style=min-width:50px>7650</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Михайловское(Подольский)</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Михайловское(Рузский р-н)</td>
            <td class="tdStyling" style=min-width:50px>8700</td>
            <td class="tdStyling" style=min-width:50px>9570</td>
            <td class="tdStyling" style=min-width:50px>13050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мичуринский проспект</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Можайск</td>
            <td class="tdStyling" style=min-width:50px>7800</td>
            <td class="tdStyling" style=min-width:50px>8580</td>
            <td class="tdStyling" style=min-width:50px>11700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Молоденово</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Монино</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>7260</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Московский поселок</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мострентген</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мотель Можайский</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мытищи</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Н</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Назарьево</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Наро-Осаново</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Наро-Фоминск</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нахабино</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Немчиновка через Техцентр</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Немчиново</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Николина Гора</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Никонорово</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Николино(2-Успенка)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Николино Поле</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Николо-Урюпино</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Никольское(Дмитровский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
            <td class="tdStyling" style=min-width:50px>6930</td>
            <td class="tdStyling" style=min-width:50px>9450</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Никольское(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Никольское(Солнечногорск)</td>
            <td class="tdStyling" style=min-width:50px>5550</td>
            <td class="tdStyling" style=min-width:50px>6105</td>
            <td class="tdStyling" style=min-width:50px>8325</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Никольское(Истринский р-н)</td>
            <td class="tdStyling" style=min-width:50px>5700</td>
            <td class="tdStyling" style=min-width:50px>6270</td>
            <td class="tdStyling" style=min-width:50px>8550</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новогорск</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новое Гришино(Дмитровский р-н)</td>
            <td class="tdStyling" style=min-width:50px>7500</td>
            <td class="tdStyling" style=min-width:50px>8250</td>
            <td class="tdStyling" style=min-width:50px>11250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ново-Дарьино</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новокосино</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новоивановское </td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ново-Переделкино</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новошихово 40км</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ногинск</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
            <td class="tdStyling" style=min-width:50px>8910</td>
            <td class="tdStyling" style=min-width:50px>12150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>О</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Обнинск</td>
            <td class="tdStyling" style=min-width:50px>8250</td>
            <td class="tdStyling" style=min-width:50px>9075</td>
            <td class="tdStyling" style=min-width:50px>12375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Огарево</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Опалиха</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Орехово-Борисово</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Орехово-Зуево</td>
            <td class="tdStyling" style=min-width:50px>12000</td>
            <td class="tdStyling" style=min-width:50px>13200</td>
            <td class="tdStyling" style=min-width:50px>18000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Осоргино</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Остафьево</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Очаково</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>П</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Павловская Слобода</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Павловский Посад</td>
            <td class="tdStyling" style=min-width:50px>10500</td>
            <td class="tdStyling" style=min-width:50px>11550</td>
            <td class="tdStyling" style=min-width:50px>15750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Павшино(Красногорский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Палицы ( Одинцовский р-он)</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Первомайское(Наро-Фоминский р-н)</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Переделки</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ново- Переделкино</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Переделкино(станция)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Переславль Залесский,город</td>
            <td class="tdStyling" style=min-width:50px>15300</td>
            <td class="tdStyling" style=min-width:50px>16830</td>
            <td class="tdStyling" style=min-width:50px>22950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Перово</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ст. Перхушково ( до переезда)</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ст. Перхушково ( после переезда)</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>д.Перхушково</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Перхушково больница</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Перхушково реабилитационный центр</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пестово</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пестово(Мытищинский р-н)</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>7260</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Петелино</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Петрово-Дальнее</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Подлипки</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Подольск</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Подушкино</td>
            <td class="tdStyling" style=min-width:50px>750</td>
            <td class="tdStyling" style=min-width:50px>825</td>
            <td class="tdStyling" style=min-width:50px>1125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поздняково(Красногорский р-н)</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поздняково(Дмитровский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поздняково(Можайский р-н)</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Покровское</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полушкино(Одинцовский р-н)</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полушкино(Раменский р-н)</td>
            <td class="tdStyling" style=min-width:50px>7050</td>
            <td class="tdStyling" style=min-width:50px>7755</td>
            <td class="tdStyling" style=min-width:50px>10575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поречье(под Тучково)</td>
            <td class="tdStyling" style=min-width:50px>5550</td>
            <td class="tdStyling" style=min-width:50px>6105</td>
            <td class="tdStyling" style=min-width:50px>8325</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Постниково</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Путилково</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пушкино</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
            <td class="tdStyling" style=min-width:50px>6930</td>
            <td class="tdStyling" style=min-width:50px>9450</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пущино(Серпухов)</td>
            <td class="tdStyling" style=min-width:50px>11700</td>
            <td class="tdStyling" style=min-width:50px>12870</td>
            <td class="tdStyling" style=min-width:50px>17550</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пыхтино</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Р</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рабочий поселок </td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Раздоры</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ракитки(поселок)</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Раменское</td>
            <td class="tdStyling" style=min-width:50px>6900</td>
            <td class="tdStyling" style=min-width:50px>7590</td>
            <td class="tdStyling" style=min-width:50px>10350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рассказовка</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рассудово</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Реабилитац.Уентр Рублево</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Реутов</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рождественно</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ростов Великий,город</td>
            <td class="tdStyling" style=min-width:50px>21600</td>
            <td class="tdStyling" style=min-width:50px>23760</td>
            <td class="tdStyling" style=min-width:50px>32400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ромашково</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ст. Ромашково</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рублево</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Руза</td>
            <td class="tdStyling" style=min-width:50px>7650</td>
            <td class="tdStyling" style=min-width:50px>8415</td>
            <td class="tdStyling" style=min-width:50px>11475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Румянцево</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рюмочки(МВТ)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ЖК Рублевский</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>С</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Саввинская Слобода</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сареево Большое</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сареево Малое</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сельская Новь</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Селятино</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Семенково (Одинцовский район)</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сергеев Посад</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Серпухов</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
            <td class="tdStyling" style=min-width:50px>11880</td>
            <td class="tdStyling" style=min-width:50px>16200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сетунь</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Синьково (Одинцовский район)</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сколково</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>сколково ( инновационный центр на можайском ш)</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Скоротово</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Снегири</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Совхоз Ульяновский</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Солманово поле</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Солнечногорск</td>
            <td class="tdStyling" style=min-width:50px>7500</td>
            <td class="tdStyling" style=min-width:50px>8250</td>
            <td class="tdStyling" style=min-width:50px>11250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Солнцево</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Солослово</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сосны</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сосенки</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сосновый Бор (Видное)</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Столбовая (Чехов)</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>7260</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Стольное (Переделки)</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ступино</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
            <td class="tdStyling" style=min-width:50px>11880</td>
            <td class="tdStyling" style=min-width:50px>16200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Супонево</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сушкинская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сходня</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Т</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Таганьково</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тарасовка</td>
            <td class="tdStyling" style=min-width:50px>5250</td>
            <td class="tdStyling" style=min-width:50px>5775</td>
            <td class="tdStyling" style=min-width:50px>7875</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Татарки</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тверь</td>
            <td class="tdStyling" style=min-width:50px>16200</td>
            <td class="tdStyling" style=min-width:50px>17820</td>
            <td class="tdStyling" style=min-width:50px>24300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Толстопальцево</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Томилино</td>
            <td class="tdStyling" style=min-width:50px>4650</td>
            <td class="tdStyling" style=min-width:50px>5115</td>
            <td class="tdStyling" style=min-width:50px>6975</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Торжок</td>
            <td class="tdStyling" style=min-width:50px>22500</td>
            <td class="tdStyling" style=min-width:50px>24750</td>
            <td class="tdStyling" style=min-width:50px>33750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Троицк</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Троицкое (Звенигород)</td>
            <td class="tdStyling" style=min-width:50px>4650</td>
            <td class="tdStyling" style=min-width:50px>5115</td>
            <td class="tdStyling" style=min-width:50px>6975</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Трубачеевка</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тула</td>
            <td class="tdStyling" style=min-width:50px>17100</td>
            <td class="tdStyling" style=min-width:50px>18810</td>
            <td class="tdStyling" style=min-width:50px>25650</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тучково</td>
            <td class="tdStyling" style=min-width:50px>5250</td>
            <td class="tdStyling" style=min-width:50px>5775</td>
            <td class="tdStyling" style=min-width:50px>7875</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>техгорка 5</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>У</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Уборы</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Уваровка</td>
            <td class="tdStyling" style=min-width:50px>10800</td>
            <td class="tdStyling" style=min-width:50px>11880</td>
            <td class="tdStyling" style=min-width:50px>16200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Усово</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Усово-Тупик</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Успенское Дача№2</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Успенское село</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ф</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Филимонки</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Фирсановка</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Фрязино</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
            <td class="tdStyling" style=min-width:50px>6930</td>
            <td class="tdStyling" style=min-width:50px>9450</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Фуньково</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Х</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Химки</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Химки Старые</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Хлюпино</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ховрино</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ч</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Челобитьево</td>
            <td class="tdStyling" style=min-width:50px>4350</td>
            <td class="tdStyling" style=min-width:50px>4785</td>
            <td class="tdStyling" style=min-width:50px>6525</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чапаевка</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Часцы</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Черная Грязь</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чехов</td>
            <td class="tdStyling" style=min-width:50px>7500</td>
            <td class="tdStyling" style=min-width:50px>8250</td>
            <td class="tdStyling" style=min-width:50px>11250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чигасово</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чупряково</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ш</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шараповка</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шарапово (Чеховский район)</td>
            <td class="tdStyling" style=min-width:50px>7050</td>
            <td class="tdStyling" style=min-width:50px>7755</td>
            <td class="tdStyling" style=min-width:50px>10575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шарапово (Одинцовский район)</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шихово</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шишкин Лес</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шульгино (Одинцовский район)</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щ</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щедрино</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щелково</td>
            <td class="tdStyling" style=min-width:50px>5700</td>
            <td class="tdStyling" style=min-width:50px>6270</td>
            <td class="tdStyling" style=min-width:50px>8550</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щербинка</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Э</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Электрогорск</td>
            <td class="tdStyling" style=min-width:50px>9900</td>
            <td class="tdStyling" style=min-width:50px>10890</td>
            <td class="tdStyling" style=min-width:50px>14850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Электросталь</td>
            <td class="tdStyling" style=min-width:50px>7950</td>
            <td class="tdStyling" style=min-width:50px>8745</td>
            <td class="tdStyling" style=min-width:50px>11925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Электроугли</td>
            <td class="tdStyling" style=min-width:50px>7500</td>
            <td class="tdStyling" style=min-width:50px>8250</td>
            <td class="tdStyling" style=min-width:50px>11250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ю</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Юбилейный</td>
            <td class="tdStyling" style=min-width:50px>5700</td>
            <td class="tdStyling" style=min-width:50px>6270</td>
            <td class="tdStyling" style=min-width:50px>8550</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Юдино</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Я</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ямищево</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Яхрома</td>
            <td class="tdStyling" style=min-width:50px>7800</td>
            <td class="tdStyling" style=min-width:50px>8580</td>
            <td class="tdStyling" style=min-width:50px>11700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Станции метро</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>А</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Андроновка</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Авиамоторная</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Автозаводская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Академическая</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Александровский сад</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Алексеевская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Алма-Атинская</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Алтуфьево</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Аннино</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Арбатская</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Аэропорт</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Академика Янгеля</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Б</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Балтийская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бабушкинская </td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Багратионовская</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Баррикадная</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бауманская </td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Беговая</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Белорусская</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Беляево</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Белокаменная</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бибирево</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Библиотека имени Ленина</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Битцевский парк</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Борисово</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Боровицкая</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ботанический сад</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Братиславская</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бульвар Адмирала Ушакова</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бульвар Дмитрия Донского</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бульвар Рокосовского</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бутырская</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бунинская аллея</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>В</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Варшавская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Верхние Котлы</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ВДНХ</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Владыкино</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Водный стадион</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Войковская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Волгоградский проспект</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Волжская</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Волоколамская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Воробьевы горы</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Выставочная</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Выхино</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Д</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Динамо</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Деловой центр</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Домодедовская</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Достоевская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дмитровская</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Добрынинская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дубровка</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ж</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жулебино</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>З</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зил</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зорге</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Зябликово</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>И</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Измайлово</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Измайловская</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>К</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Калужская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кантемировская</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Каховская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Каширская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Киевская</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Китай-город</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кожуховская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коломенская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Котельники</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Комсомольская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коптево</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коньково</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красногвардейская</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Краснопресненская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красносельская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Красные ворота</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крестьянская застава</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кропоткинская</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крымская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крылатское</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кузнецкий мост</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кузьминки</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кунцевская</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Курская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кутузовская</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Л</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ленинский проспект</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лермонтовский проспект</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесопарковая</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лужники</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лубянка</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Люблино</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лихоборы</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Локомотив</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ломоносовский проспект </td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>М</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марксисткая</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марьина роща</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Марьино</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Маяковская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Медведково</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Международная</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Менделеевская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Митино</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Минское</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Молодежная</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мякинино</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Н</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нагатинская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нагорная</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нахимовский проспект</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Нижегородская</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новогиреево</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новокосино</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новокузнецкая</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>новохохловская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новослободская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новоясеневская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Новые Черемушки</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>О</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Окружная</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Октябрьская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Октябрьское поле</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Орехово</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Отрадное</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Охотный ряд</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>П</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Панфиловская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Павелецкая</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Парк Культуры</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Парк Победы</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Партизанская</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Первомайская</td>
            <td class="tdStyling" style=min-width:50px>4350</td>
            <td class="tdStyling" style=min-width:50px>4785</td>
            <td class="tdStyling" style=min-width:50px>6525</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Перово</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Петровско-Разумовская</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Печатники</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пионерская</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>1815</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Планерная</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Площадь Ильича</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Площадь Революции</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Площадь Гагарина</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полежаевская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полянка</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пражская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Преображенская площадь</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пролетарская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Проспект Вернадского</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Проспект Мира</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Профсоюзная</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пушкинская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пятницкое шоссе</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Р</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Раменки</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Речной вокзал</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рижская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Римская</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ростокино</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Румянцево</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рязанский проспект</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>С</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Савеловская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Саларьево</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Свиблово</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Севастопольская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Семеновская</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Серпуховская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Славянский бульвар</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Смоленская</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сокол</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Соколиная Гора</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сокольники</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Спортивная</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сретенский бульвар</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Спартак</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Строгино</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Стрешнево</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Студенческая</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сухаревская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сходненская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Т</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Таганская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тверская</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Театральная</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Текстильщики</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Теплый Стан</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тимирязевская</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Третьяковская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тропарево</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Трубная</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тульская</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тургеневская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тушинская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>У</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Угрешская</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Улица 1905 года</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Улица Академика Янгеля</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Улица Горчакова</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Улица Подбельского</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Улица Старокачаловская</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Улица Скобелевская </td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Университет</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ф</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Филевский парк</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Фили</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Фонвизинская</td>
            <td class="tdStyling" style=min-width:50px>3750</td>
            <td class="tdStyling" style=min-width:50px>4125</td>
            <td class="tdStyling" style=min-width:50px>5625</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Фрунзенская</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Х</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Хорошево</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ц</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Царицыно</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Цветной бульвар</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ч</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Черкизовская</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чертановская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чеховская</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чистые пруды</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Чкаловская </td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ш</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шаболовка</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шелепиха</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шоссе Энтузиастов</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шипиловская</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щ</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щёлковская</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Щукинская</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Э</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Электрозаводская</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ю</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Юго-Западная</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Южная</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Я</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ясенево</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Аэропорты</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Быково</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Внуково</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Домодедово</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шереметьево (терминалы D , Е,F)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Шереметьево (терминалы A, B, C)</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жуковский</td>
            <td class="tdStyling" style=min-width:50px>6000</td>
            <td class="tdStyling" style=min-width:50px>6600</td>
            <td class="tdStyling" style=min-width:50px>9000</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Вокзалы</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Белорусский</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Казанский,Ленинградский,Ярославский</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Киевский</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Курский</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Павелецкий</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рижский</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Савеловский</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Северный Речной вокзал</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Южный Речной вокзал</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Автовокзал Южные ворота</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Автовокзал м.Красногвардейская </td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Автовокзал Щелковский</td>
            <td class="tdStyling" style=min-width:50px>3900</td>
            <td class="tdStyling" style=min-width:50px>4290</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Рынки</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Акос</td>
            <td class="tdStyling" style=min-width:50px>750</td>
            <td class="tdStyling" style=min-width:50px>825</td>
            <td class="tdStyling" style=min-width:50px>1125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ВВЦ(ВДНХ)</td>
            <td class="tdStyling" style=min-width:50px>3450</td>
            <td class="tdStyling" style=min-width:50px>3795</td>
            <td class="tdStyling" style=min-width:50px>5175</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Горбушка</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Динамо</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дорогомилово</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Каширский двор</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Коньково</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лужники</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мельница 41 км МКАД</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Митинский</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Перовский</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Престиж-М 51км МКАД</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Садовод</td>
            <td class="tdStyling" style=min-width:50px>4800</td>
            <td class="tdStyling" style=min-width:50px>5280</td>
            <td class="tdStyling" style=min-width:50px>7200</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Синдика-О 65 км МКАД</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>ТВЦ</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Тушинский</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Major 47 км МКАД</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Major Новорижское шоссе</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Дома отдыха,санатории</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Архангельское </td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Васильевское</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Елочка(Звенигород)</td>
            <td class="tdStyling" style=min-width:50px>4200</td>
            <td class="tdStyling" style=min-width:50px>4620</td>
            <td class="tdStyling" style=min-width:50px>6300</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Евршово</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесной городок (Осоргино)</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесные Дали</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Липки</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Озера</td>
            <td class="tdStyling" style=min-width:50px>750</td>
            <td class="tdStyling" style=min-width:50px>825</td>
            <td class="tdStyling" style=min-width:50px>1125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Петрово-Дальнее</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Покровское </td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Полушкино</td>
            <td class="tdStyling" style=min-width:50px>5100</td>
            <td class="tdStyling" style=min-width:50px>5610</td>
            <td class="tdStyling" style=min-width:50px>7650</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поляны</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поречье(Звенигород)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Поречье(Тучково)</td>
            <td class="tdStyling" style=min-width:50px>5550</td>
            <td class="tdStyling" style=min-width:50px>6105</td>
            <td class="tdStyling" style=min-width:50px>8325</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сан. Имени Герцена</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Солнечная поляна</td>
            <td class="tdStyling" style=min-width:50px>4350</td>
            <td class="tdStyling" style=min-width:50px>4785</td>
            <td class="tdStyling" style=min-width:50px>6525</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сосны</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Снегири </td>
            <td class="tdStyling" style=min-width:50px>5400</td>
            <td class="tdStyling" style=min-width:50px>5940</td>
            <td class="tdStyling" style=min-width:50px>8100</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> ЖД станции</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Бекасово</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
            <td class="tdStyling" style=min-width:50px>6750</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Внуково</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дачная</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Дорохово</td>
            <td class="tdStyling" style=min-width:50px>5850</td>
            <td class="tdStyling" style=min-width:50px>6435</td>
            <td class="tdStyling" style=min-width:50px>8775</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Жаворонки </td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Здравница</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Звенигород</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Кубинка</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
            <td class="tdStyling" style=min-width:50px>4455</td>
            <td class="tdStyling" style=min-width:50px>6075</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Переделкино</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
            <td class="tdStyling" style=min-width:50px>1485</td>
            <td class="tdStyling" style=min-width:50px>2025</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Перхушково</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Пионерская</td>
            <td class="tdStyling" style=min-width:50px>750</td>
            <td class="tdStyling" style=min-width:50px>825</td>
            <td class="tdStyling" style=min-width:50px>1125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Рабочий поселок</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ромашково</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Санаторная</td>
            <td class="tdStyling" style=min-width:50px>5250</td>
            <td class="tdStyling" style=min-width:50px>5775</td>
            <td class="tdStyling" style=min-width:50px>7875</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сетунь</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Скоротово</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Сушкинская</td>
            <td class="tdStyling" style=min-width:50px>3000</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>4500</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Трехгорка</td>
            <td class="tdStyling" style=min-width:50px>750</td>
            <td class="tdStyling" style=min-width:50px>825</td>
            <td class="tdStyling" style=min-width:50px>1125</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Усово</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Хлюпино</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Гостиницы,рестораны</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px>0</td>
            <td class="tdStyling" style=min-width:50px>0</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Серая лошадь</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Аэростар</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесная (Ховрино)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Лесной (Лесной городок)</td>
            <td class="tdStyling" style=min-width:50px>1050</td>
            <td class="tdStyling" style=min-width:50px>1155</td>
            <td class="tdStyling" style=min-width:50px>1575</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Матвеевская</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Можайская</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Прага ресторан</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Президент -Отель</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ренессанс</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Редисон-Славянская</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Украина</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
            <td class="tdStyling" style=min-width:50px>2475</td>
            <td class="tdStyling" style=min-width:50px>3375</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Холидейн Инн(улица Лесная ,д15)</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Холидей Инн(Русаковская улица,24)</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
            <td class="tdStyling" style=min-width:50px>3465</td>
            <td class="tdStyling" style=min-width:50px>4725</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Холидей Инн(улица Симоновский Вал,д.2)</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px> Торговый центры</td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
            <td class="tdStyling" style=min-width:50px></td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ашан(Марфино)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ашан(Строгино)</td>
            <td class="tdStyling" style=min-width:50px>2100</td>
            <td class="tdStyling" style=min-width:50px>2310</td>
            <td class="tdStyling" style=min-width:50px>3150</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Ашан(Теплый Стан)</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Гранд(Химки)</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
            <td class="tdStyling" style=min-width:50px>2970</td>
            <td class="tdStyling" style=min-width:50px>4050</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Евро-Парк(Рублевка)</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Икея(Теплый Стан)</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Икея(Химки)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Крокус-Сити(Волокол.)</td>
            <td class="tdStyling" style=min-width:50px>2400</td>
            <td class="tdStyling" style=min-width:50px>2640</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мега(Теплый Стан)</td>
            <td class="tdStyling" style=min-width:50px>2550</td>
            <td class="tdStyling" style=min-width:50px>2805</td>
            <td class="tdStyling" style=min-width:50px>3825</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Мега(Химки)</td>
            <td class="tdStyling" style=min-width:50px>3300</td>
            <td class="tdStyling" style=min-width:50px>3630</td>
            <td class="tdStyling" style=min-width:50px>4950</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Метро(улица Складочная)</td>
            <td class="tdStyling" style=min-width:50px>2850</td>
            <td class="tdStyling" style=min-width:50px>3135</td>
            <td class="tdStyling" style=min-width:50px>4275</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Метро(Проспект Мира,211,стр.1)</td>
            <td class="tdStyling" style=min-width:50px>3600</td>
            <td class="tdStyling" style=min-width:50px>3960</td>
            <td class="tdStyling" style=min-width:50px>5400</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Метро(проезд 6387,д.14)</td>
            <td class="tdStyling" style=min-width:50px>1950</td>
            <td class="tdStyling" style=min-width:50px>2145</td>
            <td class="tdStyling" style=min-width:50px>2925</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Молодежный(Можайка)</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Панавто</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
            <td class="tdStyling" style=min-width:50px>1980</td>
            <td class="tdStyling" style=min-width:50px>2700</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Спорт-Хит</td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Техцентр Кунцево </td>
            <td class="tdStyling" style=min-width:50px>1500</td>
            <td class="tdStyling" style=min-width:50px>1650</td>
            <td class="tdStyling" style=min-width:50px>2250</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Три Кита</td>
            <td class="tdStyling" style=min-width:50px>1200</td>
            <td class="tdStyling" style=min-width:50px>1320</td>
            <td class="tdStyling" style=min-width:50px>1800</td>
          </tr>
          <tr>
            <td class="tdStyling" style=min-width:50px>Конфитюр</td>
            <td class="tdStyling" style=min-width:50px>900</td>
            <td class="tdStyling" style=min-width:50px>990</td>
            <td class="tdStyling" style=min-width:50px>1350</td>
          </tr>
        </table>
        </div>
    </div>

</div>


 
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
        
       
		<script>
function myFunction(searchName,tableName) {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById(searchName);
  filter = input.value.toUpperCase();
  table = document.getElementById(tableName);
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


