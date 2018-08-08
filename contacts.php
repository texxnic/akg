<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Амальгама консалтинг-групп</title>
    <?php include_once 'modules/head.php';?>
</head>

<body>
    <?php include_once 'modules/header.php';?>
    <div class="pageContent aboutSec">
        <div class="pageJumbo">
            <div class="container-lessfluid">
                <div class="col-md-6 jumboContent">
                    <h2>Контакты</h2>
                </div>
            </div>
        </div>
        <div class="pageDescription">
            <div class="container-lessfluid">
                <div class="contentPaddings row">
                    <div class="col-md-7">
                        <h3>Есть вопросы?</h3>
                        <p>Воспользуйтесь формой снизу для вопроса или заявки</p>
                        <div class="contactForm">
                            <form class="contactForm" action="action_page.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Имя</p>
                                        <input type="text" id="fname" name="firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Фамилия</p>
                                        <input type="text" id="sname" name="secondname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Компания</p>
                                        <input type="text" id="company" name="company">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Телефон</p>
                                        <input type="tel" id="phone" name="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <p>E-mail</p>
                                        <input type="email" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Вопрос или комментарий</p>
                                        <input type="text" id="question" name="question">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="submit">Отправить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 contactsAddres">
                        <h3>Адрес</h3>
                        <p>ул. Земляной Вал, д. 9 Москва, 105064</p>
                        <h3>Реквизиты</h3>
                        <p>ОГРН 123231432442
                            <br> ИНН 234234234234
                            <br>
                        </p>
                        <h3>Телефон</h3>
                        <a class="footer__phone phoneBig" href="tel:88002344444">8 800 234-44-44</a>
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
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/contAnimation.js"></script>

</html>