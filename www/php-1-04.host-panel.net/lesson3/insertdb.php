<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Список компаній</title>
</head>
<body>
<?php
require("Database.php");
$dbinsert=new Database(); $pdo=$dbinsert->pdo;
$name_company=htmlspecialchars($_POST["name_company"]);
$data_found= htmlspecialchars($_POST["data_found"]);
$adress= htmlspecialchars($_POST["adress"]);
$site= htmlspecialchars($_POST["site"]);
$activity= htmlspecialchars($_POST["activity"]);
$name_office=$_POST["name_office"];
$adress_office= $_POST["adress_office"];
$telefon= $_POST["telefon"];
$name_person= $_POST["name_person"];

 $id_company=$dbinsert->insert('companies', array('name_company'=>$name_company,'adress'=>$adress,
								'site'=>$site,'activity'=>$activity));
								

for ($i=0, $k=count($name_office); $i<$k; $i++) {

$id_office=$dbinsert->insert('offices', array('id_company'=>$id_company,
							'name_office'=>$name_office[$i], 'adress_office'=>$adress_office[$i])); 
				              
			
$dbinsert->insert('persons', array('id_office'=>$id_office, 'telefon'=>$telefon[$i],
					'name_person'=>$name_person[$i])); 
						}
?>
<script>
    document.location.href='index.php';
</script>
</body>
</html>