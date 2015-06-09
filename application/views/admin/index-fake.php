<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ADMIN Flashcard katchup</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />    
	
</head>
<body ng-app="myAdmin">	

	<div id="div-login">
			<form method="post" action="admin/login">
				<input type="text" placeholder="Username" ng-model="username" name="username"><br>
				<input type="password" placeholder="Password" ng-model="password" name="password"><br>
				<input type="submit">
			</form>
	</div>
</body>