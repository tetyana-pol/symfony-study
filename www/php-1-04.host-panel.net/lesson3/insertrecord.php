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
<form action="insertdb.php" method="post">
<div class="form-group">
	<label for id="name_company">Назва компанії</label>
	<input type="text" name="name_company"/>
</div>	

<div class="form-group">
	<label for id="data_found">Дата заснування</label>
	<input type="text" name="data_found" id="data_found"/>
	
	<label for id="adress">Адреса</label>
	<input type="text" name="adress" id="adress"/>

	<label for id="site">Сайт</label>
	<input type="text" name="site" id="site"/>

	<label for id="actvity">Опис діяльності</label>
	<input type="text" name="activity" id="actvity"/>
</div>

<div class="form-group input">
	<label for id="name_office">Назва офісу</label>
	<input type="text" name="name_office[]" id="name_office"/>
	
	<label for id="adress_office">Адреса офісу</label>
	<input type="text" name="adress_office[]" id="adress_office"/>

	
	<label for id="telefon">Телефон</telefon>
	<input type="text" name="telefon[]" id="telefon"/>

	<label for id="name_person">Відповідальна особа</label>
	<input type="text" name="name_person[]" id="name_person"/>
</div>
	
<div class="form-group" id="send">	
	<input type="button" id="add" value="+"/>
	</div>
	<input type="submit" value="Записати"/>
</form>
</body>
</html>

