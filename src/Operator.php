<?php
class Operator {
	function __construct($value) {
		$this->value = $value;
	}
	
	function toString() {
		$sign = array(
			1 => "+",
			2 => "*",
			3 => "-"
		);		
		return $sign[$this->value];
	}	
}