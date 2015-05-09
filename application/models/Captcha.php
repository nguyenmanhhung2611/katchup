<?php
// captcha "http://keith-wood.name/realPerson.html"	
class Captcha extends CI_Model {
	function rpHash($value) {
		$hash = 5381;
		$value = strtoupper($value);
		for($i = 0; $i < strlen($value); $i++) {
			$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
		}
		return $hash;
	}
}

?>