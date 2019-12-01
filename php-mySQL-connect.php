<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql--叮当猫</title>
	</head>
	<body>
		<?php
			/*
				phpinfo();---查看php相关的配置信息

				面向对象风格
					mysqli::__construct()

				面向过程化风格
					mysqli_connect(url,用户名,密码,数据库库名,端口,..)
			*/
			//连接数据库,php-v5.5以后通过mysqli_connect()连接数据库,之前是mysql_connect()和mysql_query()连接
			
			/*echo '数据库';
			//phpinfo();
			$result = mysqli_connect('localhost','root','password','test');
			//var_dump($result);

			//设置字符集,查询mysqli_query(通道对象,查询语言,...);
			mysqli_query($result,'set names utf8');
			//mysqli::query();*/

			/*$result = mysql_connect('localhost','root','password');
			mysql_query('use test');//选库
			mysql_query('set names utf8');
			var_dump($result);//通道标识 资源*/
		?>
	</body>
</html>
