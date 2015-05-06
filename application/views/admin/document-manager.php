<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content=""/>
    <title>DOCUMENT MANAGER</title>
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
	
	<!-- ajax load page distributing -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			
			//alert($("a.page_number").attr("id"));
			$("a.page_number").click(function(event){
				$("div.document_list").load($(this).attr("id"));
				
			});
		});
	</script>
</head>
<body>

<?php 
	//include_once($_SERVER['DOCUMENT_ROOT'] ."/katchup/views/include/header.php") 
	//session_start();
	$record_per_page = 3;
?>
<div >
<?PHP


echo '<h1 >Quản Lý Tài Liệu</h1>';

?>

	<a href="admin" >Trang Admin</a><BR>
	
</div>



<div >
	<a href="admin/addDocument" >Thêm</a><BR>

	<div class="document_list" >Show danh sach tai lieu</div>
	
	<?PHP
		
	?>
	
	<a id="admin/showDocument/2/3" class="page_number" align="center" >2</a><BR>
	<a id="admin/showDocument/3/3" class="page_number" align="center" >3</a><BR>


</div>

<?php //include_once('include/footer.php') ?>

<?php //include_once('include/box-letter.php') ?>

</body>
</html>