﻿<?php
	echo "<h3>Task 51</h3>";
	/* Задача №51
	Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10 */

	$arr=array(2, 5, 9, 15, 0, 4);
	foreach($arr as $ar){
	    if ($ar>3 and $ar<10){
	        echo $ar ."<br>\n";
	    }
	}




?>