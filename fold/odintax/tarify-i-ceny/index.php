<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/xm.php';  ?>
<!DOCTYPE html>
<? include '../db.php'; #exit; ?>
<html lang="ru">
<?
$incText=FALSE;
if(isset($_GET) and $_GET['Odincovo']){
 if($_GET['Odincovo']=='airports'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси в аэропорт';
 	$keywords='такси в аэропорт, “семейное такси” Одинцово, заказ такси в аэропорт Шереметьево, Внуково, Домодедово, такси Одинцово-Шереметьево, такси Власиха-Шереметьево, такси Домодево-Одинцово, такси в аэропорт домодедово из одинцово дешево, такси Одинцово-Внуково, такси до Шереметьево из Одинцово, цена такси из Одинцово до Шереметьево, такси в аэропорт';
 	$description='«Семейное такси» Одинцово выгодные тарифы на заказ такси в аэропорты Московской области, оперативный заказ такси в аэропорты Шереметьево, Внуково, Домодедово из Одинцово и наоборот';
 	$incText=TRUE;
 }
 elseif($_GET['Odincovo']=='avtovokzaly'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси до автовокзалов';
 	$keywords='такси из Одинцово на автовокзал, автоаокзал, цена';
 	$description='Цены на такси из Одинцово до автовокзалов Москвы и области и встрча с автовокзалов';
 }
 elseif($_GET['Odincovo']=='hotels'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси в отели и гостиницы, дома отдыха';
 	$keywords='такси в отель, такси в гостиницу, такси в мотель, такси в дом отдыха, такси в общагу';
 	$description='Такси в отели и гостиницы, дома отдыха Москвы и Одинцовского района.';
 }
 elseif($_GET['Odincovo']=='metro'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси до метро';
 	$keywords='такси до метро, такси из Одинцово до метро, такси от метро до Одинцово';
 	$description='Фиксированные тарифы на поездки из Одинцово до любых станций Московского метро';
 }
 elseif($_GET['Odincovo']=='mkad'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси до развязок МКАД';
 	$keywords='такси до мкада, такси от Одинцово до мкада, такси от МКАДА до Одинцово';
 	$description='Цены на такси из Одинцово до развязок МКАД';
 }
 elseif($_GET['Odincovo']=='rinki'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси на популярные рынки Москвы';
 	$keywords='такси до рынка, такси на базар, такси на выставку, такси на ярмарку, такси из Одинцово';
 	$description='Цены на такси из Одинцово до крупных рынков Москвы и Одинцовского района';
 }
 elseif($_GET['Odincovo']=='rzd'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси до ЖД вокзалов и станций';
 	$keywords='такси до белорусского вокзала, такси на киевский вокзал, такси на курский вокзал, такси на савеловский вокзал, такси из Одинцово, такси на рижский вокзал, такси на вокзал';
 	$description='Такси от Одинцово до железнодорожных вокзалов и станций';
 }
 elseif($_GET['Odincovo']=='street_moskow'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси в Москву';
 	$keywords='Такси до арбата, такси на красную площадь, такси на ВДНХ, такси на ВВЦ, такси в парк, такси в Москву, такси на улицу, улица, такси, цена';
 	$description='Такси на конкретную улицу Москвы по фиксированной цене в любое время суток';
 }
 elseif($_GET['Odincovo']=='torgovye-centry'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси до торговых центров';
 	$keywords='такси до ашана, такси до метро, такси до карусели, такси до вегаса, такси до меги, такси до мега, такси в кинотеатр, такси в торговый центр';
 	$description='Такси из Одинцово до популярных торговых центров Москвы и Области';
 }
 elseif($_GET['Odincovo']=='geo'){
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/?Odincovo='.$_GET['Odincovo'].'"/>';
 	$title='Такси по Одинцовскому району. Цены';
 	$keywords='такси Три кита – Одинцово, Такси Одинцово – Три кита, такси Одинцово – Измайлово, Стоимость такси Одинцово – Измайлово, такси в Лапино, такси Перхушково – Лапино, такси из Одинцово в Куркино, такси из Одинцово в Москву, поселка Зональный в Одинцово, Одинцово – Барвиха такси, такси в гипермаркет Ашан, такси из Одинцово в Крешкино, такси Второй завод – Одинцово';
 	$description='Заказать такси в Одинцово до мебельного гипермаркета Три кита, недорогое такси в Одинцово по местности, такси Одинцово – Измайлово, заказать такси в Перхушково, добраться на такси из Одинцово в Куркино';
 	$incText=TRUE;
 }
 else{
 	print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/"/>';
 }
}
else{
 print '<link rel="canonical" href="https://odincovo.taxi/tarify-i-ceny/"/>';
 $title='Цены/Тарифы на такси в Одинцово';
 $keywords='заказ такси в одинцово, заказать такси в одинцово, одинцово лучшее такси, такси в одинцово цены, такси г одинцово, такси город одинцово, такси города одинцово, такси до одинцово стоимость, такси из одинцово, такси одинцова цены, такси одинцово номера, одинцово такси тарифы, одинцовское такси тарифы, такси по городу одинцово, телефоны такси в одинцово';
 $description='К вашим услугам лучшее такси в городе Одинцово, «Семейное такси» в городе Одинцово отличный способ передвигаться по городу и Московской области по доступной цене, такси в городе Одинцово по самым выгодным тарифам';
}
?>
  <? include '../blocks/head.php'; ?>

  <body>
    <!-- Wrap all page content -->
    <div class="page-wrapper" id="page-top">
	  <? include '../blocks/header.php'; ?>
	  <? include '../blocks/Gap.php'; ?>
	  
	  <? #include '../blocks/WhoAreWe.php'; ?>
	  <? #include '../blocks/CityCoverage.php'; ?>
	  <? #include '../blocks/OurDrivers.php'; ?>
	  <? #include '../blocks/OurVehicles.php'; ?> 	
	 <!---->
	  <? include 'main.php'; ?>
	 <!---->  
	 
	  <? include '../blocks/WeAreCityCab.php'; ?> 	  
	  	  
	  <? include '../blocks/Bottom.php'; ?> 	  
	  <? include '../blocks/Footer.php'; ?> 	    
    </div>
    <? include '../blocks/Scripts.php'; ?>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('div.lisi-spis strong').bind('click',function(){
		location.href='/tarify-i-ceny/?Odincovo='+jQuery(this).attr('data-click')+'#price-'+jQuery(this).attr('data-click');
	});
});
function upCorrect(){
	var a=jQuery(window).scrollTop();
	jQuery(window).scrollTop(a-100);
}
</script>
<? 
if ($_GET['Odincovo']){
?>
<script type="text/javascript">

jQuery(window).load(function(){
	upCorrect();
	jQuery('div.lisi-spis ul li table td:last-child').each(function(){
		var text=jQuery(this).text();
		text*=1;
		if(isNaN(text)==false){
			text=text+' <i class="uk-icon-rouble"></i>';
			jQuery(this).html(text);
		}
		else{
			jQuery(this).html('');
		}
	});
});

</script>
<?
}
?>
  </body>
</html>