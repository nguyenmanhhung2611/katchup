<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ADMIN Flashcard katchup</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />
	<!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="resources/js/nicEdit-latest.js"></script> 
	<script type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas(); });
	</script>
	<!-- end Script -->
    
	
</head>
<body >
	<h1>Thêm Danh Mục Mới</h1>

	<?php echo form_open_multipart('admin/executeAddNewCategory');?>
		Mã Danh Mục<input type="text" placeholder="Mã Danh Mục" name="maDanhMuc" readonly><br/>
		Tên Danh Mục<input type="text" placeholder="Tên Danh Mục" name="tenDanhMuc"><br/>
		Tên Danh Mục Tiếng Nhật<input type="text" placeholder="Tên Danh Mục Tiếng Nhật" name="tenDanhMucTiengNhat"><br/>
	<!--	Hình Ảnh<input name="userfile" type="file" id="duongDanHinhAnh" size="50" /><br/>-->
		Mô Tả<textarea rows="10" cols="50" type="text" placeholder="Mô Tả" name="moTaDanhMuc"></textarea><br/>
		Ghi Chú<textarea rows="10" cols="50" type="text" placeholder="Ghi Chú" name="ghiChu"></textarea><br/>
		<input type="submit" value="Thêm"><br/>
	</form>


</body>

