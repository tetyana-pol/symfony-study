<?php
$db_host=	'localhost';
$db_user=	'usercompany';
$db_pass=	'usercompany';
$db_database='php_1_04_company';
try{
$pdo=new PDO('mysql:host=localhost; dbname=php_1_04_company','usercompany','usercompany');}
catch (PDOException $e){
echo '��������� ����������� �� ���� ������';}
$sql='set charset utf8';
			$pdo->query($sql);
?>