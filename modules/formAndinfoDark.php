<div class="aboutContent aboutSectionContacts aboutSection_dark contentPaddings">
    <div class="container-lessfluid aboutSection">
        <div class="about_column1 about_column">
            <div class="col1warp">
                <h4>Контактная форма</h4>
                <span class="divider">-</span>
            </div>
        </div>
        <div class="about_column2 about_column2__withText about_column">
            <div class="contactForm">
                <div class="contactForm_header">
                    <h3>Остались вопросы?</h3>
                    <p>Воспользуйтесь формой снизу для вопроса или заявки</p>
                </div>
                <form action="" class="contactForm">
                    <div class="row inputRow">
                        <div class="col-md-8">
                            <div class="inputWrap">
                                <i class="fal fa-user-alt"></i>
                                <input class="input" placeholder="Ф.И.О.*" name="firstname" type="text" required minlength="2">
                                <span class="underline"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inputWrap">
                                <i class="fal fa-at"></i>
                                <input class="input" placeholder="E-mail*" name="email" type="email" required>
                                <span class="underline"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row inputRow">
                        <div class="col-md-4">
                            <div class="inputWrap">
                                <i class="fal fa-mobile-android-alt"></i>
                                <input class="input" id="phoneInput" placeholder="+7" name="tel" type="text">
                                <span class="underline"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="inputWrap">
                                <i class="fal fa-building"></i>
                                <input class="input" placeholder="Комания" name="company" type="text">
                                <span class="underline"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row inputRow">
                        <div class="col-md-12">
                            <textarea rows="1" wrap="soft" placeholder="Ваш вопрос" class="inputTextarea" name="question" style="overflow:hidden; resize:none;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="g-recaptcha" data-callback="enableBtn" data-sitekey="6Ldz43UUAAAAABbhldxwKuXYxwGuMAsIMYoFPxjo"></div>
                        </div>
                        <div class="col-md-6">
                            <button class="contactCard__submit" disabled type="submit">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
        function enableBtn() {
            console.log($(".contactCard__submit"));
            $(".contactCard__submit").removeAttr("disabled");
            console.log('disabled');
        }

        $('#phoneInput').mask('+7 000 000-00-00');
        $(".contactForm").one('submit', function(event) {
            event.preventDefault();
            event.stopImmediatePropagation();
            TweenLite.to($(".contactForm"), 0.3, { opacity: 0.5 });
            $.post("../contactform.php", $(".contactForm").serialize())
                .done(function() {
                    $(".contactForm,.contactFormInfo__p").hide();
                    $(".contactFormInfo__h3").text("Спасибо, ваша заявка отправлена");
                    // $( ".contactFormInfo__p" ).text("Спасибо, ваша заявка отправлена");
                })
                .fail(function() {
                    alert("Что-то пошло не так, попробуйте еще раз");
                    TweenLite.to($(".contactForm"), 0.3, { opacity: 1 });
                });

        });
        </script>
        <div class="about_column3">
            <div class="contactinfo">
                <h4>Адрес</h4>
                <p>ул. Земляной Вал, д. 9 Москва, 105064</p>
                <h4>Реквизиты</h4>
                <p>ОГРН 1177746408069
                    <br> ИНН 9701072627
                    <br>
                </p>
                <h4>Телефон</h4>
                <a class="footer__phone phoneBig" href="tel:88002344444">8 800 234-44-44</a>
            </div>
        </div>
    </div>
</div>