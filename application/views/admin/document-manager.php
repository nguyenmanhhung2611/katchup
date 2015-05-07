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
	
	<?php 
		
		//session_start();
		$record_per_page = 5;
		$url_show_list_document = "admin/showDocument";
	?>

	<!-- ajax load document list with pagination -->
	<script type="text/javascript" language="javascript">
		

		$(document).ready(function() {
			
			//alert($("a.page_number").attr("id"));
			$("a.page_number").click(function(event){
				loadPage($(this).attr("id"));
				
			});

			$("a.page_number:first").click();
		});

		function loadPage(pageNumber) {
			var url = "<?PHP echo $url_show_list_document; ?>/" + pageNumber + "/<?PHP echo $record_per_page; ?>";
			
			$("div.document_list").load(url);
		}
	</script>
</head>
<body>



<div >
<?PHP


echo '<h1 >Quản Lý Tài Liệu</h1>';

?>

	<a href="admin" >Trang Admin</a><BR>
	
</div>



<div >
	<a id="admin/addDocument" >Thêm</a><BR>
	<div id="formAddDocument" ></div>
	<a id="admin/addDocument" style="display: none; ">Đóng</a><BR>

	<div class="document_list" >Danh sach tai lieu

	</div>
	
	<!-- page number list -->
	<div align="center" id="pagination">
	<?PHP
		$page_count = $count_all_document/$record_per_page + 1;	// round up
		for ($i = 1; $i <= $page_count; $i++) {
			echo '<a id="'.$i.'" class="page_number" align="center" >'.$i.'</a>';
		}
	?>
	</div>

</div>

<?php //include_once('include/footer.php') ?>

<?php //include_once('include/box-letter.php') ?>

</body>
</html>