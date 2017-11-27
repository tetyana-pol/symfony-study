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
	$dbupdb=new Database(); $pdo=$dbupdb->pdo;
	$id=htmlspecialchars($_GET["id"]);
	$name_company=htmlspecialchars($_POST["name_company"]);
	$data_found= htmlspecialchars($_POST["data_found"]);
	$adress= htmlspecialchars($_POST["adress"]);
	$site= htmlspecialchars($_POST["site"]);
	$activity= htmlspecialchars($_POST["activity"]);

	$id_company=$dbupdb->update('companies', array("name_company"=>$name_company, "adress"=>$adress,
								"site"=>$site, "activity"=>$activity), "id_company={$id}"); 
?>
<script>
    document.location.href='index.php';
</script>
</body>
</html>