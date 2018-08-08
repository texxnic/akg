

$(document).ready(function() {
 
 // Thumbnails Full

 $('img#thumbImgId').each(function() {
  
   if ((this.width / this.height) > 1.2) {
    $(this).addClass('thumbWide');
   } else {
      $(this).addClass('thumbTall');
   };
 });


   $(".dropdown").hover(
  function(){ $(this).addClass('open') },
       function(){ $(this).removeClass('open') }

   );

   $(".navbar-toggle").click(function(){
    $(this).toggleClass("collapsed");
    $(".navbar-collapse").toggleClass("in");
   });


setTimeout( function(){
      $('.descr').css({ "background": "url('http://planeta40.ru/wp-content/themes/planeta40/img/descrBG.jpg') no-repeat center center fixed", "background-size":"cover"});
    },1000);

  $('.btn-slider').on('click', function(){
    $('.btn-slider').removeClass('selected');
    $(this).addClass('selected');
});

  $('.garden-btn').on('click', function(){
    $('.garden').addClass('fadeInLeft');
    $('.garden').removeClass('hide');
    $('.building').addClass('hide');
    $('.services').addClass('hide');
    setTimeout( function(){
      $('.descr').css({ "background": "url('http://planeta40.ru/wp-content/themes/planeta40/img/gardenBG.jpg') no-repeat center center fixed", "background-size":"cover"});
    },1000);
    

});
   $('.building-btn').on('click', function(){
   	$('.services').addClass('hide');
   	$('.garden').addClass('hide');
    $('.building').addClass('fadeInUp');
    $('.building').removeClass('hide');
     setTimeout( function(){
      $('.descr').css({ "background": "url('http://planeta40.ru/wp-content/themes/planeta40/img/descrBG.jpg') no-repeat center center fixed", "background-size":"cover"});
    },1000);
    
});
    $('.services-btn').on('click', function(){
    $('.garden').addClass('hide');
    $('.building').addClass('hide');	
    $('.services').addClass('fadeInRight');
    $('.services').removeClass('hide');
    setTimeout( function(){
      $('.descr').css({ "background": "url('http://planeta40.ru/wp-content/themes/planeta40/img/servicesBG.jpg') no-repeat center center fixed", "background-size":"cover"});
    },1000);
});
// steaky header




	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
  
 var textW = $(".whiteDescrTxt");
  $("#Mezh").hover(function() {
    
     textW.empty();
     textW.append('<h1>Межевание</h1><div class="divider"></div><p>Межевание земель представляет собой комплекс инженерно-геодезических работ по установлению, восстановлению и закреплению на местности границ землепользований, определению местоположения границ и площади участка, а также юридическому оформлению полученных материалов.</p>');
   });

  $("#RazdZem").hover(function() {
    
     textW.empty();
     textW.append('<h1>Раздел земельного участка</h1><div class="divider"></div><p>При разделе земельного участка образуются несколько земельных участков, а земельный участок, из которого при разделе образуются земельные участки, прекращает свое существование. При разделе земельного участка у его собственника возникает право собственности на все образуемые в результате раздела земельные участки.При разделе земельного участка, находящегося в общей собственности, участники общей собственности сохраняют право общей собственности на все образуемые в результате такого раздела земельные участки, если иное не установлено соглашением между такими участниками.</p>');
   });

   $("#RazdZem").hover(function() {
    
     textW.empty();
     textW.append('<h1>Раздел земельного участка</h1><div class="divider"></div><p>При разделе земельного участка образуются несколько земельных участков, а земельный участок, из которого при разделе образуются земельные участки, прекращает свое существование. При разделе земельного участка у его собственника возникает право собственности на все образуемые в результате раздела земельные участки.При разделе земельного участка, находящегося в общей собственности, участники общей собственности сохраняют право общей собственности на все образуемые в результате такого раздела земельные участки, если иное не установлено соглашением между такими участниками.</p>');
   });

    $("#ObjedZem").hover(function() {
    
     textW.empty();
     textW.append('<h1>Объединение земельного участка</h1><div class="divider"></div><p>При объединении смежных земельных участков образуется один земельный участок, и существование таких смежных земельных участков прекращается. При объединении земельных участков у собственника возникает право собственности на образуемый земельный участок. При объединении земельных участков, принадлежащих на праве собственности разным лицам, у таких лиц возникает право общей собственности на образуемые земельные участки.При объединении земельных участков, принадлежащих на праве общей собственности разным лицам, у них возникает право общей собственности на образуемый земельный участок в соответствии с гражданским законодательством.</p>');
   });

     $("#VenosMest").hover(function() {
    
     textW.empty();
     textW.append('<h1>Вынос границ ЗУ на местности</h1><div class="divider"></div><p>Вынос в натуру границ земельного участка - процесс, направленный на установление на местности границ земельных участков (с восстановлением межевых знаков), информация о которых содержится в государственном кадастре недвижимости (ГКН). Вынос в натуру границ земельного участка - это один из видов геодезических работ, которые помимо упомянутого имеют различные названия - это и восстановление границ земельного участка, и восстановление межевых знаков, и т.д. </p>');
   });

      $("#PostUcht").hover(function() {
    
     textW.empty();
     textW.append('<h1>Постановка на кад. учет дома</h1><div class="divider"></div><p>Постановка на учет объекта недвижимости  необходима в связи с образованием или созданием объекта недвижимости.</p>');
   });

     $("#RazdPomsh").hover(function() {
    
     textW.empty();
     textW.append('<h1>Раздел дома на помещения</h1><div class="divider"></div><p>Учет изменений объекта недвижимости  необходим в связи с изменением уникальных характеристик объекта недвижимости или дополнительных сведений об объекте недвижимости  в</p>');
   });

      $("#VnesIzmn").hover(function() {
    
     textW.empty();
     textW.append('<h1>Внесение изменений в конструкцию дома</h1><div class="divider"></div><p>Cнятие с учета объекта недвижимости необходимо в связи с прекращением существования объекта недвижимости.</p>');
   });

   



      $("#PoetPlan").hover(function() {
    
     textW.empty();
     textW.append('<h1>Поэтажный план</h1><div class="divider"></div><p>Поэтажный план - это чертеж этажа (части этажа) здания, на котором отображен план помещения (квартиры или иного назначения), а также план самого помещения. На поэтажном плане отражаются стены, перегородки, перемычки, оконные и дверные проемы, лоджии, антресоли и т.д. Этот документ необходим для подготовки технического плана или технического паспорта объекта капитального строительства, является их составной (графической) частью. Поэтажный план часто используется для подготовки проекта перепланировки помещения, подготовки дизайн проектов, газификации. При необходимости может изготавливаться отдельно от технического плана или технического паспорта.</p>');
   });



      $("#VvodExplt").hover(function() {
    
     textW.empty();
     textW.append();
   });


      $("#SnyatieSUcheta").hover(function() {
    
     textW.empty();
     textW.append();
   });


      $("#ObyedPomesh").hover(function() {
    
     textW.empty();
     textW.append();
   });

      $("#Geodesy").hover(function() {
    
     textW.empty();
     textW.append('<h1>Геодезия</h1><div class="divider"></div><p>Главной составляющей проектной и подготовительной работ является геодезия. Она необходима в процессе осуществления землеустройства. С её помощью заказчик получает достаточно полезную информацию, касающуюся ситуации на участке, а именно:</p> <ul><li>Данные по рельефу (выполняется точность и актуальность);</li><li>Всевозможные варианты проектирования.</li></ul><p>Таким образом, геодезические работы можно назвать комплексом вычислений, благодаря которому можно с предельной точностью заниматься размещением участков земли, всевозможных объектов.</p>');
   });

      $("#Topography").hover(function() {
    
     textW.empty();
     textW.append('<h1>Топографическая съёмка</h1><div class="divider"></div><p>Топосъемка земельного участка имеет целью составление инженерной карты высокой точности или плана крупных и мелких масштабов. Материалы геодезических исследований включают в себя информацию о рельефе местности, имеющихся на территории сооружениях и коммуникациях, включая подземные и т.д. Эта информация необходима специалистам для грамотного проектирования и возведения на данной местности различных жилых или объектов промышленного назначения.</p>');
   });

      $("#SjomkaTrass").hover(function() {
    
     textW.empty();
     textW.append();
   });

      $("#SoprStoit").hover(function() {
    
     textW.empty();
     textW.append();
   });


 



});
