﻿<?php 
	echo "<h3>Task 48</h3>\n";
	/* Задача №48
	Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.

	$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); */

	$arr = array(
		'green'=>'зеленый', 
		'red'=>'красный',
		'blue'=>'голубой'
		);

	echo "Столбец ключей цикла<br>\n";
	foreach($arr as $k => $v){
	    echo $k."<br>\n";
	    //echo $v."\n";
	}

	echo "<br>Столбец элементов цикла<br>\n";
	foreach($arr as $k => $v){
	    echo $v."<br>\n";
	    //echo $v."\n";
	}


?>