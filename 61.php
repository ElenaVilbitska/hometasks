﻿<?php 
	echo "<h3>Task 61</h3>";
	/* Задача №61
	Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month */

	$arr=array(1,2,3,4,5,6,7,8,9,10,11,12);
	foreach($arr as $ar){
	    $month=date("w");
	    if ($ar==$month){
	        echo "<b>$ar</b><br>\n";
	    }else{
	        echo($ar)."<br>\n";}
	}


?>