      <!-- TaxiDriverForHire -->
      <?
      
#error_reporting(E_ALL | E_STRICT) ;
#ini_set('display_errors', 'On');
      
    	$SQL="SELECT * FROM `control_0TAXI_daily` WHERE CLOSE=1";
    	$SQL=mysql_query($SQL);
    	while($q=mysql_fetch_assoc($SQL)){
			$MON=$q['MON'];
			$YER=$q['YER'];
			$DAY=$q['DAY'];
		}
		$NAKAT=0;
		$SQL="SELECT * FROM `aTaxi_wd` WHERE YER=$YER AND MON=$MON AND DAY=$DAY";
    	$SQL=mysql_query($SQL);
    	while($q=mysql_fetch_assoc($SQL)){
			$x[$q['NAKAT']]=$q;
			$NAKAT+=$q['NAKAT'];
		}
		krsort($x); $i=1;
		foreach($x as $a=>$b){
			#print("<p>$a->$b</p>");
			$z[$i]=$b;
			$i++;
		}
		
      ?>
      <section id="verticalDriver" data-type="background" data-speed="5">	
          <div class="container">
            <div class="row">                        
              <div class="col-md-12">
                <h3 class="header header-driver">Вчера мы проехали</h3>
                <p class="NAKAT"><? print $NAKAT ?> км</p>
                <p class="poliolop"><span>из них больше всех:</span></p>
		      </div>
		    </div>		
	      </div>	  
          <div id="drivers" class="container">
	        <div class="row">
	        <?
	        
	        error_reporting(E_ALL | E_STRICT) ;
			ini_set('display_errors', 'On');
	        
				function grab_image($url,$saveto){
				    $ch = curl_init ($url);
				    curl_setopt($ch, CURLOPT_HEADER, 0);
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
				    $raw=curl_exec($ch);
				    curl_close ($ch);
				    if(file_exists($saveto)){
				        unlink($saveto);
				    }
				    $fp = fopen($_SERVER['DOCUMENT_ROOT'].$saveto,'x');
				    fwrite($fp, $raw);
				    fclose($fp);
				}
	        
		      for($i=1;$i<=4;$i++){
		      	$SQ="SELECT * FROM `control_A_TEH1` WHERE id=".$z[$i]['AUTO'];
		      	$SQ=mysql_query($SQ);
		      	$aq=mysql_fetch_assoc($SQ);
		      	$AUTO=$aq['NAIM'];
		      	$NOM=$aq['GOSNOM'];
		      	$IMG=$aq['IMG'];
		      	$SQ="SELECT * FROM `control_0TAXI_drivers` WHERE id=".$z[$i]['DRIVER'];
		      	$SQ=mysql_query($SQ);
		      	$aq=mysql_fetch_assoc($SQ);
		      	$DRIVER=$aq['FIO'];
		      	
		      	if (file_exists($_SERVER['DOCUMENT_ROOT'].$IMG)!=TRUE) {
				    grab_image('http://pr1.odincovo.taxi'.$IMG,$IMG);
				}

			  ?>
			  <div class="col-md-3">
                <div class="uk-panel uk-panel-box">
                  <div class="uk-overlay">
                    <img alt="Автомобили семейного такси в Одинцово" src="<? print $IMG ?>">
                    <div class="uk-overlay-area">
                      <div class="uk-overlay-area-content">
                        <p><a href="#"><? print $AUTO ?></a></p>
                        <p><? print $DRIVER ?></p>
                        <p class="nakatuli"><? print $z[$i]['NAKAT'] ?> км</p>
                      </div>
                    </div>
                  </div>
	    		</div>
	    	  </div>
			  <?
			  }
		    ?>                       
		    </div>
	      </div>
	  </section>  
	  <!-- /TaxiDriverForHire -->