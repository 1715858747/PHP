<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php-mySql02--叮当猫</title>
	</head>
	<body>
		<?php
			$result = fopen('./test.txt','r');
			echo $result;//Resource id #3
			var_dump($result);
		?>
	</body>
</html>