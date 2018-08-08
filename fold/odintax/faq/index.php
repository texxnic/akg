<? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/xm.php';  ?>
<!DOCTYPE html>
<? include '../db.php'; #exit; ?>
<html lang="ru">
<link rel="canonical" href="https://odincovo.taxi/faq/"/>
<?
$title='Вопрос - ответ';
$keywords='вопросы к семейному такси, faq';
$description='Ответы на часто задаваемые про такси вопросы';
?>

  <? include '../blocks/head.php'; ?>

  <body>
    <!-- Wrap all page content -->
    <div class="page-wrapper" id="page-top">
	  <? include '../blocks/header.php'; ?>
	  <? include '../blocks/Gap.php'; ?>
	  
	  <? include '../blocks/Faq.php'; ?> 	  
	  	  
	  <? include '../blocks/Bottom.php'; ?> 	  
	  <? include '../blocks/Footer.php'; ?> 	    
    </div>
    <? include '../blocks/Scripts.php'; ?>
  </body>
</html>