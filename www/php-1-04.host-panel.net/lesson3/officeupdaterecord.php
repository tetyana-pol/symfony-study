<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Офіси</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="move.js"></script>
<div class="container" id="header">
			<div class="col-lg-8 col-md-8 col-sm-8">
				Список офісів
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<a href="index.php">На головну</a>
			</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2"><strong>Назва офісу</strong></div> 
<div class="col-lg-2 col-md-2 col-sm-2"><strong>Адреса</strong></div> 
<div class="col-lg-2 col-md-2 col-sm-2"><strong>Телефони</strong></div>
<div class="col-lg-2 col-md-2 col-sm-2"><strong>Контактні особи</strong></div>
<div class="col-lg-2 col-md-2 col-sm-2">-----</div>
<div class="col-lg-2 col-md-2 col-sm-2">-----</div>

<?php
	require("Database.php");
	$db=new Database(); $pdo=$db->pdo;
	$id=$_GET['id'];				
	$dbinsert=new Database(); $pdo=$dbinsert->pdo;
	
	$row_office=$db->getRow("select o.id_office as id_office, o.name_office as office, o.adress_office as adress, 
								p.telefon as telefon, p.name_person as person	
								from php_1_04_company.offices as o left join php_1_04_company.persons as p 
								on o.id_office=p.id_office where o.id_office=?", [$id]); 

		
		echo '<div class="col-lg-2 col-md-2 col-sm-2">'.$row_office['office'].'</div> ';
		echo '<div class="col-lg-2 col-md-2 col-sm-2">'.$row_office['adress'].'</div> ';
		echo '<div class="col-lg-2 col-md-2 col-sm-2">'.$row_office['telefon'].'</div> ';
		echo '<div class="col-lg-2 col-md-2 col-sm-2">'.$row_office['person'].'</div> ';
		echo '<div class="col-lg-2 col-md-2 col-sm-2"><i>Видалити</i></div> ';
		echo '<div class="col-lg-2 col-md-2 col-sm-2"><i>Коригувати</i></div> ';
		

?>	
<div id="container">
<h3>редагувати офіс</h3>
	<form action="officeupdatedb.php?id_office=<?php echo $id?>" method="post">
			<div class="form-group input">
			<label for id="name_office">Назва офісу</label>
		    <input type="text" name="name_office" id="name_office" value="<?php echo $row_office['office'] ?>"/>
		    <label for id="adress_office">Адреса офісу</label>
		   <input type="text" name="adress_office" id="adress_office" value="<?php echo $row_office['adress'] ?>"/>
		    <label for id="telefon">Телефон</telefon>
		    <input type="text" name="telefon" id="telefon" value="<?php echo $row_office['telefon'] ?>"/>
		    <label for id="name_person">Відповідальна особа</label>
		    <input type="text" name="name_person" id="name_person" value="<?php echo $row_office['person'] ?>"/>
		    </div>
			<input type="submit" value="Записати"/>
			</form>
</div>
</body>
</html>	