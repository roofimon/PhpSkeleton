<?php
class Operand {
	function __construct($value) {
		if ($this->isValueEqualZeroOrGreaterThanNine($value)){
			throw new InvalidRangeException();
		}
		$this->value = $value;
	}

	function isValueEqualZeroOrGreaterThanNine($value) {
		return $value == 0 || $value > 9;
	}
}