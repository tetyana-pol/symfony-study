<?php
	require("Database.php");
	$dbuprecord=new Database(); $pdo=$dbuprecord->pdo;
	$id=htmlspecialchars($_GET['id']);
	$result_company=$dbuprecord->selectRow('*', 'companies', "id_company={$id}"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Список компаній</title>
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
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="move.js"></script>
</head>
<body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
	<form action="updatedb.php?id=<?php echo $id ?>" method="post">
	<div class="form-group">
	<label for id="name_company">Назва компанії</label>
	<input type="text" name="name_company" id="name_company" value="<?php echo $result_company['name_company'] ?>"/>
	</div>	
	<div class="form-group">
	<label for id="data_found">Дата заснування</label>
	<input type="text" name="data_found" id="data_found" value="<?php echo $result_company['data_found'] ?>"/>
	
	<label for id="adress">Адреса</label>
	<input type="text" name="adress" id="adress" value="<?php echo $result_company['adress'] ?>"/>

	<label for id="site">Сайт</label>
	<input type="text" name="site" id="site" value="<?php echo $result_company['site'] ?>"/>

	<label for id="actvity">Опис діяльності</label>
	<input type="text" name="activity" id="activity" value="<?php echo $result_company['activity'] ?>"/>
	</div>

	<div class="form-group">	
	<input type="submit" value="Записати"/> 
	</div>	
</form>
</body>
</html>

