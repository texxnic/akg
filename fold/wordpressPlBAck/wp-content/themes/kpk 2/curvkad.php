<?php
/**
* Template Name: CurVklad
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
   <div class="pageBack curVkladBack">
            </div>
            <div class="pageContent">
                <div class="darkerDiv">
                    <div class="container contentMargins">
                        <h2 id="categoryName">Вклад в иностранной валюте</h2>
                        
                        <br>
                        <p>В КПК «Со-действие» вы можете делать вклады не только в рублях но и в иностранной валюте. Мы принимаем вклады с конвертацией*  в долларах(USD), евро(EUR), китайских юанях(CNY) и японских йенах(JPY). Остальные валюты по запросу.</p>
                        <h3>Наши приемущества</h3>
                        <p>Высокий и стабильный доход вкупе с абсолютной безопасностью и прозрачностью всегда являлась целью нашего кооператива. Мы прилагаем максимальные усилия для улучшения клиентского сервиса и вашего комфорта и удобства.</p>
                        
                        <h3>Выплаты</h3>
                        <p>Если вы используете обычный вклад без капитализации процентов, то выплаты производятся по вашему усмотрению раз в месяц или раз в три месяца или раз в год. Выплаты вы можете получать удобным для вас способом:
                            <div class="paymentTypes">
                                <div class="paymentType">
                                    <i class="fa fa-credit-card fa-5x" aria-hidden="true"></i><br>
                                    <h4>На вашу карту любого банка</h4>

                                </div>
                                <div class="paymentType">
                                    <i class="fa fa-percent fa-5x" aria-hidden="true"></i><br>
                                    <h4>Пополнить сбережения и получать больше прибыли</h4>

                                </div>
                                <div class="paymentType">
                                    <i class="fa fa-money fa-5x" aria-hidden="true"></i><br>
                                    <h4>Наличными в нашем офисе</h4>

                                </div>
                            </div>
                            
                            </p>
                        <h3>Сколько я получу?</h3>
                        <p>Процент прибыли на прямую зависит от срока размещения вклада и его суммы, минимальная сумма вклада 5000$(300 000 руб) или 4000€(300 000 руб). Остальные валюты по запросу.
                        <table class="vkladTable">
                            <tbody>
                                <tr>
                                    <td>Срок/Сумма от</td>
                                    <td>4 000 у.е.</td>
                                    <td>25 000 у.е.</td>
                                    <td>75 000 у.е.</td>
                                    <td>250 000 у.е.</td>
                                </tr>
                                <tr>
                                    <td>180 дней</td>
                                    <td>7.5%</td>
                                    <td>8.5%</td>
                                    <td>9.75%</td>
                                    <td>11%</td>
                                </tr>
                                <tr>
                                    <td>на 1 год</td>
                                    <td>9.5%</td>
                                    <td>10.5%</td>
                                    <td>12%</td>
                                    <td>13.5%</td>
                                </tr>
                                <tr>
                                    <td>на 2 года</td>
                                    <td>10.5%</td>
                                    <td>11.5%</td>
                                    <td>13%</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>на 3 года</td>
                                    <td>12%</td>
                                    <td>12.5%</td>
                                    <td>14.5%</td>
                                    <td>17%</td>
                                </tr>
                            </tbody>
                        </table>
                        
                            <h3>Давайте посчитаем</h3>
                            <div class="letsCalculate"><form action="" id="moneyAndTimeRange">
                        <p>Если вложить <input type="text" value="250000" name="moneyQuantity" class="simpleCalculatorNumber inputBold changeHandlerInput" size="8" maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> у.е. на <select name="simpleCalcMonth" class="inputBold simpleCaclSelect changeHandler">
                                <option value="180">180 дней</option>
                                <option value="365">1 год</option>
                                <option value="730">2 года</option>
                                <option value="1095">3 года</option></form> </select><i class="fa fa-chevron-down" aria-hidden="true"></i> 
                                <span class="calculatedText"> под <span class="simpleCalcPercent inputBold"> 7.5</span>% то уже через <span class="simpleCalcFinalMonth inputBold">180 дней</span> вы получите <span class="simpleCalcFinalPrice inputBold"> 155548 </span> у.е.!</span>
                        </p>

                        <div class="calcGraphCommonWrapper">
                            <div class="calcGraph">
                                <p class="graphGetValue">Получено<br><span class="graphTotalEarn">155548</span> у.е.</p>
                                <p class="graphInvestedValue">Вложено<br><span class="graphInvested">150000</span> у.е.</p>
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
                            <div>
                                <table class="calcResults">
                                <tr>
                                    <td>Вложено:</td>
                                    <td><span class="investedGraphCalc">150000</span> у.е.</td>
                                </tr>
                                <tr>
                                    <td>Ваша выгода:</td>
                                    <td><span class="yourProfitGraphCalc">5548</span> у.е.</td>
                                </tr>
                                <tr>
                                    <td>Доход в месяц:</td>
                                    <td><span class="profitPerMonthGraphCalc">5548</span> у.е.</td>
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
                                <form id="contactInformation">
                                    <input type="text" class="contactHidden" placeholder="ФИО" name="customerName">
                                    <input type="text" class="contactHidden" name="phone" placeholder="Телефон">
                                    <input type="checkbox" class="contactHidden">
                                    <button class="contactHidden contactSubmit">Отправить</button>
                                </form>
                            </div>
                        </div>

                        </div>
                        <h3>Присоединяйтесь к КПК «Со-действие» уже сегодня и становитесь частью успешного и эффективного союза, умеющего эффективно управлять капиталом!
</h3>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?
get_footer();