<?php
require("Database.php");
	$dbdelete=new Database(); $pdo=$dbdelete->pdo;
$id=htmlspecialchars($_GET['id']);
$dbdelete->delete('companies', "id_company={$id}");
header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
?>
