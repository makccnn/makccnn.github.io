<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head>	<title>��� ����</title>	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">		<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 	</head><body>	<h1>������ ���������</h1>	<a href="index.php">�� �������</a>	<br/>	<br/>	<table border="1">	<tr>		<td>�����</td>		<td>IP-�����</td>		<td>������</td>	</tr><?		$result = mysql_query ("SELECT * FROM logs ORDER BY `dt` DESC");			// ��������� ����� ����� ������� � �����	while ($row = mysql_fetch_assoc($result))    {		echo '<tr>				<td style="border: 1px solid silver;">' . $row['dt']. '</td>			    <td style="border: 1px solid silver;">' . $row['ip'] . '</td>			    <td style="border: 1px solid silver;">' . $row['url'] . '</td>			 </tr>';	}	?>	</table></body></html>	