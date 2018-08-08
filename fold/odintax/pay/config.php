<?php

$host="tax-trans.mysql";
$user="tax-trans_erp";
$password="3/AGhDWN";
$db="tax-trans_taxi";
mysql_connect($host, $user, $password) or die("MySQL сервер недоступен!".mysql_error());
mysql_select_db($db) or die("Нет соединения с БД".mysql_error());
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
 
	$configs = array();
	$configs['shopId'] 			= '146037';
	$configs['scId'] 			= '105192';
	$configs['ShopPassword'] 	= 'familycabRU2016';
 
?>