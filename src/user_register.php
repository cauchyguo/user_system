<!DOCTYPE html>
<!--version 1.0-->
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>用户信息添加</title>
</head>
<body>
<h1 style="position:absolute; left:140px; top:10px; "><b>用户注册</b></h1>
<section>
	<form action="user_insert.php" method="post">
		<table>
			<tr>
				<td style="position:absolute; left:90px; top:90px; ">编号:</td>
				<input type="number" name="no" value="" style="position:absolute; left:150px; top:90px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:120px; ">姓名:</td>
				<input type="text" name="name" value="" style="position:absolute; left:150px; top:120px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:150px; ">年龄:</td>
				<input type="number" name="age" value="" style="position:absolute; left:150px; top:150px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:180px; ">介绍:</td>
				<input type="text" name="intro" value="" style="position:absolute; left:150px; top:180px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:210px; ">提交:</td>
				<input type="submit" value="确定" style="position:absolute; left:200px; top:210px; "/>
			</tr>
		</table>
	</form>
</section>
</body>
</html>