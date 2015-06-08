<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ADMIN Flashcard katchup</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />
	<!-- script -->
    <?php
    	session_start();

    	$tabledata = array();
    	$numRow = 6;
    	$numCol = 2;
    	for ($i=0; $i < $numRow; $i++) { 
    		for ($j=0; $j < $numCol; $j++) { 
    			$tabledata[$i][$j] = "";
    		}
    	}

		$tabledata[0][0] = "Quản Lý Tài Liệu";
		$tabledata[1][0]['href'] = "admin/documentList";
		$tabledata[1][0]['value'] = "Danh Sách Tài Liệu";
		$tabledata[2][0]['href'] = "admin/addDocument";
		$tabledata[2][0]['value'] = "Thêm Mới Tài Liệu";
		$tabledata[3][0]['href'] = "admin/categoryList";
		$tabledata[3][0]['value'] = "Danh Sách Danh Mục";
		$tabledata[4][0]['href'] = "admin/addCategory";
		$tabledata[4][0]['value'] = "Thêm Mới Danh Mục";

		$tabledata[0][1] = "Quản Lý Bán Hàng";
		$tabledata[1][1]['href'] = "";
		$tabledata[1][1]['value'] = "Danh Sách Đơn Hàng";
		$tabledata[2][1]['href'] = "";
		$tabledata[2][1]['value'] = "Danh Sách Sản Phẩm";
		$tabledata[3][1]['href'] = "";
		$tabledata[3][1]['value'] = "Danh Sách Danh Mục Tài Liệu 3";
		$tabledata[4][1]['href'] = "";
		$tabledata[4][1]['value'] = "Danh Sách Danh Mục Tài Liệu 4";

		if ($numRow != count($tabledata)) echo "Số dòng không trùng khớp. Hãy vào config để sửa."."<BR>";
		if ($numCol != count($tabledata[0])) echo "Số cột không trùng khớp. Hãy vào config để sửa."."<BR>";
	?>
	<script type="text/javascript">
		var tabledata = <?php echo json_encode($tabledata); ?>;
		console.log(tabledata);
	</script>
    
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/admin.js" type="text/javascript"></script>
    <!-- end Script -->
    
	
</head>
<body ng-app="myAdmin" >
	
	<?php
		$loginStat = 1;
		echo "LOGIN STATUS: ".$loginStat;

		if (!$loginStat) {
	?>
	<div id="div-login">
			<form method="post" action="admin/login">
				<input type="text" placeholder="Username" ng-model="username" name="username">
				<input type="password" placeholder="Password" ng-model="password" name="password">
				<script type="text/javascript">
					var user = <?php echo $_POST['username']; ?>;
					var pass = <?php echo $_POST['password']; ?>;
				</script>
				<input type="submit">
			</form>
	</div>
	<?php
		} else {
	?>
			<div ng-controller="ctrl-table">
			
				<table border="1">
					<tr >
						<td ng-repeat="title in titles">
							{{title}}
						</td>
					</tr>
					<tr ng-repeat="row in table">
						<td ng-repeat="cell in row">
							<a href="{{cell.href}}">{{cell.value}}</a>
						</td>
					</tr>
				</table>
			</div>
	<?php


		}
	?>

</body>

