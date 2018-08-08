<?

$date=$_POST['orderCreatedDatetime'];
$sum=$_POST['orderSumAmount'];
$kto=$_POST['ekipadj'];
$YER=date('Y')*1;
$MON=date('m')*1;
$DAY=date('d')*1;
$customerNumber=$_POST['customerNumber'];


$SQL="INSERT INTO `a_yandex_money` (`date`,`sum`,`kto`,`YER`,`MON`,`DAY`,`customerNumber`) VALUES ('$date','$sum','$kto','$YER','$MON','$DAY','$customerNumber')";
mysql_query($SQL);

?>