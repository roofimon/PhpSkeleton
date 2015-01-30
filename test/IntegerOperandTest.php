<?php

class IntegerOperandTest extends PHPUnit_Framework_TestCase {
	function testResultIsOne(){
		$integerOperand = new IntegerOperand(1);
		$result = $integerOperand->toString();
		$this->assertEquals("1", $result);
	}

	function testResultIsTwo() {
		$integerOperand = new IntegerOperand(2);
		$result = $integerOperand->toString();
		$this->assertEquals("2", $result);
	}

	function testResultIsNine() {
		$integerOperand = new IntegerOperand(9);
		$result = $integerOperand->toString();
		$this->assertEquals("9", $result);
	}

	/**
     * @expectedException     InvalidRangeException
     */
	function testResultShouldShowExceptionWhenOperandIsZero(){
		$integerOperand = new IntegerOperand(0);
		$result = $integerOperand->toString();

	}

	/**
     * @expectedException     InvalidRangeException
     */
	function testResultShouldShowExceptionWhenOperandIsGreaterThanNine(){
		$integerOperand = new IntegerOperand(10);
		$result = $integerOperand->toString();

	}
}