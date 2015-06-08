<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ADMIN Flashcard katchup</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />
</head>
<body>
	<h1>Danh Sách Danh Mục</h1>
	<table id="category-list" align="center" border="1" style="width: 100%; word-wrap: break-word;" >
	<?php
	/*	echo "<pre>";
		print_r($list_category);
		echo "</pre>";
	*/	
		// metadata
		foreach ($list_category[0] as $field => $value) {
			echo "<td>$field</td>";
				
		}
		echo "<td>Sửa</td>";
		echo "<td>Xóa</td>";
		
		// data
		foreach ($list_category as $record) {
			echo "<tr>";
			
			foreach ($record as $field => $value) {
				echo "<td>$value</td>";
			}
			
			?>
			<td><a href="admin/editCategory/<?php echo $record[DANH_MUC_COL_MA_DANH_MUC]; ?>">Sửa</a></td>
			<td><a href="">Xóa</a></td>
			</tr>
			<?php
		}
		
	?>

		

	</table>
</body>
