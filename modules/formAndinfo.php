<div class="aboutContent aboutContact contentPaddings">
    <div class="container-lessfluid">
        <h2>Контакты</h2>
        <div class="container-lessfluid contentPaddings row">
            <div class="col-md-7 cardPaddings cardLightShadow contactCard">
                <div class="contactFormInfo">
                    <h3 class="contactFormInfo__h3">Есть вопросы?</h3>
                <p class="contactFormInfo__p">Воспользуйтесь формой снизу для вопроса или заявки</p>
                </div>
                <div class="contactForm">
                    <form class="contactForm" action="../contactform.php" method="get" name="contactform">
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
                                <input type="tel" id="phone" name="phone" data-mask="00/00/0000" data-mask-selectonfocus="true">
                            </div>
                            <div class="col-md-6">
                                <p>E-mail</p>
                                <input type="email" id="email" name="email" required >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Вопрос или комментарий</p>

                                <textarea rows="14" cols="10" wrap="soft" id="question" name="question" style="overflow:hidden; resize:none;"> </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button class="contactCard__submit" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 contactsAddres">
                <img src="../assets/img/mapDotted.svg" class="mapDotted" alt="">
                <h3>Адрес</h3>
                <p>ул. Земляной Вал, д. 9 Москва, 105064</p>
                <h3>Реквизиты</h3>
                <p>ОГРН 1177746408069
                    <br> ИНН 9701072627


                    <br>
                </p>
                <h3>Телефон</h3>
                <a class="footer__phone phoneBig" href="tel:88002344444">8 800 234-44-44</a>

            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.mask.min.js"></script>
<script>

    $('#phone').mask('+7 000 000-00-00');
    $( ".contactForm" ).one('submit',function( event ) {
        event.preventDefault();
        event.stopImmediatePropagation();
        TweenLite.to($( ".contactForm" ), 0.3, { opacity: 0.5});
        $.post( "../contactform.php", $( ".contactForm" ).serialize() )
        .done(function() {
            $( ".contactForm,.contactFormInfo__p" ).hide();
            $( ".contactFormInfo__h3" ).text("Спасибо, ваша заявка отправлена");
            // $( ".contactFormInfo__p" ).text("Спасибо, ваша заявка отправлена");
        })
        .fail(function() {
            alert( "Что-то пошло не так, попробуйте еще раз" );
            TweenLite.to($( ".contactForm" ), 0.3, { opacity: 1});
        });

    });

</script>