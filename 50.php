<?php 
	echo "<h3>Task 50</h3>";
	/* Задача №50
	Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.

	$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

	$en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой'); */

	$arr = array(
		'green'=>'зеленый', 
		'red'=>'красный', 
		'blue'=>'голубой'
	);

	$en = array();
	$ru = array();


	foreach ($arr as $k=>$v){
		$en[] = $k;
		$ru[] = $v;
	};
	echo '<br>английские названия:';
	print_r ($en);
	echo '<br>русские названия:';
	print_r ($ru);
?>