<?php
class StringOperandTest extends PHPUnit_Framework_TestCase {
	function testResultShouldBeOne() {
		//Arrange
		$stringOperand = new StringOperand(1);
		//Act
		$result = $stringOperand->toString();
		//Assert
		$this->assertEquals("One", $result);
	}
	function testResultShouldBeTwo() {
		$stringOperand = new StringOperand(2);
		$result = $stringOperand->toString();
		$this->assertEquals("Two", $result);
	}
	function testResultShouldBeNine() {
		$stringOperand = new StringOperand(9);
		$result = $stringOperand->toString();
		$this->assertEquals("Nine", $result);
	}
    /**
     * @expectedException     InvalidRangeException
     */
	function testResultShouldShowExceptionWhenOperandIsZero(){
		$stringOperand = new StringOperand(0);
		$result = $stringOperand->toString();

	}
	/**
     * @expectedException     InvalidRangeException
     */
	function testResultShouldShowExceptionWhenOperandIsGreaterThanNine(){
		$stringOperand = new StringOperand(10);
		$result = $stringOperand->toString();

	}
}