<?php
/**
* Template Name: contacts
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
<div id="PageID" class="contacts"></div>
   <div class="pageBack contBack">
            </div>
            <div class="pageContent">
                <div class="darkerDiv"></div> 
                    <div class="container contentMargins pageContFirst">
                        <h2>Контакты</h2>
                        <h3>Адрес:</h3>
                        <p>Москва, Улица Земляной Вал, 9</p>
                        <h3>Телефон:</h3>
                        <a href="tel:88002344444">8 800 234-44-44</a>
                        <h3>E-mail</h3>
                        <p>info@sovklad.ru</p>
                        <div class="contactDiv inContactWidth"><p class="formButtonText">Оставить заявку</p>
                                                           <form id="contactInformation"><input type="text" class="contactHidden w100" placeholder="ФИО" name="customerName"><input type="text" class="contactHidden w100" name="phone" id="contactPhoneID" placeholder="Телефон"><div class="checkboxWrapper"><input type="checkbox" class="contactHidden " id="privacyCheck" ><p class="contactHidden checkBoxText" style="margin-left: 10px;">Даю согласие на обработку моих персональных данных. <a href="privacy">Политика конфиденциальности</a></p></div><button class="contactHidden contactSubmit w100">Отправить</button></form>
                                                       </div>
                        <h3>Мы на карте:</h3>
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae78c4baf836f0736a17629c4281466a68e2b5854e22024f5478f15e59cfc0b2a&amp;width=100%25&amp;height=400px&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?
get_footer();