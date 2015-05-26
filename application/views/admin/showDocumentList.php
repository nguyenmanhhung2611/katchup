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
    <script src="resources/js/showDocumentList.js" type="text/javascript"></script>
	<!-- end Script -->
    
	
</head>
<body ng-app="myAdminShowDoc" >

	<table id="document-list" align="center" border="1" style="width: 100%; word-wrap: break-word;" >
	<?php
	/*	echo "<pre>";
		print_r($list_document);
		echo "</pre>";
	*/	
		// metadata
		foreach ($list_document[0] as $field => $value) {
				echo "<td>$field</td>";
				
		}
		echo "<td>Sửa</td>";
		echo "<td>Xóa</td>";
		
		// data
		foreach ($list_document as $record) {
			echo "<tr>";
			
			foreach ($record as $field => $value) {
		//		echo "<td>$field</td>";
				echo "<td>$value</td>";
			}
			
			echo '<td><a href="">Sửa</a></td>';
			echo '<td><a href="">Xóa</a></td>';
			echo "</tr>";
		}
		
	?>

		

	</table>

</body>