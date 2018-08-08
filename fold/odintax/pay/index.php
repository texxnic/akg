<?

$scheme = isset($_SERVER['HTTP_SCHEME']) ? $_SERVER['HTTP_SCHEME'] : (
    (
  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
   443 == $_SERVER['SERVER_PORT']
    ) ? 'https' : 'http'
 );
 $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 if($scheme=='http'){
 	header('HTTP/1.1 301 Moved Permanently');
	header('location: https://'.$url);
	exit();
 }

include('config.php');
$userX='ID:'.date('YmdHis');

$YER=date('Y')*1;
$MON=date('m')*1;
$DAY=date('d')*1;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<link rel="canonical" href="https://odincovo.taxi/pay/"/>
<? include 'css.m.php'; ?>
<title>Оплата поездки картой</title>
<meta name="description" content="Семейное и корпоративное такси в Одинцово с оплатой электронными деньгами и картами">
<meta name="keywords" content="оплата такси картой, такси оплата поездки, оплата такси электронными деньгами" />
<link rel="shortcut icon" href="/img/favicon.png" type="image/png"> 
<meta name="viewport" content="width=device-width,maximum-scale=1,initial-scale=0.8,user-scalable=0"/>
</head>
<body style="margin:0;padding:0">
<section>
<h1>«Семейное такси»</h1>
<img src="/pay/taxi-bg.png"/>
<h2>Оплата поездки</h2>
<!-- Здесь предоставлен минимальный код платежной формы, чтобы выполнить тестовый платеж в демо режиме. -->
<form action="https://money.yandex.ru/eshop.xml" method="POST">
	<!-- Эти поля обязательные, их нельзя удалять из платежной формы =============================
	в полях value="" в строках shopid и scid пропишите требуемые значения                 -->  
	<label for="ekipadj">
	<p><span>Водитель:</span></p>
	<p>
	<select id="ekipadj" name="ekipadj" style="padding: 10px;">
		<?
		 $SQL="SELECT * FROM `aTaxi_wd` WHERE YER=$YER AND MON=$MON AND DAY=$DAY";
		 $SQL=mysql_query($SQL);
		 while($X=mysql_fetch_assoc($SQL)){
		 if($skip==$X['DRIVER']){
		 	continue;
		 }
		 $DRIVER="SELECT * FROM `control_0TAXI_drivers` WHERE id=".$X['DRIVER'];
		 $DRIVER=mysql_query($DRIVER);
		 $DRIVER=mysql_fetch_assoc($DRIVER);
		 $DRIVER=$DRIVER['FIO'];
		 $AUTO="SELECT * FROM `control_A_TEH1` WHERE id=".$X['AUTO'];
		 $AUTO=mysql_query($AUTO);
		 $AUTO=mysql_fetch_assoc($AUTO);
		 $AUTO=$AUTO['NAIM'];
		 $MAS[$DRIVER]='{"'.$X['DRIVER'].'":"'.$X['AUTO'].'"}';
		 $skip=$X['DRIVER'];
		 }
		 ksort($MAS);
		 foreach($MAS as $a=>$b){
		 ?>
		 	<option value='<? print $b ?>'><? print $a ?></option>
		 <?
		 }
		?>
		<?
		 $SQL="SELECT * FROM `control_0TAXI_daily` WHERE YER=$YER AND MON=$MON AND DAY=$DAY";
		 $SQL=mysql_query($SQL);
		 while($X=mysql_fetch_assoc($SQL)){
		 if($skip==$X['DRIVER']){
		 	continue;
		 }
		 $DRIVER="SELECT * FROM `control_0TAXI_drivers` WHERE id=".$X['DRIVER'];
		 $DRIVER=mysql_query($DRIVER);
		 $DRIVER=mysql_fetch_assoc($DRIVER);
		 $DRIVER=$DRIVER['FIO'];
		 $AUTO="SELECT * FROM `control_A_TEH1` WHERE id=".$X['AUTO'];
		 $AUTO=mysql_query($AUTO);
		 $AUTO=mysql_fetch_assoc($AUTO);
		 $AUTO=$AUTO['NAIM'];
		 $MAS[$DRIVER]='{"'.$X['DRIVER'].'":"'.$X['AUTO'].'"}';
		 $skip=$X['DRIVER'];
		 }
		 ksort($MAS);
		 foreach($MAS as $a=>$b){
		 ?>
		 	<option value='<? print $b ?>'><? print $a ?></option>
		 <?
		 }
		?>
	</select>
	</p>
	</label>
	
	<input name="shopId" value="<? print $configs['shopId'] ?>" type="hidden">
	<input name="scid" value="<? print $configs['scId'] ?>" type="hidden">
	<input name="paymentType" value="AC" type="hidden">
	<input type="hidden" style="padding: 10px;" name="customerNumber" value="<? print($userX); ?>"><!-- Идентификатор вашего покупателя -->
	
	<label for="sum">
	<p><span>Сумма оплаты:</span></p>
	<p><i>РУБ</i><input autocomplete="off" style="padding: 10px;" id="sum" name="sum" type="number" placeholder="200" value=""><!-- Сумма покупки (руб.) --></p>
	</label>
	
	<!-- Кнопку "Оплатить", можно назвать по своему, например value="Оплатить за курсы вождения"
	или value="Оплатить подписку на журнал" и т.д.                                        -->
	<p style="text-align: center">
		<button>Оплатить</button>
	</p>
	<p style="text-align: center">
		<a href="/">Вернуться на сайт</a>
	</p>
</form>
</section>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter29750960 = new Ya.Metrika({
                    id:29750960,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/29750960" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

