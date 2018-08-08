<?php
/**
* Template Name: kpkVklad
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
   <div class="pageBack vkladBack">
            </div>
            <div class="pageContent">
                <div class="darkerDiv">
                    <div class="container contentMargins">
                        <h2 id="categoryName">Вклад в КПК</h2>
                        <h3>Наши приемущества</h3>
                        <p>Высокий и стабильный доход вкупе с абсолютной безопасностью и прозрачностью всегда являлась целью нашего кооператива. Мы прилагаем максимальные усилия для улучшения клиентского сервиса и вашего комфорта и удобства.</p>
                        
                        <h3>Выплаты</h3>
                        <p> Если вы используете обычный вклад без капитализации процентов, то выплаты производятся по вашему усмотрению раз в месяц или раз в три месяца. Выплаты вы можете получать удобным для вас способом:
                            <div class="paymentTypes">
                                <div class="paymentType">
                                    <i class="fa fa-money fa-5x" aria-hidden="true"></i><br>
                                    <h4>На вашу карту любого банка</h4>

                                </div>
                                <div class="paymentType">
                                    <i class="fa fa-percent fa-5x" aria-hidden="true"></i><br>
                                    <h4>Пополнить сбережения и получать больше прибыли</h4>

                                </div>
                                <div class="paymentType">
                                    <i class="fa fa-credit-card fa-5x" aria-hidden="true"></i><br>
                                    <h4>Наличными в нашем офисе</h4>

                                </div>
                            </div>
                            
                            </p>
                        
                        <h3>Сколько я получу?</h3>
                        <p>Процент прибыли на прямую зависит от срока размещения вклада и его суммы, минимальная сумма вклада 150 000₽. Так же процент можно увеличить если использовать <a href="https://sovklad.ru/vkladwithcap/">вклад с капитализацией</a></p>
                        <table class="vkladTable">
                            <tbody>
                                <tr>
                                    <td>Срок/Сумма от</td>
                                    <td>150 000₽</td>
                                    <td>500 000₽</td>
                                    <td>1 500 000₽</td>
                                    <td>5 000 000₽</td>
                                </tr>
                                <tr>
                                    <td>180 дней</td>
                                    <td>7.5%</td>
                                    <td>9%</td>
                                    <td>11%</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>на 1 год</td>
                                    <td>15%</td>
                                    <td>17.5%</td>
                                    <td>20.5%</td>
                                    <td>24.0%</td>
                                </tr>
                                <tr>
                                    <td>на 2 года</td>
                                    <td>16.5%</td>
                                    <td>19%</td>
                                    <td>22%</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>на 3 года</td>
                                    <td>18%</td>
                                    <td>20%</td>
                                    <td>23.50%</td>
                                    <td>26.50%</td>
                                </tr>
                            </tbody>
                        </table>
                        
                            <h3>Давайте посчитаем</h3>
                            <div class="letsCalculate"><form action="" id="moneyAndTimeRange">
                        <p>Если вложить <input type="text" value="150000" class="simpleCalculatorNumber inputBold changeHandlerInput" name="moneyQuantity" size="8" maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> рублей на <select name="simpleCalcMonth" class="inputBold simpleCaclSelect changeHandler">
                                <option value="180">180 дней</option>
                                <option value="365">1 год</option>
                                <option value="730">2 года</option>
                                <option value="1095">3 года</option> </select><i class="fa fa-chevron-down" aria-hidden="true"></i> и <select name="capitalizationSelect" form="carform" class="inputBold simpleCaclSelect changeHandler">
                                <option value="w/oCapit">без капитализации</option>
                                <option value="capit">с капитализацией</option> </form></select><i class="fa fa-chevron-down" aria-hidden="true"></i><span class="calculatedText"> под <span class="simpleCalcPercent inputBold"> 7.5</span>% то уже через <span class="simpleCalcFinalMonth inputBold">180 дней</span> вы получите <span class="simpleCalcFinalPrice inputBold"> 155548 </span> рублей!</span>
                        </p>

                        <div class="calcGraphCommonWrapper">
                            <div class="calcGraph">
                                <p class="graphGetValue">Получено<br><span class="graphTotalEarn">155548</span>₽</p>
                                <p class="graphInvestedValue">Вложено<br><span class="graphInvested">150000</span>₽</p>
                                <div class="dotPositioner1">
                                    <div class="ring-container">
                                        <div class="ringring"></div>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <div class="dotPositioner2">
                                    <div class="ring-container">
                                        <div class="ringring"></div>
                                        <div class="circle"></div>
                                    </div>
                                </div><img src="https://sovklad.ru/wp-content/themes/kpk%202/img/graph2-min.png" class="graphImgCalc" alt="">
                            </div>
                           <div> <table class="calcResults">
                                                           <tr>
                                                               <td>Вложено:</td>
                                                               <td><span class="investedGraphCalc">150000</span>₽</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Ваша выгода:</td>
                                                               <td><span class="yourProfitGraphCalc">5548</span>₽</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Доход в месяц:</td>
                                                               <td><span class="profitPerMonthGraphCalc">5548</span>₽</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Срок вклада:</td>
                                                               <td class="rangeGraphCalc">180 дней</td>
                                                           </tr>
                                                           <tr>
                                                               <td>Эффективная ставка:</td>
                                                               <td><span class="getGraphCalc">7.5</span>%</td>
                                                           </tr>
                                                       </table>
                                                        <div class="contactDiv"><p class="">Оставить заявку</p>
                                                           <form id="contactInformation"><input type="text" class="contactHidden" placeholder="ФИО" name="customerName"><input type="text" class="contactHidden" name="phone" placeholder="Телефон"><button class="contactHidden contactSubmit">Отправить</button></form>
                                                       </div></div>
                        </div>

                        </div>
                        <h3>Присоединяйтесь к КПК «Со-действие» уже сегодня и становитесь частью успешного и эффективного союза, умеющего эффективно управлять капиталом!
</h3>
<!-- <div class="contactDiv"><p class="">Оставить заявку</p>
    <form action="">
    <div class="formInputs"><input  class="contactHidden" type="text">
        <input  class="contactHidden" type="text">
        <input  class="contactHidden" type="text"></div>
    <button class="contactHidden" ></button></form>
</div> -->
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?
get_footer();