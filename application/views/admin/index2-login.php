<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content=""/>
    <title>ADMIN PAGE</title>
    <base href="<?php //echo ITQ_BASE_URL;?>" />
	<!-- <li><a href="<?php /*echo ITQ_BASE_URL;*/?>backend/auth/forgot" title="Quen mat khau">Quen mat khau</a></li> -->
	
    <!-- meta tags for FB sharing-->
    <meta property="og:title" content="Flashcard katchup" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="resources/images/2.jpg" />
    <meta property="og:url" content="" />

    <!-- css -->
    <link href="resources/css/style.css" rel="stylesheet">
    <link href="resources/css/document.css" rel="stylesheet">

    <!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/document.js" type="text/javascript"></script>
    <!--<script>-->

    <!-- Boostrap -->
    <link href="resources/css/bootstrap.css" rel="stylesheet">    
    <link href="resources/css/responsive.css" rel="stylesheet">
    <script src="resources/js/bootstrap.js"></script>

</head>
<body>

<?php 
	//include_once($_SERVER['DOCUMENT_ROOT'] ."/katchup/views/include/header.php") 
	session_start();
?>
<div >
<?PHP
echo $_SESSION['admin_username'];
if (!isset($_SESSION['admin_username']))
{
	echo '
	<form id="formlogin" name="formlogin" action="/katchup/admin/login" method="post" >
	<input id="username" name="username" type="text" placeholder="Tên đăng nhập" />
	<input id="password" name="password" type="text" placeholder="Mật khẩu" />
	<input id="btnlogin" name="btnlogin" type="submit" value="Log In" />
	</form>
	';
	//$_SESSION['admin_username']=$_POST['username'];
} else {
	echo '<h1 >Hello ADMIN.</h1>';
}
?>

</div>



<div >




</div>

<?php //include_once('include/footer.php') ?>

<?php //include_once('include/box-letter.php') ?>

</body>
</html>