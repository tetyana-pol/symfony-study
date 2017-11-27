<?php
require("Database.php");
$dbinsert=new Database(); $pdo=$dbinsert->pdo;
$id_company=htmlspecialchars($_GET["id_company"]);
$name_office=htmlspecialchars($_POST["name_office"]);
$adress_office= htmlspecialchars($_POST["adress_office"]);
$telefon= htmlspecialchars($_POST["telefon"]);
$name_person=htmlspecialchars( $_POST["name_person"]);

$id_office=$dbinsert->insert('offices', array('id_company'=>$id_company, 'name_office'=>$name_office,
							'adress_office'=>$adress_office)); 
							
$dbinsert->insert('persons', array('id_office'=>$id_office, 'telefon'=>$telefon, 'name_person'=>$name_person)); 
header("Location: {$_SERVER['HTTP_REFERER']}");
?>				