<?php
$randMas=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
$randString='';
for ($i=0; $i<6; $i++){
	$rand=rand(0, 15);
	$randString=$randString.$randMas[$rand];
};
echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
	<style type="text/css">
		div{
			margin-top: 5px;
			wigth: 300px;
			height: 300px;
			background: #'.$randString.';
		}
	</style>
</head>
<body>
<form action="do.php" method="post">
<p>УРОК 1</p>
<p>Програма, що дозволяє визначити рік по китайському календарю та згенерувати випадковий колір</p>
<br/>Введіть рік (в діапазоні 1924-2024): <input type="text" name="year">
    <input type="submit" value="ввести">
</form>
<div></div>
</body>
</html>'
?>

