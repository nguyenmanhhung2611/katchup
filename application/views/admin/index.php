<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content=""/>
    <title>ADMIN PAGE</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />
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


echo '<h1 >Hello ADMIN.</h1>';

?>

</div>



<div >
	<!-- ----- Document Manager -->
	
	<a href="admin/documentManager" >Quản Lý Tài Liệu</a><BR>
	<a href="admin/documentCatalogueManager" >Quản Lý Danh Mục Tài Liệu</a><BR>
	<BR>
	
	<!-- ----- Examination Manager -->
	<a href="admin/examManager" >Quản Lý Bài Thi</a><BR>
	<a href="admin/examManager" >Quản Lý Bài Thi</a><BR>
	<BR>


</div>

<?php //include_once('include/footer.php') ?>

<?php //include_once('include/box-letter.php') ?>

</body>
</html>