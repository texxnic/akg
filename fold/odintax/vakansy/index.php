<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/xm.php';  ?>
<!DOCTYPE html>
<? include '../db.php'; #exit; ?>
<html lang="ru">
<link rel="canonical" href="https://odincovo.taxi/vakansy/"/>
<?
$title='Вакансии';
$keywords='Вакансии в такси Одинцово, водитель такси, вакансия таксист, диспетчер такси, вакансии';
$description='Вакансии в компании Семейное такси в Одинцово. Водители, диспетчеры.';
?>

  <? include '../blocks/head.php'; ?>

  <body>
    <!-- Wrap all page content -->
    <div class="page-wrapper" id="page-top">
	  <? include '../blocks/header.php'; ?>
	  <? include '../blocks/Gap.php'; ?>
	  
	  <? include '../blocks/vakansy.php'; ?> 	  
	  	  
	  <? include '../blocks/Bottom.php'; ?> 	  
	  <? include '../blocks/Footer.php'; ?> 	    
    </div>
    <? include '../blocks/Scripts.php'; ?>
  </body>
</html>