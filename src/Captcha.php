<?php
class Captcha {
	function __construct($pattern, $leftOperand, $operator, $rightOperand) {	
	    $this->createLeftOperand($pattern, $leftOperand);	
		$this->createRightOperand($pattern, $rightOperand);
		$this->operator = new Operator($operator);
	}
	function getLeftOperand(){
		return $this->leftOperand;
	}
	function getRightOperand(){
		return $this->rightOperand;
	}

	function getOperator() {
		return $this->operator;
	}

	function isLeftOperandString($value){
		return $value == 1; 
	}

	function createLeftOperand($pattern, $leftOperand){
		if($this->isLeftOperandString($pattern)){
			$this->leftOperand = new StringOperand($leftOperand);
		} else {
			$this->leftOperand = new IntegerOperand($leftOperand);
		}
	}

	function createRightOperand($pattern, $rightOperand){
		if($this->isLeftOperandString($pattern)){
			$this->rightOperand = new IntegerOperand($rightOperand);
		} else {
			$this->rightOperand = new StringOperand($rightOperand);
		}
	}
	function toString() {
		return $this->getLeftOperand()->toString() .' '.$this->getOperator()->toString().' '.$this->getRightOperand()->toString();
	}
}