<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息系统</title>
    <style>
		.center{text-align:center;}
		.background{
			background-image: url(lm7.jpg);
			background-repeat: repeat;
		}
	</style>
</head>




<body class="background">
	<div class="center">
		<h1>学生信息系统</h1>
		<form action="login.php" method="post">
			<p>学号<input type="text" name="id"></p>

			<p>密码<input type="password" name="password"></p>
			
			<button οnclick="window.location.href='login.php'">确认</button>
		<form>
	</div>

</body>
</html>