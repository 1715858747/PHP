<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql-05--叮当猫</title>
	</head>
	<body>
		<?php
			/*
				检查出错信息

			*/
			$link = mysqli_connect('localhost','root','1715858747kan','test');
				
			mysqli_query($link,'set names utf8');

			$sql = 'select * from user';
			$res = mysqli_query($link,$sql);

			//var_dump($res);//false
			if($res){
				//var_dump($res);
				echo '<pre>';//预处理
				print_r($res);
				echo '</pre>';
			}else {
				$result = mysqli_error($link);
				echo $result;
				//print_r($result);
				//var_dump($result);
			}

		?>
	</body>
</html>