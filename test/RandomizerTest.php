<?php

class RandomizerTest extends PHPUnit_Framework_TestCase {
	public function testGetPatternIs1Or2() {
		$randomizer = new Randomizer();
		$pattern = $randomizer->getPattern();
		$this->assertTrue($pattern == 1 || $pattern == 2);
	}

	public function testGetOperandShouldBetween1And9() {
		$randomizer = new Randomizer();
		$operand = $randomizer->getOperand();
		$this->assertTrue(in_array($operand, range(1, 9)));
	}

	public function testGetOperatorShouldBetween1And3() {
		$randomizer = new Randomizer();
		$operator = $randomizer->getOperator();
		$this->assertTrue(in_array($operator, range(1, 3)));
	}
}