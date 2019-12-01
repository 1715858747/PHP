<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql-05--叮当猫</title>
	</head>
	<body>
		<?php
			/*
				关闭数据库连接

			*/

			$link = mysqli_connect('localhost','root','password','test');
			mysqli_query($link,'set names utf8');

			$sql = 'select * from user';
			$res = mysqli_query($link,$sql);

			if(!$res){
				echo mysqli_error($link);
				exit();
			}

			echo mysqli_close($link);//1
			//var_dump($link);//报错
		?>
	</body>
</html>
