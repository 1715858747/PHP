<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql-03--叮当猫</title>
	</head>
	<body>
		<?php
			
			$result = mysqli_connect('localhost','root','password','test');
			//var_dump($result);

			//设置字符集,查询mysqli_query(通道对象,查询语言,...);
			mysqli_query($result,'set names utf8');


			//增
			//$sql = 'insert into user(uid,name,age) values(13,"小米",20)';

			//$res = mysqli_query($result,$sql);
			//var_dump($res);

			//改
			/*$sql = 'update user set name = "小号",age = 15 where uid = 13';
			$res = mysqli_query($result,$sql);
			var_dump($res);*/

			//删
			/*$sql = "delete from user where uid = 13";
			$res = mysqli_query($result,$sql);
			var_dump($res);*/

			//查询
			$sql = "select * from user";
			$mysqli_result = mysqli_query($result,$sql);//结果标识（结果对象）
			
			for($i=1;$i<7;$i++){
				$a = mysqli_fetch_assoc($mysqli_result);	
				//print_r($a);
				foreach($a as $key => $value){
					echo $key,':',$value,'<br/>';
				}
			}
		?>
	</body>
</html>
