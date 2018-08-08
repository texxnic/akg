<?php
/**
* Template Name: sclassPriceList
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
    <script src="//api-maps.yandex.ru/2.1/?lang=ru" type="text/javascript"></script>
    <div id="primary" class="content-area">
        <!-- Use any element to open the sidenav -->
        <div id="main" class="priceListMain">
            <div class="pageJumbo priceListJumbo">
                <h2 class="whiteTxt animated zoomIn"><?php the_title(); ?></h2>
            </div>
            <div class="localOrNot hidden-md hidden-lg">
                <a href="#odincovoHighlight">
                    <div class="col-sm-6 col-xs-6 odincovoSelector">По Одинцово</div>
                </a>
                <a href="#stateHighlight">
                    <div class="col-sm-6 col-xs-6 stateSelector">Москва и МО</div>
                </a>
            </div>
            <div class="container pageContent contetPaddings">
                <div id="allDirectionChanger">
                    <a href="<?php echo get_home_url(); ?>/price">Стандарт</a>
                    <a href="<?php echo get_home_url(); ?>/vanprice">Минивэн</a>
                    <a class="selected" href="<?php echo get_home_url(); ?>/sprice">S-class</a>
                    <a href="<?php echo get_home_url(); ?>/vprice">V-class</a>
                    <a href="<?php echo get_home_url(); ?>/gprice">Геленваген</a>
                </div>
                <div id="standartPriceList">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <img class="fullWidthImg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/price/scls.jpg" alt="">
                        </div>
                    </div>
                    <div class="odincovoPricesRow">
                        <div class="col-md-6 nopaddings" id="odincovoHighlight">
                            <div class="priceOdincovo priceOdincovo1">
                                <h3>Одинцово и пригород</h3>
                                <input type="text" id="odincovoTableSeach" onkeyup="myFunction('odincovoTableSeach','odincovoOblastTable')" placeholder="Введите улицу">
                                <table id="odincovoOblastTable">
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Баковская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Верхнее-Отрадное
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Верхне-Пролетарская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Вокзальная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>1-я Вокзальная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Внуковская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Восточная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Глазынинская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Железнодорожная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Зеленая улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Западная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Говорова улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Интернациональная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Интернациональный проезд
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Коммунальный проезд
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Коммунистическая улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Комсомольская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Красногорское шоссе
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Красногорский проезд
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Бульвар Любы Новоселовой
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Маковского улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Маршала Бирюзова улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Маршала Крылова улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Маршала Толубко улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Маршала Жукова улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Можайское шоссе
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Молодежная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Неделина улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Нижнепролетарская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Поселок БЗРИ
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Пионерская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Новое Яскино улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Ново-Спортивная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Привокзальная площадь
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Садовая улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Свободы улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Северная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Советская улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Союзная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Сосновая улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Солнечная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Старое Яскино улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Транспортная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Транспортный проезд
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Чикина улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Школьный проезд
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Школьная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Южная улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Яскино улица
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>2-й Завод
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Трасса им.Л.Лазутиной
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>600
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Старая Трехгорка:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Вишневая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Колхозная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Можайское ш
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Полевая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Чистяковой до 38д
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>платформа Трехгорка
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>д.Мамоново( со стороны можайского ш)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Буденовское ш
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Баковка -4
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ул.Вокзальная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Вокзальный тупик
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Колхозная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Лесная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Овражный тупик
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Луч
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Лохино:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>1-я Советская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>2-я Советская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Садовая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ЖК Сколковский ( ул. Сколковская)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Акулово:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Довиль
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Акуловская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Железнодорожная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Полевая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Д/О Озера
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Новая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Школьная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Гуссарская Баллада:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Бородинская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Дениса Давыдова
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Гвардейская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Михаила Кутузова
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Триумфальная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>пос Вниссок:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Рябиновая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Дружбы
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Березовая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Кленовая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Селекционная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Липовая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>с Дубки
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ст. Пионерская ( до переезда)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>д.Губкино
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>д.Глазынино
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>9-й микр.:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ул.Белорусская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Одинцово 1
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ул.Ракетчиков
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>АКОС
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>750
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Баковка ( Минское ш):
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>1 Мая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Буденовское ш
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Лесная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Полевая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Нагорная
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>пер.Рыбалко
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Сетуньский тупик
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Луначарского
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Трудовая
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Хутор Одинцовский
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ДПК Луч ( на минском ш)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Мамоново ( на минском ш)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>ст. Пионерская ( после переезда)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Никонорово
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Лохино-ВИЛС
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Новая Трехгорка:
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Кутузовская
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Чистяковой (с д 40)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>Озерная 115 ( конфитюр)
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdStyling" style=min-width:50px>рублевский проезд
                                            <br>
                                        </td>
                                        <td class="tdStyling" style=min-width:50px>900
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 nopaddings" id="stateHighlight">
                            <div class="priceOdincovo priceOdincovo2">
                                <h3>Москва и МО</h3>
                                <div id="allDirectionChanger">
                                    <input type="radio" id="fromAll" name="driveType" value="from" checked>
                                    <label for="fromAll">Из Одинцово</label>
                                    <input type="radio" id="toAll" name="driveType" value="to">
                                    <label for="toAll">В Одинцово</label>
                                    <input type="radio" name="driveType" id="fromToAll" value="fromTo">
                                    <label for="fromToAll">Туда-обратно</label>
                                </div>
                                <input type="text" id="allTableSearch" onkeyup="myFunction('allTableSearch','odincovoAllTable')" placeholder="Введите город, станцию метро, рынок">
                                <table border="0" cellpadding="0" cellspacing="0" id="odincovoAllTable" class="sheet0 gridlines">
                                    <col class="col0">
                                    <col class="col1">
                                    <col class="col2">
                                    <col class="col3">
                    <tbody>
          <tr class="row0">
            <td class="column0 style0 s">﻿Область<br></td>
            
            
             
          </tr>
          <tr class="row1">
            <td class="column0 style0 s">А<br></td>
            
            
             
          </tr>
          <tr class="row2">
            <td class="column0 style0 s">Абабурово<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row3">
            <td class="column0 style0 s">Акиньшино<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3100<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row4">
            <td class="column0 style0 s">Аксиньино<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row5">
            <td class="column0 style0 s">Алабино<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row6">
            <td class="column0 style0 s">Анино (Красногорский)<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row7">
            <td class="column0 style0 s">Анино(Волоколамский)<br></td>
            <td class="column1 style0 n">9000<br></td>
            <td class="column2 style0 n">9900<br></td>
            <td class="column3 style0 n">13500<br></td>
          </tr>
          <tr class="row8">
            <td class="column0 style0 s">Аносино<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row9">
            <td class="column0 style0 s">Апрелевка<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row10">
            <td class="column0 style0 s">Архангельское<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row11">
            <td class="column0 style0 s">Астафьево(Волоколамский)<br></td>
            <td class="column1 style0 n">10800<br></td>
            <td class="column2 style0 n">11880<br></td>
            <td class="column3 style0 n">16200<br></td>
          </tr>
          <tr class="row12">
            <td class="column0 style0 s">Астафьево(Можайский)<br></td>
            <td class="column1 style0 n">12000<br></td>
            <td class="column2 style0 n">13200<br></td>
            <td class="column3 style0 n">18000<br></td>
          </tr>
          <tr class="row13">
            <td class="column0 style0 s">Б<br></td>
            
            
             
          </tr>
          <tr class="row14">
            <td class="column0 style0 s">Балабаново<br></td>
            <td class="column1 style0 n">7200<br></td>
            <td class="column2 style0 n">7900<br></td>
            <td class="column3 style0 n">10800<br></td>
          </tr>
          <tr class="row15">
            <td class="column0 style0 s">Балашиха(до поста ГАИ)<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row16">
            <td class="column0 style0 s">Балашиха(после поста ГАИ)<br></td>
            <td class="column1 style0 n">6900<br></td>
            <td class="column2 style0 n">7600<br></td>
            <td class="column3 style0 n">10350<br></td>
          </tr>
          <tr class="row17">
            <td class="column0 style0 s">Бараново(Можайский р-н)<br></td>
            <td class="column1 style0 n">10500<br></td>
            <td class="column2 style0 n">11550<br></td>
            <td class="column3 style0 n">15750<br></td>
          </tr>
          <tr class="row18">
            <td class="column0 style0 s">Бараново(Рузский р-н)<br></td>
            <td class="column1 style0 n">7050<br></td>
            <td class="column2 style0 n">7755<br></td>
            <td class="column3 style0 n">10600<br></td>
          </tr>
          <tr class="row19">
            <td class="column0 style0 s">Бекасово<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row20">
            <td class="column0 style0 s">Белая Дача<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row21">
            <td class="column0 style0 s">Белозерово<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row22">
            <td class="column0 style0 s">Битца<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row23">
            <td class="column0 style0 s">Большое Покровское<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row24">
            <td class="column0 style0 s">Борки<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row25">
            <td class="column0 style0 s">Борки(Истринский р-н)<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4100<br></td>
            <td class="column3 style0 n">5650<br></td>
          </tr>
          <tr class="row26">
            <td class="column0 style0 s">Бородино(Мытищинский р-н)<br></td>
            <td class="column1 style0 n">4650<br></td>
            <td class="column2 style0 n">5100<br></td>
            <td class="column3 style0 n">7000<br></td>
          </tr>
          <tr class="row27">
            <td class="column0 style0 s">Бородино (Можайский р-н)<br></td>
            <td class="column1 style0 n">9000<br></td>
            <td class="column2 style0 n">9900<br></td>
            <td class="column3 style0 n">13500<br></td>
          </tr>
          <tr class="row28">
            <td class="column0 style0 s">Бородино (Подольский р-н)<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row29">
            <td class="column0 style0 s">Бородино(Дмитровский р-н)<br></td>
            <td class="column1 style0 n">9000<br></td>
            <td class="column2 style0 n">9900<br></td>
            <td class="column3 style0 n">13500<br></td>
          </tr>
          <tr class="row30">
            <td class="column0 style0 s">Бородки<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row31">
            <td class="column0 style0 s">Брехово<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4100<br></td>
            <td class="column3 style0 n">5625<br></td>
          </tr>
          <tr class="row32">
            <td class="column0 style0 s">Бронницы<br></td>
            <td class="column1 style0 n">8550<br></td>
            <td class="column2 style0 n">9405<br></td>
            <td class="column3 style0 n">12825<br></td>
          </tr>
          <tr class="row33">
            <td class="column0 style0 s">Бузаево<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row34">
            <td class="column0 style0 s">Бурцево<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3100<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row35">
            <td class="column0 style0 s">Бутово северное<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row36">
            <td class="column0 style0 s">Бутово южная<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row37">
            <td class="column0 style0 s">Бутынь<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row38">
            <td class="column0 style0 s">Брехово(Крекшино)<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row39">
            <td class="column0 style0 s">Бирюлево (Восточное)<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row40">
            <td class="column0 style0 s">Бирюлево(Западное)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row41">
            <td class="column0 style0 s">п.Барвиха<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row42">
            <td class="column0 style0 s">д.Барвиха<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">16020<br></td>
          </tr>
          <tr class="row43">
            <td class="column0 style0 s">Барвиха(на Рублевке)<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row44">
            <td class="column0 style0 s">В<br></td>
            
            
             
          </tr>
          <tr class="row45">
            <td class="column0 style0 s">Валуево<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row46">
            <td class="column0 style0 s">Ватутинки<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row47">
            <td class="column0 style0 s">Введенское<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row48">
            <td class="column0 style0 s">Велотрек(Крылаткое)<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2925<br></td>
          </tr>
          <tr class="row49">
            <td class="column0 style0 s">Верея(Наро-Фоминский р-н)<br></td>
            <td class="column1 style0 n">8100<br></td>
            <td class="column2 style0 n">8900<br></td>
            <td class="column3 style0 n">12150<br></td>
          </tr>
          <tr class="row50">
            <td class="column0 style0 s">Верея(Раменский р-н)<br></td>
            <td class="column1 style0 n">5700<br></td>
            <td class="column2 style0 n">6270<br></td>
            <td class="column3 style0 n">8550<br></td>
          </tr>
          <tr class="row51">
            <td class="column0 style0 s">Верея (Орехово-Зуевский)<br></td>
            <td class="column1 style0 n">12600<br></td>
            <td class="column2 style0 n">13850<br></td>
            <td class="column3 style0 n">18900<br></td>
          </tr>
          <tr class="row52">
            <td class="column0 style0 s">Видное,город<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row53">
            <td class="column0 style0 s">Вешняки<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row54">
            <td class="column0 style0 s">Вырубово<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row55">
            <td class="column0 style0 s">Владимир,город<br></td>
            <td class="column1 style0 n">19500<br></td>
            <td class="column2 style0 n">21450<br></td>
            <td class="column3 style0 n">29250<br></td>
          </tr>
          <tr class="row56">
            <td class="column0 style0 s">Власово (Одинцовский р-н)<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row57">
            <td class="column0 style0 s">Власово(Раменский р-н)<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row58">
            <td class="column0 style0 s">Власово(Можайский р-н)<br></td>
            <td class="column1 style0 n">8700<br></td>
            <td class="column2 style0 n">9570<br></td>
            <td class="column3 style0 n">13050<br></td>
          </tr>
          <tr class="row59">
            <td class="column0 style0 s">Волоколамск,город<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row60">
            <td class="column0 style0 s">Воронки(Красногорский р-н)<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row61">
            <td class="column0 style0 s">Воскресенск,город<br></td>
            <td class="column1 style0 n">11400<br></td>
            <td class="column2 style0 n">12550<br></td>
            <td class="column3 style0 n">17100<br></td>
          </tr>
          <tr class="row62">
            <td class="column0 style0 s">Воскресенское(Ногинский)<br></td>
            <td class="column1 style0 n">8400<br></td>
            <td class="column2 style0 n">9240<br></td>
            <td class="column3 style0 n">12600<br></td>
          </tr>
          <tr class="row63">
            <td class="column0 style0 s">Воскресенское(Ленинский)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row64">
            <td class="column0 style0 s">Воскресенское(Раменский)<br></td>
            <td class="column1 style0 n">7050<br></td>
            <td class="column2 style0 n">7755<br></td>
            <td class="column3 style0 n">10600<br></td>
          </tr>
          <tr class="row65">
            <td class="column0 style0 s">Восточный поселок(Москва)<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5950<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row66">
            <td class="column0 style0 s">Востряково(Домодедово)<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row67">
            <td class="column0 style0 s">Высоковск<br></td>
            <td class="column1 style0 n">10800<br></td>
            <td class="column2 style0 n">11880<br></td>
            <td class="column3 style0 n">16200<br></td>
          </tr>
          <tr class="row68">
            <td class="column0 style0 s">Власиха(Лайково)<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row69">
            <td class="column0 style0 s">Власиха( Перхушково)<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row70">
            <td class="column0 style0 s">Вязёмы Большие<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row71">
            <td class="column0 style0 s">Вязёмы Малые<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row72">
            <td class="column0 style0 s">ст.Внуково<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row73">
            <td class="column0 style0 s">Г<br></td>
            
            
             
          </tr>
          <tr class="row74">
            <td class="column0 style0 s">Гагарин город<br></td>
            <td class="column1 style0 n">14400<br></td>
            <td class="column2 style0 n">15800<br></td>
            <td class="column3 style0 n">21600<br></td>
          </tr>
          <tr class="row75">
            <td class="column0 style0 s">Газопровод поселок<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row76">
            <td class="column0 style0 s">Гарь-Покровское<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row77">
            <td class="column0 style0 s">Гигирево(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row78">
            <td class="column0 style0 s">Гигирево(Солнечногорский)<br></td>
            <td class="column1 style0 n">7200<br></td>
            <td class="column2 style0 n">7900<br></td>
            <td class="column3 style0 n">10800<br></td>
          </tr>
          <tr class="row79">
            <td class="column0 style0 s">Глаголево<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row80">
            <td class="column0 style0 s">Глухово(Красногорский р-н)<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1815<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row81">
            <td class="column0 style0 s">Глухово(Рузский р-н)<br></td>
            <td class="column1 style0 n">6600<br></td>
            <td class="column2 style0 n">7250<br></td>
            <td class="column3 style0 n">9900<br></td>
          </tr>
          <tr class="row82">
            <td class="column0 style0 s">Голицыно(Керамика)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row83">
            <td class="column0 style0 s">Голицыно(Минское ш.)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row84">
            <td class="column0 style0 s">Голицыно(станция)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row85">
            <td class="column0 style0 s">Гольяново<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5900<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row86">
            <td class="column0 style0 s">Горки-2<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2025<br></td>
          </tr>
          <tr class="row87">
            <td class="column0 style0 s">Горки-6<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row88">
            <td class="column0 style0 s">Горки-8<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row89">
            <td class="column0 style0 s">Горки-9<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row90">
            <td class="column0 style0 s">Горки-10<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row91">
            <td class="column0 style0 s">Горки-15<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row92">
            <td class="column0 style0 s">Горки Ленинские<br></td>
            <td class="column1 style0 n">4950<br></td>
            <td class="column2 style0 n">5550<br></td>
            <td class="column3 style0 n">7425<br></td>
          </tr>
          <tr class="row93">
            <td class="column0 style0 s">Городок-17<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row94">
            <td class="column0 style0 s">Горышкино<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row95">
            <td class="column0 style0 s">Грибаново(Красногорский)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row96">
            <td class="column0 style0 s">Грибово<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row97">
            <td class="column0 style0 s">Грязь(Звенигород)<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row98">
            <td class="column0 style0 s">Д<br></td>
            
            
             
          </tr>
          <tr class="row99">
            <td class="column0 style0 s">Давыдково(Наро-Фоминский)<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2925<br></td>
          </tr>
          <tr class="row100">
            <td class="column0 style0 s">Давыдково(Клинский р-н)<br></td>
            <td class="column1 style0 n">8700<br></td>
            <td class="column2 style0 n">9550<br></td>
            <td class="column3 style0 n">13050<br></td>
          </tr>
          <tr class="row101">
            <td class="column0 style0 s">Давыдково(Истринский р-н)<br></td>
            <td class="column1 style0 n">7350<br></td>
            <td class="column2 style0 n">8100<br></td>
            <td class="column3 style0 n">11000<br></td>
          </tr>
          <tr class="row102">
            <td class="column0 style0 s">Давыдково(Дмитровский)<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10890<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row103">
            <td class="column0 style0 s">Дарьино<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row104">
            <td class="column0 style0 s">Дачное<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row105">
            <td class="column0 style0 s">Дегунино<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4150<br></td>
            <td class="column3 style0 n">5600<br></td>
          </tr>
          <tr class="row106">
            <td class="column0 style0 s">Дедовск,город<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4455<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row107">
            <td class="column0 style0 s">Дзержинский,город<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row108">
            <td class="column0 style0 s">Дмитров,город<br></td>
            <td class="column1 style0 n">8400<br></td>
            <td class="column2 style0 n">9250<br></td>
            <td class="column3 style0 n">12600<br></td>
          </tr>
          <tr class="row109">
            <td class="column0 style0 s">Дмитровское(Красногорский)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row110">
            <td class="column0 style0 s">Долгопрудный,город<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row111">
            <td class="column0 style0 s">Домодедово,город<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5950<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row112">
            <td class="column0 style0 s">Дорохово<br></td>
            <td class="column1 style0 n">5700<br></td>
            <td class="column2 style0 n">6300<br></td>
            <td class="column3 style0 n">8550<br></td>
          </tr>
          <tr class="row113">
            <td class="column0 style0 s">Дубки(Кубинка)<br></td>
            <td class="column1 style0 n">4950<br></td>
            <td class="column2 style0 n">5450<br></td>
            <td class="column3 style0 n">7450<br></td>
          </tr>
          <tr class="row114">
            <td class="column0 style0 s">Дубна<br></td>
            <td class="column1 style0 n">13500<br></td>
            <td class="column2 style0 n">14850<br></td>
            <td class="column3 style0 n">20250<br></td>
          </tr>
          <tr class="row115">
            <td class="column0 style0 s">Дудкино(Ленинский р-н)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row116">
            <td class="column0 style0 s">Дудкино(Солнечногорский р-н)<br></td>
            <td class="column1 style0 n">6300<br></td>
            <td class="column2 style0 n">6900<br></td>
            <td class="column3 style0 n">9450<br></td>
          </tr>
          <tr class="row117">
            <td class="column0 style0 s">Дудкино(Наро-Фоминский р-н)<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row118">
            <td class="column0 style0 s">Е<br></td>
            
            
             
          </tr>
          <tr class="row119">
            <td class="column0 style0 s">Егорьевск,город<br></td>
            <td class="column1 style0 n">13500<br></td>
            <td class="column2 style0 n">14850<br></td>
            <td class="column3 style0 n">20250<br></td>
          </tr>
          <tr class="row120">
            <td class="column0 style0 s">Ершово<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row121">
            <td class="column0 style0 s">Ж<br></td>
            
            
             
          </tr>
          <tr class="row122">
            <td class="column0 style0 s">Жаворонки(Можайское ш.)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row123">
            <td class="column0 style0 s">Жаворонки(Минское ш.)<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2475<br></td>
          </tr>
          <tr class="row124">
            <td class="column0 style0 s">Жедочи<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4290<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row125">
            <td class="column0 style0 s">Железнодорожный,город<br></td>
            <td class="column1 style0 n">6900<br></td>
            <td class="column2 style0 n">7590<br></td>
            <td class="column3 style0 n">10350<br></td>
          </tr>
          <tr class="row126">
            <td class="column0 style0 s">Жуковка<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row127">
            <td class="column0 style0 s">Жуковка(корт)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row128">
            <td class="column0 style0 s">Жуковка-2<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row129">
            <td class="column0 style0 s">Жуковский,город<br></td>
            <td class="column1 style0 n">6900<br></td>
            <td class="column2 style0 n">7590<br></td>
            <td class="column3 style0 n">10350<br></td>
          </tr>
          <tr class="row130">
            <td class="column0 style0 s">Жулебино<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row131">
            <td class="column0 style0 s">З<br></td>
            
            
             
          </tr>
          <tr class="row132">
            <td class="column0 style0 s">Загорск(Сергиев-Посадю,Загорские)<br></td>
            <td class="column1 style0 n">10200<br></td>
            <td class="column2 style0 n">10200<br></td>
            <td class="column3 style0 n">15300<br></td>
          </tr>
          <tr class="row133">
            <td class="column0 style0 s">Загорье(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row134">
            <td class="column0 style0 s">Загорье(Солнечногорский)<br></td>
            <td class="column1 style0 n">7350<br></td>
            <td class="column2 style0 n">8100<br></td>
            <td class="column3 style0 n">11025<br></td>
          </tr>
          <tr class="row135">
            <td class="column0 style0 s">Загорье(Истринский р-н)<br></td>
            <td class="column1 style0 n">6750<br></td>
            <td class="column2 style0 n">7425<br></td>
            <td class="column3 style0 n">10150<br></td>
          </tr>
          <tr class="row136">
            <td class="column0 style0 s">Здравница(Можайское ш)<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row137">
            <td class="column0 style0 s">Здравница(Минское  ш)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row138">
            <td class="column0 style0 s">Зайцево<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1485<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row139">
            <td class="column0 style0 s">Заречье<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1815<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row140">
            <td class="column0 style0 s">Захарково(Красногорский)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row141">
            <td class="column0 style0 s">Захарково(Чеховский р-н)<br></td>
            <td class="column1 style0 n">7800<br></td>
            <td class="column2 style0 n">8580<br></td>
            <td class="column3 style0 n">11700<br></td>
          </tr>
          <tr class="row142">
            <td class="column0 style0 s">Захарово(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3375<br></td>
          </tr>
          <tr class="row143">
            <td class="column0 style0 s">Звенигород,город<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row144">
            <td class="column0 style0 s">Зеленая Роща<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row145">
            <td class="column0 style0 s">Зеленоград,город<br></td>
            <td class="column1 style0 n">4650<br></td>
            <td class="column2 style0 n">5100<br></td>
            <td class="column3 style0 n">7000<br></td>
          </tr>
          <tr class="row146">
            <td class="column0 style0 s">Знаменское<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row147">
            <td class="column0 style0 s">Зональный поселок<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row148">
            <td class="column0 style0 s">И<br></td>
            
            
             
          </tr>
          <tr class="row149">
            <td class="column0 style0 s">Ивановка(Звенигород)<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row150">
            <td class="column0 style0 s">Ивановское(Красногорский)<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2475<br></td>
            <td class="column3 style0 n">3375<br></td>
          </tr>
          <tr class="row151">
            <td class="column0 style0 s">Ивановское(Истринский р-н)<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row152">
            <td class="column0 style0 s">Ивантеевка<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row153">
            <td class="column0 style0 s">Иглово<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5280<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row154">
            <td class="column0 style0 s">Изварьино<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row155">
            <td class="column0 style0 s">Измалково<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row156">
            <td class="column0 style0 s">Икша<br></td>
            <td class="column1 style0 n">6450<br></td>
            <td class="column2 style0 n">7095<br></td>
            <td class="column3 style0 n">9700<br></td>
          </tr>
          <tr class="row157">
            <td class="column0 style0 s">Ильинское<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row158">
            <td class="column0 style0 s">Иславское<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3375<br></td>
          </tr>
          <tr class="row159">
            <td class="column0 style0 s">Истра,город<br></td>
            <td class="column1 style0 n">4950<br></td>
            <td class="column2 style0 n">5450<br></td>
            <td class="column3 style0 n">7400<br></td>
          </tr>
          <tr class="row160">
            <td class="column0 style0 s">Истра,поселок(Красногорский)<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row161">
            <td class="column0 style0 s">К<br></td>
            
            
             
          </tr>
          <tr class="row162">
            <td class="column0 style0 s">Калининец<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row163">
            <td class="column0 style0 s">Калуга,город<br></td>
            <td class="column1 style0 n">15300<br></td>
            <td class="column2 style0 n">16800<br></td>
            <td class="column3 style0 n">22950<br></td>
          </tr>
          <tr class="row164">
            <td class="column0 style0 s">Капань<br></td>
            <td class="column1 style0 n">5550<br></td>
            <td class="column2 style0 n">6100<br></td>
            <td class="column3 style0 n">8325<br></td>
          </tr>
          <tr class="row165">
            <td class="column0 style0 s">Капотня<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row166">
            <td class="column0 style0 s">Каринское<br></td>
            <td class="column1 style0 n">4350<br></td>
            <td class="column2 style0 n">4785<br></td>
            <td class="column3 style0 n">6500<br></td>
          </tr>
          <tr class="row167">
            <td class="column0 style0 s">Картамазово<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row168">
            <td class="column0 style0 s">Кашира<br></td>
            <td class="column1 style0 n">13500<br></td>
            <td class="column2 style0 n">14850<br></td>
            <td class="column3 style0 n">20250<br></td>
          </tr>
          <tr class="row169">
            <td class="column0 style0 s">Киевский поселок<br></td>
            <td class="column1 style0 n">4350<br></td>
            <td class="column2 style0 n">4800<br></td>
            <td class="column3 style0 n">6525<br></td>
          </tr>
          <tr class="row170">
            <td class="column0 style0 s">Кимры<br></td>
            <td class="column1 style0 n">15300<br></td>
            <td class="column2 style0 n">16830<br></td>
            <td class="column3 style0 n">22950<br></td>
          </tr>
          <tr class="row171">
            <td class="column0 style0 s">Киржач<br></td>
            <td class="column1 style0 n">12000<br></td>
            <td class="column2 style0 n">13200<br></td>
            <td class="column3 style0 n">18000<br></td>
          </tr>
          <tr class="row172">
            <td class="column0 style0 s">Климовск,город<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5900<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row173">
            <td class="column0 style0 s">Клин<br></td>
            <td class="column1 style0 n">9000<br></td>
            <td class="column2 style0 n">9900<br></td>
            <td class="column3 style0 n">13500<br></td>
          </tr>
          <tr class="row174">
            <td class="column0 style0 s">Кобяково(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3375<br></td>
          </tr>
          <tr class="row175">
            <td class="column0 style0 s">Кобяково(Наро-Фоминский р-н)<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10890<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row176">
            <td class="column0 style0 s">Козино(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row177">
            <td class="column0 style0 s">Козино(Красногорский р-н)<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4500<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row178">
            <td class="column0 style0 s">Кокошкино<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row179">
            <td class="column0 style0 s">Коломна,город<br></td>
            <td class="column1 style0 n">12600<br></td>
            <td class="column2 style0 n">13860<br></td>
            <td class="column3 style0 n">18900<br></td>
          </tr>
          <tr class="row180">
            <td class="column0 style0 s">Калчуга<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2050<br></td>
          </tr>
          <tr class="row181">
            <td class="column0 style0 s">Колюбакино<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5940<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row182">
            <td class="column0 style0 s">Комунарка<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2900<br></td>
          </tr>
          <tr class="row183">
            <td class="column0 style0 s">Коптево<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row184">
            <td class="column0 style0 s">Королев,город<br></td>
            <td class="column1 style0 n">5550<br></td>
            <td class="column2 style0 n">6100<br></td>
            <td class="column3 style0 n">8300<br></td>
          </tr>
          <tr class="row185">
            <td class="column0 style0 s">Косино<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5280<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row186">
            <td class="column0 style0 s">Красково<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5280<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row187">
            <td class="column0 style0 s">Красная Пахра<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row188">
            <td class="column0 style0 s">Красногорск<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row189">
            <td class="column0 style0 s">Краснознаменск<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row190">
            <td class="column0 style0 s">Крекшино<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row191">
            <td class="column0 style0 s">Крюково<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row192">
            <td class="column0 style0 s">Крюково(Зеленоград)<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row193">
            <td class="column0 style0 s">Кубинка<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6075<br></td>
          </tr>
          <tr class="row194">
            <td class="column0 style0 s">Кубинка(Новый Городок)<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row195">
            <td class="column0 style0 s">Кубинка(Старый Городок)<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4455<br></td>
            <td class="column3 style0 n">4450<br></td>
          </tr>
          <tr class="row196">
            <td class="column0 style0 s">Кубинка санаторий им.Герцена<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row197">
            <td class="column0 style0 s">Кунцево(тех.центр)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row198">
            <td class="column0 style0 s">Купавна Новая<br></td>
            <td class="column1 style0 n">5850<br></td>
            <td class="column2 style0 n">6400<br></td>
            <td class="column3 style0 n">8800<br></td>
          </tr>
          <tr class="row199">
            <td class="column0 style0 s">Купавна Старая<br></td>
            <td class="column1 style0 n">6300<br></td>
            <td class="column2 style0 n">6930<br></td>
            <td class="column3 style0 n">9450<br></td>
          </tr>
          <tr class="row200">
            <td class="column0 style0 s">Куркино<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row201">
            <td class="column0 style0 s">Л<br></td>
            
            
             
          </tr>
          <tr class="row202">
            <td class="column0 style0 s">Лапино<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row203">
            <td class="column0 style0 s">Лапино Учитель<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row204">
            <td class="column0 style0 s">Лапино-Град<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row205">
            <td class="column0 style0 s">Лапино СНТ<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row206">
            <td class="column0 style0 s">Лапшинка<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row207">
            <td class="column0 style0 s">Ларюшино<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row208">
            <td class="column0 style0 s">Лесной Городок станция<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row209">
            <td class="column0 style0 s">Лесной Городок <br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row210">
            <td class="column0 style0 s">Лесные Дали<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row211">
            <td class="column0 style0 s">Лесные Просторы(Успенка)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row212">
            <td class="column0 style0 s">Летний Отдых<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row213">
            <td class="column0 style0 s">Лефортово<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row214">
            <td class="column0 style0 s">Лешково<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row215">
            <td class="column0 style0 s">Лианозово<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4290<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row216">
            <td class="column0 style0 s">Ликино<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row217">
            <td class="column0 style0 s">Ликова<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row218">
            <td class="column0 style0 s">Липки<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row219">
            <td class="column0 style0 s">Лихоборы<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row220">
            <td class="column0 style0 s">Лобня<br></td>
            <td class="column1 style0 n">4950<br></td>
            <td class="column2 style0 n">5450<br></td>
            <td class="column3 style0 n">7425<br></td>
          </tr>
          <tr class="row221">
            <td class="column0 style0 s">Локотня<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row222">
            <td class="column0 style0 s">Лотошино<br></td>
            <td class="column1 style0 n">12600<br></td>
            <td class="column2 style0 n">13850<br></td>
            <td class="column3 style0 n">18900<br></td>
          </tr>
          <tr class="row223">
            <td class="column0 style0 s">Лызлово<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2025<br></td>
          </tr>
          <tr class="row224">
            <td class="column0 style0 s">Лыткарино<br></td>
            <td class="column1 style0 n">5100<br></td>
            <td class="column2 style0 n">5600<br></td>
            <td class="column3 style0 n">7650<br></td>
          </tr>
          <tr class="row225">
            <td class="column0 style0 s">Люберцы<br></td>
            <td class="column1 style0 n">4350<br></td>
            <td class="column2 style0 n">4800<br></td>
            <td class="column3 style0 n">6500<br></td>
          </tr>
          <tr class="row226">
            <td class="column0 style0 s">Лайково<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row227">
            <td class="column0 style0 s">Лайково( кладбище)<br></td>
            <td class="column1 style0 n">750<br></td>
            <td class="column2 style0 n">850<br></td>
            <td class="column3 style0 n">1150<br></td>
          </tr>
          <tr class="row228">
            <td class="column0 style0 s">М<br></td>
            
            
             
          </tr>
          <tr class="row229">
            <td class="column0 style0 s">Малаховка<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row230">
            <td class="column0 style0 s">Малоярославец<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row231">
            <td class="column0 style0 s">Малышево<br></td>
            <td class="column1 style0 n">8100<br></td>
            <td class="column2 style0 n">8900<br></td>
            <td class="column3 style0 n">12150<br></td>
          </tr>
          <tr class="row232">
            <td class="column0 style0 s">Мамыри<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row233">
            <td class="column0 style0 s">Мартьяново<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row234">
            <td class="column0 style0 s">Марушкино<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row235">
            <td class="column0 style0 s">Марфино(Дмитровка)<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5950<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row236">
            <td class="column0 style0 s">Марфино(Ашан)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row237">
            <td class="column0 style0 s">Марфино поселок<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row238">
            <td class="column0 style0 s">Маслово(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row239">
            <td class="column0 style0 s">Маслово(Солнечногорский)<br></td>
            <td class="column1 style0 n">6900<br></td>
            <td class="column2 style0 n">7590<br></td>
            <td class="column3 style0 n">10350<br></td>
          </tr>
          <tr class="row240">
            <td class="column0 style0 s">Маслово(Каширский р-н)<br></td>
            <td class="column1 style0 n">15300<br></td>
            <td class="column2 style0 n">16830<br></td>
            <td class="column3 style0 n">22950<br></td>
          </tr>
          <tr class="row241">
            <td class="column0 style0 s">Матвейково(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2025<br></td>
          </tr>
          <tr class="row242">
            <td class="column0 style0 s">Матвейково(Дмитровский р-н)<br></td>
            <td class="column1 style0 n">7950<br></td>
            <td class="column2 style0 n">8750<br></td>
            <td class="column3 style0 n">11925<br></td>
          </tr>
          <tr class="row243">
            <td class="column0 style0 s">Матвейково(Истринский р-н)<br></td>
            <td class="column1 style0 n">6750<br></td>
            <td class="column2 style0 n">7450<br></td>
            <td class="column3 style0 n">10150<br></td>
          </tr>
          <tr class="row244">
            <td class="column0 style0 s">Матвеевское<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row245">
            <td class="column0 style0 s">Матвеевское(Подольский р-н)<br></td>
            <td class="column1 style0 n">5850<br></td>
            <td class="column2 style0 n">6400<br></td>
            <td class="column3 style0 n">8800<br></td>
          </tr>
          <tr class="row246">
            <td class="column0 style0 s">Минск(кинотеатр)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row247">
            <td class="column0 style0 s">Митино<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row248">
            <td class="column0 style0 s">Митькино<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row249">
            <td class="column0 style0 s">Митькино(Дмитровский р-н)<br></td>
            <td class="column1 style0 n">9000<br></td>
            <td class="column2 style0 n">9900<br></td>
            <td class="column3 style0 n">13500<br></td>
          </tr>
          <tr class="row250">
            <td class="column0 style0 s">Михайловское(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">5100<br></td>
            <td class="column2 style0 n">5600<br></td>
            <td class="column3 style0 n">7650<br></td>
          </tr>
          <tr class="row251">
            <td class="column0 style0 s">Михайловское(Подольский)<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5940<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row252">
            <td class="column0 style0 s">Михайловское(Рузский р-н)<br></td>
            <td class="column1 style0 n">8700<br></td>
            <td class="column2 style0 n">9600<br></td>
            <td class="column3 style0 n">13050<br></td>
          </tr>
          <tr class="row253">
            <td class="column0 style0 s">Мичуринский проспект<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2925<br></td>
          </tr>
          <tr class="row254">
            <td class="column0 style0 s">Можайск<br></td>
            <td class="column1 style0 n">7800<br></td>
            <td class="column2 style0 n">8600<br></td>
            <td class="column3 style0 n">11700<br></td>
          </tr>
          <tr class="row255">
            <td class="column0 style0 s">Молоденово<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row256">
            <td class="column0 style0 s">Монино<br></td>
            <td class="column1 style0 n">6600<br></td>
            <td class="column2 style0 n">7250<br></td>
            <td class="column3 style0 n">9900<br></td>
          </tr>
          <tr class="row257">
            <td class="column0 style0 s">Московский поселок<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row258">
            <td class="column0 style0 s">Мострентген<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row259">
            <td class="column0 style0 s">Мотель Можайский<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1350<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row260">
            <td class="column0 style0 s">Мытищи<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row261">
            <td class="column0 style0 s">Н<br></td>
            
            
             
          </tr>
          <tr class="row262">
            <td class="column0 style0 s">Назарьево<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row263">
            <td class="column0 style0 s">Наро-Осаново<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row264">
            <td class="column0 style0 s">Наро-Фоминск<br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5950<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row265">
            <td class="column0 style0 s">Нахабино<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row266">
            <td class="column0 style0 s">Немчиновка через Техцентр<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row267">
            <td class="column0 style0 s">Немчиново<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1822<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row268">
            <td class="column0 style0 s">Николина Гора<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row269">
            <td class="column0 style0 s">Никонорово<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row270">
            <td class="column0 style0 s">Николино(2-Успенка)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row271">
            <td class="column0 style0 s">Николино Поле<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row272">
            <td class="column0 style0 s">Николо-Урюпино<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row273">
            <td class="column0 style0 s">Никольское(Дмитровский р-н)<br></td>
            <td class="column1 style0 n">6300<br></td>
            <td class="column2 style0 n">6922<br></td>
            <td class="column3 style0 n">9450<br></td>
          </tr>
          <tr class="row274">
            <td class="column0 style0 s">Никольское(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row275">
            <td class="column0 style0 s">Никольское(Солнечногорск)<br></td>
            <td class="column1 style0 n">5550<br></td>
            <td class="column2 style0 n">6100<br></td>
            <td class="column3 style0 n">8300<br></td>
          </tr>
          <tr class="row276">
            <td class="column0 style0 s">Никольское(Истринский р-н)<br></td>
            <td class="column1 style0 n">5700<br></td>
            <td class="column2 style0 n">6270<br></td>
            <td class="column3 style0 n">8550<br></td>
          </tr>
          <tr class="row277">
            <td class="column0 style0 s">Новогорск<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row278">
            <td class="column0 style0 s">Новое Гришино(Дмитровский р-н)<br></td>
            <td class="column1 style0 n">7500<br></td>
            <td class="column2 style0 n">8250<br></td>
            <td class="column3 style0 n">11250<br></td>
          </tr>
          <tr class="row279">
            <td class="column0 style0 s">Ново-Дарьино<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1485<br></td>
            <td class="column3 style0 n">2025<br></td>
          </tr>
          <tr class="row280">
            <td class="column0 style0 s">Новокосино<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5280<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row281">
            <td class="column0 style0 s">Новоивановское <br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row282">
            <td class="column0 style0 s">Ново-Переделкино<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1815<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row283">
            <td class="column0 style0 s">Новошихово 40км<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row284">
            <td class="column0 style0 s">Ногинск<br></td>
            <td class="column1 style0 n">8100<br></td>
            <td class="column2 style0 n">8900<br></td>
            <td class="column3 style0 n">12150<br></td>
          </tr>
          <tr class="row285">
            <td class="column0 style0 s">О<br></td>
            
            
             
          </tr>
          <tr class="row286">
            <td class="column0 style0 s">Обнинск<br></td>
            <td class="column1 style0 n">8250<br></td>
            <td class="column2 style0 n">9100<br></td>
            <td class="column3 style0 n">12375<br></td>
          </tr>
          <tr class="row287">
            <td class="column0 style0 s">Огарево<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row288">
            <td class="column0 style0 s">Опалиха<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4725<br></td>
          </tr>
          <tr class="row289">
            <td class="column0 style0 s">Орехово-Борисово<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row290">
            <td class="column0 style0 s">Орехово-Зуево<br></td>
            <td class="column1 style0 n">12000<br></td>
            <td class="column2 style0 n">13200<br></td>
            <td class="column3 style0 n">18000<br></td>
          </tr>
          <tr class="row291">
            <td class="column0 style0 s">Осоргино<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row292">
            <td class="column0 style0 s">Остафьево<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row293">
            <td class="column0 style0 s">Очаково<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row294">
            <td class="column0 style0 s">П<br></td>
            
            
             
          </tr>
          <tr class="row295">
            <td class="column0 style0 s">Павловская Слобода<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row296">
            <td class="column0 style0 s">Павловский Посад<br></td>
            <td class="column1 style0 n">10500<br></td>
            <td class="column2 style0 n">11550<br></td>
            <td class="column3 style0 n">15750<br></td>
          </tr>
          <tr class="row297">
            <td class="column0 style0 s">Павшино(Красногорский р-н)<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3375<br></td>
          </tr>
          <tr class="row298">
            <td class="column0 style0 s">Палицы ( Одинцовский р-он)<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3825<br></td>
          </tr>
          <tr class="row299">
            <td class="column0 style0 s">Первомайское(Наро-Фоминский р-н)<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row300">
            <td class="column0 style0 s">Переделки<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row301">
            <td class="column0 style0 s">Ново- Переделкино<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row302">
            <td class="column0 style0 s">Переделкино(станция)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row303">
            <td class="column0 style0 s">Переславль Залесский,город<br></td>
            <td class="column1 style0 n">15300<br></td>
            <td class="column2 style0 n">16800<br></td>
            <td class="column3 style0 n">22950<br></td>
          </tr>
          <tr class="row304">
            <td class="column0 style0 s">Перово<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4550<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row305">
            <td class="column0 style0 s">ст. Перхушково ( до переезда)<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row306">
            <td class="column0 style0 s">ст. Перхушково ( после переезда)<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row307">
            <td class="column0 style0 s">д.Перхушково<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row308">
            <td class="column0 style0 s">Перхушково больница<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row309">
            <td class="column0 style0 s">Перхушково реабилитационный центр<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1155<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row310">
            <td class="column0 style0 s">Пестово<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row311">
            <td class="column0 style0 s">Пестово(Мытищинский р-н)<br></td>
            <td class="column1 style0 n">6600<br></td>
            <td class="column2 style0 n">7250<br></td>
            <td class="column3 style0 n">9900<br></td>
          </tr>
          <tr class="row312">
            <td class="column0 style0 s">Петелино<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row313">
            <td class="column0 style0 s">Петрово-Дальнее<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row314">
            <td class="column0 style0 s">Подлипки<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row315">
            <td class="column0 style0 s">Подольск<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row316">
            <td class="column0 style0 s">Подушкино<br></td>
            <td class="column1 style0 n">750<br></td>
            <td class="column2 style0 n">850<br></td>
            <td class="column3 style0 n">1125<br></td>
          </tr>
          <tr class="row317">
            <td class="column0 style0 s">Поздняково(Красногорский р-н)<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row318">
            <td class="column0 style0 s">Поздняково(Дмитровский р-н)<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row319">
            <td class="column0 style0 s">Поздняково(Можайский р-н)<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row320">
            <td class="column0 style0 s">Покровское<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row321">
            <td class="column0 style0 s">Полушкино(Одинцовский р-н)<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row322">
            <td class="column0 style0 s">Полушкино(Раменский р-н)<br></td>
            <td class="column1 style0 n">7050<br></td>
            <td class="column2 style0 n">7800<br></td>
            <td class="column3 style0 n">10575<br></td>
          </tr>
          <tr class="row323">
            <td class="column0 style0 s">Поречье(под Тучково)<br></td>
            <td class="column1 style0 n">5550<br></td>
            <td class="column2 style0 n">6100<br></td>
            <td class="column3 style0 n">8325<br></td>
          </tr>
          <tr class="row324">
            <td class="column0 style0 s">Постниково<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row325">
            <td class="column0 style0 s">Путилково<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row326">
            <td class="column0 style0 s">Пушкино<br></td>
            <td class="column1 style0 n">6300<br></td>
            <td class="column2 style0 n">6950<br></td>
            <td class="column3 style0 n">9450<br></td>
          </tr>
          <tr class="row327">
            <td class="column0 style0 s">Пущино(Серпухов)<br></td>
            <td class="column1 style0 n">11700<br></td>
            <td class="column2 style0 n">12900<br></td>
            <td class="column3 style0 n">17550<br></td>
          </tr>
          <tr class="row328">
            <td class="column0 style0 s">Пыхтино<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row329">
            <td class="column0 style0 s">Р<br></td>
            
            
             
          </tr>
          <tr class="row330">
            <td class="column0 style0 s">Рабочий поселок  <br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row331">
            <td class="column0 style0 s">Раздоры<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row332">
            <td class="column0 style0 s">Ракитки(поселок)<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row333">
            <td class="column0 style0 s">Раменское<br></td>
            <td class="column1 style0 n">6900<br></td>
            <td class="column2 style0 n">7600<br></td>
            <td class="column3 style0 n">10350<br></td>
          </tr>
          <tr class="row334">
            <td class="column0 style0 s">Рассказовка<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row335">
            <td class="column0 style0 s">Рассудово<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row336">
            <td class="column0 style0 s">Реабилитац.Уентр Рублево<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row337">
            <td class="column0 style0 s">Реутов<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row338">
            <td class="column0 style0 s">Рождественно<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row339">
            <td class="column0 style0 s">Ростов Великий,город<br></td>
            <td class="column1 style0 n">21600<br></td>
            <td class="column2 style0 n">23750<br></td>
            <td class="column3 style0 n">32400<br></td>
          </tr>
          <tr class="row340">
            <td class="column0 style0 s">Ромашково<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row341">
            <td class="column0 style0 s">ст. Ромашково<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row342">
            <td class="column0 style0 s">Рублево<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row343">
            <td class="column0 style0 s">Руза<br></td>
            <td class="column1 style0 n">7650<br></td>
            <td class="column2 style0 n">8400<br></td>
            <td class="column3 style0 n">11500<br></td>
          </tr>
          <tr class="row344">
            <td class="column0 style0 s">Румянцево<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row345">
            <td class="column0 style0 s">Рюмочки(МВТ)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row346">
            <td class="column0 style0 s">ЖК Рублевский<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row347">
            <td class="column0 style0 s">С<br></td>
            
            
             
          </tr>
          <tr class="row348">
            <td class="column0 style0 s">Саввинская Слобода<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row349">
            <td class="column0 style0 s">Сареево Большое<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row350">
            <td class="column0 style0 s">Сареево Малое<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1575<br></td>
          </tr>
          <tr class="row351">
            <td class="column0 style0 s">Сельская Новь<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row352">
            <td class="column0 style0 s">Селятино<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3465<br></td>
            <td class="column3 style0 n">4750<br></td>
          </tr>
          <tr class="row353">
            <td class="column0 style0 s">Семенково (Одинцовский район)<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2025<br></td>
          </tr>
          <tr class="row354">
            <td class="column0 style0 s">Сергеев Посад<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row355">
            <td class="column0 style0 s">Серпухов<br></td>
            <td class="column1 style0 n">10800<br></td>
            <td class="column2 style0 n">11900<br></td>
            <td class="column3 style0 n">16200<br></td>
          </tr>
          <tr class="row356">
            <td class="column0 style0 s">Сетунь<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row357">
            <td class="column0 style0 s">Синьково (Одинцовский район)<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row358">
            <td class="column0 style0 s">Сколково<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row359">
            <td class="column0 style0 s">сколково ( инновационный центр на можайском ш)<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row360">
            <td class="column0 style0 s">Скоротово<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row361">
            <td class="column0 style0 s">Снегири<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row362">
            <td class="column0 style0 s">Совхоз Ульяновский<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row363">
            <td class="column0 style0 s">Солманово поле<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row364">
            <td class="column0 style0 s">Солнечногорск<br></td>
            <td class="column1 style0 n">7500<br></td>
            <td class="column2 style0 n">8250<br></td>
            <td class="column3 style0 n">11250<br></td>
          </tr>
          <tr class="row365">
            <td class="column0 style0 s">Солнцево<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row366">
            <td class="column0 style0 s">Солослово<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row367">
            <td class="column0 style0 s">Сосны<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row368">
            <td class="column0 style0 s">Сосенки<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row369">
            <td class="column0 style0 s">Сосновый Бор (Видное)<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3960<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row370">
            <td class="column0 style0 s">Столбовая (Чехов)<br></td>
            <td class="column1 style0 n">6600<br></td>
            <td class="column2 style0 n">7250<br></td>
            <td class="column3 style0 n">9900<br></td>
          </tr>
          <tr class="row371">
            <td class="column0 style0 s">Стольное (Переделки)<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row372">
            <td class="column0 style0 s">Ступино<br></td>
            <td class="column1 style0 n">10800<br></td>
            <td class="column2 style0 n">11900<br></td>
            <td class="column3 style0 n">16200<br></td>
          </tr>
          <tr class="row373">
            <td class="column0 style0 s">Супонево<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row374">
            <td class="column0 style0 s">Сушкинская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row375">
            <td class="column0 style0 s">Сходня<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row376">
            <td class="column0 style0 s">Т<br></td>
            
            
             
          </tr>
          <tr class="row377">
            <td class="column0 style0 s">Таганьково<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row378">
            <td class="column0 style0 s">Тарасовка<br></td>
            <td class="column1 style0 n">5250<br></td>
            <td class="column2 style0 n">5800<br></td>
            <td class="column3 style0 n">7875<br></td>
          </tr>
          <tr class="row379">
            <td class="column0 style0 s">Татарки<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3100<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row380">
            <td class="column0 style0 s">Тверь<br></td>
            <td class="column1 style0 n">16200<br></td>
            <td class="column2 style0 n">17800<br></td>
            <td class="column3 style0 n">24300<br></td>
          </tr>
          <tr class="row381">
            <td class="column0 style0 s">Толстопальцево<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row382">
            <td class="column0 style0 s">Томилино<br></td>
            <td class="column1 style0 n">4650<br></td>
            <td class="column2 style0 n">5150<br></td>
            <td class="column3 style0 n">7000<br></td>
          </tr>
          <tr class="row383">
            <td class="column0 style0 s">Торжок<br></td>
            <td class="column1 style0 n">22500<br></td>
            <td class="column2 style0 n">24750<br></td>
            <td class="column3 style0 n">33750<br></td>
          </tr>
          <tr class="row384">
            <td class="column0 style0 s">Троицк<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row385">
            <td class="column0 style0 s">Троицкое (Звенигород)<br></td>
            <td class="column1 style0 n">4650<br></td>
            <td class="column2 style0 n">5150<br></td>
            <td class="column3 style0 n">7000<br></td>
          </tr>
          <tr class="row386">
            <td class="column0 style0 s">Трубачеевка<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row387">
            <td class="column0 style0 s">Тула<br></td>
            <td class="column1 style0 n">17100<br></td>
            <td class="column2 style0 n">18800<br></td>
            <td class="column3 style0 n">25650<br></td>
          </tr>
          <tr class="row388">
            <td class="column0 style0 s">Тучково<br></td>
            <td class="column1 style0 n">5250<br></td>
            <td class="column2 style0 n">5800<br></td>
            <td class="column3 style0 n">8900<br></td>
          </tr>
          <tr class="row389">
            <td class="column0 style0 s">техгорка 5<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row390">
            <td class="column0 style0 s">У<br></td>
            
            
             
          </tr>
          <tr class="row391">
            <td class="column0 style0 s">Уборы<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row392">
            <td class="column0 style0 s">Уваровка<br></td>
            <td class="column1 style0 n">10800<br></td>
            <td class="column2 style0 n">11880<br></td>
            <td class="column3 style0 n">16200<br></td>
          </tr>
          <tr class="row393">
            <td class="column0 style0 s">Усово<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row394">
            <td class="column0 style0 s">Усово-Тупик<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row395">
            <td class="column0 style0 s">Успенское Дача№2<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row396">
            <td class="column0 style0 s">Успенское село<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row397">
            <td class="column0 style0 s">Ф<br></td>
            
            
             
          </tr>
          <tr class="row398">
            <td class="column0 style0 s">Филимонки<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row399">
            <td class="column0 style0 s">Фирсановка<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row400">
            <td class="column0 style0 s">Фрязино<br></td>
            <td class="column1 style0 n">6300<br></td>
            <td class="column2 style0 n">6900<br></td>
            <td class="column3 style0 n">9450<br></td>
          </tr>
          <tr class="row401">
            <td class="column0 style0 s">Фуньково<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row402">
            <td class="column0 style0 s">Х<br></td>
            
            
             
          </tr>
          <tr class="row403">
            <td class="column0 style0 s">Химки<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row404">
            <td class="column0 style0 s">Химки Старые<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row405">
            <td class="column0 style0 s">Хлюпино<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row406">
            <td class="column0 style0 s">Ховрино<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row407">
            <td class="column0 style0 s">Ч<br></td>
            
            <td class="column2 style0 n">0<br></td>
            <td class="column3 style0 n">0<br></td>
          </tr>
          <tr class="row408">
            <td class="column0 style0 s">Челобитьево<br></td>
            <td class="column1 style0 n">4350<br></td>
            <td class="column2 style0 n">4785<br></td>
            <td class="column3 style0 n">6500<br></td>
          </tr>
          <tr class="row409">
            <td class="column0 style0 s">Чапаевка<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row410">
            <td class="column0 style0 s">Часцы<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row411">
            <td class="column0 style0 s">Черная Грязь<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row412">
            <td class="column0 style0 s">Чехов<br></td>
            <td class="column1 style0 n">7500<br></td>
            <td class="column2 style0 n">8250<br></td>
            <td class="column3 style0 n">11250<br></td>
          </tr>
          <tr class="row413">
            <td class="column0 style0 s">Чигасово<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row414">
            <td class="column0 style0 s">Чупряково<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row415">
            <td class="column0 style0 s">Ш<br></td>
            
            
             
          </tr>
          <tr class="row416">
            <td class="column0 style0 s">Шараповка<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row417">
            <td class="column0 style0 s">Шарапово (Чеховский район)<br></td>
            <td class="column1 style0 n">7050<br></td>
            <td class="column2 style0 n">7800<br></td>
            <td class="column3 style0 n">10670<br></td>
          </tr>
          <tr class="row418">
            <td class="column0 style0 s">Шарапово (Одинцовский район)<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4100<br></td>
            <td class="column3 style0 n">5600<br></td>
          </tr>
          <tr class="row419">
            <td class="column0 style0 s">Шихово<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row420">
            <td class="column0 style0 s">Шишкин Лес<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row421">
            <td class="column0 style0 s">Шульгино (Одинцовский район)<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row422">
            <td class="column0 style0 s">Щ<br></td>
            
            
             
          </tr>
          <tr class="row423">
            <td class="column0 style0 s">Щедрино<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row424">
            <td class="column0 style0 s">Щелково<br></td>
            <td class="column1 style0 n">5700<br></td>
            <td class="column2 style0 n">6270<br></td>
            <td class="column3 style0 n">8550<br></td>
          </tr>
          <tr class="row425">
            <td class="column0 style0 s">Щербинка<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3960<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row426">
            <td class="column0 style0 s">Э<br></td>
            
            
             
          </tr>
          <tr class="row427">
            <td class="column0 style0 s">Электрогорск<br></td>
            <td class="column1 style0 n">9900<br></td>
            <td class="column2 style0 n">10900<br></td>
            <td class="column3 style0 n">14850<br></td>
          </tr>
          <tr class="row428">
            <td class="column0 style0 s">Электросталь<br></td>
            <td class="column1 style0 n">7950<br></td>
            <td class="column2 style0 n">8850<br></td>
            <td class="column3 style0 n">11900<br></td>
          </tr>
          <tr class="row429">
            <td class="column0 style0 s">Электроугли<br></td>
            <td class="column1 style0 n">7500<br></td>
            <td class="column2 style0 n">8250<br></td>
            <td class="column3 style0 n">11250<br></td>
          </tr>
          <tr class="row430">
            <td class="column0 style0 s">Ю<br></td>
            
            
             
          </tr>
          <tr class="row431">
            <td class="column0 style0 s">Юбилейный<br></td>
            <td class="column1 style0 n">5700<br></td>
            <td class="column2 style0 n">6270<br></td>
            <td class="column3 style0 n">8550<br></td>
          </tr>
          <tr class="row432">
            <td class="column0 style0 s">Юдино<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">10000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row433">
            <td class="column0 style0 s">Я<br></td>
            
            
             
          </tr>
          <tr class="row434">
            <td class="column0 style0 s">Ямищево<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row435">
            <td class="column0 style0 s">Яхрома<br></td>
            <td class="column1 style0 n">7800<br></td>
            <td class="column2 style0 n">8600<br></td>
            <td class="column3 style0 n">11700<br></td>
          </tr>
          <tr class="row436">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Станции метро<br></td>
            
            
             
          </tr>
          <tr class="row437">
            <td class="column0 style0 s">А<br></td>
            
            
             
          </tr>
          <tr class="row438">
            <td class="column0 style0 s">Андроновка<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3950<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row439">
            <td class="column0 style0 s">Авиамоторная<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">39650<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row440">
            <td class="column0 style0 s">Автозаводская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row441">
            <td class="column0 style0 s">Академическая<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row442">
            <td class="column0 style0 s">Александровский сад<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row443">
            <td class="column0 style0 s">Алексеевская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row444">
            <td class="column0 style0 s">Алма-Атинская<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row445">
            <td class="column0 style0 s">Алтуфьево<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row446">
            <td class="column0 style0 s">Аннино<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row447">
            <td class="column0 style0 s">Арбатская<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row448">
            <td class="column0 style0 s">Аэропорт<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row449">
            <td class="column0 style0 s">Академика Янгеля<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row450">
            <td class="column0 style0 s">Б<br></td>
            
            
             
          </tr>
          <tr class="row451">
            <td class="column0 style0 s">Балтийская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row452">
            <td class="column0 style0 s">Бабушкинская <br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row453">
            <td class="column0 style0 s">Багратионовская<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row454">
            <td class="column0 style0 s">Баррикадная<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row455">
            <td class="column0 style0 s">Бауманская <br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row456">
            <td class="column0 style0 s">Беговая<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">38000<br></td>
          </tr>
          <tr class="row457">
            <td class="column0 style0 s">Белорусская<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row458">
            <td class="column0 style0 s">Беляево<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row459">
            <td class="column0 style0 s">Белокаменная<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3960<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row460">
            <td class="column0 style0 s">Бибирево<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row461">
            <td class="column0 style0 s">Библиотека имени Ленина<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row462">
            <td class="column0 style0 s">Битцевский парк<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row463">
            <td class="column0 style0 s">Борисово<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row464">
            <td class="column0 style0 s">Боровицкая<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row465">
            <td class="column0 style0 s">Ботанический сад<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3960<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row466">
            <td class="column0 style0 s">Братиславская<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4290<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row467">
            <td class="column0 style0 s">Бульвар Адмирала Ушакова<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row468">
            <td class="column0 style0 s">Бульвар Дмитрия Донского<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row469">
            <td class="column0 style0 s">Бульвар Рокосовского<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3950<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row470">
            <td class="column0 style0 s">Бутырская<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4100<br></td>
            <td class="column3 style0 n">5650<br></td>
          </tr>
          <tr class="row471">
            <td class="column0 style0 s">Бунинская аллея<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row472">
            <td class="column0 style0 s">В<br></td>
            
            
             
          </tr>
          <tr class="row473">
            <td class="column0 style0 s">Варшавская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row474">
            <td class="column0 style0 s">Верхние Котлы<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row475">
            <td class="column0 style0 s">ВДНХ<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row476">
            <td class="column0 style0 s">Владыкино<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row477">
            <td class="column0 style0 s">Водный стадион<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row478">
            <td class="column0 style0 s">Войковская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row479">
            <td class="column0 style0 s">Волгоградский проспект<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row480">
            <td class="column0 style0 s">Волжская<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row481">
            <td class="column0 style0 s">Волоколамская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row482">
            <td class="column0 style0 s">Воробьевы горы<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row483">
            <td class="column0 style0 s">Выставочная<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row484">
            <td class="column0 style0 s">Выхино<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row485">
            <td class="column0 style0 s">Д<br></td>
            
            
             
          </tr>
          <tr class="row486">
            <td class="column0 style0 s">Динамо<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row487">
            <td class="column0 style0 s">Деловой центр<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row488">
            <td class="column0 style0 s">Домодедовская<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row489">
            <td class="column0 style0 s">Достоевская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row490">
            <td class="column0 style0 s">Дмитровская<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3450<br></td>
            <td class="column3 style0 n">4750<br></td>
          </tr>
          <tr class="row491">
            <td class="column0 style0 s">Добрынинская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row492">
            <td class="column0 style0 s">Дубровка<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3450<br></td>
            <td class="column3 style0 n">4700<br></td>
          </tr>
          <tr class="row493">
            <td class="column0 style0 s">Ж<br></td>
            
            
             
          </tr>
          <tr class="row494">
            <td class="column0 style0 s">Жулебино<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4620<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row495">
            <td class="column0 style0 s">З<br></td>
            
            
             
          </tr>
          <tr class="row496">
            <td class="column0 style0 s">Зил<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row497">
            <td class="column0 style0 s">Зорге<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row498">
            <td class="column0 style0 s">Зябликово<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row499">
            <td class="column0 style0 s">И<br></td>
            
            
             
          </tr>
          <tr class="row500">
            <td class="column0 style0 s">Измайлово<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row501">
            <td class="column0 style0 s">Измайловская<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row502">
            <td class="column0 style0 s">К<br></td>
            
            
             
          </tr>
          <tr class="row503">
            <td class="column0 style0 s">Калужская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row504">
            <td class="column0 style0 s">Кантемировская<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">52000<br></td>
          </tr>
          <tr class="row505">
            <td class="column0 style0 s">Каховская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row506">
            <td class="column0 style0 s">Каширская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row507">
            <td class="column0 style0 s">Киевская<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">34000<br></td>
          </tr>
          <tr class="row508">
            <td class="column0 style0 s">Китай-город<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row509">
            <td class="column0 style0 s">Кожуховская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row510">
            <td class="column0 style0 s">Коломенская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row511">
            <td class="column0 style0 s">Котельники<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row512">
            <td class="column0 style0 s">Комсомольская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row513">
            <td class="column0 style0 s">Коптево<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4700<br></td>
          </tr>
          <tr class="row514">
            <td class="column0 style0 s">Коньково<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2600<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row515">
            <td class="column0 style0 s">Красногвардейская<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row516">
            <td class="column0 style0 s">Краснопресненская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row517">
            <td class="column0 style0 s">Красносельская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row518">
            <td class="column0 style0 s">Красные ворота<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row519">
            <td class="column0 style0 s">Крестьянская застава<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4700<br></td>
          </tr>
          <tr class="row520">
            <td class="column0 style0 s">Кропоткинская<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row521">
            <td class="column0 style0 s">Крымская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row522">
            <td class="column0 style0 s">Крылатское<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row523">
            <td class="column0 style0 s">Кузнецкий мост<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row524">
            <td class="column0 style0 s">Кузьминки<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row525">
            <td class="column0 style0 s">Кунцевская<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row526">
            <td class="column0 style0 s">Курская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row527">
            <td class="column0 style0 s">Кутузовская<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row528">
            <td class="column0 style0 s">Л<br></td>
            
            
             
          </tr>
          <tr class="row529">
            <td class="column0 style0 s">Ленинский проспект<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row530">
            <td class="column0 style0 s">Лермонтовский проспект<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row531">
            <td class="column0 style0 s">Лесопарковая<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4700<br></td>
          </tr>
          <tr class="row532">
            <td class="column0 style0 s">Лужники<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row533">
            <td class="column0 style0 s">Лубянка<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row534">
            <td class="column0 style0 s">Люблино<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row535">
            <td class="column0 style0 s">Лихоборы<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4700<br></td>
          </tr>
          <tr class="row536">
            <td class="column0 style0 s">Локомотив<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row537">
            <td class="column0 style0 s">Ломоносовский проспект <br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row538">
            <td class="column0 style0 s">М<br></td>
            
            <td class="column2 style0 n">0<br></td>
             
          </tr>
          <tr class="row539">
            <td class="column0 style0 s">Марксисткая<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4700<br></td>
          </tr>
          <tr class="row540">
            <td class="column0 style0 s">Марьина роща<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row541">
            <td class="column0 style0 s">Марьино<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row542">
            <td class="column0 style0 s">Маяковская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row543">
            <td class="column0 style0 s">Медведково<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row544">
            <td class="column0 style0 s">Международная<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2640<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row545">
            <td class="column0 style0 s">Менделеевская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row546">
            <td class="column0 style0 s">Митино<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row547">
            <td class="column0 style0 s">Минское<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row548">
            <td class="column0 style0 s">Молодежная<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row549">
            <td class="column0 style0 s">Мякинино<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2600<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row550">
            <td class="column0 style0 s">Н<br></td>
            
            
             
          </tr>
          <tr class="row551">
            <td class="column0 style0 s">Нагатинская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row552">
            <td class="column0 style0 s">Нагорная<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row553">
            <td class="column0 style0 s">Нахимовский проспект<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row554">
            <td class="column0 style0 s">Нижегородская<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row555">
            <td class="column0 style0 s">Новогиреево<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row556">
            <td class="column0 style0 s">Новокосино<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5280<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row557">
            <td class="column0 style0 s">Новокузнецкая<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row558">
            <td class="column0 style0 s">новохохловская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row559">
            <td class="column0 style0 s">Новослободская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row560">
            <td class="column0 style0 s">Новоясеневская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row561">
            <td class="column0 style0 s">Новые Черемушки<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row562">
            <td class="column0 style0 s">О<br></td>
            
            
             
          </tr>
          <tr class="row563">
            <td class="column0 style0 s">Окружная<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row564">
            <td class="column0 style0 s">Октябрьская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row565">
            <td class="column0 style0 s">Октябрьское поле<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row566">
            <td class="column0 style0 s">Орехово<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4150<br></td>
            <td class="column3 style0 n">5600<br></td>
          </tr>
          <tr class="row567">
            <td class="column0 style0 s">Отрадное<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">7000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row568">
            <td class="column0 style0 s">Охотный ряд<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3825<br></td>
          </tr>
          <tr class="row569">
            <td class="column0 style0 s">П<br></td>
            
            
             
          </tr>
          <tr class="row570">
            <td class="column0 style0 s">Панфиловская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row571">
            <td class="column0 style0 s">Павелецкая<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row572">
            <td class="column0 style0 s">Парк Культуры<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3700<br></td>
          </tr>
          <tr class="row573">
            <td class="column0 style0 s">Парк Победы<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row574">
            <td class="column0 style0 s">Партизанская<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row575">
            <td class="column0 style0 s">Первомайская<br></td>
            <td class="column1 style0 n">4350<br></td>
            <td class="column2 style0 n">4800<br></td>
            <td class="column3 style0 n">6500<br></td>
          </tr>
          <tr class="row576">
            <td class="column0 style0 s">Перово<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4500<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row577">
            <td class="column0 style0 s">Петровско-Разумовская<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4750<br></td>
          </tr>
          <tr class="row578">
            <td class="column0 style0 s">Печатники<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row579">
            <td class="column0 style0 s">Пионерская<br></td>
            <td class="column1 style0 n">1650<br></td>
            <td class="column2 style0 n">1800<br></td>
            <td class="column3 style0 n">2500<br></td>
          </tr>
          <tr class="row580">
            <td class="column0 style0 s">Планерная<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row581">
            <td class="column0 style0 s">Площадь Ильича<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row582">
            <td class="column0 style0 s">Площадь Революции<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row583">
            <td class="column0 style0 s">Площадь Гагарина<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2600<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row584">
            <td class="column0 style0 s">Полежаевская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row585">
            <td class="column0 style0 s">Полянка<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row586">
            <td class="column0 style0 s">Пражская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3630<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row587">
            <td class="column0 style0 s">Преображенская площадь<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4100<br></td>
            <td class="column3 style0 n">5625<br></td>
          </tr>
          <tr class="row588">
            <td class="column0 style0 s">Пролетарская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row589">
            <td class="column0 style0 s">Проспект Вернадского<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row590">
            <td class="column0 style0 s">Проспект Мира<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row591">
            <td class="column0 style0 s">Профсоюзная<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row592">
            <td class="column0 style0 s">Пушкинская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2800<br></td>
          </tr>
          <tr class="row593">
            <td class="column0 style0 s">Пятницкое шоссе<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">2970<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row594">
            <td class="column0 style0 s">Р<br></td>
            
            
             
          </tr>
          <tr class="row595">
            <td class="column0 style0 s">Раменки<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row596">
            <td class="column0 style0 s">Речной вокзал<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row597">
            <td class="column0 style0 s">Рижская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row598">
            <td class="column0 style0 s">Римская<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row599">
            <td class="column0 style0 s">Ростокино<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row600">
            <td class="column0 style0 s">Румянцево<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row601">
            <td class="column0 style0 s">Рязанский проспект<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row602">
            <td class="column0 style0 s">С<br></td>
            
            
             
          </tr>
          <tr class="row603">
            <td class="column0 style0 s">Савеловская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row604">
            <td class="column0 style0 s">Саларьево<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row605">
            <td class="column0 style0 s">Свиблово<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6075<br></td>
          </tr>
          <tr class="row606">
            <td class="column0 style0 s">Севастопольская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row607">
            <td class="column0 style0 s">Семеновская<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3960<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row608">
            <td class="column0 style0 s">Серпуховская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3850<br></td>
          </tr>
          <tr class="row609">
            <td class="column0 style0 s">Славянский бульвар<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row610">
            <td class="column0 style0 s">Смоленская<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row611">
            <td class="column0 style0 s">Сокол<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row612">
            <td class="column0 style0 s">Соколиная Гора<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4125<br></td>
            <td class="column3 style0 n">5600<br></td>
          </tr>
          <tr class="row613">
            <td class="column0 style0 s">Сокольники<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3500<br></td>
            <td class="column3 style0 n">4750<br></td>
          </tr>
          <tr class="row614">
            <td class="column0 style0 s">Спортивная<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row615">
            <td class="column0 style0 s">Сретенский бульвар<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row616">
            <td class="column0 style0 s">Спартак<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row617">
            <td class="column0 style0 s">Строгино<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row618">
            <td class="column0 style0 s">Стрешнево<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row619">
            <td class="column0 style0 s">Студенческая<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row620">
            <td class="column0 style0 s">Сухаревская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row621">
            <td class="column0 style0 s">Сходненская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row622">
            <td class="column0 style0 s">Т<br></td>
            
            
             
          </tr>
          <tr class="row623">
            <td class="column0 style0 s">Таганская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row624">
            <td class="column0 style0 s">Тверская<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row625">
            <td class="column0 style0 s">Театральная<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2600<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row626">
            <td class="column0 style0 s">Текстильщики<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row627">
            <td class="column0 style0 s">Теплый Стан<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">26500<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row628">
            <td class="column0 style0 s">Тимирязевская<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4150<br></td>
            <td class="column3 style0 n">5600<br></td>
          </tr>
          <tr class="row629">
            <td class="column0 style0 s">Третьяковская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row630">
            <td class="column0 style0 s">Тропарево<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row631">
            <td class="column0 style0 s">Трубная<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">300<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row632">
            <td class="column0 style0 s">Тульская<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row633">
            <td class="column0 style0 s">Тургеневская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row634">
            <td class="column0 style0 s">Тушинская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row635">
            <td class="column0 style0 s">У<br></td>
            
            
             
          </tr>
          <tr class="row636">
            <td class="column0 style0 s">Угрешская<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row637">
            <td class="column0 style0 s">Улица 1905 года<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row638">
            <td class="column0 style0 s">Улица Академика Янгеля<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row639">
            <td class="column0 style0 s">Улица Горчакова<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row640">
            <td class="column0 style0 s">Улица Подбельского<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row641">
            <td class="column0 style0 s">Улица Старокачаловская<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3450<br></td>
            <td class="column3 style0 n">4725<br></td>
          </tr>
          <tr class="row642">
            <td class="column0 style0 s">Улица Скобелевская <br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row643">
            <td class="column0 style0 s">Университет<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2800<br></td>
          </tr>
          <tr class="row644">
            <td class="column0 style0 s">Ф<br></td>
            
            
             
          </tr>
          <tr class="row645">
            <td class="column0 style0 s">Филевский парк<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row646">
            <td class="column0 style0 s">Фили<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row647">
            <td class="column0 style0 s">Фонвизинская<br></td>
            <td class="column1 style0 n">3750<br></td>
            <td class="column2 style0 n">4150<br></td>
            <td class="column3 style0 n">5600<br></td>
          </tr>
          <tr class="row648">
            <td class="column0 style0 s">Фрунзенская<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row649">
            <td class="column0 style0 s">Х<br></td>
            
            
             
          </tr>
          <tr class="row650">
            <td class="column0 style0 s">Хорошево<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3825<br></td>
          </tr>
          <tr class="row651">
            <td class="column0 style0 s">Ц<br></td>
            
            <td class="column2 style0 n">0<br></td>
            <td class="column3 style0 n">0<br></td>
          </tr>
          <tr class="row652">
            <td class="column0 style0 s">Царицыно<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row653">
            <td class="column0 style0 s">Цветной бульвар<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row654">
            <td class="column0 style0 s">Ч<br></td>
            
            
             
          </tr>
          <tr class="row655">
            <td class="column0 style0 s">Черкизовская<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row656">
            <td class="column0 style0 s">Чертановская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row657">
            <td class="column0 style0 s">Чеховская<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row658">
            <td class="column0 style0 s">Чистые пруды<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row659">
            <td class="column0 style0 s">Чкаловская <br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">3450<br></td>
            <td class="column3 style0 n">4750<br></td>
          </tr>
          <tr class="row660">
            <td class="column0 style0 s">Ш<br></td>
            
            
             
          </tr>
          <tr class="row661">
            <td class="column0 style0 s">Шаболовка<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row662">
            <td class="column0 style0 s">Шелепиха<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row663">
            <td class="column0 style0 s">Шоссе Энтузиастов<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row664">
            <td class="column0 style0 s">Шипиловская<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row665">
            <td class="column0 style0 s">Щ<br></td>
            
            
             
          </tr>
          <tr class="row666">
            <td class="column0 style0 s">Щёлковская<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row667">
            <td class="column0 style0 s">Щукинская<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row668">
            <td class="column0 style0 s">Э<br></td>
            
            
             
          </tr>
          <tr class="row669">
            <td class="column0 style0 s">Электрозаводская<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row670">
            <td class="column0 style0 s">Ю<br></td>
            
            
             
          </tr>
          <tr class="row671">
            <td class="column0 style0 s">Юго-Западная<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row672">
            <td class="column0 style0 s">Южная<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row673">
            <td class="column0 style0 s">Я<br></td>
            
            
             
          </tr>
          <tr class="row674">
            <td class="column0 style0 s">Ясенево<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row675">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Аэропорты<br></td>
            
            
             
          </tr>
          <tr class="row676">
            <td class="column0 style0 s">Быково<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row677">
            <td class="column0 style0 s">Внуково<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row678">
            <td class="column0 style0 s">Домодедово<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row679">
            <td class="column0 style0 s">Шереметьево (терминалы D , Е,F)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row680">
            <td class="column0 style0 s">Шереметьево (терминалы A, B, C)<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3950<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row681">
            <td class="column0 style0 s">Жуковский<br></td>
            <td class="column1 style0 n">6000<br></td>
            <td class="column2 style0 n">6600<br></td>
            <td class="column3 style0 n">9000<br></td>
          </tr>
          <tr class="row682">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Вокзалы<br></td>
            
            
             
          </tr>
          <tr class="row683">
            <td class="column0 style0 s">Белорусский<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row684">
            <td class="column0 style0 s">Казанский,Ленинградский,Ярославский<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row685">
            <td class="column0 style0 s">Киевский<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row686">
            <td class="column0 style0 s">Курский<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row687">
            <td class="column0 style0 s">Павелецкий<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row688">
            <td class="column0 style0 s">Рижский<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row689">
            <td class="column0 style0 s">Савеловский<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">3800<br></td>
          </tr>
          <tr class="row690">
            <td class="column0 style0 s">Северный Речной вокзал<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row691">
            <td class="column0 style0 s">Южный Речной вокзал<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row692">
            <td class="column0 style0 s">Автовокзал Южные ворота<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row693">
            <td class="column0 style0 s">Автовокзал м.Красногвардейская <br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row694">
            <td class="column0 style0 s">Автовокзал Щелковский<br></td>
            <td class="column1 style0 n">3900<br></td>
            <td class="column2 style0 n">4300<br></td>
            <td class="column3 style0 n">5850<br></td>
          </tr>
          <tr class="row695">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Рынки<br></td>
            
            
             
          </tr>
          <tr class="row696">
            <td class="column0 style0 s">Акос<br></td>
            <td class="column1 style0 n">750<br></td>
            <td class="column2 style0 n">850<br></td>
            <td class="column3 style0 n">1150<br></td>
          </tr>
          <tr class="row697">
            <td class="column0 style0 s">ВВЦ(ВДНХ)<br></td>
            <td class="column1 style0 n">3450<br></td>
            <td class="column2 style0 n">3800<br></td>
            <td class="column3 style0 n">5200<br></td>
          </tr>
          <tr class="row698">
            <td class="column0 style0 s">Горбушка<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">3000<br></td>
          </tr>
          <tr class="row699">
            <td class="column0 style0 s">Динамо<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row700">
            <td class="column0 style0 s">Дорогомилово<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row701">
            <td class="column0 style0 s">Каширский двор<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">3950<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row702">
            <td class="column0 style0 s">Коньково<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row703">
            <td class="column0 style0 s">Лужники<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row704">
            <td class="column0 style0 s">Мельница 41 км МКАД<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row705">
            <td class="column0 style0 s">Митинский<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row706">
            <td class="column0 style0 s">Перовский<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row707">
            <td class="column0 style0 s">Престиж-М 51км МКАД<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row708">
            <td class="column0 style0 s">Садовод<br></td>
            <td class="column1 style0 n">4800<br></td>
            <td class="column2 style0 n">5300<br></td>
            <td class="column3 style0 n">7200<br></td>
          </tr>
          <tr class="row709">
            <td class="column0 style0 s">Синдика-О 65 км МКАД<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row710">
            <td class="column0 style0 s">ТВЦ<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row711">
            <td class="column0 style0 s">Тушинский<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2800<br></td>
          </tr>
          <tr class="row712">
            <td class="column0 style0 s">Major 47 км МКАД<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2300<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row713">
            <td class="column0 style0 s">Major Новорижское шоссе<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2800<br></td>
          </tr>
          <tr class="row714">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Дома отдыха,санатории<br></td>
            
            
             
          </tr>
          <tr class="row715">
            <td class="column0 style0 s">Архангельское <br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row716">
            <td class="column0 style0 s">Васильевское<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row717">
            <td class="column0 style0 s">Елочка(Звенигород)<br></td>
            <td class="column1 style0 n">4200<br></td>
            <td class="column2 style0 n">4600<br></td>
            <td class="column3 style0 n">6300<br></td>
          </tr>
          <tr class="row718">
            <td class="column0 style0 s">Евршово<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row719">
            <td class="column0 style0 s">Лесной городок (Осоргино)<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row720">
            <td class="column0 style0 s">Лесные Дали<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row721">
            <td class="column0 style0 s">Липки<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row722">
            <td class="column0 style0 s">Озера<br></td>
            <td class="column1 style0 n">750<br></td>
            <td class="column2 style0 n">850<br></td>
            <td class="column3 style0 n">1100<br></td>
          </tr>
          <tr class="row723">
            <td class="column0 style0 s">Петрово-Дальнее<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2950<br></td>
          </tr>
          <tr class="row724">
            <td class="column0 style0 s">Покровское <br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row725">
            <td class="column0 style0 s">Полушкино<br></td>
            <td class="column1 style0 n">5100<br></td>
            <td class="column2 style0 n">5600<br></td>
            <td class="column3 style0 n">7650<br></td>
          </tr>
          <tr class="row726">
            <td class="column0 style0 s">Поляны<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2800<br></td>
          </tr>
          <tr class="row727">
            <td class="column0 style0 s">Поречье(Звенигород)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row728">
            <td class="column0 style0 s">Поречье(Тучково)<br></td>
            <td class="column1 style0 n">5550<br></td>
            <td class="column2 style0 n">6100<br></td>
            <td class="column3 style0 n">8300<br></td>
          </tr>
          <tr class="row729">
            <td class="column0 style0 s">Сан. Имени Герцена<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row730">
            <td class="column0 style0 s">Солнечная поляна<br></td>
            <td class="column1 style0 n">4350<br></td>
            <td class="column2 style0 n">4800<br></td>
            <td class="column3 style0 n">6500<br></td>
          </tr>
          <tr class="row731">
            <td class="column0 style0 s">Сосны<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row732">
            <td class="column0 style0 s">Снегири <br></td>
            <td class="column1 style0 n">5400<br></td>
            <td class="column2 style0 n">5950<br></td>
            <td class="column3 style0 n">8100<br></td>
          </tr>
          <tr class="row733">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ЖД станции<br></td>
            
            
             
          </tr>
          <tr class="row734">
            <td class="column0 style0 s">Бекасово<br></td>
            <td class="column1 style0 n">4500<br></td>
            <td class="column2 style0 n">4950<br></td>
            <td class="column3 style0 n">6750<br></td>
          </tr>
          <tr class="row735">
            <td class="column0 style0 s">Внуково<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row736">
            <td class="column0 style0 s">Дачная<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row737">
            <td class="column0 style0 s">Дорохово<br></td>
            <td class="column1 style0 n">5850<br></td>
            <td class="column2 style0 n">6450<br></td>
            <td class="column3 style0 n">8800<br></td>
          </tr>
          <tr class="row738">
            <td class="column0 style0 s">Жаворонки <br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row739">
            <td class="column0 style0 s">Здравница<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row740">
            <td class="column0 style0 s">Звенигород<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3650<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row741">
            <td class="column0 style0 s">Кубинка<br></td>
            <td class="column1 style0 n">4050<br></td>
            <td class="column2 style0 n">4450<br></td>
            <td class="column3 style0 n">6100<br></td>
          </tr>
          <tr class="row742">
            <td class="column0 style0 s">Переделкино<br></td>
            <td class="column1 style0 n">1350<br></td>
            <td class="column2 style0 n">1500<br></td>
            <td class="column3 style0 n">2000<br></td>
          </tr>
          <tr class="row743">
            <td class="column0 style0 s">Перхушково<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row744">
            <td class="column0 style0 s">Пионерская<br></td>
            <td class="column1 style0 n">750<br></td>
            <td class="column2 style0 n">850<br></td>
            <td class="column3 style0 n">1150<br></td>
          </tr>
          <tr class="row745">
            <td class="column0 style0 s">Рабочий поселок<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row746">
            <td class="column0 style0 s">Ромашково<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row747">
            <td class="column0 style0 s">Санаторная<br></td>
            <td class="column1 style0 n">5250<br></td>
            <td class="column2 style0 n">5800<br></td>
            <td class="column3 style0 n">7900<br></td>
          </tr>
          <tr class="row748">
            <td class="column0 style0 s">Сетунь<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row749">
            <td class="column0 style0 s">Скоротово<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row750">
            <td class="column0 style0 s">Сушкинская<br></td>
            <td class="column1 style0 n">3000<br></td>
            <td class="column2 style0 n">3300<br></td>
            <td class="column3 style0 n">4500<br></td>
          </tr>
          <tr class="row751">
            <td class="column0 style0 s">Трехгорка<br></td>
            <td class="column1 style0 n">750<br></td>
            <td class="column2 style0 n">850<br></td>
            <td class="column3 style0 n">1150<br></td>
          </tr>
          <tr class="row752">
            <td class="column0 style0 s">Усово<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row753">
            <td class="column0 style0 s">Хлюпино<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row754">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Гостиницы,рестораны<br></td>
            
            
             
          </tr>
          <tr class="row755">
            <td class="column0 style0 s">Серая лошадь<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row756">
            <td class="column0 style0 s">Аэростар<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row757">
            <td class="column0 style0 s">Лесная (Ховрино)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row758">
            <td class="column0 style0 s">Лесной (Лесной городок)<br></td>
            <td class="column1 style0 n">1050<br></td>
            <td class="column2 style0 n">1150<br></td>
            <td class="column3 style0 n">1600<br></td>
          </tr>
          <tr class="row759">
            <td class="column0 style0 s">Матвеевская<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
          <tr class="row760">
            <td class="column0 style0 s">Можайская<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row761">
            <td class="column0 style0 s">Прага ресторан<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row762">
            <td class="column0 style0 s">Президент -Отель<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row763">
            <td class="column0 style0 s">Ренессанс<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2800<br></td>
          </tr>
          <tr class="row764">
            <td class="column0 style0 s">Редисон-Славянская<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row765">
            <td class="column0 style0 s">Украина<br></td>
            <td class="column1 style0 n">2250<br></td>
            <td class="column2 style0 n">2500<br></td>
            <td class="column3 style0 n">3400<br></td>
          </tr>
          <tr class="row766">
            <td class="column0 style0 s">Холидейн Инн(улица Лесная ,д15)<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row767">
            <td class="column0 style0 s">Холидей Инн(Русаковская улица,24)<br></td>
            <td class="column1 style0 n">3150<br></td>
            <td class="column2 style0 n">2450<br></td>
            <td class="column3 style0 n">4750<br></td>
          </tr>
          <tr class="row768">
            <td class="column0 style0 s">Холидей Инн(улица Симоновский Вал,д.2)<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row769">
            <td class="column0 style0 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Торговый центры<br></td>
            
            
             
          </tr>
          <tr class="row770">
            <td class="column0 style0 s">Ашан(Марфино)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row771">
            <td class="column0 style0 s">Ашан(Строгино)<br></td>
            <td class="column1 style0 n">2100<br></td>
            <td class="column2 style0 n">2310<br></td>
            <td class="column3 style0 n">3150<br></td>
          </tr>
          <tr class="row772">
            <td class="column0 style0 s">Ашан(Теплый Стан)<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2600<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row773">
            <td class="column0 style0 s">Гранд(Химки)<br></td>
            <td class="column1 style0 n">2700<br></td>
            <td class="column2 style0 n">3000<br></td>
            <td class="column3 style0 n">4050<br></td>
          </tr>
          <tr class="row774">
            <td class="column0 style0 s">Евро-Парк(Рублевка)<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row775">
            <td class="column0 style0 s">Икея(Теплый Стан)<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2850<br></td>
          </tr>
          <tr class="row776">
            <td class="column0 style0 s">Икея(Химки)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row777">
            <td class="column0 style0 s">Крокус-Сити(Волокол.)<br></td>
            <td class="column1 style0 n">2400<br></td>
            <td class="column2 style0 n">2650<br></td>
            <td class="column3 style0 n">3600<br></td>
          </tr>
          <tr class="row778">
            <td class="column0 style0 s">Мега(Теплый Стан)<br></td>
            <td class="column1 style0 n">2550<br></td>
            <td class="column2 style0 n">2800<br></td>
            <td class="column3 style0 n">2850<br></td>
          </tr>
          <tr class="row779">
            <td class="column0 style0 s">Мега(Химки)<br></td>
            <td class="column1 style0 n">3300<br></td>
            <td class="column2 style0 n">3600<br></td>
            <td class="column3 style0 n">4950<br></td>
          </tr>
          <tr class="row780">
            <td class="column0 style0 s">Метро(улица Складочная)<br></td>
            <td class="column1 style0 n">2850<br></td>
            <td class="column2 style0 n">3150<br></td>
            <td class="column3 style0 n">4300<br></td>
          </tr>
          <tr class="row781">
            <td class="column0 style0 s">Метро(Проспект Мира,211,стр.1)<br></td>
            <td class="column1 style0 n">3600<br></td>
            <td class="column2 style0 n">4000<br></td>
            <td class="column3 style0 n">5400<br></td>
          </tr>
          <tr class="row782">
            <td class="column0 style0 s">Метро(проезд 6387,д.14)<br></td>
            <td class="column1 style0 n">1950<br></td>
            <td class="column2 style0 n">2150<br></td>
            <td class="column3 style0 n">2900<br></td>
          </tr>
          <tr class="row783">
            <td class="column0 style0 s">Молодежный(Можайка)<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row784">
            <td class="column0 style0 s">Панавто<br></td>
            <td class="column1 style0 n">1800<br></td>
            <td class="column2 style0 n">2000<br></td>
            <td class="column3 style0 n">2700<br></td>
          </tr>
          <tr class="row785">
            <td class="column0 style0 s">Спорт-Хит<br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row786">
            <td class="column0 style0 s">Техцентр Кунцево <br></td>
            <td class="column1 style0 n">1500<br></td>
            <td class="column2 style0 n">1650<br></td>
            <td class="column3 style0 n">2250<br></td>
          </tr>
          <tr class="row787">
            <td class="column0 style0 s">Три Кита<br></td>
            <td class="column1 style0 n">1200<br></td>
            <td class="column2 style0 n">1300<br></td>
            <td class="column3 style0 n">1800<br></td>
          </tr>
          <tr class="row788">
            <td class="column0 style0 s">Конфитюр<br></td>
            <td class="column1 style0 n">900<br></td>
            <td class="column2 style0 n">1000<br></td>
            <td class="column3 style0 n">1350<br></td>
          </tr>
        </tbody>
                                </table>
                                 <div id="calcButton" class="animated fadeInUp hidden">К сожалению вашего места назначения нет в списке. Нажмите, чтобы воспользоваться калькулятором.</div>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content  animated fadeInUp">
                            <span class="close">&times;</span>
                            <p>Калькулятор поездки</p>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div id="map"></div>
                                </div>
                                <div class="col-sm-4">
                                    <h3 class="calcToDo">Выберете точку отправления и назначения</h3>
                                    <style>
                                    .ymaps-2-1-55-search__suggest {
                                        right: auto !important;
                                        /*y.maps fix*/
                                    }
                                    </style>
                                    <div style="display:none" class="calcDisplay">
                                        <p>
                                            Протяженностью:
                                            <span class="lenCalcDisplay"></span> км.
                                            <br> И ценой: <span class="priceCalcDisplay"></span> руб.</p>
                                        <div class="calcButtonsPay">
                                            <form id="priceCalcForm" method="post" action="https://wl.walletone.com/checkout/checkout/Index">
                                                <div style="text-align:left" class="col-sm-12 col-md-6">
                                                    <input id="priceTelCalc" name="priceTelCalc" placeholder="+7 *** *** ** **(обязательно)" type="tel" required>
                                                </div>
                                                <div style="text-align:left" class="col-sm-12 col-md-6">
                                                    <input id="namePriceCalc" placeholder="Имя" type="text" name="namePriceCalc">
                                                </div>
                                                <div style="display:none">
                                                    <input name="len" />
                                                    <input name="fromGeo" />
                                                    <input name="toGeo" />
                                                    <input name="fromNorm" />
                                                    <input name="toNorm" />
                                                    <input name="WMI_MERCHANT_ID" value="175299689191" />
                                                    <input name="WMI_PAYMENT_AMOUNT" />
                                                    <input name="WMI_CURRENCY_ID" value="643" />
                                                    <input name="WMI_DESCRIPTION" value="Оплата поездки taxtrans" />
                                                    <input name="WMI_SUCCESS_URL" value="https://taxtrans.ru/success" />
                                                    <input name="WMI_FAIL_URL" value="https://taxtrans.ru/errorpay" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="button" onclick="sendRequestCalc('online')" class="onlinePay"><i class="fa fa-credit-card" aria-hidden="true"></i> Оплата online: <span class="oplataCalc"></span>₽</button>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="button" onclick="sendRequestCalc('cash')" class="cashPay"><i class="fa fa-money" aria-hidden="true"></i> Оплата наличными: <span class="oplataCalc"></span>₽</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:none" class="oplataDivPrice">
                    <form id="priceListForm" method="post" action="https://wl.walletone.com/checkout/checkout/Index">
                        <img class="closeIconPrice" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close.svg" alt="">
                        <div style="text-align:left" class="col-sm-6">
                            <label style="font-size:15px" id="enteredAddress1Label" for="enteredAddress1"></label>
                            <input id="enteredAddress1" placeholder="Введите адрес" name="enteredAddress1" type="text">
                        </div>
                        <div style="text-align:left" class="col-sm-6">
                            <label style="font-size:15px" id="enteredAddress2Label" for="enteredAddress2"></label>
                            <input id="enteredAddress2" placeholder="Введите адрес" name="enteredAddress2" type="text">
                        </div>
                        <div style="text-align:left" class="col-sm-6">
                            <input id="priceTel" name="priceTel" placeholder="+7 *** *** ** **(обязательно)" type="tel" required>
                        </div>
                        <div style="text-align:left" class="col-sm-6">
                            <input id="namePrice" placeholder="Имя" name="customerName" type="text">
                        </div>
                        <div style="display:none">
                            <input name="WMI_MERCHANT_ID" value="175299689191" />
                            <input name="WMI_PAYMENT_AMOUNT" />
                            <input name="WMI_CURRENCY_ID" value="643" />
                            <input name="WMI_DESCRIPTION" value="Оплата поездки taxtrans" />
                            <input name="WMI_SUCCESS_URL" value="https://taxtrans.ru/success" />
                                                    <input name="WMI_FAIL_URL" value="https://taxtrans.ru/errorpay" />
                        </div>
                        <div class="row"><div class="col-sm-6">
                                                    <button type="button" onclick="sendRequest('online')" class="onlinePay"><i class="fa fa-credit-card" aria-hidden="true"></i> Оплата online: <span class="oplataPrice"></span>₽</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button type="button" onclick="sendRequest('cash')" class="cashPay"><i class="fa fa-money" aria-hidden="true"></i> Оплата наличными: <span class="oplataPrice"></span>₽</button>
                                                </div></div>
                    </form>
                </div>
               
                 <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/formSender.js"></script>
 <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/priceFunct.js"></script>
            </div>
            <!-- #primary -->
            <?php
get_sidebar();?>



    </div>
    </div>
    <!-- #content -->

    </div>
    
    <!-- #page -->
   

    

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mainFunctions.js?v=1.5"></script>

<?php wp_footer(); ?>

    </html>
    </body>

    </html>