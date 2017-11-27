<?php
$count1=$_POST["count1"];
$count2=$_POST["count2"];
                        /*Генеруємо масив*/
echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
</head>
<body>
	<h3>Генеруємо двовимірний масив відповідних розмірів</h3>
    <table border="1">';
for ($i=0; $i<$count1; $i++){
    echo  '<tr>';
    for ($j=0;$j<$count2; $j++ ){
        $user[$i][$j]=rand(0, 1000);
        echo '<td>'.$user[$i][$j].'</td>';
                    }
   echo '</tr>';
}
   echo ' </table>';
   
    /*Залишаємо в масиві тільки прості числа*/
	echo 
	'<h3>Залишаємо тільки прості числа</h3>
	<table border="1">';
	
    for ($i=0; $i<$count1; $i++){
    echo  '<tr>';
for ($j=0;$j<$count2; $j++ ){
	if ($user[$i][$j]%2==0) continue;
	for ($k=3, $n=intval(sqrt($user[$i][$j]))+1; $k<=$n; $k=$k+2){
		if ($user[$i][$j]%$k==0) {$user[$i][$j]=null; break;};
	}
        echo '<td>'.$user[$i][$j].'</td>'; 
	}
	echo '</tr>';
}
   echo ' </table>	
<h3>Генеруємо масив до 100 елементів і заповнюємо його випадковими цілими числами.</h3>';
$k=rand(0, 100);
for ($i=0; $i<$k; $i++){
	   $mas[$i]=rand(0, 1000);
		echo $mas[$i].';  ';
   }
   
$s=0; $n=0;
   for ($i=1; $i<$k; $i=$i+2) {
	if ($mas[$i]%2==0) {$s=$s+$mas[$i]; $n=$n+1;}
}
$s=$s/$n;
echo'
   <h3>середнє арифметичне парних елементів, що стоять на непарних місцях   </h3>'.$s.'
   </body>
</html>';

?>