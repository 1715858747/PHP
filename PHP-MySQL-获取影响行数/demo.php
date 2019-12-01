<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql-05--叮当猫</title>
	</head>
	<body>
		<?php
			/*
				获取影响行数

			*/

			$link = mysqli_connect('localhost','root','1715858747kan','test');
			mysqli_query($link,'set names utf8');

			$sql = 'delete from user where uid >= 6';
			$res = mysqli_query($link,$sql);

			if(!$res){
				echo mysqli_error($link);
				exit();
			}

			echo mysqli_affected_rows($link);//4
		?>
	</body>
</html>