<?php

class IntegerOperand extends Operand{

	function toString() {
		return (string)$this->value;
	}
}