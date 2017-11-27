<?php
require("Database.php");
	$dbdelete=new Database(); $pdo=$dbdelete->pdo;
$id=htmlspecialchars($_GET['id']);
$dbdelete->delete('offices', "id_office={$id}");
header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
?>
