<?php
	
	if(isset(%_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];

		//拼写SQL语句 根据需求
		
		//把SQL语句传递给数据库执行  string --> resource
	}


?>

<meta charset="utf-8">
<form action="add.php" method="post">
	标题：<input type="text" name="title"><br />
	内容：<textarea name="con" cols="40" rows="10"></textarea><br />
	<input type="submit" name="sub" value="增加文章">
</form>