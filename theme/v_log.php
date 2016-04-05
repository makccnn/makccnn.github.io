<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Наш сайт</title>
	<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" />
</head>
<body>
<?$lines = file('data/log.txt');?>
	<h3>Журнал посещений</h3>
	<a href="index.php">На главную</a>
	<br/>
	<br/>
	<table border="1">
	<tr>
		<td>Время старта программы</td>
		<td>время и место кода</td>
		<td>Время завершения</td>
	</tr>
<?php
//Чтение из файла всей информации о посещениях.

$n = count ($lines);
		
		for ($i = 0; $i < $n; $i +=3)
		{
			echo '<tr>';
		    echo '<td>' . $lines[$i + 0] . '</td>';
			echo '<td>' . $lines[$i + 1] . '</td>';
			echo '<td>' . $lines[$i + 2] . '</td>';
			echo '</tr>';
		}
?>
	</table>
</body>
</html>	