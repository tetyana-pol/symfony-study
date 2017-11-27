<?php
	require("Database.php");
	$dbupdb=new Database(); $pdo=$dbupdb->pdo;
	$id=htmlspecialchars($_GET["id_office"]);
	$name_office=htmlspecialchars($_POST["name_office"]);
	$adress_office= htmlspecialchars($_POST["adress_office"]);
	$telefon= htmlspecialchars($_POST["telefon"]);
	$name_person= htmlspecialchars($_POST["name_person"]);
	

	$dbupdb->update('offices', array("name_office"=>$name_office, "adress_office"=>$adress_office), "id_office={$id}"); 
	$dbupdb->update('persons', array("telefon"=>$telefon, "name_person"=>$name_person), "id_office={$id}"); 							
?>
<script>
    document.location.href='index.php';
</script>