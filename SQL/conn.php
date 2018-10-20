<?php
	//phpinfo();
	$link=mysqli_connect('localhost','root',' ') or die('数据库连接失败');
	mysqli_select_db($link,'sblog') or die('数据库选择失败');
	mysql_set_charset($link,'utf8');

?>