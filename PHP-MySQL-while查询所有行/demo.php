<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql-04--叮当猫</title>
	</head>
	<body>
		<?php
			/*
				while()循环
			*/

			//连接数据库
			$link = mysqli_connect('localhost','root','password','test');

			//设置编码字符集
			mysqli_query($link,'set names utf8');

			$sql = 'select * from user';
			//执行查询
			$res = mysqli_query($link,$sql);

			//打印结果
			//var_dump($res);

			//查看打印结果
			//print_r(mysqli_fetch_assoc($res););

			/*$i = 1;
			while($i <= 10){
				print_r(mysqli_fetch_assoc($res));
				$i++;
			}*/

			//---------------------------------------
			/*$result = mysqli_fetch_assoc($res);
			while($result != null){
				print_r($result);
				$result = mysqli_fetch_assoc($res);
			}*/

			//-------------------------------------------
			/*while(($result = mysqli_fetch_assoc($res)) != null){
				print_r($result);
			}*/

			//----------------------------------------------
			$arr = array();
			while(($result = mysqli_fetch_assoc($res))){
				//print_r($result);
				//$arr = array($arr,$result);
				$arr[] = $result;//二维数组
			}
			print_r($arr);
		?>
	</body>
</html>
