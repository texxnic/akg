<?php
/**
* Template Name: pay
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
    <style>
    #main{
        background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/jumboGirl.jpg) no-repeat center center;
    background-size: cover;
    padding-top: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    input {
        font-family: 'SourceSansPro', sans-serif;
        font-weight: 900;
        font-size: 50px;
        margin: 0;
        padding: .25rem 0;
        border: 0;
        width: 200px;
        outline: 0;
        background: transparent;
        color: #fff;
        font-size: 3rem;
        line-height: 4rem;
        letter-spacing: .125rem;
        -webkit-transition: all 0.5s cubic-bezier(0.4, 0.25, 0.8, 0.3);
        transition: all 0.5s cubic-bezier(0.4, 0.25, 0.8, 0.3);
    }


    label {
        font-family: 'SourceSansPro', sans-serif;
        font-weight: 200;
        font-size: 25px;
        color: white;
    }

    .currency {
        font-family: 'SourceSansPro', sans-serif;
        font-weight: 900;
        font-size: 50px;
        margin: 0;
        color: white;
        float: right;
    }

    .inputWrap {
        border-bottom: 1px solid #bb1515;
    }

    .crCard {
        
	padding: 10px 40px;
        border-radius: 15px;
        -webkit-box-shadow: 0px 0px 39px -5px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 39px -5px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 39px -5px rgba(0, 0, 0, 0.75);
        background: url(<?php echo get_stylesheet_directory_uri();
        ?>/img/absCardBG.jpg) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 735px;
		height: 430px;
		position: relative;
		overflow: hidden;
    }

    #payLogos {
        width: 200px;
        height: auto;
        position: absolute;
        right: 30px;
        bottom: 30px;
    }

    button {
        margin-top: 35px;
        border: none;
        border-radius: 2px;
        height: 40px;
        background-color: #ffd100;
            width: 100%;
    }
    #paymentDiv{
    	position: absolute;
    	bottom: 40px;
    	left: 40px; 

      width: 400px;
    }
    #taxTransLogoCard{
    	width: 100px;
    	position: absolute;
    	right: 30px;
    	top: 0;
    }
    @media only screen and (max-width: 700px) {
    .crCard{
    height: 400px;
    width: 95%;
    flex-shrink: 0;
    }
    #payLogos{
        width: 100px;
    }
    #taxTransLogoCard{
        width: 80px;
    }
}
    @media only screen and (max-width: 575px) {
    .crCard{
    height: 330px;
    
    }
    #payLogos{
        width: 100px;
    }
    #taxTransLogoCard{
        width: 80px;
    }
    #paymentDiv{
        width: 250px;
        bottom: 20px;

    }
    button{
        margin-top: 10px;
    }
    input{
       font-size: 30px; 
        width: 100px;
            line-height: 1rem;
    }
    .currency{
         font-size: 30px; 
    }
    label{
        font-size: 15px;
    }
}
  @media only screen and (max-width: 410px) {
    .crCard{
    height: 200px;
    
    }
    #payLogos{
       display: none;
    }
    #taxTransLogoCard{
        width: 50px;
    }
 
    input, .currency{
       font-size: 30px; 
    }
    label{
        font-size: 15px;
    }
    h2{
        font-size: 20px;
    }
    #paymentDiv{
        width: 240px;
        bottom: 20px;

    }
}





/*@media only screen and (max-width: 950px) {
	 .crCard{
	 	transform: scale(0.6);
	 	width: calc(735px/2)
	 	height:calc(430px/2);
	 }
}

@media only screen and (max-width: 650px) {
	 .crCard{
	 	transform: scale(0.3);
	 }
}*/
    </style>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <!-- Use any element to open the sidenav -->
            
                
                    <div class="crCard">
                       <form action="https://wl.walletone.com/checkout/checkout/Index" class="form" id="form" method="post" onsubmit="" target="_parent">            <div class="form-wrap">
            <h2 style="color:white; margin:0;">Оплата <br>онлайн</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="" id="taxTransLogoCard">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payLogos.png" alt="Visa Mastercard" id="payLogos">
                            <div id="paymentDiv">
                                <label for="amount">
                                    Введите сумму:
                                </label>
                                <div class="inputWrap">
                                    <input id="amount" name="WMI_PAYMENT_AMOUNT" type="text" placeholder="500" required autofocus />
                                    <span class="currency">руб.</span>
                                    <div class="hidden">
                                    <input name="WMI_MERCHANT_ID"    value="175299689191"/>
 
  <input name="WMI_CURRENCY_ID"    value="643"/>
  <input name="WMI_DESCRIPTION"    value="Оплата поездки онлайн"/>
  <input name="WMI_SUCCESS_URL"    value="https://taxtrans.ru/success"/>
  <input name="WMI_FAIL_URL"       value="https://taxtrans.ru/errorpay"/>
  </div>
                                </div>
                                <button type="submit">Оплатить</button>
                            </div>
                        </form>
                    
                
        </main>
        <!-- #main -->
        </div>
        <!-- #primary -->
        <?php
get_sidebar();?>



    </div>
    </div>
    <!-- #content -->

    </div>
    
    <!-- #page -->
   

    

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mainFunctions.js?v=1.5"></script>

<?php wp_footer(); ?>

    </html>
    </body>

    </html>