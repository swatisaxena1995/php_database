<?php require("./connect.php"); ?>
<?php require("./user_controller.php"); ?>
<html>
<head>
	<title>mywebsite</title>
</head>
<body>
	<form method="post"/>
		<table>
			<tr>
				<td><p>username</p></td>
				<td><input type="text" name="username" placeholder="username"/></td>
			</tr>
			<tr>
				<td><p>password</p></td>
				<td><input type="text" name="password" placeholder="password"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="signup"/></td>
		</table>
	</form>
</body>
</html>