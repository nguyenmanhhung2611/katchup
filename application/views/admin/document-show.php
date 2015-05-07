<table id="document_list" align="center" border="1" style="width: 100%; word-wrap: break-word;" >
<?PHP
/*	echo "<pre>";
	print_r($list_document);
	echo "</pre>";
*/	

	foreach ($list_document[0] as $field => $value) {
			echo "<td>$field</td>";
			
	}
	echo "<td>Sửa</td>";
	echo "<td>Xóa</td>";
	
	foreach ($list_document as $record) {
		echo "<tr>";
		
		foreach ($record as $field => $value) {
	//		echo "<td>$field</td>";
			echo "<td>$value</td>";
		}
		
		echo "<td><a>Sửa</a></td>";
		echo "<td><a>Xóa</a></td>";
		echo "</tr>";
	}
	
?>

	

</table>

<?PHP
echo "Tổng số tài liệu: ".$count_all_document."<BR>";

?>