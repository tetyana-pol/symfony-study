<?php
$inputYear=$_POST["year"];
if ($inputYear<=1924 or $inputYear>=2024) {header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;};
$year=array("рік мавпи","рік півня","рік собаки","рік свині","рік пацюка","рік бика","рік тигра","рік кролика",
			"рік дракона","рік змії","рік коня","рік кози");
$input=$inputYear%12;
echo $inputYear." рік - ".$year[$input];
/* header("Refresh: 5; {$_SERVER['HTTP_REFERER */
    exit;
?>