<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Амальгама консалтинг-групп</title>
    <?php include_once 'modules/head.php';?>
</head>

<body class="priceSelector">
    <?php include_once 'modules/header.php';?>
    <div class="pageContent pricesSec">
        <div class="pageJumbo">
            <div class="container-lessfluid aboutSection pageJumbo_aboutSection">
                <div class="about_column1 about_column">
                    <div class="col1warp">
                        <h4>Цены</h4>
                        <span class="divider">-</span>
                    </div>
                </div>
                <div class="about_column2 about_column2__withText about_column">
                    <h3>Стоимость обслуживания в «Амальгама консалтинг-групп» для каждого клиента рассчитываются индивидуально, и зависит от множества факторов.</h3>
                    <p class="aboutFirstP"> Примерную стоимость обслуживания вы можете рассчитать ниже, воспользовавшись "Калькулятором примерной стоимости"</p>
                </div>
            </div>
             <img src="assets/img/logoSimpleWhite.svg" class="pageJumbo__ghost" alt="">
        </div>
        <div class="pageDescription">
            <div class="container-lessfluid aboutSection_white aboutSection">
                <div class="caclWrap">
                    <div class="about_column1 about_column">
                        <div class="col1warp">
                            <h4>Калькулятор</h4>
                            <span class="divider">-</span>
                        </div>
                    </div>
                    <div class="about_column2 about_column2__withText about_column">
                        <div class="calculator">
                            <div class="col-md-12">
                                <div class="form-title"><i class="fal fa-swatchbook"></i>Система налогообложения</div>
                                <div class="taxSelector">
                                    <div class="radio-green">
                                        <input id="tax_system_osno" type="radio" name="tax_system" value="7000" checked="checked">
                                        <label for="tax_system_osno" class="borderedButton">ОСНО</label>
                                    </div>
                                    <div class="radio-green">
                                        <input id="tax_system_usn_15" type="radio" name="tax_system" value="6500">
                                        <label for="tax_system_usn_15" class="borderedButton">УСН 15%</label>
                                    </div>
                                    <div class="radio-green">
                                        <input id="tax_system_usn_6" type="radio" name="tax_system" value="6000">
                                        <label for="tax_system_usn_6" class="borderedButton">УСН 6%</label>
                                    </div>
                                    <div class="radio-green">
                                        <input id="tax_system_envd" type="radio" name="tax_system" value="4000">
                                        <label for="tax_system_envd" class="borderedButton">Нулевая отчётность</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="firstLider">
                                    <div class="form-title"><i class="fal fa-copy"></i>Количество документов в месяц</div>
                                    <div class="taxSelector">
                                        <input type="range" id="slider1-value" value="1" min="1" max="300">
                                        <div class="slider-vals">
                                            <span class="slider-val slider-val_2">300</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator__second">
                                <div class="col-md-12">
                                    <div class="quanty taxSelector">
                                        <div class="form-title"><i class="fal fa-plus-hexagon"></i>Дополнительная информация</div>
                                        <div class="taxSelector">
                                            <div class="quanty_item borderedButton">
                                                <div class="form-title-button form-title-button__quanty">
                                                    <span>Филиалов</span>
                                                </div>
                                                <div class="quantyNumber">
                                                    <span class="quantyNumber__branches odometr">0<span>
                                    
                                    </div>
                                    <div class="triangleButton triangleButton_increment">+</div>
                                    <div class="triangleButton triangleButton_decrement">-</div>
                                 
                              </div>
                              <div class="quanty_item borderedButton">
                                 <div class="form-title-button form-title-button__quanty">
                                    <span>Валютные счета</span>
                                 </div>
                                  <div class="quantyNumber">
                                  <span class="quantyNumber__curAcc odometr">0<span>
                                    
                                    </div>
                                    <div class="triangleButton triangleButton_increment">+</div>
                                    <div class="triangleButton triangleButton_decrement">-</div>
                                 
                              </div>
                              <div class="quanty_item borderedButton">
                                 <div class="form-title-button form-title-button__quanty">
                                    <span>ККМ</span>
                                 </div>
                                  <div class="quantyNumber">
                                  <span class="quantyNumber__KKM odometr">0<span>
                                    
                                    </div>
                                    <div class="triangleButton triangleButton_increment">+</div>
                                    <div class="triangleButton triangleButton_decrement">-</div>
                                 
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-title"><i class="fal fa-briefcase"></i>Наценка по виду деятельности:</div>
                        <div class="taxSelector"> 
                           <input name="deyat_rozn" class="percent" value="5" id="deyat_rozn" type="checkbox">
                           <label for="deyat_rozn" class="borderedButton">Розничная торговля</label>
                           <input class="percent" value="10" id="deyat_proizv" type="checkbox">
                           <label for="deyat_proizv" class="borderedButton">Производство</label>
                           <input class="percent" value="10" id="deyat_str" type="checkbox">
                           <label for="deyat_str" class="borderedButton">Строительство</label>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-title"><i class="fal fa-building"></i>Наценка по виду договоров и сложных операций:</div>
                        <div class="taxSelector"> 
                           <input class="percent" value="5" id="vid_lizing" type="checkbox">
                                                    <label for="vid_lizing" class="borderedButton">Лизинговые сделки</label>
                           <input class="percent" value="5" id="vid_eqv" type="checkbox">
                                                    <label for="vid_eqv" class="borderedButton">Эквайринг</label>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-title"><i class="fal fa-code-branch"></i>Раздельный учет операций при:</div>
                        <div class="taxSelector"> 
                           <input class="percent" value="10" id="obst_usn" type="checkbox">
                                                    <label for="obst_usn" class="borderedButton">УСН + ЕНВД</label>
                           <input class="percent" value="10" id="obst_sovm" type="checkbox">
                                                    <label for="obst_sovm" class="borderedButton">ОСНО + ЕНВД</label>
                            <input class="percent" value="10" id="obst_odnovr" type="checkbox">
                                                    <label for="obst_odnovr" class="borderedButton">Операции с НДС и без НДС</label>
                            <input class="percent" value="10" id="obst_transp" type="checkbox">
                                                    <label for="obst_transp" class="borderedButton">Наличие ТС</label>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="column3">
                   <div class="calculatorResult">
                       <h3>Итого</h3>
                       <h1 class="calcFin"><span class="CalcSum odometer odometer-auto-theme">7000</span>₽</h1>
                       <p>Ваша экономия: <span class="selectedText odometer second-calc-odo">1400</span> рублей</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-lessfluid aboutSection_white aboutSection">
                                        <div class="about_column1 about_column">
                                            <div class="col1warp">
                                                <h4>Другие услуги</h4>
                                                <span class="divider">-</span>
                                            </div>
                                        </div>
                                        <div class="about_column2 about_column2Wide about_column2__withText about_column">
                                            <div class="row">
                                                <div class="col-md-4 priceCard">
                                                    <div class="priceCard_Wrap">
                                                        <h5 class="priceCard_header">Внесение изменений ООО</h5>
                                                        <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Подготовка документов для регистрации любых изменений</p>
                                                            <p class="priceCard_row_price">5 000₽</p>
                                                        </div>
                                                        <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Подача и получение документов в ИФНС</p>
                                                            <p class="priceCard_row_price">1 000₽</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 priceCard">
                                                    <div class="priceCard_Wrap">
                                                        <h5 class="priceCard_header">Другие бухгалтерские услуги</h5>
                                                        <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Восстановление бухгалтерского учета</p>
                                                            <p class="priceCard_row_price">от 30 000₽</p>
                                                        </div>
                                                        <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Сопровождение налоговых проверок</p>
                                                            <p class="priceCard_row_price">от 30 000₽</p>
                                                        </div>
                                                        <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Управленческий учет</p>
                                                            <p class="priceCard_row_price">от 25 000₽</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 priceCard">
                                                    <div class="priceCard_Wrap">
                                                        <h5 class="priceCard_header">Внесение изменений ООО</h5>
                                                         <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Стоимость наших услуг по закрытию ООО</p>
                                                            <p class="priceCard_row_price">от 45 000₽</p>
                                                        </div>
                                                        <div class="priceCard_row">
                                                            <p class="priceCard_row_name">Всего расходы под ключ документов в ИФНС</p>
                                                            <p class="priceCard_row_price">от 50 000₽</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-lessfluid aboutSection_white aboutSection">
                                        <div class="about_column1 about_column">
                                            <div class="col1warp">
                                                <h4>Регистрация ООО</h4>
                                                <span class="divider">-</span>
                                            </div>
                                        </div>
                                        <div class="about_column2 about_column2Wide about_column2__withText about_column">
                                            <div class="row">
                                                <div class="col-md-4 priceCard">
                                                    <div class="priceCard_Wrap">
                                                        <h5 class="priceCard_header">Подготовка документы</h5>
                                                        
                                                        <div class="priceCard_row">
                                                            
                                                            <ul>
                                                                <li>Подбор системы налогообложения, исходя из ваших потребностей и предпологаемой прибыли</li>
                                                                <li>Подберем код ОКВЭД</li>
                                                                <li>Подготовим документы для оформления бизнеса</li>
                                                                <li>Найдем юридический адрес для регистрации</li>
                                                                <li>Консультация по дальнейшим действиям</li>
                                                            </ul>
                                                        </div>
                                                       <div class="priceCard_row  priceCard_row__underList">
                                                            <p class="priceCard_row_name">Цена</p>
                                                            <p class="priceCard_row_price">5 000₽</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 priceCard">
                                                    <div class="priceCard_Wrap">
                                                         <h5 class="priceCard_header">Все включено</h5>
                                                        
                                                        <div class="priceCard_row">
                                                            
                                                            <ul>
                                                                <li>Подбор системы налогообложения, исходя из ваших потребностей и предпологаемой прибыли</li>
                                                                <li>Подберем код ОКВЭД</li>
                                                                <li>Подготовим документы для оформления бизнеса</li>
                                                                <li>Найдем юридический адрес для регистрации</li>
                                                                <li>Консультация по дальнейшим действиям</li>
                                                                <li>Оплата госпошлины</li>
                                                                <li>Подача документов (в том числе УСН)в ИФНС</li>
                                                                <li>Доставка готовых документов из ИФНС</li>
                                                                <li>Открываем расчетный счет в банке</li>
                                                                <li>Оформляем юридический адрес на 11 месяцев</li>
                                                                <li>Изготавливаем печать</li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div class="priceCard_row  priceCard_row__underList">
                                                            <p class="priceCard_row_name">Цена</p>
                                                            <p class="priceCard_row_price">39 000₽</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 priceCard">
                                                    <div class="priceCard_Wrap">
                                                         <h5 class="priceCard_header">Подготовка + подача и получение документов</h5>
                                                        
                                                        <div class="priceCard_row">
                                                            
                                                            <ul>
                                                                <li>Подбор системы налогообложения, исходя из ваших потребностей и предпологаемой прибыли</li>
                                                                <li>Подберем код ОКВЭД</li>
                                                                <li>Подготовим документы для оформления бизнеса</li>
                                                                <li>Найдем юридический адрес для регистрации</li>
                                                                <li>Консультация по дальнейшим действиям</li>
                                                                <li>Оплата госпошлины</li>
                                                                <li>Подача документов (в том числе УСН)в ИФНС</li>
                                                                <li>Доставка готовых документов из ИФНС</li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div class="priceCard_row  priceCard_row__underList">
                                                            <p class="priceCard_row_name">Цена</p>
                                                            <p class="priceCard_row_price">10 000₽</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pageFooter footer">
                                <?php include_once 'modules/footer.php';?>
                            </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/easing/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
<script src="assets/js/scrolloverflow.min.js"></script>
<script src="assets/js/fullpage.extensions.min.js"></script>
<script src="assets/js/fullpage.min.js"></script>
<script src="assets/js/textAnim.js"></script>
<script src="assets/js/calc.js"></script>
<script src="assets/js/odometer.min.js"></script>

</html>