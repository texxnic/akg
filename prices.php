<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Амальгама консалтинг-групп</title>
    <?php include_once 'modules/head.php';?>
</head>

<body>
    <?php include_once 'modules/header.php';?>
    <div class="pageContent pricesSec">
        <div class="pageJumbo">
            <div class="container-lessfluid">
                <div class="col-md-6 jumboContent">
                    <h2>Цены</h2>
                    <h5 class="pageJumbo__description paddedText">Стоимость обслуживания в «Амальгама консалтинг-групп» для каждого клиента рассчитываются индивидуально, и зависит от множества факторов. Примерную стоимость обслуживания вы можете рассчитать ниже, воспользовавшись "Калькулятором примерной стоимости".
                    </h5>
                </div>
            </div>
        </div>
        <div class="pageDescription">
            <div class="container-lessfluid">
                <div class="contentPaddings">
                    <h1 class="calc__ghost">Калькулятор</h1>
                    <div class="calculator-section cardLightShadow">
                       <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7 calculator__main">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-title">Система налогообложения</div>
                                        <div class="taxSelector">
                                            <div class="radio-green topCap">
                                                <input id="tax_system_osno" type="radio" name="tax_system" value="7000" checked="checked">
                                                <label for="tax_system_osno">ОСНО</label>
                                            </div>
                                            <div class="radio-green">
                                                <input id="tax_system_usn_15" type="radio" name="tax_system" value="6500">
                                                <label for="tax_system_usn_15">УСН 15%</label>
                                            </div>
                                            <div class="radio-green botCap">
                                                <input id="tax_system_usn_6" type="radio" name="tax_system" value="6000">
                                                <label for="tax_system_usn_6">УСН 6%</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 sliderSection">
                                        <div class="firstLider">
                                            <div class="form-title">Количество документов в месяц</div>
                                            <input type="range" id="slider1-value" value="1" min="1" max="300">
                                            <div class="slider-vals">

                                                <span class="slider-val slider-val_2">300</span>
                                            </div>
                                        </div>
                                        <div class="secSlider">
                                            <div class="form-title">Количество сотрудников</div>

                                            <input type="range" id="slider2-value" value="1" min="1" max="30">
                                            <div class="slider-vals">

                                                <span class="slider-val slider-val_2">30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="radio-green radio-gaijin">
                                            <input id="tax_system_envd" type="radio" name="tax_system" value="4000">
                                            <label for="tax_system_envd">Нулевая отчётность</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 calcPlusMin">
                                        <div class="row">
                                            <div class="col-md-2"><div class="form-title">Филиалов</div></div>
                                            <div class="col-md-2"><div class="form-title">Валютные счета</div></div>
                                            <div class="col-md-2"><div class="form-title">ККМ</div></div>
                                            <div class="col-md-6">  <div class="form-title">Ориентировочная стоимость</div></div>
                                        <!-- <div class="col-md-2 percentIncCounter">
                                            
                                            

                                        </div>
                                        <div class="col-md-2 percentIncCounter">
                                            
                                            


                                        </div>
                                        <div class="col-md-2 percentIncCounter">
                                            
                                            
                                        </div>

                                        <div class="col-md-6">
                                        
                                          
                                        </div> -->
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2"><div value="5" class="input-group percent_inc">

                                        <input type="button" value="+" class="button-plus" data-field="quantity">

                                        <input type="number" step="1" max="" value="0" name="quantity" class="quantity-field">
                                        <input type="button" value="-" class="button-minus" data-field="quantity">
                                    </div></div>
                                    <div class="col-md-2"><div value="5" class="input-group percent_inc">
                                        <input type="button" value="+" class="button-plus" data-field="quantity">

                                        <input type="number" step="1"max="" value="0" name="quantity" class="quantity-field">
                                        <input type="button" value="-" class="button-minus" data-field="quantity">
                                    </div>
                                </div>
                                <div class="col-md-2"><div value="5" class="input-group percent_inc">
                                    <input type="button" value="+" class="button-plus" data-field="quantity">

                                    <input type="number" step="1"  max="" value="0" name="quantity" class="quantity-field">
                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                </div></div>
                                <div class="col-md-6 calcSum__cont">
                                    <div class="calcSum__wrap">
                                        <h2 class="CalcSum odometer">7000</h2><div class="CalcSumText">руб/мес*</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-5 calculator__second">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-title">Наценка по виду деятельности</div>
                        <div class="calc__Checkboxes">
                            <div class="calcCheckBox">
                                <input name="deyat_rozn" class="percent" value="5" id="deyat_rozn" type="checkbox">
                                <label for="deyat_rozn">Розничная торговля</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="deyat_proizv" type="checkbox">
                                <label for="deyat_proizv">Производство</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="deyat_str" type="checkbox">
                                <label for="deyat_str">Строительство</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="15" id="deyat_ved" type="checkbox">
                                <label for="deyat_ved">ВЭД</label>
                            </div>
                        </div>
                        <div class="form-title form-title_top">Наценка по виду договоров и сложных операций</div>
                        <div class="calc__Checkboxes">
                            <div class="calcCheckBox">
                                <input class="percent" value="5" id="vid_lizing" type="checkbox">
                                <label for="vid_lizing">Лизинговые сделки</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="5" id="vid_fact" type="checkbox">
                                <label for="vid_fact">Договор факторинга</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="5" id="vid_fran" type="checkbox">
                                <label for="vid_fran">Договор франчайзинга</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="5" id="vid_eqv" type="checkbox">
                                <label for="vid_eqv">Эквайринг</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-title">
                        Раздельный учет операций при:</div>
                        <div class="calc__Checkboxes">
                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="obst_usn" type="checkbox">
                                <label for="obst_usn">УСН + ЕНВД</label>
                            </div>

                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="obst_sovm" type="checkbox">
                                <label for="obst_sovm">ОСНО + ЕНВД</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="obst_odnovr" type="checkbox">
                                <label for="obst_odnovr">Операции с НДС и без НДС</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="obst_transp" type="checkbox">
                                <label for="obst_transp">Наличие ТС</label>
                            </div>
                            <div class="calcCheckBox">
                                <input class="percent" value="10" id="obst_exp" type="checkbox">
                                <label for="obst_exp">Транспортная экспедиция</label>
                            </div>
                        </div>
                    </div>
                </div>
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