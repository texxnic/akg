<div class="aboutContent aboutSectionContacts aboutSection_white contentPaddings">
    <div class="container-lessfluid aboutSection">
        <div class="about_column1 about_column">
            <div class="col1warp">
                <h4>Контактная форма</h4>
                <span class="divider">-</span>
            </div>
        </div>
        <div class="about_column2 about_column2__withText about_column">
            <div class="contactFormWrap">
                <div class="contactForm_header">
                    <h3 class="contactFormInfo__h3">Остались вопросы?</h3>
                    <p class="contactFormInfo__p">Воспользуйтесь формой снизу для вопроса или заявки.</p>
                </div>
                <form action="../contactform.php" method="post" class="contactForm">
                    <div class="row inputRow">
                        <div class="col-md-8">
                            <div class="inputWrap">
                                
                                <input class="input" placeholder="Ф.И.О.*" name="firstname" type="text" required minlength="2">
                                <span class="underline"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inputWrap">
                                
                                <input class="input" placeholder="E-mail*" name="email" type="email" required>
                                <span class="underline"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row inputRow">
                        <div class="col-md-4">
                            <div class="inputWrap">
                                
                                <input class="input" id="phoneInput" placeholder="+7" name="tel" type="text">
                                <span class="underline"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="inputWrap">
                                
                                <input class="input" placeholder="Комания" name="company" type="text">
                                <span class="underline"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row inputRow">
                        <div class="col-md-12">
                            <textarea rows="1" wrap="soft" placeholder="Ваш вопрос*" class="inputTextarea" name="question" style="overflow:hidden; resize:none;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                        <button class="g-recaptcha contactCard__submit" data-sitekey="6LdSO3sUAAAAAMft8XDMLFh8BouVolV_qIAV2tRM" data-callback='onSubmit'>Отправить</button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            $('.inputTextarea').focus(function(){
                $(this).attr('rows', '4');
            });
        function onSubmit() {
            
            return new Promise(function(resolve, reject) {  
           
                var f = $(".contactForm");

$.ajax({
    type: "POST",
    url: "contactform.php",
    data: f.serialize(),
    dataType: "json",
    beforeSend: function(){
        $(".contactFormInfo__h3").html("logging in...");
    },
    success: function(response){
        $(".contactFormInfo__h3").html(response.text);
        
    },
    error: function(){
        $(".contactFormInfo__h3").html("Failed.");
    }       
});
            }); 
        }

        $('#phoneInput').mask('+7 000 000-00-00');
       
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
                <a class="footer__phone" href="tel:88002344444">8 800 234-44-44</a>
                <h4>Email</h4>
                <p>info@acgbux.ru</p>
            </div>
        </div>
    </div>
</div>