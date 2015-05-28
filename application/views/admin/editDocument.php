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
	<h1>Chỉnh Sửa Tài Liệu</h1>
	<!--<form method="post" action="admin/executeAddNewDocument">-->
	<?php echo form_open_multipart('admin/executeUpdateDocument/'.$document[TAI_LIEU_COL_MA_TAI_LIEU]);?>
		Mã Tài Liệu: <input type="text" placeholder="Mã Tài Liệu" name="maTaiLieu" readonly value="<?php echo $document[TAI_LIEU_COL_MA_TAI_LIEU]; ?>"><br/>
		Tên Tài Liệu: <input type="text" placeholder="Tên Tài Liệu" name="tenTaiLieu" value="<?php echo $document[TAI_LIEU_COL_TEN_TAI_LIEU]; ?>"><br/>
		Tên Tài Liệu Tiếng Nhật: <input type="text" placeholder="Tên Tài Liệu Tiếng Nhật" name="tenTaiLieuTiengNhat" value="<?php echo $document[TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT]; ?>"><br/>
		Hình Ảnh: 
		<img src="<?php echo $document[TAI_LIEU_COL_HINH_ANH]; ?>" width="50" height="60" />
		<input name="userfile" type="file" id="duongDanHinhAnh" size="50" value="<?php echo $document[TAI_LIEU_COL_HINH_ANH]; ?>"><br/>
		Mô Tả: <textarea rows="10" cols="50" type="text" placeholder="Mô Tả" name="moTaTaiLieu" ><?php echo $document[TAI_LIEU_COL_MO_TA]; ?></textarea><br/>
		Danh Mục: 
		<select name="danhMuc" ng-controller="ctrl-choose-category">
			<option value="<?php echo $document[DANH_MUC_COL_MA_DANH_MUC]; ?>" selected><?php echo $document[DANH_MUC_COL_TEN_DANH_MUC]; ?></option>
			<option ng-repeat="category in arr_category" value="{{category.<?php echo DANH_MUC_COL_MA_DANH_MUC; ?>}}">{{category.<?php echo DANH_MUC_COL_TEN_DANH_MUC; ?>}}</option>
			
		</select><br/>
		Chi Tiết Tài Liệu: <textarea rows="20" cols="150" type="text" placeholder="Chi Tiết Tài Liệu" name="chiTiet" id="ta-chiTiet" ><?php echo $document[TAI_LIEU_COL_CHI_TIET_BAI_VIET]; ?></textarea><br/>
		Ngày Đăng: <input type="datetime" placeholder="Ngày Đăng" name="ngayDang" value="<?php echo $document[TAI_LIEU_COL_NGAY_DANG]; ?>"><br/>
		Ghi Chú: <textarea rows="10" cols="50" type="text" placeholder="Ghi Chú" name="ghiChu" ><?php echo $document[TAI_LIEU_COL_GHI_CHU]; ?></textarea><br/>
		<input type="submit" value="Lưu"><br/>
	</form>


</body>

