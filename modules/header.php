<div class="header">
   
   <div class="mobileHeader">
      <a href="/">
      <img src="assets/img/logoSimpleWhite.svg" alt="">
      </a>
      <img src="assets/img/menuHamburg.svg" class="header__menuButton" alt="">
   </div>
   <div class="header__menu">
      <div class="header__topMenu">
         <div class="header__languageSelector">
            <a href=""  class="selectedText">RU</a>
            <a href="aboutEN.php">EN</a>
         </div>
         <button onClick="modalForm.show()" class="leaveReply leaveReply__opacity">
         Оставить заявку
         </button>
         <a class="header__phone phoneBig" href="tel:88002344444">8 800 234-44-44</a>
      </div>
      <div class="header__botMenu">
         <a href="../"><img src="assets/img/logoWDesc.svg" alt="" class="header__logo unskewed"></a>
         <div class="header__links">
            <a href="/" id="servicesSelector" class="menuLink">
               <div class="menuLink__div">
                  <div class="unskewed">Услуги</div>
               </div>
            </a>
            <a href="/about.php" id="aboutSelector" class="menuLink">
               <div class="menuLink__div">
                  <div class="unskewed">О нас</div>
               </div>
            </a>
            <a href="../prices.php" id="priceSelector" class="menuLink">
               <div class="menuLink__div">
                  <div class="unskewed">Цены</div>
               </div>
            </a>
            <a href="../faq.php" id="faqSelector" class="menuLink">
               <div class="menuLink__div">
                  <div class="unskewed">FAQ</div>
               </div>
            </a>
            <a href="../testom.php" id="testomSelector" class="menuLink">
               <div class="menuLink__div">
                  <div class="unskewed">Отзывы</div>
               </div>
            </a>
            <a href="../contacts.php" id="contactsSelector" class="menuLink">
               <div class="menuLink__div">
                  <div class="unskewed">Контакты</div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>

<div class="mobileMenu DN">
   <a href="/" id="servicesSelectorMob" class="mobileMenuLink">
      <h2>Услуги</h2>
   </a>
   <a href="/about.php" id="aboutSelectorMob" class="mobileMenuLink">
      <h2>О нас</h2>
   </a>
   <a href="../prices.php" id="priceSelectorMob" class="mobileMenuLink">
      <h2>Цены</h2>
   </a>
   <a href="../faq.php" id="faqSelectorMob" class="mobileMenuLink">
      <h2>FAQ</h2>
   </a>
   <a href="../testom.php" id="testomSelectorMob" class="mobileMenuLink">
      <h2>Отзывы</h2>
   </a>
   <a href="../contacts.php" id="contactsSelectorMob" class="mobileMenuLink">
      <h2>Контакты</h2>
   </a>
</div>

<!-- modalForm -->

<div class="modalForm" style="display:none">
   <div class="contactFormWrap">
      <div class="form__closeButton" onClick="modalForm.close()">
         <i class="fal fa-times"></i>
      </div>
      <div class="contactForm_header">
         <h3 class="contactFormInfo__h3">Остались вопросы?</h3>
         <p class="contactFormInfo__p">Воспользуйтесь формой снизу для вопроса или заявки.</p>
      </div>
      <form action="../contactform.php"  method="post" class="contactForm">
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
                  <input class="input" id="serviceValue"  name="service" style="display:none;" type="text">
                  <span class="underline"></span>
               </div>
            </div>
         </div>
         <div class="row form__question inputRow">
            <div class="col-md-12">
               <textarea rows="1" wrap="soft" placeholder="Ваш вопрос*" class="inputTextarea" name="question" style="overflow:hidden; resize:none;"></textarea>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <button type="submit" class=" contactCard__submit" >Отправить</button>
            </div>
         </div>
      </form>
      <script>
         $('#phoneInput').mask('+7 000 000-00-00');
        var modalForm = {
            show: function(el, name) {
                if (el) {
                    var serviceName = $(el).siblings("h3").text();
                    $('.contactFormInfo__h3').html('Оставить заявку');
                    $('.contactFormInfo__p').html('на услугу "' + serviceName + '"');
                    $('#serviceValue').val(serviceName);
                    $('.form__question').hide();

                }

                $('.modalForm').show();
            },
            close: function() {

                $('.modalForm').hide();
                $('.form__question').show();
                $('.contactFormInfo__h3').html('Остались вопросы?');
                $('.contactFormInfo__p').html('Воспользуйтесь формой снизу для вопроса или заявки.');
            }
        }

        function onSubmit() {

            return new Promise(function(resolve, reject) {

                var f = $(".contactForm");

                $.ajax({
                    type: "POST",
                    url: "contactform.php",
                    data: f.serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        $(".contactFormInfo__h3").html("Отправляю");
                    },
                    success: function(response) {
                        $(".contactFormInfo__h3").html(response.text);

                    },
                    error: function(xhr, status, error) {
                      var err = eval("(" + xhr.responseText + ")");
                      alert(err.Message);
                    }
                });
            });
        }
      </script>
   </div>
</div>
<script>
   var selector = $("body").attr('class'); 
   if (selector) {
       var str = '#'+selector;
       var strMob = '#'+selector + 'Mob';
       $(str).addClass('selected');
       $(strMob).addClass('selected');
       }
</script>