<?php
/**
* Template Name: formaccept
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kpk 2
 */

 ?>        
       <?php
$testAdresses = array('dog933@mail.ru','insidelookst@gmail.com','web-332yv@mail-tester.com');
$finalAdresses = array('dog933@mail.ru','0110707@mail.ru','taxi-one@inbox.ru');
if((isset($_POST['moneyQuantity'])&&$_POST['moneyQuantity']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        

            $subject = $_POST['categoryName']; //Загаловок сообщения
            if (isset($_POST['capitalizationSelect'])) {
              if ($_POST['capitalizationSelect'] == "w/oCapit") {
                $capitalizationSelect = "без капитализации";
              } else {
                $capitalizationSelect = "с капитализацией";
              }
                
            };
            
        if ($_POST['moneyQuantity'] == 250000 || $_POST['moneyQuantity'] == 150000) {
           $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Поступила заявка от пользователя: <b>'. $_POST['customerName'] .'</b>, контактный телефон: <b>' . $_POST['phone'] . '</b>.</p>
                           
                    </body>
                </html>';
         } else {
          $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Поступила заявка от пользователя: <b>'. $_POST['customerName'] .'</b>, контактный телефон: <b>' . $_POST['phone'] . '</b>. Сумма в калькуляторе:' . $_POST['moneyQuantity'] . 'рублей или у.е, на срок ' . $_POST['simpleCalcMonth'] . ' дней ' . $capitalizationSelect . '.</p>
                           
                    </body>
                </html>';
         }
          //Текст нащего сообщения можно использовать HTML теги
       
        
       wp_mail( $testAdresses, $subject, $message, "Content-type: text/html\r\n" ); //Отправка письма с помощью функции mail
};

 ?>  

     



