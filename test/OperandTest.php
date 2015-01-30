<?php
class OperandTest extends PHPUnit_Framework_TestCase {
	/**
     * @expectedException     InvalidRangeException
     */
	function testResultShouldShowExceptionWhenOperandEqualZero() {
		$operand = new Operand(0);
	}

	/**
     * @expectedException     InvalidRangeException
     */
	function testResultShouldShowExceptionWhenOperandGreaterThanNine() {
		$operand = new Operand(10);
	}
}