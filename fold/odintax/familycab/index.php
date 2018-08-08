<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/xm.php';  ?>
<!DOCTYPE html>
<? include '../db.php'; #exit; ?>
<html lang="ru">
<link rel="canonical" href="https://odincovo.taxi/familycab/"/>
<?
$title='О компании';
$keywords='О компании Семейное Такси';
$description='Что из себя представляет компания Семейное такси в Одинцово';
?>

  <? include '../blocks/head.php'; ?>

  <body>
    <!-- Wrap all page content -->
    <div class="page-wrapper" id="page-top">
	  <? include '../blocks/header.php'; ?>
	  <? include '../blocks/Gap.php'; ?>
	  
	  <? include '../blocks/WhoAreWe.php'; ?>
	  <? #include '../blocks/CityCoverage.php'; ?>
	  <? include '../blocks/OurDrivers.php'; ?>
	  <? include '../blocks/OurVehicles.php'; ?> 	   	  
	  <? include '../blocks/WeAreCityCab.php'; ?> 	  
	  	  
	  <? include '../blocks/Bottom.php'; ?> 	  
	  <? include '../blocks/Footer.php'; ?> 	    
    </div>
    <? include '../blocks/Scripts.php'; ?>
  </body>
</html>