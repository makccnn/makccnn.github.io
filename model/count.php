<?
require_once('startup.php');

    //Определение ip адреса
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	
	// Определение текущего времени.
	$dt = date ('Y-M-D H:i:s');
	
	//определение ссылки посещения
	$link = $_SERVER ['HTTP_REFERER'];


	// Вставка нового сообщения в таблицу.
	$s = "INSERT INTO logs (dt, ip, url) VALUES ('$dt', '$visitor_ip', '$link')";
	$result = mysql_query ($s);

	if(!$result) 
	{
		die ('ошибка базы данных ' . mysql_error());
	}

	mysql_close();

?>