<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql-05--叮当猫</title>
	</head>
	<body>
		<?php
			/*
				获取主键

			*/

			$link = mysqli_connect('localhost','root','password','test');
			mysqli_query($link,'set names utf8');

			$sql = 'insert into user(uid) values(8)';
			$res = mysqli_query($link,$sql);

			if(!$res){
				echo mysqli_error($link);
				exit();
			}

			echo mysqli_insert_id($link);//8
		?>
	</body>
</html>
