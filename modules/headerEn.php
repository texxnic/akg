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
                <a href="../about.php" >RU</a>
                <a href=""  class="selectedText">EN</a>
            </div>
            <a href="../contacts.php">
                <button class="leaveReply leaveReply__opacity">
                    Leave reply
                </button></a>
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
        <a href="/" id="servicesSelectorMob" class="mobileMenuLink"><h2>Услуги</h2></a>
        <a href="/about.php" id="aboutSelectorMob" class="mobileMenuLink"><h2>О нас</h2></a>
        <a href="../prices.php" id="priceSelectorMob" class="mobileMenuLink"><h2>Цены</h2></a>
        <a href="../faq.php" id="faqSelectorMob" class="mobileMenuLink"><h2>FAQ</h2></a>
        <a href="../testom.php" id="testomSelectorMob" class="mobileMenuLink"><h2>Отзывы</h2></a>
        <a href="../contacts.php" id="contactsSelectorMob" class="mobileMenuLink"><h2>Контакты</h2></a>
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