<?php
class OperatorTest extends PHPUnit_Framework_TestCase {
	
	function testResultShouldBePlus() {
		$operator = new Operator(1);
		$result = $operator->toString();
		$this->assertEquals("+", $result);
	}

	function testResultShouldBeMinus() {
		$operator = new Operator(3);
		$result = $operator->toString();
		$this->assertEquals("-", $result);
	}

	function testResultShouldBeMultiply() {
		$operator = new Operator(2);
		$result = $operator->toString();
		$this->assertEquals("*", $result);
	}
}