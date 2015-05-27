<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ADMIN Flashcard katchup</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />
	<!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/addDocument.js" type="text/javascript"></script>
    <script type="text/javascript" src="resources/js/nicEdit-latest.js"></script> 
	<script type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas(); });
	</script>
	<!-- end Script -->
    
	
</head>
<body ng-app="myAdminAddDoc" >
	<h1>Thêm Tài Liệu Mới</h1>
	<!--<form method="post" action="admin/executeAddNewDocument">-->
	<?php echo form_open_multipart('admin/executeAddNewDocument');?>
		Mã Tài Liệu<input type="text" placeholder="Mã Tài Liệu" name="maTaiLieu" readonly><br/>
		Tên Tài Liệu<input type="text" placeholder="Tên Tài Liệu" name="tenTaiLieu"><br/>
		Tên Tài Liệu Tiếng Nhật<input type="text" placeholder="Tên Tài Liệu Tiếng Nhật" name="tenTaiLieuTiengNhat"><br/>
		Hình Ảnh<input name="duongDanHinhAnh" type="file" id="duongDanHinhAnh" size="50" /><br/>
		Mô Tả<textarea rows="10" cols="50" type="text" placeholder="Mô Tả" name="moTaTaiLieu"></textarea><br/>
		Danh Mục
		<select name="danhMuc" ng-controller="ctrl-choose-category">
			<option ng-repeat="category in arr_category" value="{{category.<?php echo DANH_MUC_COL_MA_DANH_MUC; ?>}}">{{category.<?php echo DANH_MUC_COL_TEN_DANH_MUC; ?>}}</option>
			
		</select><br/>
		Chi Tiết Tài Liệu<textarea rows="20" cols="150" type="text" placeholder="Chi Tiết Tài Liệu" name="chiTiet" id="ta-chiTiet"></textarea><br/>
		Ngày Đăng<input type="datetime" placeholder="Ngày Đăng" name="ngayDang" value="<?php echo date("Y-m-d:m:s",time ()) ?>"><br/>
		Ghi Chú<textarea rows="10" cols="50" type="text" placeholder="Ghi Chú" name="ghiChu"></textarea><br/>
		<input type="submit" value="Thêm"><br/>
	</form>


</body>

