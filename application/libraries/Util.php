<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
* 
*/
class Util
{
	
	function __construct()
	{
		// do nothing
	}

	function utf8_to_ascii_url($temp) {
		$str = $temp;
		if(!$str) return false;
		
		$str = str_replace(array('%20', ' '), '-', $str);
		
		$utf8 = array(
	            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	            'd'=>'đ|Đ',
	            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
	            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
	            'ss' => 'ß',
	            '' => '%',
	            '-' => '--|---|----',

				);
		foreach($utf8 as $ascii=>$uni) {
			$str = preg_replace("/($uni)/i",$ascii,$str);
		}
		$str = strtolower($str);
		$str = preg_replace("/[^_a-zA-Z0-9 -]/", "",$str);
		return $str;
	}

	function convertURLToUnderscore($str) {
		return str_replace('-', '_', $str);
	}

	function revertURLFromUnderscore($str) {
		return str_replace('_', '-', $str);
	}

	// Ex: input = {"id", "name", "age"}; output = "id,name,age";
	function convertArrayColumnToString($arr_column) {
		$str_select = '';
		if (count($arr_column)>0) {
			foreach ($arr_column as $column) {
				$str_select .= $column.',';
			}
			$str_select = trim($str_select, ",");
		}
		return $str_select;
	}

	// remove the prefix in paging param
	function getPageNum($pageStr) {
		return str_replace(DEFAULT_PREFIX_PAGING, "", $pageStr);
	}
	// get document image path if exist else get default image path
	function getImagePathOrDefault($filename) {
		if ((file_exists(DOCUMENT_PAGE_RESOURCE_IMAGE_PATH.$filename)) && ($filename)) {
			return DOCUMENT_PAGE_RESOURCE_IMAGE_PATH.$filename;
		}
		return DOCUMENT_PAGE_RESOURCE_IMAGE_PATH.DOCUMENT_PAGE_DEFAULT_IMAGE;
	}

	function consoleLog($string) {
		echo "<script>console.log('".$string."');</script>";
	}
}
	
?>