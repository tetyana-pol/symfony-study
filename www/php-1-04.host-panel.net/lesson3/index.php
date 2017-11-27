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
	</head>

<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
<div class="container" id="header">
			<div class="col-lg-8 col-md-8 col-sm-8">
				Список компаній
			</div>
			<div class="col-lg-4 col-md-4 col-sm-8">
				<form action="insertrecord.php"><input type="submit" value="Додати"/></form>
			</div>
</div>
   
<table class="table">
	<tr>
<td><strong>Назва компанії</strong></td>  
<td><strong>Адреса</strong></td> 
<td><strong>Сайт</strong></td> 
<td><strong>Опис діяльності</strong></td>
	</tr>	
<?php
	require("Database.php"); 
	spl_autoload_register(function ($class_name) {
		require $class_name . '.php';
	});
	$db=new Database(); $pdo=$db->pdo;
	$result_company=$db->select('*','companies'); 
		
	foreach ($result_company as $row_company) {
		echo '<tr>';
		echo '<td>'.$row_company['name_company'].'</td> ';
		echo '<td>'.$row_company['adress'].'</td> ';
		echo '<td>'.$row_company['site'].'</td> ';
		echo '<td>'.$row_company['activity'].'</td> ';
		
		$id_company=$row_company['id_company'];
		echo '</tr';
		echo '<tr';
		echo '<td> </td>';
	   	echo '<td><i>'.sprintf('<a href="deleterecord.php?id=%s">Видалити</a>', $id_company).'</i></td> ';
		echo '<td><i>'.sprintf('<a href="updaterecord.php?id=%s">Коригувати</a>', $id_company).'</i></td> ';	
		echo '<td><i>'.sprintf('<a href="office.php?id=%s">Офіси</a>', $id_company).'</i></td> ';
		
		echo '</tr>';
		}
?>	
</table>
</body>
</html>