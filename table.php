<?php
	$cols = 6;
	$rows = 8;
	/*
	Задание 1
	- Создайте две числовые переменные $cols и $rows
	- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
	*/
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	echo "<table border='1'>";
	for ($tr=1; $tr<$rows; $tr++) { 
		echo "<tr>";
		for ($td=1; $td<$cols ; $td++) { 
			if ($tr==1 or $td==1) {
			echo "<th style='background-color:yellow'>".$tr*$td."</th>";
		}
		else {
			echo "<td>".$tr*$td."</td>";
		}
		}
	}
		echo "</tr>";

	echo "</table>";
	/*
	Задание 2
	- Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
		- число столбцов должно быть равно значению переменной $cols
		- число строк должно быть равно значению переменной $rows
		-  ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
	- рекомендуется использовать цикл for	
	
	Задание 3
	- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
	- фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
	*/
	?>
</body>
</html>