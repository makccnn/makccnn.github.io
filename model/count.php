<?
require_once('startup.php');

    //����������� ip ������
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	
	// ����������� �������� �������.
	$dt = date ('Y-M-D H:i:s');
	
	//����������� ������ ���������
	$link = $_SERVER ['HTTP_REFERER'];


	// ������� ������ ��������� � �������.
	$s = "INSERT INTO logs (dt, ip, url) VALUES ('$dt', '$visitor_ip', '$link')";
	$result = mysql_query ($s);

	if(!$result) 
	{
		die ('������ ���� ������ ' . mysql_error());
	}

	mysql_close();

?>