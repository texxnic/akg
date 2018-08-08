<?
function pric($kuda,$text){
	print "<p><strong id='price-$kuda' data-click='$kuda'>$text</strong></p>";
	if(isset($_GET) and $_GET['Odincovo']==$kuda){print '<p class="razmerha"><i class="uk-icon-sort-desc"></i></p>'; include "tables/$kuda.php";}
}
?>
	  <!-- ChooseCar -->
	  <section id="choose-car">
        <div class="container">
	      <div class="row">                        
            <div class="col-md-12">
              <div>
               <h1 style="text-align: center">Тарифы и цены «taxТранс семейного такси Одинцово»</h1>
               <h3 style="color: #999;margin: 10px;" class="header header-car">Фиксированные тарифы на все поездки такси из г.Одинцово или в г.Одинцово</h3>
			  </div>
			  <article>
			<?
		  	 if(isset($_GET) and $_GET['Odincovo']){
			 	if($incText){ include 'tables/'.$_GET['Odincovo'].'.text.php';}
			 }
			 else{
			 ?>
				<div class="full-text-main">
					<? include 'text.php' ?>
			  		<p style="text-align: center;">
			  			<img src="https://odincovo.taxi/images/stfc.jpg" alt="Фиксированные тарифы на все поездки такси из г.Одинцово или в г.Одинцово" />
			  		</p>
			  	</div> 
			 <?
			 }
			?>
			  	<div class="lisi-spis">
			  	 <ul>
			  	  <li>
			  	   <? pric('airports','Такси в аэропорты') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('avtovokzaly','Такси на автовокзалы') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('hotels','Такси в отели и гостиницы, дома отдыха') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('metro','Такси до станций метро') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('mkad','Такси к развязкам МКАД') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('rinki','Такси на рынки Москвы и Московской области') ?>
			  	  </li>
			  	  <li>
			  	    <? pric('rzd','Такси на железнодорожные вокзалы') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('street_moskow','Такси на улицы Москвы') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('torgovye-centry','Такси к торговым центрам Москвы и Одинцовского района') ?>
			  	  </li>
			  	  <li>
			  	   <? pric('geo','Такси по населенным пунктам Одинцовского района и районам Москвы') ?>
			  	  </li>
			  	 </ul>
			  	</div>
			  </article>
			  <p class="text-align-center-pe">
			  	<a target="_blank" href="/Семейное-такси-одинцово-тарифы.doc">
			  		<i class="uk-icon-file-word-o"></i>
			  		<span>Скачать прайс</span>
			  	</a>
			  </p>
		    </div>
		  </div>
	    </div>
	  </section>
	  <!-- /ChooseCar -->